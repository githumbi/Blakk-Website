<?php
session_start();
$active = 'login';
include 'includes/nav.php';
include 'db.php';
$id = $_SESSION['id'];


if (isset($_POST['submit'])) {
    //function for uploading profile picture /../blakk/admin/
function change_profile_image($id, $file_temp, $file_extn)
{
  $db =  mysqli_connect('localhost', 'root', '', 'blakk-paradyse');
  $file_path = '../profile/' . substr(md5(time()), 0, 10) . '.' . $file_extn;
  move_uploaded_file($file_temp, $file_path);
  mysqli_query($db, "UPDATE signup SET profile='" . $file_path . "'  WHERE id =$id");
}

if (isset($_FILES['profile']) === true) {
    if (empty($_FILES['profile']['name']) === true) {
      echo "please choose an image!";
    } else {
      $allowed = array('jpg','pdf', 'jpeg', 'png', 'gif');

      $file_name = $_FILES['profile']['name'];
      $file_ext = explode('.', $file_name);
      $file_extn = strtolower(end($file_ext));
      $file_temp = $_FILES['profile']['tmp_name'];

      if (in_array($file_extn, $allowed) === true) {
        change_profile_image($id, $file_temp, $file_extn);
        header("Refresh:0");
      } else {
        echo "incorect file. Upload:";
        echo implode(', ', $allowed);
      }
    }
  }

  //function for uploading id-card picture /../blakk/admin/
function change_idcard_image($id, $file_temp, $file_extn)
{
  $db =  mysqli_connect('localhost', 'root', '', 'blakk-paradyse');
  $file_path = '../id-card/' . substr(md5(time()), 0, 10) . '.' . $file_extn;
  move_uploaded_file($file_temp, $file_path);
  mysqli_query($db, "UPDATE signup SET idcard='" . $file_path . "'  WHERE id =$id");
}

if (isset($_FILES['idcard']) === true) {
    if (empty($_FILES['idcard']['name']) === true) {
      echo "please choose an image!";
    } else {
      $allowed = array('jpg','pdf', 'jpeg', 'png', 'gif');

      $file_name = $_FILES['idcard']['name'];
      $file_ext = explode('.', $file_name);
      $file_extn = strtolower(end($file_ext));
      $file_temp = $_FILES['idcard']['tmp_name'];

      if (in_array($file_extn, $allowed) === true) {
        change_idcard_image($id, $file_temp, $file_extn);
        header("Refresh:0");
      } else {
        echo "incorect file. Upload:";
        echo implode(', ', $allowed);
      }
    }
  }  

  $_SESSION['msg'] = "submitted!";
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Upload your files </title>
</head>

<body>
    <!-- ---------------success message----------- -->
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
    <!--end of suucess message -->
    <?php
if (isset($_SESSION['id'])){ 
  $results = mysqli_query($conn, "SELECT * FROM signup where id ={$_SESSION['id']}");
  $row = mysqli_fetch_array($results);
  ?>

    <form enctype="multipart/form-data" action="submission.php" method="POST">
        <div class="project-sec">
            <div class="container">
                <h2>Welcome <?php echo $row['name']; ?>, Kindly Upload required Files</h2>
                <div class="works">
                    <div class="prjt-grd">
                        <div class="col-md-6">
                            <div class="box maxheight">

                                <?php


                                            if (empty($row['profile']) === false) {
                                                echo '<img style="height: 150px; width: 150px;"   src="../',$row['profile'],'"  class="example-image" >';
                                    } else echo   '<img style="height: 150px; width: 150px;" src="../profile/index.png">';
                                            ?>


                                <div class="project-info">
                                    <a href="#">Upload your Photo</a>





                                    <input type="file" name="profile">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prjt-rid">
                        <div class="col-md-6">
                            <div class="box maxheight">

                                <?php
          if (empty($row['idcard']) === false) {
            echo '<img style="height: 150px; width: 150px;"   src="../',$row['idcard'],'">';
   } else echo   '<img style="height: 150px; width: 150px;" src="../id-card/index.jpg">';
   ?></a>
                                <div class="project-info">
                                    <a href="single.php">Upload yourNational ID</a>



                                    <input type="file" name="idcard">

                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="clearfix"></div>
                </div>
            </div>
        </div>


        <!-- <button class="btn btn-primary" type="submit" name="profile" class="btn">update</button> -->





        <?php } ?>

        <div class="container contact-left">


           

            <div class="">

                <div class="list-group list-group-alternate">
                    <a class="list-group-item">Name: <?php echo $row['name']; ?> </i> </a>
                    <a class="list-group-item">Category: <?php echo $row['groups']; ?> </i> </a>
                    <a class="list-group-item">Email: <?php echo $row['email']; ?> </i> </a>
                    <a class="list-group-item">Phone Number: <?php echo $row['phone']; ?> </i> </a>
                    <a class="list-group-item">Category: <?php echo $row['groups']; ?> </i> </a>
                </div>
            </div>
            <div class="alert alert-warning" role="alert">
                <input type="checkbox" name="email" value="" />
                <strong></strong>By Checking you confirm the details uploaded

            </div>
            <div class="submit-btn">
                <input type="submit" name="submit" value="SUBMIT">
            </div>
            <div class="clearfix"> </div>
        </div>

    </form>
    </div>
</body>

</html>