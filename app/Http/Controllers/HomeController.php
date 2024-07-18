<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\incident;
use App\Models\User;
use Carbon\Carbon;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.create-new');
    }
    public function page3()
    {
        return view('user.create-new');
    }


    public function addinci (Request $request){
        $add = new incident();
        $add-> number=$request->input('number');
        $add-> contact_type=$request->input('contact_type');
        $add-> caller=$request->input('caller');
        $add-> state=$request->input('state');
         $add-> category=$request->input('category');
        $add-> impact=$request->input('impact');
        $add-> sub_category=$request->input('sub_category');
        $add-> urgency=$request->input('urgency');
        $add-> business_service=$request->input('business_service');
        $add-> priority=$request->input('priority');
        $add-> configuration_item=$request->input('configuration_item');
        $add-> assignment_group=$request->input('assignment_group');
        $add-> assignment_to=$request->input('assignment_to');
        $add-> short_description=$request->input('short_description');
        $add-> description=$request->input('description');
        $add-> userid=$request->input('userid');
        $add->save();
        return redirect('/all');
    }

    public function adddinci (Request $request){
        $add = new incident();
        $add-> number=$request->input('number');
        $add-> contact_type=$request->input('contact_type');
        $add-> caller=$request->input('caller');
        $add-> state=$request->input('state');
         $add-> category=$request->input('category');
        $add-> impact=$request->input('impact');
        $add-> sub_category=$request->input('sub_category');
        $add-> urgency=$request->input('urgency');
        $add-> business_service=$request->input('business_service');
        $add-> priority=$request->input('priority');
        $add-> configuration_item=$request->input('configuration_item');
        $add-> assignment_group=$request->input('assignment_group');
        $add-> assignment_to=$request->input('assignment_to');
        $add-> short_description=$request->input('short_description');
        $add-> description=$request->input('description');
        $add-> userid=$request->input('userid');
        $add->save();
        return redirect('/creattte');
    }




    public function getassigned()
{
    $get = incident::where('assignment_to', 'ITIL_USER')->where('state', 'new')->orWhere('state', 'On Hold')->orWhere('state', 'In Progress')->where('assignment_to', 'ITIL_USER')->get();
    return view(' admin.assigned', compact('get'));
}

public function getall(){
    $get=incident::all();
    return view(' admin.all',compact('get'));

}

public function getresolve()
{
    $get = incident::where('state', 'Resolved')->get();
    return view(' admin.resolved', compact('get'));
}

public function historyy()
{
    $get = incident::where('caller', Auth::user()->name )->get();
    return view(' admin.history', compact('get'));
}

public function getopen()
{
    $get = incident::where('state', 'In Progress')->orWhere('state', 'On Hold')->orWhere('state', 'New')->get();
    return view(' admin.open', compact('get'));
}

public function getopenunassigned()
{
    $get = incident::where('state', 'In Progress')->whereNull('assignment_to')->orWhere('state', 'On Hold')->whereNull('assignment_to')->orWhere('state', 'New')->whereNull('assignment_to')-> get();
    return view('admin.open-unassigned', compact('get'));
}
public function getoverview()
{
    $open = incident::where('state', 'In Progress')->orWhere('state', 'On Hold')->orWhere('state', 'New')->get()->count();
    $critical = incident::where('state', 'In Progress')->orWhere('state', 'On Hold')->orWhere('state', 'New')->where('priority', '1-Critical')->get()->count();
    $unassigned = incident::where('state', 'In Progress')->whereNull('assignment_to')->orWhere('state', 'On Hold')->orWhere('state', 'New')->get()->count();
    
$st=Carbon::now()->subDays(7);
$en=Carbon::now();
$nunupdate=incident::whereBetween('updated_at',[$st,$en])->get()->count();
$oldopen = incident::where('state', 'In Progress')->orWhere('state', 'On Hold')->orWhere('state', 'New')->get()->count();
    return view(' admin.overview', compact('open','critical','unassigned','nunupdate','oldopen'));
}
public function getuser()
{
    $get=User::all();
        return view('admin.viewuser',compact('get'));
}


public function editroll($id){
    $gett=User::find($id);
    return view('admin.edituserol',compact('gett'));

}

public function posteditroll ($id,Request $request){
    $postedit=  User::find($id);
    $postedit-> row=$request->input('row');
 
    $postedit->update();
    return redirect('roledit');
}


public function store(Request $request){
    $photo =  new User();
   if($request->hasFIle('image')){
$file = $request->file('image');
$ext = $file->getClientOriginalExtension();
$filename=time().'.'.$ext;
$file->move('images',$filename);
$photo->image = $filename;
   }
   $photo->save();
   return redirect('/all');
   
}
}





// $st=Carbon::now()->subDays(1);
// $en=Carbon::now();
// $get=incident::whereBetween('created_at',[$st,$en])->get();
// return view('all',compact('get')); 