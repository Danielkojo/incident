
@extends('admin.sidenav')
@section('headers')

@endsection

<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0"></h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Role</a></li>
                                            <li class="breadcrumb-item active">User Role</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title"></h4>
                                        <p class="card-title-desc"></p>
        <form action="{{url('/postrole/'.$gett->id)}}" method="post">
        @csrf
                                        <div class="table-responsive">
                                            <table class="table table-nowrap mb-0">
                                              
                                                <tbody>
                                                <tr>
                                                    <td>Name</td>
                                                    <td>
                                                        <a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username">{{$gett->name}}</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td>
                                                        <a href="#" id="inline-firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname">{{$gett->email}}</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Role</td>
                                                    <td>
                                                    <td> <select style="padding-left="class="form-control select2-search-disable" name = 'row'>
     
     <option>user</option>
     <option>admin</option>
    
   
 </select></td>
                                                    </td>
                                                </tr>
                                               
                                                </tbody>
                                            </table>
                                            <br>
                                            <br>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
           

<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © Upcube.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                </div>
            </div>
        </div>
    </div>
</footer>

</div>

@extends('admin.footer')
 
      