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
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/node_modules/dropify/dist/css/dropify.min.css">
    <link href="../assets/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style type="text/css">
  #overlay {
  position: fixed;
  display: none;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,1);
  z-index: 2;
  cursor: pointer;
}
.text
{
   display: block; /* just so IE will correctly render it */
  position: absolute;
  z-index: 1000;
  top: 40%;
  left: 0;
  width: 100%;
  color: #ffff;
  text-align: center;

}
</style>
</head>

<body class="skin-blue fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div id="overlay"><p align="center" class="text"><i style="font-size:30px;" class="fa fa-check"></i><br>Blog Updated Successfully!<br> You will be redirected in 5 seconds</p></div>

<?php
include_once('connect.php');
if(isset($_POST['Edit-Blog']))
{
$title = mysqli_escape_string($connect,$_POST['title']);
$sdescription = mysqli_escape_string($connect,$_POST['sdescription']);
$ldescription1=mysqli_escape_string($connect,$_POST['ldescription']);
$ldescription2 = mysqli_escape_string($connect,$_POST['ldescription2']);
$category = mysqli_escape_string($connect,$_POST['category']);
$image1 = mysqli_escape_string($connect,$_FILES['image1']['name']);
$tmp_name1 = $_FILES["image1"]["tmp_name"];
$name1 = time().$image1;
move_uploaded_file($tmp_name1, "blogs/$name1");
$image2 = mysqli_escape_string($connect,$_FILES['image2']['name']);
$tmp_name2 = $_FILES["image2"]["tmp_name"];
$name2 = time().$image2;
move_uploaded_file($tmp_name2, "blogs/$name2");
$id = $_POST['id'];
$bimage1  =$_POST['img1'];
$bimage2 =$_POST['img2'];
$img_to_store1='';
$img_to_store2='';
if(empty($image1))
{
  $img_to_store1 = $bimage1;
}
else
{
  $img_to_store1 = $name1;
}
if(empty($image2))
{
  $img_to_store2 = $bimage2;
}
else
{
  $img_to_store2 = $name2;
}
}
$date = date("Y-m-d");
$time= rtrim(date("h:i"), 0);
$query = "UPDATE `blogs` SET title ='$title' , sdescription ='$sdescription' ,category_id ='$category' ,ldescription1 ='$ldescription1', ldescription2 ='$ldescription2',img1 ='$img_to_store1' , img2='$img_to_store2', `date`='$date' , `time` ='$time' where id='$id'";
$result = $connect->query($query);
if(!$result)
{
  echo $connect->error;
  ?>
  <script type="text/javascript">
    document.getElementById("overlay").style.display="none";
  </script>
  <?php
}
else
{
  
  ?>
<script>
 document.getElementById("overlay").style.display = "block";
 </script>
 <?php
 header("Refresh:5; url=view-blog.php");
}

?>
</body>
</html>