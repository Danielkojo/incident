
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
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
<!-- Table to display the data -->
<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
@csrf
    <thead>
        <tr>
            <th>Number</th>
            <th>opened</th>
            <th>short description</th>
            <th>caller</th>
            <th>priority</th>
            <th>State</th>
            <th>Category</th>
            <th>Assignment group</th>
            <th>Assigned to</th>
        </tr>
    </thead>
    <tbody>
        <!-- The table rows will be generated dynamically based on the data -->
        @foreach($get as $data)
        <tr>
            <td name="number">{{ $data->number }}</td>
            <td name="contact_type">{{ $data->created_at }}</td>
            <td name="contact_type">{{ $data->short_description }}</td>
            <td name="caller">{{ $data->caller }}</td>
            <td name="priority">{{ $data->priority }}</td>
            <td name="state">{{ $data->state }}</td>
            <td name="category">{{ $data->category }}</td>
            <td name="assignment_group">{{ $data->assignment_group }}</td>
            <td name="assignment_to">{{ $data->assignment_to }}</td>
        </tr>
        @endforeach
    </tbody>

    
</table>

<!-- Pagination -->


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


<style>

    
#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
</style>
<script>
    function myFunction() {
        var input, filter, table, tr, td, i, j, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("datatable-buttons");
        tr = table.getElementsByTagName("tr");
        for (i = 1; i < tr.length; i++) { // Start loop from 1 to skip header row
            var found = false; // Flag to check if the search query is found in any column
            for (j = 0; j < tr[i].cells.length; j++) {
                td = tr[i].cells[j];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        found = true;
                        break; // Exit inner loop if match is found in any column
                    }
                }
            }
            if (found) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
</script>
