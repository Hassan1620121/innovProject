<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Innovative V -  admin template</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/node_modules/dropify/dist/css/dropify.min.css">
    <link href="../assets/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="dist/css/style.min.css" rel="stylesheet">
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPIA7NBmaFyQcl_-d407EzGUaP1ccLGXc&libraries=places"></script> 

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-blue fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite realestate</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php include('header.php');?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Add Theme</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Add Theme</li>
                            </ol>
                            <a href="index.php"  class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</a>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- .row -->
                <?php
                $id = $_GET['id'];
                $query = "SELECT * FROM blogs where id='$id'";
                $res =$connect->query($query);
                if(!$query)
                {
                    echo $connect->error;
                }
                else
                {
                    while($row = $res->fetch_assoc())
                    {
                        $id = $row['id'];
                        $category = $row['category_id'];
                        $title = $row['title'];
                        $date = $row['date'];
                        $time = $row['time'];
                        $image1 = $row['img1'];
                        $image2 = $row['img2'];
                        $sdescription = $row['sdescription'];
                        $ldescription1 = $row['ldescription1'];
                        $ldescription2 = $row['ldescription2'];
                    }
                }
                ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="pro-add-form" action="edit-blog-processing.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?php echo $id;?>">
                                    <div class="form-group">
                                        <label for="pname">Blog Title</label>
                                        <input type="text" name="title" value="<?php echo $title;?>" class="form-control" id="pname" placeholder="Enter Title" required/> </div>
                                    <div class="form-group">
                                    <div class="row">
                                         <div class="col-sm-12">
                                            <label for="city">Category</label>
                                                <select name="category" class="form-control custom-select" id="category" required/>
                                                <?php
                                                $query = "SELECT * FROM blogcategories order by id desc";
                                                $result = $connect->query($query);
                                                if(!$result)
                                                {
                                                    echo $connect->error;
                                                }
                                                else
                                                {
                                                    while($row = $result->fetch_assoc())
                                                    {

                                                        $id = $row['id'];
                                                        $name = $row['Name'];
                                                    
                                                         if($id == $category)
                                                        {
                                                        ?>
                                                        <option value="<?php echo $id;?>" selected><?php echo $name;?></option>
                                                        <?php
                                                        }
                                                        else
                                                        {
                                                           ?>
                                                        <option value="<?php echo $id;?>"><?php echo $name;?></option>
                                                        <?php 
                                                        }
                                                    }
                                                }
                                                ?>
                                                </select>
                                        </div>
                                       
                                </div>
                            </div>
                          
                            
                                   
                                    <div class="form-group">
                                        <label for="pdesc">Short Description</label>
                                        <textarea class="form-control" name="sdescription" rows="5" id="pdesc" placeholder="Enter Description"/><?php echo $sdescription;?></textarea>
                                    </div>
                                <div class="form-group">
                                    <img style=" width: 100px; height: 100px;" src="blogs/<?php echo $image1;?>" alt="">
                                    <input type="hidden" name="img1" value="<?php echo $image1;?>">
                                </div>
                             
                                    
                                    <div class="form-group">
                                        <label for="input-file-now">Upload Images</label>
                                        <input type="file" name="image1" id="input-file-now" class="dropify" />
                                    </div>
                                    <div class="form-group">
                                        <label for="pdesc">Long Description</label>
                                        <textarea class="form-control" name="ldescription" rows="5" id="pdesc" placeholder="Enter Description"/><?php echo $ldescription1;?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <?php if(!empty($image2))
                                        {
                                            ?>
                                    <img style=" width: 100px; height: 100px;" src="blogs/<?php echo $image2;?>" alt="">
                                    <?php
                                }
                                ?>
                                    <input type="hidden" name="img2" value="<?php echo $image2;?>">
                                </div>
                                    <div class="form-group">
                                        <label for="input-file-now">Upload Images</label>
                                        <input type="file" name="image2" id="input-file-now" class="dropify"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="pdesc">Long Description</label>
                                        <textarea class="form-control" name="ldescription2" rows="5" id="pdesc" placeholder="Enter Description"/><?php echo $ldescription2;?></textarea>
                                    </div>
                                   
                                   
                                    <button type="submit" name="Edit-Blog"  class="btn btn-success waves-effect waves-light  m-r-10">Edit Blog</button>
                                    
                                    <button type="submit" class="btn btn-dark waves-effect waves-light">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .row -->
           
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2019 Eliteadmin by themedesigner.in
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/node_modules/popper/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- This Page JS -->
    <script src="../assets/node_modules/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="dist/js/pages/mask.init.js"></script>
    <script src="../assets/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
    <!-- jQuery file upload -->
    <script src="../assets/node_modules/dropify/dist/js/dropify.min.js"></script>
    <script>
    $("input[name='tch1']").TouchSpin();
    $("input[name='tch2']").TouchSpin();
    $("input[name='tch3']").TouchSpin();
    $("input[name='tch4']").TouchSpin();
    $("input[name='tch5']").TouchSpin();
    $("input[name='kitchen']").TouchSpin();
    $("input[name='loundge']").TouchSpin();
    $('.dropify').dropify();
    </script>
    <script type="text/javascript">
    jQuery.browser = {};
    (function() {
        jQuery.browser.msie = false;
        jQuery.browser.version = 0;
        if (navigator.userAgent.match(/MSIE ([0-9]+)\./)) {
            jQuery.browser.msie = true;
            jQuery.browser.version = RegExp.$1;
        }
    })();
   

    </script>
</body>

</html>