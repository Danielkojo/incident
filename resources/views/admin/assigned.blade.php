
@extends('admin.sidenav')

<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Assigned Incidents</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Assigned to</a></li>
                            <li class="breadcrumb-item active">ITIL user</li>
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
                                <tbody>
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

@extends('admin.footer')