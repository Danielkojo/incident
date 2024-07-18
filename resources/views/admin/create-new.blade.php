
@extends('admin.sidenav')




<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

                    
                  
                        
<!-- start page title -->
<div class="row">
<div class="col-12">
<div class="page-title-box d-sm-flex align-items-center justify-content-between">
<h4 class="mb-sm-0">Create New</h4>

<div class="page-title-right">
<ol class="breadcrumb m-0">
<li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
<li class="breadcrumb-item active">Create New</li>
</ol>
</div>

</div>
</div>
</div>
<!-- end page title -->

<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-body">



<form action = "{{url('/addincident')}}" method="post">
@csrf

<div class="row">
<div class="col-lg-6">
<div class="mb-3">

    <label class="form-label">Number</label>
    <input type="text" class="form-control" id="basicpill-firstname-input" name = 'number' placeholder="INC-XXXXXX" readonly>

</div>


</div>


<div class="col-lg-6">
<div class="mb-0">
    <label class="form-label">Contact type</label>
    <select class="form-control select2-search-disable" name = 'contact_type'>
     
        <option>--none--</option>
        <option>Email</option>
        <option>Phone</option>
        <option>-Self service</option>
        <option>Walk-in</option>
      
    </select>

</div>

</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="mb-3">
    <label class="form-label">Caller</label>
    <select class="form-control select2-search-disable" name = 'caller' readonly>
     
     <option>{{ Auth::user()->name }}</option>
   
   
 </select>

</div>


</div>


<div class="col-lg-6">
<div class="mb-0">
    <label class="form-label">State</label>
    <select class="form-control select2-search-disable" name = 'state'>
        <option>New</option>
     
      
    </select>

</div>

</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="mb-3">
    <label class="form-label">Category</label>
    <select class="form-control select2" id="categorySelect" name = 'category'>
        <option>--none--</option>
        <option>Inquire/help</option>
        <option>Software</option>
        <option>Hardware</option>
        <option>Network</option>
        <option>Database</option>
    </select>
    

</div>


</div>


<div class="col-lg-6">
<div class="mb-0">
    <label class="form-label">Impact</label>
    <select class="form-control select2-search-disable" id="impactSelect" onchange="updatePriority()" name = 'impact'>
        <option>1-High</option>
        <option>2-Moderate</option>
        <option>3-Low</option>
       
      
    </select>

</div>

</div>
</div> <div class="row">
<div class="col-lg-6">
<div class="mb-3">
    <label class="form-label">Sub Category</label>
    <select class="form-control select2"id="subCategorySelect"name = 'sub_category'>
        <option>--none--</option>
        <option >Anti-virus</option>
        <option >Email</option>
        <option >Internal Application</option>
        <option >CPU</option>
        <option >Disk</option>
        <option >Keyboard</option>
        <option >Memory</option>
        <option >Monitor</option>
        <option >Mouse</option>
        <option >DNS</option>
        <option >DHCP</option>
        <option >IP  Adress</option>
        <option >VPN</option>
        <option >Wireless</option>
        <option >Database</option>
        <option >DB2</option>
        <option >Oracle</option>
        <option >MSSQL</option>
        
        <option>Email</option>
        <option>Operating System</option>
       
    </select>

</div>


</div>




<div class="col-lg-6">
<div class="mb-0">
    <label class="form-label">Priority</label>
    <select class="form-control select2-search-disable"  readonly id="prioritySelect"  name = 'priority' >
        <option>1-Critical</option>
        <option>2-High</option>
        <option>3-Moderate</option>
        <option>4-Low</option>
        <option>5-Planning</option>  
    </select>

</div>

</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="mb-3">
    <label class="form-label">Configuration item</label>
    <input type="text" class="form-control" id="basicpill-phoneno-input" name = 'configuration_item'>

</div>


</div>


<div class="col-lg-6">
    <div class="mb-0">
    <label class="form-label">Assignment group</label>
    <select class="form-control select2" id="categorySelect" name = 'category'>
        <option>--none--</option>
        <option>Inquire/help</option>
        <option>Software</option>
        <option>Hardware</option>
        <option>Network</option>
        <option>Database</option>
    </select>
</div>

</div>

<div class="row">
<div class="col-lg-6">
<div class="mb-3">
    <label class="form-label">Assign to</label>
    <input type="text" class="form-control" id="basicpill-phoneno-input"name = 'assignment_to'>

</div>


</div>


<div class="col-lg-6">
    <div class="mb-0">
    <label class="form-label">User id</label>
    <select class="form-control select2-search-disable" name = 'userid' readonly>
     
     <option>{{ Auth::user()->id }}</option>
   
   
 </select>
</div>

</div>



                                                                <div class="mb-3">
                                                                    <label class="form-label" for="basicpill-address-input">Description</label>
                                                                    <textarea id="basicpill-address-input" class="form-control" rows="3"  name = 'description'></textarea>
                                                                </div>


</div>


<div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                                                <div class="p-3">
                                                   
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light" id="">SUBMIT</button>
                                                </div>
                                            </div>
</form> 

</div>
</div>
<!-- end select2 -->




</div>
                        <br><br>

                      <div>
                        <form>
                          <form action="">
                            <nav>
                                <button > <a target="navsect"href="{{url('/note')}}">Note</a></button>
                                <button > <a target="navsect" href="{{url('/relrec')}}">Related Records</a></button>
                                <button > <a  target="navsect" href="{{url('/resinfo')}}">Resolution Information</a></button>
                            </nav>
                        
                            <iframe name="navsect" src="{{url('/note')}}" frameborder="0" style="height: 560px;width:1200px; background-color: rgb(13, 13, 13);">
                            @include('admin.note')
                        </iframe>
                          </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -
        
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->



</div>
<!-- end main content-->

</div>
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

        <script>
            function updatePriority() {
                // Get the selected values of Urgency and Impact
                const urgencySelect = document.getElementById('urgencySelect');
                const impactSelect = document.getElementById('impactSelect');
                const prioritySelect = document.getElementById('prioritySelect');
        
                const urgency = urgencySelect.value;
                const impact = impactSelect.value;
        
                // Define the priority logic based on the specified conditions
                if (urgency === '1-High') {
                    if (impact === '1-High') {
                        prioritySelect.value = '1-Critical';
                    } else if (impact === '2-Moderate') {
                        prioritySelect.value = '2-High';
                    } else if (impact === '3-Low') {
                        prioritySelect.value = '3-Moderate';
                    }
                } else if (urgency === '2-Moderate') {
                    if (impact === '1-High') {
                        prioritySelect.value = '2-High';
                    } else if (impact === '2-Moderate') {
                        prioritySelect.value = '3-Moderate';
                    } else if (impact === '3-Low') {
                        prioritySelect.value = '4-Low';
                    }
                } else if (urgency === '3-Low') {
                    if (impact === '1-High') {
                        prioritySelect.value = '3-Moderate';
                    } else if (impact === '2-Moderate') {
                        prioritySelect.value = '4-Low';
                    } else if (impact === '3-Low') {
                        prioritySelect.value = '5-Planning';
                    }
                }
            }
        </script>


          <script>
            // Get references to the category and sub-category select elements
            const categorySelect = document.getElementById('categorySelect');
            const subCategorySelect = document.getElementById('subCategorySelect');
        
            // Define sub-category options for each category
            const subCategoryOptions = {
                'Inquire/help': ['Antivirus', 'Email', 'Internal application'],
                'Software': ['Email', 'Operating systems'],
                'Hardware': ['CPU', 'Disk', 'Keyboard', 'Memory', 'Monitor', 'Mouse'],
                'Network': ['DNS', 'DHCP', 'IP address', 'VPN', 'Wireless'],
                'Database': ['DB2', 'MSSQL', 'Oracle']
            };
        
            // Function to update sub-category options
            function updateSubCategoryOptions() {
                const selectedCategory = categorySelect.value;
                subCategorySelect.innerHTML = '<option>--none--</option>'; // Clear previous options
        
                if (selectedCategory in subCategoryOptions) {
                    const options = subCategoryOptions[selectedCategory];
                    options.forEach((option) => {
                        const optionElement = document.createElement('option');
                        optionElement.textContent = option;
                        subCategorySelect.appendChild(optionElement);
                    });
                }
            }
        
            // Call the function on page load and whenever the category selection changes
            updateSubCategoryOptions();
            categorySelect.addEventListener('change', updateSubCategoryOptions);
        </script>
           <style>

.ttop-menu {
  width: 100%;
  height: 50px;

}
.ttop-menu nav{
  margin: 0 auto;
  display: inline-flex;
}
.category-table {
  width: 100%;
  height: 30px;
}
</style>

<script>
    // Function to generate random numbers between min and max
    function getRandomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    // Function to generate a six-digit random number with leading zeros
    function generateRandomIncNumber() {
        const randomNumber = getRandomNumber(0, 999999).toString().padStart(6, '0');
        return `INC-${randomNumber}`;
    }

    // Function to set the auto-filled number in the input field
    function setAutoFilledNumber() {
        const numberInput = document.getElementById('basicpill-firstname-input');
        numberInput.value = generateRandomIncNumber();
    }

    // Call the function to set the auto-filled number when the page loads
    setAutoFilledNumber();
</script>


        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- Sweet Alerts js -->
        <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

        <!-- Sweet alert init js-->
        <script src="assets/js/pages/sweet-alerts.init.js"></script>

        <script src="assets/js/app.js"></script>

        <link rel="shortcut icon" href="assets/images/favicon.ico">

<!-- Sweet Alert-->
<link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

<!-- Bootstrap Css -->
<link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
