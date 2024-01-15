<?php
 include("php_include/connect.php");

$id = $_GET['id'];
 $query=mysqli_query($con,"DELETE FROM `doctor` WHERE `id`='$id'");
if($query){
	 echo"<script>alert('Deletion is successful');window.location.assign('doc_records.php');</script>";
}else{
	 echo"<script>alert('Deletion Failed');window.location.assign('doc_records.php');</script>";
}

?>