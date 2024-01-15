<?php
session_start();
require('php_include/connect.php');
$nurse_userid = mysqli_real_escape_string($con,$_POST['nurse_id']);
$password = mysqli_real_escape_string($con,$_POST['password']);

$query=mysqli_query($con,"SELECT * FROM `nurse` WHERE `nurse_id`='$nurse_userid'");
$row=mysqli_fetch_array($query);
$nurse_id=$row['nurse_id'];
$my_password=$row['password'];

	if($nurse_userid==$nurse_id){
	    if($password==$my_password){
    	$_SESSION['userid'] = $nurse_id;
		$_SESSION['id'] = session_id();
		$_SESSION['login_type'] = "nurse";
	
	echo '<script>alert("LOGIN SUCCESSFUL.");window.location.assign("nurse/nurse.php");</script>';

  

}else{
    echo '<script>alert("YOUR PASSWORD IS WORNG PLEASE TRY AGAIN. THANK YOU.");window.location.assign("doctor_login.php");</script>';
}
}else{
	echo '<script>alert("YOUR USERID IS WORNG PLEASE TRY AGAIN. THANK YOU.");window.location.assign("doctor_login.php");</script>';
}

?>