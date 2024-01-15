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
                     
                     <div class="wsmainfull menu clearfix" >
                        <div class="wsmainwp clearfix" >
                          <div class="desktoplogo"><a href="#hero-2"><img src="images/text-1702913677293.png"  width="300" height="40" alt="header-logo"></a></div>
                           <nav class="wsmenu clearfix">
                              <ul class="wsmenu-list">
                                 <li aria-haspopup="true">
                                    <a href="index.php"><font size="4">Home </font></a>
                                 </li>
                                
                                 <li aria-haspopup="true">
                                    <a href="doctor_login.php"><font size="4">Doctor Login </font></a>
                                 </li>
                                 <li aria-haspopup="true">
                                    <a href="nurse_login.php"><font size="4">Nurse Login </font></a>
                                 </li>
                                 <li aria-haspopup="true">
                                    <a href="patient_login.php"><font size="4">Patient Login</font> </a>
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
                     <img src="images/qwerty.jpg" alt="slide-background">
                     <div class="caption d-flex align-items-center left-align">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-9 col-lg-7">
                                 <div style="width:420px; background:black; color:white; position:relative; border-radius:20px; padding:30px 40px;">
                                    <form action="admin_login_process.php" method="POST">
                                       <center>
                                          <h3 style="color:white;font-family:calligrapher;">ADMIN LOGIN</h3>
                                          <div  style="width:100%; height:50px; margin:30px 0;" >
                                             <input type="text" placeholder="Enter Admin ID" name="userid" required style="width:100%; height:100%; background:white; border:none; outline:none;color:black; border: 2px solid rgba(255,255,255,.2); border-radius:40px; padding:20px 45px 20px 20px;  " >
                                             <i class='bx bx-user' style="position:absolute; right:55px; top:30%; transform:translateY(-50%); font-size:20px; color:black;"></i>
                                          </div>
                                          <div style="width:100%; height:50px; margin:30px 0;">
                                             <input type="password" placeholder="Enter Password" name="password" autocomplete="current-password" id="id_password" required style="width:100%; height:100%; background:white; border:none; color:black;outline:none; border: 2px solid rgba(255,255,255,.2); border-radius:40px; padding:20px 45px 20px 20px;" >
                                             <i class='bx bx-show'id="togglePassword"  style="position:absolute; right:55px; top:50%; transform:translateY(-50%); font-size:20px; color:black;" ></i>
                                          </div>
                                          <input type="submit"  name="submit"  value="Login" class="btn btn-light" style="width:100px;height:80px;border-radius:150px;border-color:white">
                                       </center>
                                    </form>
 
                                    
                                 </div>
                              </div>
                           </div>
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
       <script> 
    const togglePassword =  
        document.querySelector('#togglePassword'); 
          
    const password = document.querySelector('#id_password'); 
  
    togglePassword.addEventListener('click', function (e) { 
  
        // Toggle the type attribute 
        const type = password.getAttribute( 
            'type') === 'password' ? 'text' : 'password'; 
        password.setAttribute('type', type); 
  
       
    }); 
</script>	
   </body>
</html>