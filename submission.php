<?php
session_start();
$active = 'login';
include 'includes/nav.php';
include 'db.php';

//function for uploading profile picture
function change_profile_image($id, $file_temp, $file_extn)
{

  $db =  mysqli_connect('localhost', 'root', '', 'blakk-paradyse');
  $file_path = '/../blakk/admin/profile/' . substr(md5(time()), 0, 10) . '.' . $file_extn;
  move_uploaded_file($file_temp, $file_path);
  mysqli_query($db, "UPDATE signup SET profile='" . $file_path . "'  WHERE id ={$_SESSION['id']}");
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
    <!--end of suucess message -->
    <?php
if (isset($_SESSION['id'])){ 
  $results = mysqli_query($conn, "SELECT * FROM signup where id ={$_SESSION['id']}");
  $row = mysqli_fetch_array($results);
  ?>

    <form enctype="multipart/form-data" action="submission.php" method="POST">
        <div class="project-sec">
            <div class="container">
                <h2>Leaders we Emulate</h2>
                <div class="works">
                    <div class="prjt-grid">
                        <div class="box maxheight">

                            <!-- <a class="example-image-link" href="#" data-lightbox="example-1"
                        data-title="Optional caption."> -->
                            <?php
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

              if (empty($row['profile']) === false) {
                echo '<img class="example-image" src="', $row['profile'], '" >';
              } else echo '<img class="square-circle" src="../blakk/admin/profile/index.png">';
              ?>

                            <div class="project-info">
                                <a href="#">Name: <?php echo $row['name']; ?> </a>


                                <a href="pdf/nkuruma.html" target="_blank"><span class="label label-warning">View
                                        pdf</span></a>
                                <a href="pdf/nkuruma.pdf"><span class="label label-warning">Download pdf</span></a>


                            </div>
                        </div>
                    </div>
                    <div class="prjt-grid">
                        <div class="box maxheight">
                            <a class="example-image-link" href="#" data-lightbox="example-2"
                                data-title="Optional caption."><img class="example-image"
                                    src="../blakk/admin/profile/index.png"></a>
                            <div class="project-info">
                                <a href="single.php">Jomo Kenyatta</a>

                                <a href="pdf/kenyatta.html" target="_blank"><span class="label label-warning">View
                                        pdf</span></a>
                                <a href="pdf/kenyatta.pdf"><span class="label label-warning">Download pdf</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="prjt-grid span66">
                        <div class="box maxheight">
                            <a class="example-image-link" href="images/leaders/lumumba.jpg" data-lightbox="example-3"
                                data-title="Optional caption."><img class="example-image"
                                    src="images/leaders/lumumba.jpg"></a>
                            <div class="project-info">
                                <a href="single.php">Patrice Lumumba</a>

                                <a href="pdf/lumumba/lumumba.html" target="_blank"><span
                                        class="label label-warning">View
                                        pdf</span></a>
                                <a href="pdf/lumumba.pdf"><span class="label label-warning">Download pdf</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <input type="text" name="country" placeholder=<?php echo $row['country']; ?>>
        <p>Upload your file <?php echo $row['name']; ?></p>
        <input type="file" name="uploaded_file"><br />
        <input type="submit" value="Upload">
    </form>
    <?php } ?>

    <div class="container contact-left">
        <form method="post" action="includes/messages.php">
            <input type="text" name="name" value="Name" onfocus="this.value = '';"
                onblur="if (this.value == '') {this.value = 'Name';}" />
            <input type="text" name="email" value="Email" onfocus="this.value = '';"
                onblur="if (this.value == '') {this.value = 'Email';}" />
            <input type="text" name="phone" value="Phone" onfocus="this.value = '';"
                onblur="if (this.value == '') {this.value = 'Phone';}" />
            <textarea value="Message:" name="message" onfocus="this.value = '';"
                onblur="if (this.value == '') {this.value = 'Message';}">Message..</textarea>
            <div class="submit-btn">
                <input type="submit" name="submit" value="SUBMIT">
            </div>
        </form>
    </div>
</body>

</html>