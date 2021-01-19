<?php
//including the database connection file
include("connect.php");
//getting id of the data from url
$id = $_GET['id'];
$result_p = mysqli_query($connect, "SELECT * FROM blogs WHERE id=$id");
while($row = mysqli_fetch_array($result_p))
{    //string which contains images names came from DB in below line
$images_p = $row['image'];              
}                  
$upload_dir="blogs/";
$oneimage_p = explode (",", $images_p);
for($i = 0; $i < sizeof($oneimage_p);$i++)
{
unlink($upload_dir.$oneimage_p[$i]);
}
//deleting the row from table
$result=mysqli_query($connect, "DELETE FROM blogs WHERE id=$id");

//redirecting to the display page (view.php in our case)
header("Location:view-blog.php");
?>