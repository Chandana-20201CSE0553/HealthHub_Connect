<?php
session_start();
require('php_include/connect.php');
$patient_userid = mysqli_real_escape_string($con,$_POST['patient_id']);
$password = mysqli_real_escape_string($con,$_POST['password']);

$query=mysqli_query($con,"SELECT * FROM `patient` WHERE `patient_id`='$patient_userid'");
$row=mysqli_fetch_array($query);
$patient_id=$row['patient_id'];
$my_password=$row['password'];

	if($patient_id==$patient_userid){
	    if($password==$my_password){

   
		$_SESSION['userid'] = $patient_id;
		$_SESSION['id'] = session_id();
		$_SESSION['login_type'] = "patient";
	
	echo '<script>alert("LOGIN SUCCESSFUL.");window.location.assign("patient/patient.php");</script>';

  

}else{
    echo '<script>alert("YOUR PASSWORD IS WORNG PLEASE TRY AGAIN. THANK YOU.");window.location.assign("patient_login.php");</script>';
}
}else{
	echo '<script>alert("YOUR USERID IS WORNG PLEASE TRY AGAIN. THANK YOU.");window.location.assign("patient_login.php");</script>';
}

?>