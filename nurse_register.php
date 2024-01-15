<html lang="en">
   <?php include("php_include/head.php")?>
   <body >
      <div id="loader-wrapper">
         <div id="loader">
            <div class="loader-inner"></div>
         </div>
      </div>
      <div id="page" class="page">
         <header id="header" class="header" >
           
            <div class="wsmainfull menu clearfix" >
               <div class="wsmainwp clearfix" >
                  <div class="desktoplogo"><a href="#hero-2"><img src="images/text-1702913677293.png"  width="300" height="40" alt="header-logo"></a></div>
                  <nav class="wsmenu clearfix">
                     <ul class="wsmenu-list">
                        <li aria-haspopup="true">
                           <a href="hospital_register.php"><font size="4">Home </font></a>
                        </li>
                        <li aria-haspopup="true">
                           <a href="nurse_records.php"><font size="4">Records </font></a>
                        </li>
                        <li aria-haspopup="true">
                           <a href="admin_register.php"><font size="4">Back</font></a>
                        </li>
                     </ul>
                  </nav>
               </div>
            </div>
         </header>
         <section id="hero-2" class="hero-section division">
            <div class="slider blue-nav">
               <ul class="slides">
                  <li id="slide-1">
                     <img src="images/coloured-background-design_1107-190.avif" alt="slide-background">
                     <div class="caption d-flex align-items-center ">
                        <div class="container">
                           <center>
                              <h3>NURSE REGISTRATION FORM </h3>
                           </center>
                           <br>
                           <center>
                              <form action="nurse_register.php" method="post" style="width:70%; padding: 20px; border: 1px solid black; border-radius: 5px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                 <div class="page-content" style="padding:18px; ">
                                    <center>
                                       <div class="row">
                                          <div class="mb-3 col-md-6">
                                             <input type="number" name="nurse_id" class="form-control" placeholder="Nurse Id " style="background-color:#white;width:300px;"required>
                                          </div>
                                          <div class="mb-3 col-md-6">
                                             <input type="text" name="nurse_name" class="form-control" placeholder=" Name"oninput="this.value = this.value.replace(/[^A-Za-z]/g, '')"  style="background-color:#white;width:300px; " required>
                                          </div>
                                          <div class="mb-3 col-md-6">
                                             <input type="number" name="hospital_id" class="form-control" placeholder=" Hospital ID" style="background-color:#white;width:300px; " required>
                                          </div>
                                          <div class="mb-3 col-md-6">
                                             <input type="email" name="email" class="form-control" placeholder="Email" style="background-color:#white;width:300px;"required>
                                          </div>
                                          <div class="mb-3 col-md-6">
                                             <input type="text" name="contact" class="form-control"oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0, 10)" pattern="\d{10}"  placeholder="Contact NO" style="background-color:#white;width:300px;"required>
                                          </div>
                                          <div class="mb-3 col-md-6">
                                             <input type="text" name="department" class="form-control" placeholder="Department"oninput="this.value = this.value.replace(/[^A-Za-z]/g, '')" style="background-color:#white;width:300px;"required>
                                          </div>
                                          <div class="mb-3 col-md-6">
                                             <input type="text" name="designation" class="form-control" placeholder="Designation" oninput="this.value = this.value.replace(/[^A-Za-z]/g, '')"style="background-color:#white;width:300px;"required>
                                          </div>
                                          <div class="mb-3 col-md-6">
                                             <input type="text" name="password" class="form-control" placeholder="Password" style="background-color:#white;width:300px;"required>
                                          </div>
                                          <div class="mb-3 col-md-6">
                                              <label>Address</label>
                                             <textarea  class="form-control" name="address" rows="4" required cols="35" style="background-color:#white;width:300px; ">
                                             
                                             </textarea>
                                          </div>
                                       </div>
                                    </center>
                                    <center>
                                       <div class="mb-6 col-md-12">
                                          <input type="submit" name="submit" value="submit" class="btn btn-outline-success" style="padding:15px;border-color:black;">
                                       </div>
                                    </center>
                                 </div>
                              </form>
                              
                           </center>
                           <?php
								include("php_include/connect.php");
                                if(isset($_POST['submit'])){
                                        $nurse_id=$_POST['nurse_id'];
                                        $nurse_name=$_POST['nurse_name'];
                                        $hospital_id=$_POST['hospital_id'];
                                        $email=$_POST['email'];
                                        $contact=$_POST['contact'];
                                        $department=$_POST['department'];
                                        $designation=$_POST['designation'];
                                        $password=$_POST['password'];
                                        $address=$_POST['address'];
                                        $query=mysqli_query($con,"SELECT * FROM `nurse` WHERE `nurse_id`='$nurse_id'");
										if(mysqli_num_rows($query)==0){
											
                                        $query=mysqli_query($con,"SELECT * FROM `hospital` WHERE `hospital_id`='$hospital_id'");
                                        $row=mysqli_fetch_array($query);
                                        $hospit_id=$row['hospital_id'];
                                        if($hospit_id==$hospital_id){
                                       
                                        $query=mysqli_query($con,"INSERT INTO `nurse`(`nurse_id`, `hospital_id`, `nurse_name`, `contact`, `designation`, `address`, `email`, `department`, `password`)
                                                                                VALUES ('$nurse_id','$hospital_id','$nurse_name','$contact','$designation','$address','$email','$department','$password')");
                                                 
                                                    if($query){
                                                        echo"<script>alert('register is successful');window.location.assign('nurse_register.php');</script>";
                                                    }else{
                                                        echo"<script>alert('register failed');window.location.assign('nurse_register.php');</script>";
                                                    }
                                        }else{
                                             echo"<script>alert('please enter valid hospital id');window.location.assign('nurse_register.php');</script>";
                                        }
										}
										else{
									echo"<script>alert(' nurse id already exists');window.location.assign('nurse_register.php');</script>";

										}
                                        
                                    }

                           
                           ?>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </section>
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