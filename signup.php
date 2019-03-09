<?php
session_start();
include 'includes/nav.php';
?>

<body>
<!-- banner -->
<div class="banner">
<div class="header-top">
	 <div class="container">
		 <div class="logo">			
				 <h1><a href="#"><img src="pot1.png">Blakk Paradyse Afrika</a></h1>			
		 </div>
		 
		 <div class="details">				 
				<div class="locate">
					 <div class="detail-grid">
						 <div class="lctr">
								<img src="images/lct.png" alt=""/>
						 </div>
						 <p>Yet Confirmation,
						 <span> Ghana.</span></p>
						 <div class="clearfix"></div>
					 </div>
					 <div class="detail-grid">
						 <div class="lctr">
								<img src="images/phn.png" alt=""/>
						 </div>
						 <p>Tel: Yet Confirmation</p>
						 <div class="clearfix"></div>
					 </div>
				</div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<div class="header">
	 <div class="container">
		 <div class="top-menu">
			 <span class="menu"><img src="africa.png" alt=""></span>
			 <ul class="nav1">
				 <li><a href="index.php">Home</a></li>
				 <li><a href="about.php">About Us</a></li>
				 <li><a href="projects.php">Leaders We Pay Tribute</a></li>
				 <li><a href="gallery.php">Gallery</a></li>
				   <li class="active"><a href="signup.php">SIGN UP</a></li>
				 <li><a href="contact.php">Contact</a></li>

			 </ul>
		 </div>
		 <!-- script-for-menu -->
							 <script>
							   $( "span.menu" ).click(function() {
								 $( "ul.nav1" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							</script>
		 <!-- /script-for-menu -->

		 
		 
		 <div class="clearfix"></div>
	 </div>
</div>
<!----> 
 <form action="includes/signup.inc.php" method="post">
<div class="contact">
		<div class="container">
			<div class="contact-top">
				<h2>Signup To Be a Member!</h2>
			</div>

			<!-----------------suceess message------------->
			<div class="row">
                        <div class="col">
                      <?php if (isset($_SESSION['msg'])):  ?>
                                <div class="alert alert-success" role="alert"><span><strong>
                                	<h3>
                                		 <?php
                                    echo $_SESSION['msg'];
                                    unset($_SESSION['msg']);
                                  ?>
                                	</h3>
                                </strong></span><button class="close"><span aria-hidden="true">×</span></button></div>
                                <?php endif ?>
                        </div>
                    </div>

            <!-----------------error message------------->
			<div class="row">
                        <div class="col">
                      <?php if (isset($_SESSION['msg-err'])):  ?>
                                <div class="alert alert-danger" role="alert"><span><strong>
                                	<h3>
                                		 <?php
                                    echo $_SESSION['msg-err'];
                                    unset($_SESSION['msg-err']);
                                  ?>
                                	</h3>
                                </strong></span><button class="close"><span aria-hidden="true">×</span></button></div>
                                <?php endif ?>
                        </div>
                    </div>


			<div class="contact-bottom">
				 <div class="contact-text">
					<div class="col-lg-6">
					<div class="section_title"><h2>Personal Details</h2></div>
				
						
						    <div class="form-group">
						       <input class="form-control" type="text" name="name" placeholder="Full Name"  />
						    </div>
						    <div class="form-group">
						       <input class="form-control"type="email" name="email" placeholder="email"  />
						    </div>
						    <div class="form-group">
						       <input class="form-control" type="text" name="phone" placeholder="phone"  />
						    </div>
						    <div class="form-group">
						       <input class="form-control" type="text" name="work" placeholder="occupation"  />
						    </div>
						    <div class="form-group">
						       <div class="container">
						    
						       		
						       		 <label>Male</label>
						       <input value="male" type="radio" name="gender">
						      
						      
						       		 <label>Female</label>
						       <input value="female" type="radio" name="gender">
						       	
						       
						       </div>
						    </div>
					
				</div>

				<div class="col-lg-6">
					<div class="section_title"><h2>Addresses</h2></div>
					 <div class="form-group">
						  <!--      <label for="african-countries">African Countries</i></label> -->
								<select type="text" class="form-control" id="african-countries" name="country">
								<option selected>Choose your country</option>
								<option value="algeria">Algeria</option>
								<option value="angola">Angola</option>
								<option value="benin">Benin</option>
								<option value="botswana">Botswana</option>
								<option value="burkina Faso">Burkina Faso</option>
								<option value="burundi">Burundi</option>
								<option value="cameroon">Cameroon</option>
								<option value="cape-verde">Cape Verde</option>
								<option value="central-african-republic">Central African Republic</option>
								<option value="chad">Chad</option>
								<option value="comoros">Comoros</option>
								<option value="congo-brazzaville">Congo - Brazzaville</option>
								<option value="congo-kinshasa">Congo - Kinshasa</option>
								<option value="ivory-coast">Côte d’Ivoire</option>
								<option value="djibouti">Djibouti</option>
								<option value="egypt">Egypt</option>
								<option value="equatorial-guinea">Equatorial Guinea</option>
								<option value="eritrea">Eritrea</option>
								<option value="ethiopia">Ethiopia</option>
								<option value="gabon">Gabon</option>
								<option value="gambia">Gambia</option>
								<option value="ghana">Ghana</option>
								<option value="guinea">Guinea</option>
								<option value="guinea-bissau">Guinea-Bissau</option>
								<option value="kenya">Kenya</option>
								<option value="lesotho">Lesotho</option>
								<option value="liberia">Liberia</option>
								<option value="libya">Libya</option>
								<option value="madagascar">Madagascar</option>
								<option value="malawi">Malawi</option>
								<option value="mali">Mali</option>
								<option value="mauritania">Mauritania</option>
								<option value="mauritius">Mauritius</option>
								<option value="mayotte">Mayotte</option>
								<option value="morocco">Morocco</option>
								<option value="mozambique">Mozambique</option>
								<option value="namibia">Namibia</option>
								<option value="niger">Niger</option>
								<option value="nigeria">Nigeria</option>
								<option value="rwanda">Rwanda</option>
								<option value="reunion">Réunion</option>
								<option value="saint-helena">Saint Helena</option>
								<option value="senegal">Senegal</option>
								<option value="seychelles">Seychelles</option>
								<option value="sierra-leone">Sierra Leone</option>
								<option value="somalia">Somalia</option>
								<option value="south-africa">South Africa</option>
								<option value="sudan">Sudan</option>
								<option value="south-sudan">Sudan</option>
								<option value="swaziland">Swaziland</option>
								<option value="Sao-tome-príncipe">São Tomé and Príncipe</option>
								<option value="tanzania">Tanzania</option>
								<option value="togo">Togo</option>
								<option value="tunisia">Tunisia</option>
								<option value="uganda">Uganda</option>
								<option value="western-sahara">Western Sahara</option>
								<option value="zambia">Zambia</option>
								<option value="zimbabwe">Zimbabwe</option>
								</select>
								   </div>
						  <div class="form-group">
						       <input class="form-control"" type="text" name="city" placeholder="city">
						    </div>
						 <div class="form-group">
						       <input class="form-control" type="text" name="address" placeholder="address">
						    </div>
						   

						    
						    <div class="submit-btn">								
									<input type="submit" name="submit" value="SIGNUP">							
							</div>
						
						  
						    
					</div>	

					<!-- <div class="col-md-6 contact-left">
						<form>
						<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" />
						<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" />
						<input type="text" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" />
						<textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message..</textarea>
							<div class="submit-btn">								
									<input type="submit" value="SUBMIT">							
							</div>
						</form>
					</div>	 -->					
					<div class="clearfix"></div>
			 </div>
				
		 </div>
	 </div>
</div>
</form>	
<!----> 
<div class="footer">
	 <div class="container">
		 <div class="footer-sec">
			 <div class="col-md-4 ftr-grid1">
				 <h3>Latest Tweets</h3>
				 <div class="twts">
					 <h5>You can talk to us at:.</h5>
					 <a href="mailto:blakkpardyse@gmail.com">blakkparadyse@gmail.com</a>
				 </div>
			 </div>
			 <div class="col-md-4 news-ltr">
				 <h3>NewsLetter</h3>
				 <p>Present your ideas,complains,Suggestion and feedback . </p>
				 <form>					 
					 <input class="form-control"type="text" class="text" value="Enter Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Email';}">
					<input class="form-control"type="submit" value="Go">
					 <div class="clearfix"></div>
				 </form>
			 </div>
			 <div class="col-md-4 social">
				 <h3>Social Media</h3>
				 <a href="#"><i class="facebook"></i></a>
				 <a href="#"><i class="twitter"></i></a>
				 <a href="#"><i class="dribble"></i></a>	
				 <a href="#"><i class="google"></i></a>	
				 <a href="#"><i class="youtube"></i></a>
			 </div>
			 <div class="clearfix"></div>
     	 </div>
	 </div>
</div>
<!---->  
<div class="copywrite">
	 <div class="container">
		 <div class="ftr-logo">
			 <h3><a href="index.php">BLAKK PARADYSE AFRIKA</a></h3>
		 </div>
		 <div class="ftr-right">
			 <p>Copyright © 2018 Blakk Paradyse Africa. All rights reserved | Design by <a href="http://danndegwa.com">BPA Team</a></p>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!----> 
</body>
</html>