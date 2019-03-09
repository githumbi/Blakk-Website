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
				 <li ><a href="index.php">Home</a></li>
				 <li><a href="about.php">About Us</a></li>
				 <li><a href="projects.php">Leaders We Pay Tribute</a></li>
				 <li><a href="gallery.php">Gallery</a></li>
				  <li ><a href="signup.php">SIGN UP</a></li>
				 <li class="active"><a href="contact.php">Contact</a></li>
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

		 <div class="search">					
				<form>
				 <input type="text" value="" placeholder="Search...">
				 <input type="submit" value="">
				</form>					
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!----> 

<div class="contact">
		<div class="container">
			<div class="contact-top">
				<h2>Contact</h2>
				
				<!-----------------success message------------->
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

			</div>
			<div class="contact-bottom">
				 <div class="contact-text">
					<div class="col-md-3 contact-right">
						<div class="address">
							<h5>Address</h5>
							<p>The company name, 
							<span>Blakk Paradyse Africa,</span>
							 Ghana.</p>
						</div>
						<div class="address">
							<h5>Address1</h5>
							<p>Tel: Yet Confirmation, 
							<span>Fax: Yet Confirmation</span>
							Email: <a href="mailto:blakkparadyse@gmail.com">contact@bpa.com</a></p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-9 contact-left">
						<form method="post" action="includes/messages.php">
						<input type="text" name="name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" />
						<input type="text" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" />
						<input type="text" name="phone" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" />
						<textarea value="Message:" name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message..</textarea>
							<div class="submit-btn">								
									<input type="submit" name="submit" value="SUBMIT">							
							</div>
						</form>
					</div>						
					<div class="clearfix"></div>
			 </div>
				
		 </div>
	 </div>
</div>	
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
					  <input type="text" class="text" value="Enter Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Email';}">
					 <input type="submit" value="Go">
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