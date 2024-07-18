
@extends('admin.sidenav')
<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">open Unassigned</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                            <li class="breadcrumb-item active">Open Unassigned</li>
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

                      <!-- Add the tab for selecting the number of rows -->
<div class="row mb-2">
    <div class="col">
        <label for="rowsPerPage">Show:</label>
        <select id="rowsPerPage" class="form-select form-select-sm" style="width: 70px;">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="15">15</option>
            <option value="25">25</option>
        </select>
    </div>
</div>

<!-- Table to display the data -->
<div class="table-responsive">
                            <table class="table table-editable table-nowrap align-middle table-edits">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Edit</th>
                                  
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($get as $data)
                                    <tr data-id="1">
                                        <td data-field="id" style="width: 80px">{{ $data->id }}</td>
                                        <td data-field="name">{{ $data->name }}</td>
                                        <td data-field="email">{{ $data->email }}</td>
                                        <td data-field="row">{{ $data->row }}</td>
                                        <td style="width: 100px">
                                           
                                
                                
                                        
                                       
                                        </td>
                                        <td><a href="{{'/editrole-'.$data->id}}"><i class="fas fa-pencil-alt"></i></a></td>
                                    </tr>
                                    @endforeach
                                  
                                </tbody>
                                </table>
                                <!-- <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title"></h4>
                                        <p class="card-title-desc">
        
                                        <div>
                                            <form action="{{url('/upload')}" class="dropzone" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="fallback">
                                                    <input name="avatar" type="file" >
                                                </div>
                                                <div class="dz-message needsclick">
                                                    <div class="mb-3">
                                                        <i class="display-4 text-muted ri-upload-cloud-2-line"></i>
                                                    </div>
                                                    
                                                    <h4>Drop files here or click to upload.</h4>
                                                </div>
                                                <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Send Files</button>
                                        </div>
                                            </form>
                                        </div>
        
                                        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> -->
                    </div>


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
<!-- END layout-wrapper -->

@extends('admin.footer')



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        const rowsPerPage = 5; // Set the initial number of rows per page
        let currentPage = 1;

        // Function to handle the change in the number of rows to display
        $("#rowsPerPage").change(function() {
            const numRows = $(this).val();
            showRows(numRows, 1);
        });

        // Function to show the specified number of rows in the table
        function showRows(numRows, page) {
            const startIndex = (page - 1) * numRows;
            const endIndex = startIndex + numRows;

            $("#datatable-buttons tbody tr").hide(); // Hide all rows
            $("#datatable-buttons tbody tr").slice(startIndex, endIndex).show(); // Show the rows for the current page
        }

        // Function to handle pagination
        function handlePagination() {
            $("#prevPage").toggleClass("disabled", currentPage === 1);
            $("#nextPage").toggleClass("disabled", currentPage === 3); // Change '3' to the total number of pages

            $("#page1").toggleClass("active", currentPage === 1);
            $("#page2").toggleClass("active", currentPage === 2);
            $("#page3").toggleClass("active", currentPage === 3); // Change '3' to the total number of pages

            showRows(rowsPerPage, currentPage);
        }

        // Function to move to the previous page
        $("#prevPage").click(function() {
            if (currentPage > 1) {
                currentPage--;
                handlePagination();
            }
        });

        // Function to move to the next page
        $("#nextPage").click(function() {
            if (currentPage < 3) { // Change '3' to the total number of pages
                currentPage++;
                handlePagination();
            }
        });

        // Function to navigate to a specific page when the corresponding page number is clicked
        $("#page1").click(function() {
            currentPage = 1;
            handlePagination();
        });

        $("#page2").click(function() {
            currentPage = 2;
            handlePagination();
        });

        $("#page3").click(function() {
            currentPage = 3; // Change '3' to the total number of pages
            handlePagination();
        });

        // Show the initial number of rows on page load (e.g., 5 rows)
        showRows(rowsPerPage, currentPage);
        handlePagination();
    });
</script>

<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <!-- Header content (same as before) -->
    </thead>
    <tbody>
        <!-- The table rows will be generated dynamically based on the data (same as before) -->
    </tbody>
</table>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        const rowsPerPage = 5; // Set the initial number of rows per page
        let currentPage = 1;

        // Function to handle the change in the number of rows to display
        $("#rowsPerPage").change(function() {
            const numRows = $(this).val();
            showRows(numRows, 1);
        });

        // Function to show the specified number of rows in the table
        function showRows(numRows, page) {
            const startIndex = (page - 1) * numRows;
            const endIndex = startIndex + numRows;

            $("#datatable-buttons tbody tr").hide(); // Hide all rows
            $("#datatable-buttons tbody tr").slice(startIndex, endIndex).show(); // Show the rows for the current page
        }

        // Function to handle pagination
        function handlePagination() {
            $("#prevPage").toggleClass("disabled", currentPage === 1);
            $("#nextPage").toggleClass("disabled", currentPage === 3); // Change '3' to the total number of pages

            $("#page1").toggleClass("active", currentPage === 1);
            $("#page2").toggleClass("active", currentPage === 2);
            $("#page3").toggleClass("active", currentPage === 3); // Change '3' to the total number of pages

            showRows(rowsPerPage, currentPage);
        }

        // Function to move to the previous page
        $("#prevPage").click(function() {
            if (currentPage > 1) {
                currentPage--;
                handlePagination();
            }
        });

        // Function to move to the next page
        $("#nextPage").click(function() {
            if (currentPage < 3) { // Change '3' to the total number of pages
                currentPage++;
                handlePagination();
            }
        });

        // Function to navigate to a specific page when the corresponding page number is clicked
        $("#page1").click(function() {
            currentPage = 1;
            handlePagination();
        });

        $("#page2").click(function() {
            currentPage = 2;
            handlePagination();
        });

        $("#page3").click(function() {
            currentPage = 3; // Change '3' to the total number of pages
            handlePagination();
        });

        // Show the initial number of rows on page load (e.g., 5 rows)
        showRows(rowsPerPage, currentPage);
        handlePagination();
    });
</script>

 <!-- JAVASCRIPT -->
 <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- Magnific Popup-->
        <script src="assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!-- lightbox init js-->
        <script src="assets/js/pages/lightbox.init.js"></script>

        <script src="assets/js/app.js"></script>

         <!-- App favicon -->
         <link rel="shortcut icon" href="assets/images/favicon.ico">

<!-- Lightbox css -->
<link href="assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />

<!-- Bootstrap Css -->
<link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
<script src="assets/libs/dropzone/min/dropzone.min.js"></script>