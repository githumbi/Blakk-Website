<?php
session_start();
include '../db.php';

		use PHPMailer\PHPMailer\PHPMailer; 
		use PHPMailer\PHPMailer\Exception; 

		require 'PHPMailer/src/Exception.php';
		require 'PHPMailer/src/PHPMailer.php'; 
		require 'PHPMailer/src/SMTP.php'; 

if (isset($_POST['submit'])) {
	
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	$email = $_POST['email'];

	   $sql = ("INSERT INTO messages (name, phone, email ,message) VALUES ('$name', '$phone','$email','$message')");
		    //send the data to database
		    $results = $conn->query($sql);
		// }



		

		$body = file_get_contents('mail/mail.html');
		$mail = new PHPMailer();
		$mail->isSMTP();
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'ssl';
		$mail->Host = 'rbx103.truehost.cloud';
		$mail->Port = '465';
		$mail->isHTML(true);
		$mail->Username = 'info@thumbi.co.ke';
		$mail->Password = '232j120g0038k'; 
		$mail->SetFrom('githumbi@gmail.com');
		$mail->Subject = 'BLAKK PARADYSE REGISTRATION';
		//$mail->Body = '<p>hello</p>';
		$mail->MsgHTML($body);
		$mail->AddAddress("$email");
		
		    $_SESSION['msg'] = "Message received, we will contact you shortly";
		    header('Location: ../contact.php');
}