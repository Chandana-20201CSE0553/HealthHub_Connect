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
                                    <a href="patient.php"><font size="4">Home </font></a>
                                 </li>
                                 <li aria-haspopup="true">
                                    <a href="hospital_records_for_patient.php"><font size="4">Hospital Records </font></a>
                                 </li>
                                     
                                 
                                 <li aria-haspopup="true">
                                    <a href="patient_logout.php"><font size="4">Logout</font></a>
                                 </li>
                                 
                                
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </header>
                  <br>
                 <?php 
               $query=mysqli_query($con,"SELECT * FROM `patient` WHERE `patient_id`='$patient_id'");
               $row=mysqli_fetch_array($query);
               ?>
         <center>  <h3>Greetings : <?php echo $row['patient_id']; ?>  </h3></center>
              <br>
            <center>
                <?php 
                $query=mysqli_query($con,"SELECT * FROM `patient` WHERE `patient_id`='$patient_id'");
                    $row=mysqli_fetch_array($query);
                    $patient_id=$row['patient_id'];
                    $hospital_id=$row['hospital_id'];
                    $gender=$row['gender'];
                   
                    $my_password=$row['password'];
                   
                   
                    $name=$row['patient_name'];
                    $dob=$row['dob'];
                    $disease=$row['disease'];
                    $treatement=$row['treatement'];
                    $name=$row['patient_name'];
                    
                    
                
                ?>
                     <div class="col-md-6 grid-margin stretch-card" >
                        <div class="card tale-bg" style="padding:20px ;background-color:rgba(255, 106, 89, 0.1);border-radius:20px;border-color:black;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);color:black;font-size:23px;">
                           <br>
                           <center><h3>Personal Information</h3></center><br> 
                           <center><b>Name:<?php echo $name;?></b><br> 
                           <b>Hospital ID:<?php echo $hospital_id; ?></b><br>
                           <b>Gender:<?php echo $gender; ?></b><br>
                           <b>Date Of Birth:<?php echo $dob; ?></b><br> 
                            <b>Disease:<?php echo $disease; ?></b><br>
                           <b>Treatment:<?php echo $treatement; ?></b><br>
                           <b>Medicine:<?php echo $row['medicine']; ?></b><br> 
                          </center>
                           
                           <hr>
                           <br>
                           
                        </div>
                     </div>
                  </center><br>
                     <center>
                     <div class="col-md-6 grid-margin stretch-card" >
                        <div class="card tale-bg" style="padding:20px ;background-color:rgba(255, 106, 89, 0.1);border-radius:20px;border-color:black;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);color:black;font-size:23px;">
                           <br>
                           <center><h3>Contact Information</h3></center><br> 
                           <center><b>Address:<?php echo $row['address'];?></b><br> 
                           <b>Contact No:<?php echo $row['contact'];?></b><br>
                           <b>Email:<?php echo $row['email'];?></b><br>
                           </center>
                           <hr>
                           <br>
                          <center> <button type="button"class="btn btn-outline-primary" style="padding:15px;border-color:black;width:15%;"><a href="edit_patient.php"><b><font color="black" size="4" >Edit</font></b></a></button></center>
                        </div>
                     </div>
                  </center><br><br>

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