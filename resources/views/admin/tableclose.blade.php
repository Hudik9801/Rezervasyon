<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Advanced form elements</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin//plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/dropzone/min/dropzone.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="../../index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="{{asset('assets')}}/admin/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="{{asset('assets')}}/admin/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="{{asset('assets')}}/admin/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="../../index3.html" class="brand-link">
            <img src="{{asset('assets')}}/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('assets')}}/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Alexander Pierce</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-6 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('assets')}}/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Admin</a>
                        <button type="button" class="btn btn-default btn-sm" style="margin-top: -50px; margin-left: 50px;">
                            <span class="glyphicon glyphicon-log-out"></span><i class="nav-icon fas fa-unlock"></i> Log out
                        </button>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin_home')}}"  class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard</p>
                                    </a>
                                </li>

                                <li class="nav-header">Management</li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-edit"></i>
                                        <p>
                                            Forms
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">

                                        <li class="nav-item">
                                            <a href="{{route('admin_table_open')}}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Open Tables</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('admin_table_close')}}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Close Tables</p>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-table"></i>
                                        <p>
                                            Tables
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">

                                        <li class="nav-item">
                                            <a href="{{route('admin_data_table')}}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>DataTables</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-header">KPI</li>
                                <li class="nav-item">
                                    <a href="{{route('admin_calendar')}}" class="nav-link">
                                        <i class="nav-icon far fa-calendar-alt"></i>
                                        <p>
                                            Calendar
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon far fa-plus-square"></i>
                                        <p>
                                            Extras
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">

                                        <li class="nav-item">
                                            <a href="pages/examples/invoice.html" class="nav-link">
                                                <i class="nav-icon fas fa-book"></i>
                                                <p>
                                                    Invoice
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages/examples/contact-us.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Contact us</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon fas fa-file"></i>
                                                <p>Documentation</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Close Your Tables</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Table Close Form</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section id="select" class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Table Close Form</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>


                    <form method="GET" >


                        <div>

                            <h4>KAPAMA</h4>
                            <input type="checkbox"  name="employed"   id="employed_v1" value="12:00PMM"  /> 12:00 PM
                            <input type="checkbox" name="employedd"   id="employed_v3" value="No"  /> 12:30 PM  <br>
                            <input type="checkbox" name="employed1"   id="employed_v5" value="No"  /> 01:00 PM
                            <input type="checkbox" name="employed13"   id="employed_v7" value="No"  /> 01:30 PM  <br>
                            <input type="checkbox" name="employed2"   id="employed_v9" value="No" /> 02:00 PM
                            <input type="checkbox" name="employed23"   id="employed_v11" value="No"  /> 02:30 PM<br>
                            <input type="checkbox" name="employed3"   id="employed_v13" value="No"  /> 03:00 PM
                            <input type="checkbox" name="employed33"   id="employed_v15" value="No"  /> 03:30 PM<br>
                            <input type="checkbox" name="employed4"   id="employed_v17" value="No"  /> 04:00 PM
                            <input type="checkbox" name="employed43"   id="employed_v19" value="No"  /> 04:30 PM<br>
                            <input type="checkbox" name="employed5"   id="employed_v21" value="05:00PM" /> 05:00 PM
                            <input type="checkbox" name="employed53"   id="employed_v23" value="No"  /> 05:30 PM<br>
                            <input type="checkbox" name="employed6"   id="employed_v25" value="No" /> 06:00 PM
                            <input type="checkbox" name="employed63"   id="employed_v27" value="No" /> 06:30 PM<br>
                            <input type="checkbox" name="employed7"   id="employed_v29" value="No"  /> 07:00 PM
                            <input type="checkbox" name="employed73"   id="employed_v31" value="No" /> 07:30 PM<br>
                            <input type="checkbox" name="employed8"   id="employed_v33" value="No"  /> 08:00 PM
                            <input type="checkbox" name="employed83"   id="employed_v35" value="No"  /> 08:30 PM<br>
                            <input type="checkbox" name="employed9"   id="employed_v37" value="No" /> 09:00 PM
                            <input type="checkbox" name="employed93"   id="employed_v39" value="No"  /> 09:30 PM<br>
                            <input type="checkbox" name="employed10"   id="employed_v41" value="No" /> 10:00 PM
                            <input type="checkbox" name="employed103"   id="employed_v43" value="No" /> 10:30 PM<br>
                            <input type="checkbox"  name="employedall"   id="employed_vall" value="No" /> ALL<br>
                        </div>

                        <div>
                            <select id="all">
                                <option >Select</option>
                                <option id="12"  >12:00 PM</option>
                                <option id="12_3" >12:30 PM</option>
                                <option id="1" >01:00 PM</option>
                                <option id="1_3" >01:30 PM</option>
                                <option id="2" >02:00 PM</option>
                                <option id="2_3" >02:30 PM</option>
                                <option id="3" >03:00 PM</option>
                                <option id="3_3" >03:30 PM</option>
                                <option id="4" >04:00 PM</option>
                                <option id="4_3" >04:30 PM</option>
                                <option id="5" >05:00 PM</option>
                                <option id="5_3" >05:30 PM</option>
                                <option id="6" >06:00 PM</option>
                                <option id="6_3" >06:30 PM</option>
                                <option id="7" >07:00 PM</option>
                                <option id="7_3" >07:30 PM</option>
                                <option id="8" >08:00 PM</option>
                                <option id="8_3" >08:30 PM</option>
                                <option id="9" >09:00 PM</option>
                                <option id="9_3" >09:30 PM</option>
                                <option id="10" >10:00 PM</option>
                                <option id="10_3" >10:30 PM</option>

                            </select>
                        </div>

                        <div>
                            <h4>Masa Kapa</h4>
                            <input type="checkbox" name="employeda"   id="employed_1" value="No"  /> 2<br>
                            <input type="checkbox" name="employedac"   id="employed_3" value="No"  /> 4  <br>
                            <input type="checkbox" name="employedacc"   id="employed_5" value="No"  /> 6
                        </div>
                              <div>
                                  <select id="all">
                                      <option >Select</option>
                                      <option id="2k" >2</option>
                                      <option id="4k" >4</option>
                                      <option id="6k" >6</option>
                                  </select>
                          </div>

                        <div> <input onclick="k12()" type="submit" value="Submit"></div>

                    </form>




                    <div class="row">
                        <div class="col-md-6">
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->

                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 3.2.0
                </div>
                <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </section>
    </div>
    <!-- ./wrapper -->



    <!-- jQuery -->
    <script src="{{asset('assets')}}/admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('assets')}}/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
    <script src="{{asset('assets')}}/admin/plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="{{asset('assets')}}/admin/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="{{asset('assets')}}/admin/plugins/moment/moment.min.js"></script>
    <script src="{{asset('assets')}}/admin/plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="{{asset('assets')}}/admin/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="{{asset('assets')}}/admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset('assets')}}/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="{{asset('assets')}}/admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- BS-Stepper -->
    <script src="{{asset('assets')}}/admin/plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <!-- dropzonejs -->
    <script src="{{asset('assets')}}/admin/plugins/dropzone/min/dropzone.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('assets')}}/admin/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('assets')}}/admin/dist/js/demo.js"></script>
    <!-- Page specific script -->
    <!--<script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });

            //Date and time picker
            $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker(
                {
                    ranges   : {
                        'Today'       : [moment(), moment()],
                        'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                        'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate  : moment()
                },
                function (start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function(event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            })

            $("input[data-bootstrap-switch]").each(function(){
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })

        })
        // BS-Stepper Init
        document.addEventListener('DOMContentLoaded', function () {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })

        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false

        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template")
        previewNode.id = ""
        var previewTemplate = previewNode.parentNode.innerHTML
        previewNode.parentNode.removeChild(previewNode)

        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            url: "/target-url", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        })

        myDropzone.on("addedfile", function(file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
        })

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function(progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
        })

        myDropzone.on("sending", function(file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1"
            // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
        })

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function(progress) {
            document.querySelector("#total-progress").style.opacity = "0"
        })

        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function() {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
        }
        document.querySelector("#actions .cancel").onclick = function() {
            myDropzone.removeAllFiles(true)
        }
        // DropzoneJS Demo Code End
    </script>-->
</div>

</body>
</html>



<script>


    <!--12için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployee") == "12:00PM")
            $("#employed_v0").prop("checked", true);
        else
            $("#employed_v1").prop("checked", true);

        if(localStorage.getItem("itmEmployee") == "12:00PM")
            $("#12").prop("disabled", false);
        else
            $("#12").prop("disabled", true);

        $("#12").val(localStorage.getItem("itmTest"));

        $("[name=employed]").on("change", function(){
            localStorage.setItem("itmEmployee", $(this).val());

            if($(this).val() == "12:00PM")
                $("#12").prop("disabled", false);
            else
                $("#12").prop("disabled", true);
        });

        $("#12").on("change", function(){
            localStorage.setItem("itmTest", $(this).val());
        });
    });
    <!--12.30 için-->

    $(document).ready(function(){
        if(localStorage.getItem("itmEmployes") == "Yes")
            $("#employed_v2").prop("checked", true);
        else
            $("#employed_v3").prop("checked", true);

        if(localStorage.getItem("itmEmployes") == "Yes")
            $("#12_3").prop("disabled", false);
        else
            $("#12_3").prop("disabled", true);

        $("#12_3").val(localStorage.getItem("itmTests"));

        $("[name=employedd]").on("change", function(){
            localStorage.setItem("itmEmployes", $(this).val());

            if($(this).val() == "Yes")
                $("#12_3").prop("disabled", false);
            else
                $("#12_3").prop("disabled", true);
        });

        $("#12_3").on("change", function(){
            localStorage.setItem("itmTests", $(this).val());
        });
    });

    <!--1için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmploye1") == "Yes")
            $("#employed_v4").prop("checked", true);
        else
            $("#employed_v5").prop("checked", true);

        if(localStorage.getItem("itmEmploye1") == "Yes")
            $("#1").prop("disabled", false);
        else
            $("#1").prop("disabled", true);

        $("#1").val(localStorage.getItem("itmTest1"));

        $("[name=employed1]").on("change", function(){
            localStorage.setItem("itmEmploye1", $(this).val());

            if($(this).val() == "Yes")
                $("#1").prop("disabled", false);
            else
                $("#1").prop("disabled", true);
        });

        $("#1").on("change", function(){
            localStorage.setItem("itmTest1", $(this).val());
        });
    });


    <!--1a3için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployeq") == "Yes")
            $("#employed_v6").prop("checked", true);
        else
            $("#employed_v7").prop("checked", true);

        if(localStorage.getItem("itmEmployeq") == "Yes")
            $("#1_3").prop("disabled", false);
        else
            $("#1_3").prop("disabled", true);

        $("#1_3").val(localStorage.getItem("itmTestw"));

        $("[name=employed13]").on("change", function(){
            localStorage.setItem("itmEmployeq", $(this).val());

            if($(this).val() == "Yes")
                $("#1_3").prop("disabled", false);
            else
                $("#1_3").prop("disabled", true);
        });

        $("#1_3").on("change", function(){
            localStorage.setItem("itmTestw", $(this).val());
        });
    });

    <!--2için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmploye2") == "Yes")
            $("#employed_v8").prop("checked", true);
        else
            $("#employed_v9").prop("checked", true);

        if(localStorage.getItem("itmEmploye2") == "Yes")
            $("#2").prop("disabled", false);
        else
            $("#2").prop("disabled", true);

        $("#2").val(localStorage.getItem("itmTest2"));

        $("[name=employed2]").on("change", function(){
            localStorage.setItem("itmEmploye2", $(this).val());

            if($(this).val() == "Yes")
                $("#2").prop("disabled", false);
            else
                $("#2").prop("disabled", true);
        });

        $("#2").on("change", function(){
            localStorage.setItem("itmTest2", $(this).val());
        });

    });
    <!--2.3için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployet") == "Yes")
            $("#employed_v10").prop("checked", true);
        else
            $("#employed_v11").prop("checked", true);

        if(localStorage.getItem("itmEmployet") == "Yes")
            $("#2_3").prop("disabled", false);
        else
            $("#2_3").prop("disabled", true);

        $("#2_3").val(localStorage.getItem("itmTestt"));

        $("[name=employed23]").on("change", function(){
            localStorage.setItem("itmEmployet", $(this).val());

            if($(this).val() == "Yes")
                $("#2_3").prop("disabled", false);
            else
                $("#2_3").prop("disabled", true);
        });

        $("#2_3").on("change", function(){
            localStorage.setItem("itmTestt", $(this).val());
        });

    });

    <!--3için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployez") == "Yes")
            $("#employed_v12").prop("checked", true);
        else
            $("#employed_v13").prop("checked", true);

        if(localStorage.getItem("itmEmployez") == "Yes")
            $("#3").prop("disabled", false);
        else
            $("#3").prop("disabled", true);

        $("#3").val(localStorage.getItem("itmTestz"));

        $("[name=employed3]").on("change", function(){
            localStorage.setItem("itmEmployez", $(this).val());

            if($(this).val() == "Yes")
                $("#3").prop("disabled", false);
            else
                $("#3").prop("disabled", true);
        });

        $("#3").on("change", function(){
            localStorage.setItem("itmTestz", $(this).val());
        });

    });
    <!--3.3için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployex") == "Yes")
            $("#employed_v14").prop("checked", true);
        else
            $("#employed_v15").prop("checked", true);

        if(localStorage.getItem("itmEmployex") == "Yes")
            $("#3_3").prop("disabled", false);
        else
            $("#3_3").prop("disabled", true);

        $("#3_3").val(localStorage.getItem("itmTestx"));

        $("[name=employed33]").on("change", function(){
            localStorage.setItem("itmEmployex", $(this).val());

            if($(this).val() == "Yes")
                $("#3_3").prop("disabled", false);
            else
                $("#3_3").prop("disabled", true);
        });

        $("#3_3").on("change", function(){
            localStorage.setItem("itmTestx", $(this).val());
        });

    });


    <!--4için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployec") == "Yes")
            $("#employed_v16").prop("checked", true);
        else
            $("#employed_v17").prop("checked", true);

        if(localStorage.getItem("itmEmployec") == "Yes")
            $("#4").prop("disabled", false);
        else
            $("#4").prop("disabled", true);

        $("#4").val(localStorage.getItem("itmTestc"));

        $("[name=employed4]").on("change", function(){
            localStorage.setItem("itmEmployec", $(this).val());

            if($(this).val() == "Yes")
                $("#4").prop("disabled", false);
            else
                $("#4").prop("disabled", true);
        });

        $("#4").on("change", function(){
            localStorage.setItem("itmTestc", $(this).val());
        });

    });
    <!--4.3için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployev") == "Yes")
            $("#employed_v18").prop("checked", true);
        else
            $("#employed_v19").prop("checked", true);

        if(localStorage.getItem("itmEmployev") == "Yes")
            $("#4_3").prop("disabled", false);
        else
            $("#4_3").prop("disabled", true);

        $("#4_3").val(localStorage.getItem("itmTestv"));

        $("[name=employed43]").on("change", function(){
            localStorage.setItem("itmEmployev", $(this).val());

            if($(this).val() == "Yes")
                $("#4_3").prop("disabled", false);
            else
                $("#4_3").prop("disabled", true);
        });

        $("#4_3").on("change", function(){
            localStorage.setItem("itmTestv", $(this).val());
        });

    });

    <!--5için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployeb") == "05:00PM")
            $("#employed_v20").prop("checked", true);
        else
            $("#employed_v21").prop("checked", true);

        if(localStorage.getItem("itmEmployeb") == "05:00PM")
            $("#5").prop("disabled", false);
        else
            $("#5").prop("disabled", true);

        $("#5").val(localStorage.getItem("itmTestb"));

        $("[name=employed5]").on("change", function(){
            localStorage.setItem("itmEmployeb", $(this).val());

            if($(this).val() == "05:00PM")
                $("#5").prop("disabled", false);
            else
                $("#5").prop("disabled", true);
        });

        $("#5").on("change", function(){
            localStorage.setItem("itmTestb", $(this).val());
        });

    });
    <!--5.3için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployen") == "Yes")
            $("#employed_v22").prop("checked", true);
        else
            $("#employed_v23").prop("checked", true);

        if(localStorage.getItem("itmEmployen") == "Yes")
            $("#5_3").prop("disabled", false);
        else
            $("#5_3").prop("disabled", true);

        $("#5_3").val(localStorage.getItem("itmTestn"));

        $("[name=employed53]").on("change", function(){
            localStorage.setItem("itmEmployen", $(this).val());

            if($(this).val() == "Yes")
                $("#5_3").prop("disabled", false);
            else
                $("#5_3").prop("disabled", true);
        });

        $("#5_3").on("change", function(){
            localStorage.setItem("itmTestn", $(this).val());
        });

    });

    <!--6için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmploye8") == "Yes")
            $("#employed_v24").prop("checked", true);
        else
            $("#employed_v25").prop("checked", true);

        if(localStorage.getItem("itmEmploye8") == "Yes")
            $("#6").prop("disabled", false);
        else
            $("#6").prop("disabled", true);

        $("#6").val(localStorage.getItem("itmTest8"));

        $("[name=employed6]").on("change", function(){
            localStorage.setItem("itmEmploye8", $(this).val());

            if($(this).val() == "Yes")
                $("#6").prop("disabled", false);
            else
                $("#6").prop("disabled", true);
        });

        $("#6").on("change", function(){
            localStorage.setItem("itmTest8", $(this).val());
        });

    });
    <!--6.3için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployef") == "Yes")
            $("#employed_v26").prop("checked", true);
        else
            $("#employed_v27").prop("checked", true);

        if(localStorage.getItem("itmEmployef") == "Yes")
            $("#6_3").prop("disabled", false);
        else
            $("#6_3").prop("disabled", true);

        $("#6_3").val(localStorage.getItem("itmTestf"));

        $("[name=employed63]").on("change", function(){
            localStorage.setItem("itmEmployef", $(this).val());

            if($(this).val() == "Yes")
                $("#6_3").prop("disabled", false);
            else
                $("#6_3").prop("disabled", true);
        });

        $("#6_3").on("change", function(){
            localStorage.setItem("itmTestf", $(this).val());
        });

    });


    <!--7için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployeg") == "Yes")
            $("#employed_v28").prop("checked", true);
        else
            $("#employed_v29").prop("checked", true);

        if(localStorage.getItem("itmEmployeg") == "Yes")
            $("#7").prop("disabled", false);
        else
            $("#7").prop("disabled", true);

        $("#7").val(localStorage.getItem("itmTestg"));

        $("[name=employed7]").on("change", function(){
            localStorage.setItem("itmEmployeg", $(this).val());

            if($(this).val() == "Yes")
                $("#7").prop("disabled", false);
            else
                $("#7").prop("disabled", true);
        });

        $("#7").on("change", function(){
            localStorage.setItem("itmTestg", $(this).val());
        });

    });
    <!--7.3için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployeh") == "Yes")
            $("#employed_v30").prop("checked", true);
        else
            $("#employed_v31").prop("checked", true);

        if(localStorage.getItem("itmEmployeh") == "Yes")
            $("#7_3").prop("disabled", false);
        else
            $("#7_3").prop("disabled", true);

        $("#7_3").val(localStorage.getItem("itmTesth"));

        $("[name=employed73]").on("change", function(){
            localStorage.setItem("itmEmployeh", $(this).val());

            if($(this).val() == "Yes")
                $("#7_3").prop("disabled", false);
            else
                $("#7_3").prop("disabled", true);
        });

        $("#7_3").on("change", function(){
            localStorage.setItem("itmTesth", $(this).val());
        });

    });



    <!--8için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployeu") == "Yes")
            $("#employed_v32").prop("checked", true);
        else
            $("#employed_v33").prop("checked", true);

        if(localStorage.getItem("itmEmployeu") == "Yes")
            $("#8").prop("disabled", false);
        else
            $("#8").prop("disabled", true);

        $("#8").val(localStorage.getItem("itmTestu"));

        $("[name=employed8]").on("change", function(){
            localStorage.setItem("itmEmployeu", $(this).val());

            if($(this).val() == "Yes")
                $("#8").prop("disabled", false);
            else
                $("#8").prop("disabled", true);
        });

        $("#8").on("change", function(){
            localStorage.setItem("itmTestu", $(this).val());
        });

    });
    <!--8.3için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployeı") == "Yes")
            $("#employed_v34").prop("checked", true);
        else
            $("#employed_v35").prop("checked", true);

        if(localStorage.getItem("itmEmployeı") == "Yes")
            $("#8_3").prop("disabled", false);
        else
            $("#8_3").prop("disabled", true);

        $("#8_3").val(localStorage.getItem("itmTestı"));

        $("[name=employed83]").on("change", function(){
            localStorage.setItem("itmEmployeı", $(this).val());

            if($(this).val() == "Yes")
                $("#8_3").prop("disabled", false);
            else
                $("#8_3").prop("disabled", true);
        });

        $("#8_3").on("change", function(){
            localStorage.setItem("itmTestı", $(this).val());
        });

    });



    <!--9için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployeo") == "Yes")
            $("#employed_v36").prop("checked", true);
        else
            $("#employed_v37").prop("checked", true);

        if(localStorage.getItem("itmEmployeo") == "Yes")
            $("#9").prop("disabled", false);
        else
            $("#9").prop("disabled", true);

        $("#9").val(localStorage.getItem("itmTesto"));

        $("[name=employed9]").on("change", function(){
            localStorage.setItem("itmEmployeo", $(this).val());

            if($(this).val() == "Yes")
                $("#9").prop("disabled", false);
            else
                $("#9").prop("disabled", true);
        });

        $("#9").on("change", function(){
            localStorage.setItem("itmTesto", $(this).val());
        });

    });
    <!--9.3için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployep") == "Yes")
            $("#employed_v38").prop("checked", true);
        else
            $("#employed_v39").prop("checked", true);

        if(localStorage.getItem("itmEmployep") == "Yes")
            $("#9_3").prop("disabled", false);
        else
            $("#9_3").prop("disabled", true);

        $("#9_3").val(localStorage.getItem("itmTestp"));

        $("[name=employed93]").on("change", function(){
            localStorage.setItem("itmEmployep", $(this).val());

            if($(this).val() == "Yes")
                $("#9_3").prop("disabled", false);
            else
                $("#9_3").prop("disabled", true);
        });

        $("#9_3").on("change", function(){
            localStorage.setItem("itmTestp", $(this).val());
        });

    });



    <!--10için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployea") == "Yes")
            $("#employed_v40").prop("checked", true);
        else
            $("#employed_v41").prop("checked", true);

        if(localStorage.getItem("itmEmployea") == "Yes")
            $("#10").prop("disabled", false);
        else
            $("#10").prop("disabled", true);

        $("#10").val(localStorage.getItem("itmTesta"));

        $("[name=employed10]").on("change", function(){
            localStorage.setItem("itmEmployea", $(this).val());

            if($(this).val() == "Yes")
                $("#10").prop("disabled", false);
            else
                $("#10").prop("disabled", true);
        });

        $("#10").on("change", function(){
            localStorage.setItem("itmTesta", $(this).val());
        });

    });
    <!--10.3için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployew") == "Yes")
            $("#employed_v42").prop("checked", true);
        else
            $("#employed_v43").prop("checked", true);

        if(localStorage.getItem("itmEmployew") == "Yes")
            $("#10_3").prop("disabled", false);
        else
            $("#10_3").prop("disabled", true);

        $("#10_3").val(localStorage.getItem("itmTestw"));

        $("[name=employed103]").on("change", function(){
            localStorage.setItem("itmEmployew", $(this).val());

            if($(this).val() == "Yes")
                $("#10_3").prop("disabled", false);
            else
                $("#10_3").prop("disabled", true);
        });

        $("#10_3").on("change", function(){
            localStorage.setItem("itmTestw", $(this).val());
        });

    });


    <!--Masa 2kişi için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmploye0") == "Yes")
            $("#employed_2").prop("checked", true);
        else
            $("#employed_1").prop("checked", true);

        if(localStorage.getItem("itmEmploye0") == "Yes")
            $("#2k").prop("disabled", false);
        else
            $("#2k").prop("disabled", true);

        $("#2k").val(localStorage.getItem("itmTest0"));

        $("[name=employeda]").on("change", function(){
            localStorage.setItem("itmEmploye0", $(this).val());

            if($(this).val() == "Yes")
                $("#2k").prop("disabled", false);
            else
                $("#2k").prop("disabled", true);
        });

        $("#2k").on("change", function(){
            localStorage.setItem("itmTest0", $(this).val());
        });

    });


    <!--Masa 4kişi için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmploye4") == "Yes")
            $("#employed_4").prop("checked", true);
        else
            $("#employed_3").prop("checked", true);

        if(localStorage.getItem("itmEmploye4") == "Yes")
            $("#4k").prop("disabled", false);
        else
            $("#4k").prop("disabled", true);

        $("#4k").val(localStorage.getItem("itmTest4"));

        $("[name=employedac]").on("change", function(){
            localStorage.setItem("itmEmploye4", $(this).val());

            if($(this).val() == "Yes")
                $("#4k").prop("disabled", false);
            else
                $("#4k").prop("disabled", true);
        });

        $("#4k").on("change", function(){
            localStorage.setItem("itmTest4", $(this).val());
        });

    });


    <!--Masa 6kişi için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmploye6") == "Yes")
            $("#employed_6").prop("checked", true);
        else
            $("#employed_5").prop("checked", true);

        if(localStorage.getItem("itmEmploye6") == "Yes")
            $("#6k").prop("disabled", false);
        else
            $("#6k").prop("disabled", true);

        $("#6k").val(localStorage.getItem("itmTest6"));

        $("[name=employedacc]").on("change", function(){
            localStorage.setItem("itmEmploye6", $(this).val());

            if($(this).val() == "Yes")
                $("#6k").prop("disabled", false);
            else
                $("#6k").prop("disabled", true);
        });

        $("#6k").on("change", function(){
            localStorage.setItem("itmTest6", $(this).val());
        });

    });



</script>


