<?php
include_once('connect.php');
session_start();
if(!isset($_SESSION['email']))
{
    header('location:pages-login.php');
}
?>
<header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img style="width: 100%; height: 50px;" src="../assets/images/logo.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img style="width: 100%; height: 50px;" src="../assets/images/logo.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                      
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                       
                        <!-- ============================================================== -->
                        <!-- End mega menu -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- User Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class=""> <span class="hidden-md-down">Jahan Shaikh &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <!-- text-->
                               
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="logout.php" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                                <!-- text-->
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End User Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"><span class="hide-menu">Jahan Shaikh</span></a>
                            <ul aria-expanded="false" class="collapse">
                               
                                <li><a href="logout.php" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
                     
                        <li class="nav-small-cap">--- Themes</li>
                       <!-- <li> <a class="waves-effect waves-dark" href="realestate-property-list.html"><i class="ti-home"></i><span class="hide-menu">Property List</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="realestate-property-3-column.html"><i class="ti-menu-alt"></i><span class="hide-menu">Property 3 Column</span></a>
                        </li>-->
                        <li> <a class="waves-effect waves-dark" href="themescategories.php"><i class="ti-layout"></i><span class="hide-menu">Theme Categories</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="themelanguages.php"><i class="ti-layout"></i><span class="hide-menu">Theme Language</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="view.php"><i class="ti-layout"></i><span class="hide-menu">View Themes</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="index.php"><i class="ti-support"></i><span class="hide-menu">Add Themes</span></a>
                        </li>
                        <li class="nav-small-cap">--- Blogs</li>
                        <li> <a class="waves-effect waves-dark" href="blogcategories.php"><i class="ti-menu-alt"></i><span class="hide-menu">Blog Categories</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="view-blog.php"><i class="ti-home"></i><span class="hide-menu">View Blogs</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="addblogs.php"><i class="ti-menu-alt"></i><span class="hide-menu">Add blogs</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>