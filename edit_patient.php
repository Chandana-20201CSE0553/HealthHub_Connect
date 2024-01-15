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
                                    <a href="patient.php"><font size="4">Back</font></a>
                                 </li>
                                 
                                
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </header>
                  <br>
         <center>  <h3>EDIT CONTACT INFORMATION  </h3></center>
              <br><br>
              <center>
         <form action="edit_patient.php" method="post" style="width:50%; padding: 20px;background-color:rgba(255, 106, 89, 0.1); border: 1px solid #ccc; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <div class="page-content" style="padding:50px; ">
 

                               <center> 
                                     <div class="mb-3 col-md-6">
                                         <label>Enter New Address</label>
                                    <textarea  class="form-control" name="address" rows="4" cols="35" style="background-color:#white;width:300px; ">
                                    </textarea></div>
                                    <div class="mb-3 col-md-6">
                                        
                                         <input type="number" name="contact" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0, 10)" pattern="\d{10}" placeholder=" Enter New Contact Number" style="background-color:#white;width:300px; " required>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        
                                         <input type="email" name="email" class="form-control" placeholder=" Enter New Email ID" style="background-color:#white;width:300px; " required>
                                    </div>
                                
                              <br>
                          <input type="submit"class="btn btn-outline-success" value="submit" name="submit" style="padding:15px;border-color:black;"><a href=""><b><font color="black" size="4" >Edit</font></b></a></button>

                             </center>            




</div>
</form>
                                     <?php 
                                    						if(isset($_POST['submit'])){
                                    							$address=$_POST['address'];
                                    							$contact=$_POST['contact'];
                                    							$email=$_POST['email'];
                                    							$query=mysqli_query($con,"UPDATE `patient` SET `address`='$address',`email`='$email',`contact`='$contact'WHERE `patient_id`='$patient_id'");
                                    								if($query){
                                    									echo'<script>alert("updated Successful");window.location.assign("patient.php");</script>';
                                    								}
                                    							
                                    						
                                    						}
                                    ?>
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