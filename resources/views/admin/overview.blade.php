@extends('layouts.app')
@extends('admin.sidenav')




<div class="main-content">

<div class="page-content">
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Dashboard</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Upcube</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
          
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-truncate font-size-14 mb-2">Critical Open</p>
                                <h4 class="mb-2">{{$critical}}</h4>
                                <p class="text-muted mb-0"><span class="text-danger fw-bold font-size-12 me-2"><i class="ri-arrow-right-down-line me-1 align-middle"></i>1.09%</span>from previous period</p>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-light text-success rounded-3">
                                <i style="color:red; font-size:30px"class="dripicons-warning"></i>
                                </span>
                            </div>
                        </div>                                              
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-truncate font-size-14 mb-2">Ussigned incident</p>
                                <h4 class="mb-2">{{$unassigned}}</h4>
                                <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>16.2%</span>from previous period</p>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-light text-primary rounded-3">
                                    <i class="ri-user-3-line font-size-24"></i>  
                                </span>
                            </div>
                        </div>                                              
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-truncate font-size-14 mb-2">Overdue incident</p>
                                <h4 class="mb-2">29670</h4>
                                <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>11.7%</span>from previous period</p>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-light text-success rounded-3">
                                <i  style="color:red; font-size:30px" class=" ri-timer-2-line"></i> 
                                </span>
                            </div>
                        </div>                                              
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->


        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-truncate font-size-14 mb-2">Open incident</p>
                                <h4 class="mb-2">{{$open}}</h4>
                                <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>9.23%</span>from previous period</p>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-light text-primary rounded-3">
                                <i class="ri-folder-open-line"></i>   
                                </span>
                            </div>
                        </div>                                            
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-truncate font-size-14 mb-2">Incident not updated for 7 days</p>
                                <h4 class="mb-2">{{$nunupdate}}</h4>
                                <p class="text-muted mb-0"><span class="text-danger fw-bold font-size-12 me-2"><i class="ri-arrow-right-down-line me-1 align-middle"></i>1.09%</span>from previous period</p>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-light text-success rounded-3">
                                    <i class="mdi mdi-currency-usd font-size-24"></i>  
                                </span>
                            </div>
                        </div>                                              
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->
         
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-truncate font-size-14 mb-2">Open incident older than 30 Days</p>
                              <center>  <h4 class="mb-2">{{$oldopen}}</h4> 
                            </center>
                              
                            </div>
                            <div class="avatar-sm">
                               
                            </div>
                        </div>                                              
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->

   <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title mb-4">Open incident</h4>

                        <div class="row text-center">
                            <div class="col-4">
                                <h5 class="mb-0">86541</h5>
                                <p class="text-muted text-truncate">Activated</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0">2541</h5>
                                <p class="text-muted text-truncate">Pending</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0">102030</h5>
                                <p class="text-muted text-truncate">Deactivated</p>
                            </div>
                        </div>
                        <div class="chart">
                            <div class="bar" style=" height: 100px;" ><span class="label">Bar 1</span></div>
                            <div class="bar" style=" height: 50px;"><span class="label">Bar 2</span></div>
                            <div class="bar" style=" height: 75px;"><span class="label">Bar 3</span></div>
                            <div class="bar" style=" height: 90px;"><span class="label">Bar 4</span></div>
                            
    
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title mb-4"> closed event</h4>

                        <div class="row text-center">
                            <div class="col-4">
                                <h5 class="mb-0">2541</h5>
                                <p class="text-muted text-truncate">Activated</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0">84845</h5>
                                <p class="text-muted text-truncate">Pending</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0">12001</h5>
                                <p class="text-muted text-truncate">Deactivated</p>
                            </div>
                        </div>

                        <div class="chart">
                            <div class="bar" style=" height: 100px;" ><span class="label">Bar 1</span></div>
                            <div class="bar" style=" height: 50px;"><span class="label">Bar 2</span></div>
                            <div class="bar" style=" height: 75px;"><span class="label">Bar 3</span></div>
                            <div class="bar" style=" height: 90px;"><span class="label">Bar 4</span></div>
                            
    
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->





    <div class="chart">
        <div class="bar" style=" height: 100px;" ><span class="label">Bar 1</span></div>
        <div class="bar" style=" height: 50px;"><span class="label">Bar 2</span></div>
        <div class="bar" style=" height: 75px;"><span class="label">Bar 3</span></div>
        <div class="bar" style=" height: 90px;"><span class="label">Bar 4</span></div>
        

    </div>
      
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title mb-4">Line Chart</h4>

                        <div class="row text-center">
                            <div class="col-4">
                                <h5 class="mb-0">86541</h5>
                                <p class="text-muted text-truncate">Activated</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0">2541</h5>
                                <p class="text-muted text-truncate">Pending</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0">102030</h5>
                                <p class="text-muted text-truncate">Deactivated</p>
                            </div>
                        </div>

                        <canvas id="lineChart" height="300"></canvas>

                    </div>
                </div>
            </div> <!-- end col -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title mb-4">Bar Chart</h4>

                        <div class="row text-center">
                            <div class="col-4">
                                <h5 class="mb-0">2541</h5>
                                <p class="text-muted text-truncate">Activated</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0">84845</h5>
                                <p class="text-muted text-truncate">Pending</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0">12001</h5>
                                <p class="text-muted text-truncate">Deactivated</p>
                            </div>
                        </div>

                        <canvas id="bar" height="300"></canvas>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->


        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title mb-4">Pie Chart</h4>

                        <div class="row text-center">
                            <div class="col-4">
                                <h5 class="mb-0">2536</h5>
                                <p class="text-muted text-truncate">Activated</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0">69421</h5>
                                <p class="text-muted text-truncate">Pending</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0">89854</h5>
                                <p class="text-muted text-truncate">Deactivated</p>
                            </div>
                        </div>

                        <canvas id="pie" height="260"></canvas>

                    </div>
                </div>
            </div> <!-- end col -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title mb-4">Donut Chart</h4>

                        <div class="row text-center">
                            <div class="col-4">
                                <h5 class="mb-0">9595</h5>
                                <p class="text-muted text-truncate">Activated</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0">36524</h5>
                                <p class="text-muted text-truncate">Pending</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0">62541</h5>
                                <p class="text-muted text-truncate">Deactivated</p>
                            </div>
                        </div>

                        <canvas id="doughnut" height="260"></canvas>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title mb-4">Polar Chart</h4>

                        <div class="row text-center">
                            <div class="col-4">
                                <h5 class="mb-0">4852</h5>
                                <p class="text-muted text-truncate">Activated</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0">3652</h5>
                                <p class="text-muted text-truncate">Pending</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0">85412</h5>
                                <p class="text-muted text-truncate">Deactivated</p>
                            </div>
                        </div>

                        <canvas id="polarArea" height="300"> </canvas>

                    </div>
                </div>
            </div> <!-- end col -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Radar Chart</h4>

                        <div class="row text-center">
                            <div class="col-4">
                                <h5 class="mb-0">694</h5>
                                <p class="text-muted text-truncate">Activated</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0">55210</h5>
                                <p class="text-muted text-truncate">Pending</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0">489498</h5>
                                <p class="text-muted text-truncate">Deactivated</p>
                            </div>
                        </div>

                        <canvas id="radar" height="300"></canvas>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
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

</div>

@extends('admin.footer')


<script>
    var values=[100,50,75,120,90];

    var bars = document.querySelectorAll('.bar');
    for(var i =0; i<bars.length;I++){
        var bar = bar[i];
        var value = values[i];
        var label = 'Bar'+(i+1);
        bar.Style.height = value + 'px';('.label').textCOntent = label;
    }

</script>


<style>
            .chart{
                display: flex;
                justify-content: space-between;
                align-items: flex-end;
                height: 300px;
            }
            .bar{
                flex-grow: 1;
                display: flex;
                justify-content: center;
                align-items: flex-end;
                position: relative;
                width: 10%;
                background-color: rgb(57, 206, 188);
              
            }
            .bar + .bar{
                margin-left: 50px;
            }
            label{
                position: absolute;
                bottom: -50px;
                left: 0;
                right: 0;
                text-align: center;
            }

        </style>
