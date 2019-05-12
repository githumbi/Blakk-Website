<?php
// session_start();
$active = 'login';

session_start();
include 'db.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
$pwd = $_POST['pwd'];

$sql = ("SELECT * FROM signup WHERE email='$email' AND pwd='$pwd'");
//send the query to database
$results = $conn->query($sql);

if (!$row = $results->fetch_assoc()) {
    echo 'you are not logged in';
} else {
	$_SESSION['name'] = $row['name'];
	$_SESSION['id'] = $row['id'];
    header("Location: submission.php");
}
}
include 'includes/nav.php';
?>



<div class="contact">
	<div class="container">
		<div class="contact-top">
			<h2>Contact</h2>

			<!-----------------success message------------->
			<div class="row">
				<div class="col">
					<?php if (isset($_SESSION['msg'])) :  ?>
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
					<form method="post" action="login.php">
						<input placeholder = "input email" type="text" name="email" />

						<input placeholder = "input password" type="password" name="pwd" />

						<div class="submit-btn">
							<input  type="submit" name="submit">
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