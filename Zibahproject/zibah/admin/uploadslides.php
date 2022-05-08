
<?php
session_start();
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
//header('location:index.php');
}
else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );



if(isset($_POST['submit']))
{

    if(move_uploaded_file($tempfile, $filenameWithDirectory))
   {
    $filename = $_FILES["myfile"]["name"];
    $filetype = $_FILES["myfile"]["type"];
    $filesize = $_FILES["myfile"]["size"];
    $tempfile = $_FILES["myfile"]["tmp_name"];
    $filenameWithDirectory = "uploads/".$filename;
    
      echo "<h2>File Uploaded</h2>";
      echo "<p>Your file has been uploaded successfully.</p>";
      echo "<p>File name = <b>$filename</b></p>";
      echo "<p>File type = <b>$filetype</b></p>";
      echo "<p>File size = <b>$filesize</b></p>";
   }
   else 
   {
      echo "Error occurred during file upload!";
   }

}
?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>UPLOAD FILES</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>

<?php include('includes/header.php');?>
    <!-- LOGO HEADER END-->
<?php if($_SESSION['alogin']!="")
{
 include('includes/menubar.php');
}
 ?>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line"> Upload Class Documents </h1>
                    </div>
                </div>
                <div class="row" >
<div class="col-md-3"></div>
    <div class="col-md-6">
    <div class="panel panel-default">
    <div class="panel-heading"> Upload Form</div>
<font color="green" align="center"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></font>


<div class="panel-body">
<form name="chngpwd" method="post" action="verifyupload.php" enctype="multipart/form-data">
    
<div class="form-group">
    <label for="exampleInputPassword1">File Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="cpass" placeholder="enter name of file" />
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="text area" class="form-control" id="exampleInputPassword2" name="newpass" placeholder="describe the upload" />
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Select File to upload</label>
    <input type="file" class="form-control" id="exampleInputPassword3" name="myfile" placeholder="Upload File" />
  </div>
   <button type="submit" name="submit" class="btn btn-default">Upload</button>
<hr />
 
</form>
    </div>
    </div>
</div>
 </div>
    </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
  <?php include('includes/footer.php');?>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
<?php } ?>






