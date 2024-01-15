<?php
session_start();
require('php_include/connect.php');
$doctor_userid = mysqli_real_escape_string($con,$_POST['doctor_id']);
$password = mysqli_real_escape_string($con,$_POST['password']);

$query=mysqli_query($con,"SELECT * FROM `doctor` WHERE `doctor_id`='$doctor_userid'");
$row=mysqli_fetch_array($query);
$doctor_id=$row['doctor_id'];
$my_password=$row['password'];

	if($doctor_userid==$doctor_id){
	    if($password==$my_password){
		$_SESSION['userid'] = $doctor_id;
		$_SESSION['id'] = session_id();
		$_SESSION['login_type'] = "doctor";
	
	echo '<script>alert("LOGIN SUCCESSFUL.");window.location.assign("doctor/doctor.php");</script>';

  

}else{
    echo '<script>alert("YOUR PASSWORD IS WORNG PLEASE TRY AGAIN. THANK YOU.");window.location.assign("doctor_login.php");</script>';
}
}else{
	echo '<script>alert("YOUR USERID IS WORNG PLEASE TRY AGAIN. THANK YOU.");window.location.assign("doctor_login.php");</script>';
}

?>