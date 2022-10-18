<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SI Surat</title>

    <!-- PACE LOAD BAR PLUGIN - This creates the subtle load bar effect at the top of the page. -->
    <script src="{{ asset('theme/js/jquery.min.js')}}"></script>
    <link href="{{ asset('theme/css/plugins/pace/pace.css')}}" rel="stylesheet">
    <script src="{{ asset('theme/js/plugins/pace/pace.js')}}"></script>

    <!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet"> -->



    <!-- GLOBAL STYLES - Include these on every page. -->
    <link href="{{asset('theme/css/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel="stylesheet" type="text/css">
    <link href="{{asset('theme/icon/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- PAGE LEVEL PLUGIN STYLES -->
    <link href="{{asset('theme/css/plugins/messenger/messenger.css')}}" rel="stylesheet">
    <link href="{{asset('theme/css/plugins/messenger/messenger-theme-flat.css')}}" rel="stylesheet">
    <link href="{{asset('theme/css/plugins/daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet">
    <link href="{{asset('theme/css/plugins/morris/morris.css')}}" rel="stylesheet">
    <link href="{{asset('theme/css/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">
    <link href="{{asset('theme/css/plugins/datatables/datatables.css')}}" rel="stylesheet">

    <!-- THEME STYLES - Include these on every page. -->
    <link href="{{asset('theme/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('theme/css/plugins.css')}}" rel="stylesheet">


    <!-- THEME DEMO STYLES - Use these styles for reference if needed. Otherwise they can be deleted. -->
    <link href="{{asset('theme/css/demo.css')}}" rel="stylesheet">
    <link href="{{asset('theme/css/sweetalert2.css')}}" rel="stylesheet">
    <script src="{{asset('theme/js/plugins/messenger/messenger.min.js')}}"></script>
    <script src="{{asset('theme/js/plugins/messenger/messenger-theme-flat.js')}}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
</head>
<body>

    <div id="wrapper">

        <!-- begin TOP NAVIGATION -->
        <nav class="navbar-top" role="navigation">

            <!-- begin BRAND HEADING -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".sidebar-collapse">
                    <i class="fa fa-bars"></i> Menu
                </button>
                <div class="navbar-brand" style="float:center">
                    <span style="color:#fff">SI Surat</span>
                    <a href="/home">

                    </a>
                </div>
            </div>
            <!-- end BRAND HEADING -->

            <div class="nav-top">

                <!-- begin LEFT SIDE WIDGETS -->
                <ul class="nav navbar-left">
                    <li class="tooltip-sidebar-toggle">
                        <a href="#" id="sidebar-toggle" data-toggle="tooltip" data-placement="right" title="Sidebar Toggle">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    <!-- You may add more widgets here using <li> -->
                </ul>
                <!-- end LEFT SIDE WIDGETS -->

                <!-- begin MESSAGES/ALERTS/TASKS/USER ACTIONS DROPDOWNS -->
                <ul class="nav navbar-right">

                    
                    <li class="dropdown pull-right">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu" rolee="menu" style="margin: 0;min-width: 200px">
                            <li>
                                <?php
                                    $id = session()->get('userSession')['id_user'];
                                ?>
                                <a href="{{URL('profile/'.$id ) }}">
                                    <i class="fa fa-user"></i> Profil
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="{{URL('sign-out')}}">
                                    <i class="fa fa-sign-out"></i> Log Out
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-menu -->
                    </li>
                    <!-- /.dropdown -->
                    <!-- end USER ACTIONS DROPDOWN -->

                </ul>
                <!-- /.nav -->
                <!-- end MESSAGES/ALERTS/TASKS/USER ACTIONS DROPDOWNS -->

            </div>
            <!-- /.nav-top -->
        </nav>
        <!-- /.navbar-top -->
        <!-- end TOP NAVIGATION -->

        <!-- begin SIDE NAVIGATION -->
        <nav class="navbar-side" role="navigation">
            <div class="navbar-collapse sidebar-collapse collapse">
                <ul id="side" class="nav navbar-nav side-nav">
                    <!-- begin SIDE NAV USER PANEL -->
                    <li class="side-user hidden-xs">
                        <img class="img-circle" style="max-height: 150px;max-width: 150px;" src="{{asset('theme/img/profile/userpict.png')}}" alt="">
                        <p class="welcome">
                            <i class="fa fa-key"></i> Logged in as
                        </p>
                        <p class="name tooltip-sidebar-logout">
                            <span class="last-name">{{session()->get('userSession')['name']}} </span> <a style="color: inherit" class="logout_open" href="#logout" data-toggle="tooltip" data-placement="top" title="Logout"><i class="fa fa-sign-out"></i></a>
                        </p>
                        <div class="clearfix"></div>
                    </li>
                    <!-- end SIDE NAV USER PANEL -->
                    <!-- begin SIDE NAV SEARCH -->
                    <li class="nav-search">
                        <form role="form">
                            <input type="search" class="form-control" placeholder="Search...">
                            <button class="btn">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </li>
                    <!-- end SIDE NAV SEARCH -->
                    <!-- begin DASHBOARD LINK -->
                    
                    <li>
                        @if(session()->get('userSession')['authority'] == "admin")
                        <a href="{{URL('admin/home')}}">
                            <i class="fa fa-dashboard"></i> Dashboard
                        </a>
                        @elseif( (session()->get('userSession')['authority'] == "user") or (session()->get('userSession')['authority'] == "sekretaris"))
                        <a href="{{URL('user/home')}}">
                            <i class="fa fa-dashboard"></i> Dashboard
                        </a>
                        @endif
                    </li>
                    
                    @if(session()->get('userSession')['authority'] == "admin")
                    <li class="panel">
                        <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#forms">
                            <i class="fa fa-edit"></i> Management <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="collapse nav" id="forms">
                            <li>
                                <a href="{{url ('admin/get-user') }}">
                                    <i class="fa fa-angle-double-right"></i> Manage User
                                </a>
                            </li>
                            <li>
                                <a href="{{url ('admin/get-bagian') }}">
                                    <i class="fa fa-angle-double-right"></i> Manage Bagian
                                </a>
                            </li>
                            <li>
                                <a href="{{url ('admin/get-jabatan') }}">
                                    <i class="fa fa-angle-double-right"></i> Manage Jabatan
                                </a>
                            </li>
                            <li>
                                <a href="{{url ('admin/get-rootjab') }}">
                                    <i class="fa fa-angle-double-right"></i> Manage Root Jabatan
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endif

                    
                    <li class="panel">
                        <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#surat">
                            <i class="fa fa-envelope"></i> Surat <i class="fa fa-caret-down"></i>
                        </a>
                        
                        <ul class="collapse nav" id="surat">
                            <li>
                                <a href="{{url ('user/get-surat-eksternal') }}">
                                    <i class="fa fa-angle-double-right"></i> Surat Eksternal
                                </a>
                            </li>
                            <li>
                            <a href="{{url ('user/get-surat-internal') }}">
                                    <i class="fa fa-angle-double-right"></i> Surat Internal
                                </a>
                            </li>
                        </ul>
                        
                    </li>

                    <li>
                        <a href="{{URL('user/get-disposisi-surat')}}">
                            <i class="fa fa-pencil"></i> Disposisi    
                        </a>
                    </li>

                    <li>
                        @if( (session()->get('userSession')['authority'] == "admin") or (session()->get('userSession')['authority'] == "sekretaris"))
                        <a href="{{URL('user/cetak-laporan-surat')}}">
                            <i class="fa fa-book"></i> Cetak Laporan
                        </a>
                        @endif
                    </li>
                    
                    
                </ul>
                <!-- /.side-nav -->
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        
        <div id="page-wrapper">

            <div class="page-content">
                @yield('content')
            </div>

        </div>
        <!-- /#page-wrapper -->
        <!-- end MAIN PAGE CONTENT -->

    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="{{asset('theme/login-assets/js/plugins/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('theme/login-assets/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- HISRC Retina Images -->
    <script src="{{asset('theme/login-assets/js/plugins/hisrc/hisrc.js')}}"></script>

    <!-- PAGE LEVEL PLUGIN SCRIPTS -->

    <!-- THEME SCRIPTS -->
    <script src="{{asset('theme/login-assets/js/flex.js')}}"></script>
    <!-- /#wrapper -->
    <script src="{{asset('theme/js/plugins/popupoverlay/logout.js')}}"></script>
    <!-- HISRC Retina Images -->
    <script src="{{asset('theme/js/plugins/hisrc/hisrc.js')}}"></script>

    <!-- PAGE LEVEL PLUGIN SCRIPTS -->

    <!-- THEME SCRIPTS -->
    <script src="{{asset('theme/js/flex.js')}}"></script>
    <script src="{{asset('theme/js/sweetalert2.all.js')}}"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
    </body>
</html>
    <!-- GLOBAL SCRIPTS -->
    
