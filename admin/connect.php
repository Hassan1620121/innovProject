<?php
$connect = mysqli_connect('localhost','innovat1_innovativev','anu34nsadlma','innovat1_innovativev');//connection to db
if(!$connect)//connection check
{
	echo $connect->error;
}
?>