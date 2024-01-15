<?php
session_start();
require('php_include/connect.php');
$userid = mysqli_real_escape_string($con,$_POST['userid']);
$password = mysqli_real_escape_string($con,$_POST['password']);

$query=mysqli_query($con,"SELECT * FROM `admin` WHERE `userid`='$userid'");
$row=mysqli_fetch_array($query);
$my_userid=$row['userid'];
$my_password=$row['password'];

	if($userid==$my_userid){
	    if($password==$my_password){

   
		$_SESSION['userid'] = $my_userid;
		$_SESSION['id'] = session_id();
		$_SESSION['login_type'] = "admin";
	
	echo '<script>alert("LOGIN SUCCESSFUL.");window.location.assign("admin.php");</script>';

  

}else{
    echo '<script>alert("YOUR PASSWORD IS WORNG PLEASE TRY AGAIN. THANK YOU.");window.location.assign("admin_login.php");</script>';
}
}else{
	echo '<script>alert("YOUR USERID IS WORNG PLEASE TRY AGAIN. THANK YOU.");window.location.assign("admin_login.php");</script>';
}

?>