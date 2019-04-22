<?php
session_start();
    $user = $_SESSION['name'];
    $db =  mysqli_connect('localhost' ,'root','','blakk-paradyse');
    mysqli_query($db, "UPDATE signup SET profile='".  basename( $_FILES['uploaded_file']['name'])."' 
     WHERE name=$user");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Upload your files</title>
</head>
<body>
    <!-----------------success message------------->
			<div class="row">
                        <div class="col">
                      <?php if (isset($_SESSION['name'])):  ?>
                                <div class="alert alert-success" role="alert"><span><strong>
                                	<h3>
                                		 <?php
                                    echo $_SESSION['name'];
                                    unset($_SESSION['name']);
                                  ?>
                                	</h3>
                                </strong></span><button class="close"><span aria-hidden="true">×</span></button></div>
                                <?php endif ?>
                        </div>
                    </div>
            <!--end of suucess message -->

  <form enctype="multipart/form-data" action="submission.php" method="POST">
    <p>Upload your file</p>
    <input type="file" name="uploaded_file"></input><br />
    <input type="submit" value="Upload"></input>
  </form>
</body>
</html>
<?PHP
  if(!empty($_FILES['uploaded_file']))
  {
    $path = "uploads/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
?>