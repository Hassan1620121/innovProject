<?php
include_once('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Innovative V</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/linearicon/style.css" rel="stylesheet">
        <link href="vendors/themify/themify-icons.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/animate-css/animate.css" rel="stylesheet">
        <link href="vendors/scroll/jquery.mCustomScrollbar.css" rel="stylesheet">
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/magnify-popup/magnific-popup.css" rel="stylesheet">
        <link href="vendors/bootstrap-selector/bootstrap-select.css" rel="stylesheet">
        <link rel="stylesheet" href="vendors/flexslider/css/flexslider.css">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Preloader-->
        <div class="loader-container">
			<div class="loader">
				<div id="mask">
                    <svg class="preloader-icon" width="34" height="38" viewbox="0 0 34 38">
                      <path class="preloader-path" stroke-dashoffset="0" d="M29.437 8.114L19.35 2.132c-1.473-.86-3.207-.86-4.68 0L4.153 8.114C2.68 8.974 1.5 10.56 1.5 12.28v11.964c0 1.718 1.22 3.306 2.69 4.165l10.404 5.98c1.47.86 3.362.86 4.834 0l9.97-5.98c1.472-.86 2.102-2.45 2.102-4.168V12.28c0-1.72-.59-3.306-2.063-4.166z"></path>
                    </svg>
              </div>
			</div>
		</div>
        <!-- End Preloader-->
        <!--================Search Header Area =================-->
        <div class="container-fluid searchForm">
            <form action="#" class="row">
                <div class="input-group">
                    <span class="input-group-addon"><i class="ti-search"></i></span>
                    <input type="search" name="search" class="form-control" placeholder="Type & Hit Enter">
                    <span class="input-group-addon form_hide"><i class="ti-close"></i></span>
                </div>
            </form>
        </div>
        <!--================End Search Header Area =================-->
        <!--================Offcanvas Menu Area =================-->
         <!--================Offcanvas Menu Area =================-->
        <div class="offcanvas_menu right_direction">
            <div class="closer_icon">
                <i class="ti-close"></i>
            </div>
            <div class="menu_title">
                <h2>Welcome to Innovative V</h2>
                <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor maecenas.</p>
            </div>
            <div class="off_menu">
                <ul class="nav">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about-us.html">about</a></li>

                    <li class="submenu">
                        <a href="#">Solutions</a>
                        <ul>
                            <li><a href="#">Microsoft</a></li>
                                <li style="margin-left: 20px;"><a href="#">Microsoft D365</a></li>
                                <li style="margin-left: 20px;"><a href="#">Microsoft Power Automate</a></li>
                                <li style="margin-left: 20px;"><a href="#">Microsoft 365</a></li>
                                <li style="margin-left: 20px;"><a href="#">Microsoft Dynamics AX</a></li>
                                           
                            <li><a href="#">Others</a></li> 
                                <li style="margin-left: 20px;"><a href="#">Docu Sign</a></li>
                            
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#">Managed IT Services</a>
                        <ul>
                            <li><a href="#">Managed Services</a></li>
                                <li style="margin-left: 20px;"><a href="managewebsite.html">Managed Websites</a></li>
                                <li style="margin-left: 20px;"><a href="#">IT Support</a></li>
                                <li style="margin-left: 20px;"><a href="#">IT Consultancy</a></li>
                                <li style="margin-left: 20px;"><a href="#">Microsoft 365 Support</a></li>
                                           
                            <li><a href="#">Professional Services</a></li> 
                                <li style="margin-left: 20px;"><a href="#">Microsoft D365 FO Suport</a></li>
                                <li style="margin-left: 20px;"><a href="#">Microsoft 365 CE Suport</a></li>
                                <li style="margin-left: 20px;"><a href="#">Microsoft Dynamics AX Suport</a></li>
                           
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#">Innovative Services</a>
                        <ul>
                                <li><a href="contentwriting.html">Content Writing</a></li>
                                <li><a href="webdevelopment.html">Web Development</a></li>
                                <li><a href="graphicdesign.html">Graphic Design</a></li>
                                <li><a href="digitalmarketing.html">Digital Marketing</a></li>
                                <li><a href="seo.html">SEO</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#">Resources</a>
                        <ul>
                            <li><a href="blog-left-sidebar.html">Blog</a></li>
                            <li><a href="blog-listing.html">Articles</a></li>
                        </ul>
                    </li>
                    <li><a href="creative-contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="curency">
                <h4>Currencies</h4>
                <a href="#">usd</a>
                <a href="#">eur</a>
                <a href="#">gbp</a>
            </div>
            <div class="curency language">
                <h4>Language</h4>
                <a href="#">Eng</a>
                <a class="active" href="#">vn</a>
                <a href="#">fra</a>
            </div>
            <ul class="of_social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
           <div class="copy_right_menu">
                <p>© <a href="#">InnovativeV</a> 2017. All Rights Reseverd Design by <a href="https://www.innovativeV.co.uk">www.Innoativev.co.uk</p>
            </div>
        </div>
        <!--================End Offcanvas Menu Area =================-->
        <!--================Header Area =================-->
        <div class="header_details_area">
            <div class="container">
                <div class="pull-left">
                    <h4>Any question? Let us help you. Call us: +(1200) 989 169 092</h4>
                </div>
                <div class="pull-right">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="ti-google"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
         <header class="main_header_area full_sec_menu black_menu touch_menu ab_menu_gap h_pad">
            <div class="left_side">
                <a href="#" class="logo">
                   <img style="width: 200px; height: 50px; margin-top:-20px;" src="img/innovative Logo.png" alt="h_logo">
                </a>
            </div>
            <div class="menu">
                <ul class="nav navbar-nav">
                    <li><a href="index.html">Home</a></li>
                        <li><a href="about-us.html">About</a></li>
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Solutions</a>
                            <ul  class="dropdown-menu sub-menu">
                                <li><a href="#" style="font-weight: bold;">Microsoft</a>
                                <ul style="margin-left: 20px;">
                                    <li><a href="#">Microsoft D365</a></li>
                                    <li><a href="#">Microsoft Power Automate</a></li>
                                    <li><a href="#">Microosft 365</a></li>
                                    <li><a href="#">Microsoft Dynamics AX</a></li>
                                </ul>
                                </li>
                                <li><a style="font-weight: bold;" href="#">Other</a>
                                    <ul style="margin-left: 20px;">
                                        <li><a href="#">Docu Sign</a></li>
                                    </ul>                                   
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Managed Services</a>
                            <ul class="dropdown-menu sub-menu">
                                <li><a href="#">Managed IT Services</a>
                                <ul style="margin-left: 20px;">
                                    <li><a href="managewebsite.html">Managed Websites</a></li>
                                    <li><a href="#">IT Support</a></li>
                                    <li><a href="#">IT Consultancy</a></li>
                                    <li><a href="#">Microsoft 365 Support</a></li>
                                </ul>
                                </li>
                                <li><a href="#">Professional Services</a>
                                    <ul style="margin-left: 20px;">
                                        <li><a href="#">Microsoft D365 FO Suport</a></li>
                                        <li><a href="#">Microsoft 365 CE Suport</a></li>
                                        <li><a href="#">Microsoft Dynamics AX Suport</a></li>
                                    </ul>                                      
                                                    
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Innovative Services</a>
                            <ul class="dropdown-menu sub-menu">
                               <li><a href="contentwriting.html">Content Writing</a></li>
                                <li><a href="webdevelopment.html">Web Development</a></li>
                                <li><a href="graphicdesign.html">Graphic Design</a></li>
                                <li><a href="digitalmarketing.html">Digital Marketing</a></li>
                                <li><a href="seo.html">SEO</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu sub-menu">
                                <li class="active"><a href="blog-left-sidebar.html">Resources</a></li>

                                <li><a href="blog-listing.html">Articles</a></li>
                            </ul>
                        </li>
                        <li><a href="creative-contact.html">contact</a></li>
                        
                </ul>
            </div>
            <div class="right_side right_m">
                <ul>
                    <li class="nav_searchFrom"><a href="#"><i class="ti-search"></i></a></li>
                    <li><a href="#"><i class="lnr lnr-menu bar_menu"></i></a></li>
                </ul>
            </div>
        </header>
        <!--================End Header Area =================-->
        
        <!--================Blog Main Area =================-->
        <section class="blog_main_area">
            <div class="container-fluid">
                <div class="blog_main_inner blog_sidebar_inner">
                    <div class="breadcumd_title">
                        <h2>Themes</h2>
                        <p>Please see below collection of our beautifully designs themes. We can customise any of this theme to suit your requirements and budget. If you don't see what you need please contact us.</p>
                    </div>
                    <ul class="port_fillter blog_fillter">
                        <li class="active" data-filter="*">All</li>
                        <?php
                        $query = "SELECT * FROM languages order by id desc";
                        $res_theme = $connect->query($query);
                        if(!$res_theme)
                        {
                            echo $connect->error;
                        }
                        else
                        {
            
                        while($row = $res_theme->fetch_assoc())
                        {
                            $language = $row['name'];
                            
                    

                        ?>
                        <li data-filter=".<?php echo $language;?>"><?php echo $language;?></li>
                        <?php
                  
                        }
                        }
                        ?>
                        
                    </ul>
                    <div class="row">
                        <div class="col-md-10 pull-right">
                            <div class="row blog_main_item_inner">
                                <?php
                                if(isset($_GET['id']) &&(!isset($_POST['search_btn'])))
                                {
                                    $id = $_GET['id'];
                                    if($id=='all')
                                    {
                                        $query = "SELECT * FROM themes order by id desc";
                                    }
                                    else
                                    {
                                    $query = "SELECT * FROM themes where category_id='$id' order by id desc";
                                    }
                                     
                                }
                                else if (isset($_POST['search_btn']))
                                {
                                    $search_query =$_POST['search'];
                                    $query = "SELECT * FROM themes where title LIKE '%$search_query%' or description LIKE '%$search_query%'";
                                }
                                else
                                {
                                $query = "SELECT * FROM themes order by id desc";
                                }
                                $res = $connect->query($query);
                                if(!$res)
                                {
                                    echo $connect->error;
                                }
                                else if(mysqli_num_rows($res)<1)
                                {
                                    echo 'No Data Exists';
                                }
                                else
                                    {
                                    while($row = $res->fetch_assoc())
                                    {
                                        $id = $row['id'];
                                        $title = $row['title'];
                                        $description = $row['description'];
                                        $image = $row['image'];
                                        $link = $row['link'];
                                        $category_id = $row['category_id'];
                                        $language = $row['language'];
                                  
                                ?>
                                <div class="col-md-6 col-sm-6 main_blog_item <?php echo $language;?> seo it">
                                    <div class="n_blog_item">
                                        <div>
                                             <a  target="_blank"  href="<?php echo $link;?>">
                                            <img style="width: 100%; height: 350px;" src="admin/themes/<?php echo $image;?>" alt="">
                                           
                                               </a>
                                            
                                        </div>
                                        <div class="n_blog_text">
                                            
                                            <a target="_blank" href="<?php echo $link;?>"><h3><?php echo $title;?></h3></a>
                                            <p><?php echo $description;?></p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                    
                        ?>
                            </div>
                        </div>
                        <div class="col-md-2 col-md-offset-left-2 pull-left">
                            <div class="blog_widget_area">
                                <aside class="r_widget search_widget">
                                    <div class="r_widget_title">
                                        <h3>Search</h3>
                                    </div>
                                    <div class="input-group">
                                        <form action="" method="POST">
                                        <input type="text" class="form-control" name="search" placeholder="Type & Enter...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" name="search_btn" type="submit"><i class="fa fa-search"></i></button>
                                        </span>
                                    </form>
                                    </div>
                                </aside>
                                <aside class="r_widget category_widget">
                                    <div class="r_widget_title">
                                        <h3>Categories</h3>
                                    </div>
                                    <ul>
                                    <?php
                                    $query = "SELECT * FROM categories order by id desc";
                                    $result = $connect->query($query);
                                    if(!$result)
                                    {
                                        echo $connect->error;
                                    }
                                    else
                                    {
                                        ?>
                                        <li><a href="themes.php?id=all">All</a></li>
                                        <?php
                                        while($row = $result->fetch_assoc())
                                        {
                                            $name = $row['category_name'];
                                            $id = $row['id'];
                                            $nid='';
                                            if(isset($_GET['id']))
                                            {
                                                $nid = $_GET['id'];
                                            }
                                            if($id==$nid)
                                            {
                                                ?>
                                            <li ><a class="active" style="color: red;" href="themes.php?id=<?php echo $id ?>"><?php echo $name;?></a></li>

                                                <?php
                                            }
                                            else
                                            {
                                            ?>
                                            <li><a href="themes.php?id=<?php echo $id ?>"><?php echo $name;?></a></li>
                                            <?php
                                        }
                                        }
                                    }
                                    ?>                                       
                                    </ul>
                                </aside>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Blog Main Area =================-->
        
         <!--================Footer Area =================-->
            <footer class="ro_footer_area">
            <div class="footer_top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="footer_menu">
                                <li><a href="blog-left-sidebar.html">Blog</a></li>
                                <li><a href="about-us.html">About</a></li>
                                <li><a href="creative-contact.html">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 f_content">
                            <p>Any question? Let us help you. Call us: 020 8058 1568</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-5 copy_right_text">
                            © <script>document.write(new Date().getFullYear());</script> <a href="#">Innovative</a>. All Rights Reserved . Design by <a href="https://www.innovativev.co.uk">www.Innovativev.co.uk</a> 
                        </div>
                        <div class="col-sm-2 footer_logo">
                            <a href="#"><img src="img/mp2.png" style="width:200px; height:200px; margin-top:-70px;" alt="footer_logo"></a>
                        </div>
                        <div class="col-sm-5">
                            <ul class="footer_social">
                                <li><a href="https://www.facebook.com/InovativeV/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/InnovativeVIT"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/innovativev"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.2.4.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/mailchimp.js"></script>
        <script src="js/mail-chimp-active.js"></script>
        <!--parallax js-->
        <script type="text/javascript" src="js/parallax.js"></script>
        <script src="vendors/scroll/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="vendors/scroll/jquery.nicescroll.min.js"></script>
        <script src="vendors/counterup/waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/bootstrap-selector/bootstrap-select.js"></script>
        <script type="text/javascript" src="vendors/flexslider/js/jquery.flexslider.js"></script>
        <!-- instafeed-->
        <script type="text/javascript" src="vendors/instafeed/instafeed.min.js"></script>
        <script type="text/javascript" src="vendors/instafeed/script.js"></script>
        <!--Tweets-->
        
        
        
        <script src="js/theme.js"></script>
    </body>
</html>