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
         <section id="hero-2" class="hero-section division">
            <div class="slider blue-nav">
               <ul class="slides">
                  <li id="slide-1">
                     <img src="images/coloured-background-design_1107-190.avif" alt="slide-background">
                     <div class="caption d-flex align-items-center ">
                        <div class="container"><br>
                                                  <div  >
                                 <input type="text" class="form-control" id="searchInput" onkeyup="searchTable()"  placeholder="Search By Hospital Name" required style="border-color:black;border-radius:10px;width:40%;">
                              </div>
<br>
                           <center>
                              <h3>HOSPITAL RECORDS </h3>
                           </center>
                           <br>
                           <center>
                             
                                 <div class="page-content" >
                                    <div class="container" style="max-width: 100%; ">
                                       <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                                          <thead>
                                             <tr style="background-color:transparent; color:black;">
                                                <th>SL NO</th>
                                                <th>HOSPITAL ID</th>
                                                <th>HOSPITAL NAME</th>
                                                <th>ADDRESS</th>
                                                <th>EMAIL</th>
                                                <th>CONTACT NO</th>
                                                 
                                             </tr>
                                          </thead>
                                           <?php
									$i=1;
									$query = mysqli_query($con,"SELECT * FROM `hospital`");
									if(mysqli_num_rows($query)>0){
										while($row=mysqli_fetch_array($query)){
											$id = $row['id'];
											$hospital_id = $row['hospital_id'];
											$hospital_name = $row['hospital_name'];
											$address = $row['address'];
											$email = $row['email'];
											$contact = $row['contact'];
									
										?>
                                        	<tr style="color:black;">
                                            	<td><?php echo $i ?></td>
                                                <td><?php echo $hospital_id ?></td>
												<td><?php echo $hospital_name ?></td>
												<td><?php echo $address ?></td>
												<td><?php echo $email ?></td>
												<td><?php echo $contact ?></td>
												
                                              
												
                                            </tr>
                                        <?php
											$i++;
										}
									}
									else{
									?>
                                    	<tr>
                                        	<td colspan="2">Sorry you have no List.</td>
                                        </tr>
                                    <?php
									}
								?>
                                       </table>
                                    </div>
                                 </div>
                              
                           </center>
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
         function searchTable() {
             var input, filter, table, tr, td, i, txtValue;
             input = document.getElementById("searchInput");
             filter = input.value.toUpperCase();
             table = document.getElementById("dataTable");
             tr = table.getElementsByTagName("tr");
         
             for (i = 0; i < tr.length; i++) {
                 td = tr[i].getElementsByTagName("td")[2]; 
                 if (td) {
                     txtValue = td.textContent || td.innerText;
                     if (txtValue.toUpperCase().indexOf(filter) > -1) {
                         tr[i].style.display = "";
                     } else {
                         tr[i].style.display = "none";
                     }
                 }
             }
         }
      </script>
   </body>
</html>