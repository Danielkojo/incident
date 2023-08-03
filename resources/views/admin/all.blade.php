
@extends('admin.sidenav')

<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">All Incident</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                            <li class="breadcrumb-item active">All Incident</li>
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
                        <p class="card-title-desc">
                            <div class="ttop-menu">
                                <nav>
                                    <button style="margin-left:10px;background-color:transparent;border-style:none;transform:scale(1.2);"><i class='bx bx-arrow-back'></i></button>
                                    <button style="background-color:transparent;border-style:none;transform:scale(2);"><i class='bx bx-menu'></i></button>
                                    <h6 style="margin-top:5px;margin-left:5px;">Incident <br>New Record</h6>
                                    <div style="margin-top:5px;margin-left:700px;">
                                        <button style="background-color:transparent;border-style:none;"><a href="" style="text-decoration:none;color:black;"><span class="material-symbols-outlined">attach_file</span></a></button>
                                        <button style="background-color:transparent;border-style:none;"><a href="" style="text-decoration:none;color:black;"><span class="material-symbols-outlined">instant_mix</span></a></button>
                                        <button style="background-color:transparent;border-style:none;transform:scale(1.3)"><a href="" style="text-decoration:none;color:black;"><i class='bx bx-dots-horizontal-rounded'></i></a></button>
                                        <button style="background-color:white;border-style:none;height:40px;opacity:0.6;"><a href="" style="text-decoration:none;color:black;">Submit</a></button>
                                        <button style="background-color:white;border-style:none;height:40px;opacity:0.6;"><a href="" style="text-decoration:none;color:black;">Resolve</a></button>
                                    </div>
                                    
                                </nav>  
                        </p>
                        <div class="top-menu">
                            <nav>
                                <button style="margin-left: 10px; background-color:transparent ;border-style: none;transform: scale(2);"><i class='bx bx-menu'></i></button>
                                
                            </nav>
                        </div>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                               
                            <th>Number</th>
                                    <th>Opened</th>
                                    <th>Short Description</th>
                                    <th> Caller</th>
                                    <th>Priority</th>
                                    <th>State</th>
                                    <th>Category</th>
                                    <th>Assignment Group</th>
                                    <th>Assigned To</th>
                            </tr>
                            </thead>
                            @foreach($get as $get)
                            <tr>
                            <td name="number">{{$get->number}}</td>
                            <td name="contact_type"> {{$get->created_at}}</td>
                            <td name="contact_type"> {{$get->short_description}}</td>
                            <td name="caller"> {{$get->caller}}</td>
                            <td  name="priority">{{$get->priority}}</td>
                            <td  name="state">{{$get->state}}</td>
                            <td name="category">{{$get->category}}</td>

                      
                            <td  name="assignment_group">{{$get->assignment_group}}</td>
                            <td name="assignment_to">{{$get->assignment_to}}</td>
                           
                           
                            </tr>
                            @endforeach
                         

                            <tbody>
                         
                         
                            </tbody>
                        </table>
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
<!-- end main content-->

</div>

@extends('admin.footer')

<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!-- JAVASCRIPT -->
  <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <!--tinymce js-->
        <script src="assets/libs/tinymce/tinymce.min.js"></script>

        <!-- init js -->
        <script src="assets/js/pages/form-editor.init.js"></script>

        <script src="assets/js/app.js"></script>