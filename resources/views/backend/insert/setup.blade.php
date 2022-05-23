@extends('layouts.app')
@section('content')

<head>

    <!-- jQuery -->
    <script src="{{asset('resources/views/backend/inc/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('resources/views/backend/inc/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('resources/views/backend/inc/dist/js/adminlte.min.js')}}"></script>

    <link rel="stylesheet" href="resources/views/backend/myStyle/style.css">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('resources/views/backend/inc/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('resources/views/backend/inc/dist/css/adminlte.min.css')}}">
</head>

<body>

    <section>
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i id="bars_id"
                                class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="index3.html" class="nav-link" id="id_home">Home</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="#" class="nav-link" id="id_contact">Contact</a>
                    </li>
                </ul>

                <!-- SEARCH FORM -->
                <form class="form-inline ml-3">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
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
                                    <img src="{{asset('resources/views/backend/inc/dist/img/user1-128x128.jpg')}}"
                                        alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Brad Diesel
                                            <span class="float-right text-sm text-danger"><i
                                                    class="fas fa-star"></i></span>
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
                                    <img src="{{asset('resources/views/backend/inc/dist/img/user8-128x128.jpg')}}"
                                        alt="User Avatar" class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            John Pierce
                                            <span class="float-right text-sm text-muted"><i
                                                    class="fas fa-star"></i></span>
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
                                    <img src="{{asset('resources/views/backend/inc/dist/img/user3-128x128.jpg')}}"
                                        alt="User Avatar" class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Nora Silvester
                                            <span class="float-right text-sm text-warning"><i
                                                    class="fas fa-star"></i></span>
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
                            <span class="dropdown-header">15 Notifications</span>
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
                        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
                                class="fas fa-th-large"></i></a>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->
        </div>
    </section>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Website Settings</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('home')}}">Back to Admin Panel</a></li>
                            <li class="breadcrumb-item active">Settings</li>


                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!--Section where the form will be placed-->
        <section class="content">
            <form name="myForm" method="post" action="{{url('addSettings')}}" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Logo</label><span id="error-logo"></span>
                    <input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)"
                        style="display: none;"></>
                    <p><label id="upload_id" for="file" style="cursor: pointer;">Upload Image</label></p>
                    <p><img id="output" width="200" /></p>
                </div>

                <div class="form-group">
                    <label>Site Title</label><span id="error-address"></span>
                    <input style="width:855px" type="text" name="meta_title" class="form-control" placeholder="address">
                </div>

                <div class="form-group">
                    <label>Address</label><span id="error-address"></span>
                    <input style="width:855px" type="text" name="address" class="form-control" placeholder="address">
                </div>

                <div class="form-group">
                    <label>Contact Number</label><span id="error-contact"></span>
                    <input style="width:855px" type="text" name="contact" class="form-control" placeholder="contact">
                </div>

                <div class="form-group">
                    <label>Email</label><span id="error-email"></span>
                    <input style="width:855px" type="email" name="email" class="form-control" placeholder="email">
                </div>

                <div class="form-group">
                    <label>Social Profile Links</label><span id="error-social"></span>
                </div>
                <div id="socialGroup">
                    <div class="form-group socialField">
                        <input style="width:855px" type="text" name="social[]" class="form-control"
                            placeholder="Social Url">
                        <a href="#" class="btn btn-warning addField"><i class="fa fa-plus"></i></a>
                    </div>
                </div>
                <div class="alert alert-danger" id="socialError" style="width:855px">
                    <strong>Sorry!</strong> You've alread reached the maximum field number
                    for social profiles links.
                </div>
                <div class="form-group">
                    <button class="btn btn-success">Add Settings</button>
                </div>
            </form>
        </section>

    </div>


    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="http://pisval.com/home" class="brand-link">
            <img src="{{asset('resources/views/backend/inc/dist/img/pispal_logo.png')}}" alt="Pisval Logo"
                class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Admin Panel</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('resources/views/backend/inc/dist/img/user2-160x160.jpg')}}"
                        class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Alexander Pierce</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Starter Pages
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Active Page</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Inactive Page</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{url('galleries')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Gallery Settings</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('setups')}}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Website Settings
                                <span class="right badge badge-danger">setup</span>
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>


    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Logo
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2020 <a href="https://pisval.com">Pisval Tech Studio</a>.</strong> All
        rights reserved.
    </footer>





    <!--form validation-->
    <script>
        function validateForm() {
            var name = document.forms["myForm"]["your-image"].value;
            var title = document.forms["myForm"]["your-meta_title"].value;
            var address = document.forms["myForm"]["your-address"].value;
            var contact = document.forms["myForm"]["your-contact"].value;
            var email = document.forms["myForm"]["your-email"].value;
            var social = document.forms["myForm"]["your-social"].value;

            if (name.length < 1) {
                document.getElementById('error-name').innerHTML = " Please Enter Your Name *"
            }
            if (title.length < 1) {
                document.getElementById('error-email').innerHTML = " Please Enter Your Title *";
            }
            if (address.length < 1) {
                document.getElementById('error-phone').innerHTML = " Please Enter Your Address *";
            }
            if (contact.length < 1) {
                document.getElementById('error-message').innerHTML = " Please Enter Your Contact *";
            }
            if (email.length < 1) {
                document.getElementById('error-message').innerHTML = " Please Enter Your Email *";
            }
            if (name.length < 1 || email.length < 1 || phone.length < 1 || message.length < 1) {
                return false;
            }
        }

    </script>

    <!--javascript code to upload logo file-->
    <script>
        var loadFile = function (event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };

        /*Add field link */
        fieldCounter = 1;
        $('.addField').click(function () {
            fieldCounter++;
            if (fieldCounter <= 5) {
                var newField = $(document.createElement('div')).attr('class', 'form-group');
                newField.after().html(
                    '<label>Social Profile Links</labe><input style="width:855px" type="text" name="social[]" class="form-control" placeholder="Link"></div>'
                    );
                newField.appendTo('#socialGroup');
            } else {
                $('#socialError').show();
            }

        })

    </script>
</body>

@stop
