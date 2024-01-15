

<html lang="en">
   <?php include("php_include/head.php")?>
   <body>
      <div id="loader-wrapper">
         <div id="loader">
            <div class="loader-inner"></div>
         </div>
      </div>
      <div id="page" class="page">
         <header id="header" class="header" >
                     <div class="wsmobileheader clearfix">
                        <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
                        <span class="smllogo"><img src="images/text-1702913677293.png" width="180" height="40" alt="mobile-logo"/></span>
                        <a href="tel:123456789" class="callusbtn"><i class="fas fa-phone"></i></a>
                     </div>
                     
                     
                     <div class="wsmainfull menu clearfix" >
                        <div class="wsmainwp clearfix" >
                          <div class="desktoplogo"><a href="#hero-2"><img src="images/text-1702913677293.png"  width="300" height="40" alt="header-logo"></a></div>
                           <nav class="wsmenu clearfix">
                              <ul class="wsmenu-list">
                                 <li aria-haspopup="true">
                                    <a href="doctor.php"><font size="4">Back</font></a>
                                 </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </header>
                  <br>
         <center>  <h3>PATIENT REGISTRATION FORM </h3></center>
              <br><br>
              <center>
         <form action="patient_insert.php" method="post" style="width:50%; padding: 20px;background-color:rgba(255, 106, 89, 0.1); border: 1px solid #ccc; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <div class="page-content" style="padding:50px; ">
 

                               <center> 
                                <div class="mb-3 col-md-6">
                                        
                                         <input type="number" name="hospital_id" class="form-control" placeholder="Hospital ID" style="background-color:#white;width:300px; " required>
                                    </div>
                                 <div class="mb-3 col-md-6">
                                        
                                        <input type="number" name="patient_id" class="form-control" placeholder="Patient Id " style="background-color:#white;width:300px;"required>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        
                                         <input type="text" name="patient_name" class="form-control"oninput="this.value = this.value.replace(/[^A-Za-z]/g, '')" placeholder="Patient Name" style="background-color:#white;width:300px; " required>
                                    </div>
                                   
                                     <div class="mb-3 col-md-6">
                                        
                                         <input type="text" name="gender" class="form-control"oninput="this.value = this.value.replace(/[^A-Za-z]/g, '')" placeholder="Gender" style="background-color:#white;width:300px; " required>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        
                                         <input type="date" name="dob" class="form-control" placeholder="Date Of Admission" style="background-color:#white;width:300px; " required>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label>Address</label>
                                    <textarea  class="form-control" name="address" rows="4" cols="35" style="background-color:#white;width:300px; " required></textarea></div>
                              
                                    <div class="mb-3 col-md-6">
                                        
                                        <input type="email" name="email" class="form-control" placeholder="Email" style="background-color:#white;width:300px;"required>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        
                                        <input type="text" name="contact" class="form-control"oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0, 10)" pattern="\d{10}" placeholder="Contact NO" style="background-color:#white;width:300px;"required>
                                    </div>
                                     <div class="mb-3 col-md-6">
                                        
                                        <input type="text" name="disease" class="form-control" oninput="this.value = this.value.replace(/[^A-Za-z]/g, '')" placeholder="Disease" style="background-color:#white;width:300px;"required>
                                    </div>
                                     <div class="mb-3 col-md-6">
                                        
                                        <input type="text" name="treatement" class="form-control"oninput="this.value = this.value.replace(/[^A-Za-z]/g, '')"  placeholder="Treatment" style="background-color:#white;width:300px;"required>
                                    </div>
                                     <div class="mb-3 col-md-6">
                                        
                                        <input type="text" name="medicine" class="form-control" oninput="this.value = this.value.replace(/[^A-Za-z]/g, '')" placeholder="Medicine" style="background-color:#white;width:300px;"required>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        
                                        <input type="text" name="password" class="form-control" placeholder="password" style="background-color:#white;width:300px;"required>
                                    </div><br>
                          <input type="submit" name="submit" value="submit"class="btn btn-outline-success" style="padding:15px;border-color:black;">

                             </center>            
                                  <?php
                                    include("php_include/connect.php");
                                    if(isset($_POST['submit'])){
                                        $hospital_id=$_POST['hospital_id'];
                                        $patient_id=$_POST['patient_id'];
                                        $patient_name=$_POST['patient_name'];
                                        $gender=$_POST['gender'];
                                        $dob=$_POST['dob'];
                                        $address=$_POST['address'];
                                        $email=$_POST['email'];
                                        $contact=$_POST['contact'];
                                        $disease=$_POST['disease'];
                                        $treatement=$_POST['treatement'];
                                        $medicine=$_POST['medicine'];
                                        $password=$_POST['password'];
										$query=mysqli_query($con,"SELECT * FROM `patient` WHERE `patient_id`='$patient_id'");
										if(mysqli_num_rows($query)==0){
                                        $query=mysqli_query($con,"SELECT * FROM `hospital` WHERE `hospital_id`='$hospital_id'");
                                        $row=mysqli_fetch_array($query);
                                        $hospit_id=$row['hospital_id'];
                                           if($hospit_id==$hospital_id){
             
                                        $query=mysqli_query($con,"INSERT INTO `patient`(`patient_id`, `patient_name`, `gender`, `dob`, `address`, `email`, `contact`, `disease`, `treatement`, `medicine`, `password`, `hospital_id`) 
                                                                            VALUES ('$patient_id','$patient_name','$gender','$dob','$address','$email','$contact','$disease','$treatement','$medicine','$password','$hospital_id')");
                                                 
                                                    if($query){
                                                        echo"<script>alert('register is successful');window.location.assign('patient_insert.php');</script>";
                                                    }else{
                                                        echo"<script>alert('register failed');window.location.assign('patient_insert.php');</script>";
                                                    }
                                                
                                           }else
                                           {
                                              echo"<script>alert('please enter valid hospital id');window.location.assign('patient_insert.php');</script>";  
                                           }
									}else{
									echo"<script>alert('patient id already exists');window.location.assign('patient_insert.php');</script>";	
									}  
                                        
                                    }
?>





</div>
</form>
</center>
        

      </div>
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>	
      <script src="js/modernizr.custom.js"></script>
      <script src="js/jquery.easing.js"></script>
      <script src="js/jquery.appear.js"></script>
      <script src="js/jquery.stellar.min.js"></script>	
      <script src="js/menu.js"></script>
      <script src="js/sticky.js"></script>
      <script src="js/jquery.scrollto.js"></script>
      <script src="js/materialize.js"></script>	
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.magnific-popup.min.js"></script>	
      <script src="js/imagesloaded.pkgd.min.js"></script>
      <script src="js/isotope.pkgd.min.js"></script>
      <script src="js/hero-form.js"></script>
      <script src="js/contact-form.js"></script>
      <script src="js/comment-form.js"></script>
      <script src="js/appointment-form.js"></script>
      <script src="js/jquery.datetimepicker.full.js"></script>		
      <script src="js/jquery.validate.min.js"></script>	
      <script src="js/jquery.ajaxchimp.min.js"></script>
      <script src="js/wow.js"></script>	
      <script src="js/custom.js"></script>
      <script> 
         new WOW().init();
      </script>
      <script src="js/changer.js"></script>
      <script defer src="js/styleswitch.js"></script>	
   </body>
</html>