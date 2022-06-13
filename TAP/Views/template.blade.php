
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Bangladesh International School &amp; College</title>

        <meta name="description" content="top menu &amp; navigation" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

          <!-- bootstrap & fontawesome -->
          <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('font-awesome/4.6.3/css/font-awesome.min.css')}}"/>

        <!-- page specific plugin styles -->

        <!-- text fonts -->
        <link rel="stylesheet" href="{{asset('css/fonts.googleapis.com.css')}}"/>
        <!-- add all project common css -->
        <link rel="stylesheet" href="{{asset('css/common.css')}}"/>
        <!-- ace styles -->
        <link rel="stylesheet" href="{{asset('css/ace.min.css')}}" class="ace-main-stylesheet" id="main-ace-style"/>
        <!--[if !IE]> -->
       <script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>

        <!-- <![endif]-->

        <!--[if lte IE 9]>
            <link rel="stylesheet" href="../assets/css/ace-part2.css" class="ace-main-stylesheet" />
        <![endif]-->

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="../assets/css/ace-ie.css" />
        <![endif]-->

        <!-- inline styles related to this page -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css"/>
 
 <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>
 
        <!-- ace settings handler -->
        <script src="{{asset('js/ace-extra.min.js')}}"></script>

        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="../assets/js/html5shiv.js"></script>
        <script src="../assets/js/respond.js"></script>
        <![endif]-->
        <script src="{{asset('js/moment.min.js')}}"></script>
    </head>

    <body class="no-skin">
        <!-- #section:basics/navbar.layout -->

         <div id="navbar" class="navbar navbar-default navbar-collapse h-navbar">                    
    <div class="navbar-container" id="navbar-container">
        <div class="navbar-header pull-left">
            <!-- #section:basics/navbar.layout.brand -->
            <a href="#" class="navbar-brand">
                <small>
                    <img width="25" height="25" src="http://127.0.0.1:8000/images/bisc-logo.png" alt="Bangladesh International School &amp; College">
                    Bangladesh International School &amp; College
                </small>
            </a>

            <!-- /section:basics/navbar.layout.brand -->

            <!-- #section:basics/navbar.toggle -->
            <button class="pull-right navbar-toggle navbar-toggle-img collapsed" type="button" data-toggle="collapse" data-target=".navbar-buttons,.navbar-menu">
                <span class="sr-only">Toggle user menu</span>
                                <img src="http://127.0.0.1:8000/images/avatars/avatar2.png" alt="Jason's Photo" />
                            </button>

            <button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#sidebar">
                <span class="sr-only">Toggle sidebar</span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>
            </button>

            <!-- /section:basics/navbar.toggle -->
        </div>

        <!-- #section:basics/navbar.dropdown -->
        <div class="navbar-buttons navbar-header pull-right  collapse navbar-collapse" role="navigation">
            <ul class="nav ace-nav">                      

                <!-- #section:basics/navbar.user_menu -->
                <li class="light-blue user-min">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        Welcome, New User
                                               <!--  <span class="user-info">
                            <small>Hi, Md. Ehsas  Elahi</small>
                            
                        </span> -->

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class=" dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-user"></i>
                                Profile
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-refresh"></i>
                                Password reset
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="ace-icon fa fa-power-off"></i>
                                Logout
                            </a>
                            {{ Form::open(array('url' => 'logout', 'id' => 'logout-form', 'style' => 'display: none;')) }}
                            {{ Form::close() }}
                        </li>
                    </ul>
                </li>

                <!-- /section:basics/navbar.user_menu -->
            </ul>
        </div>

        <!-- /section:basics/navbar.dropdown -->
        

    </div><!-- /.navbar-container -->
</div>


        <!-- /section:basics/navbar.layout -->
        <div class="main-container" id="main-container">
            <!-- /section:basics/sidebar.horizontal -->
            <div id="sidebar" class="sidebar h-sidebar navbar-collapse collapse" data-sidebar="true" data-sidebar-scroll="true" data-sidebar-hover="true">



    

    <ul class="nav nav-list" style="top: 0px;">
        <li class="active hover">
            <a href="{{route('panel')}}">
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Dashboard </span>
            </a>

            <b class="arrow"></b>
        </li>

       
        <li class="hover parent">
            <a href="{{route('transaction')}}">
                <i class="menu-icon fa fa-credit-card-alt"></i>
                <span class="menu-text">
                    Financial
                </span>
                
            </a>
           
        </li>
       
    </ul><!-- /.nav-list -->

    <!-- #section:basics/sidebar.layout.minimize -->

    <!-- /section:basics/sidebar.layout.minimize -->
    

</div>

<!-- main content start -->


@yield('content')





<!-- main content end -->

<div class="footer">
                <div class="footer-inner">
                    <!-- #section:basics/footer -->
                    <div class="footer-content">
                        <span class="bigger-120">
                            <span class="blue bolder"><a target="_blank" href="http://shurjomukhi.com.bd">ShurjoMukhi Ltd</a></span> &copy; 2022
                        </span>

                        &nbsp; &nbsp;
                        <!-- <span class="action-buttons">
                            <a href="#">
                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
                            </a>
                        </span> -->
                    </div>

                    <!-- /section:basics/footer -->
                </div>
            </div>

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

        <!-- basic scripts -->

        
        <!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='../assets/js/jquery1x.js'>"+"<"+"/script>");
</script>
<![endif]-->
        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='../assets/js/jquery.mobile.custom.js'>"+"<"+"/script>");
        </script>
        <script src="http://127.0.0.1:8000/js/bootstrap.min.js"></script>

        <!-- page specific plugin scripts -->

        <script src="http://127.0.0.1:8000/js/ace.min.js"></script>

    </body>
</html>
