<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
{   
header('location:index.php');
}
else{
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Enroll History</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
   
   <!-- Fontawesome CSS -->
   <link href="css/all.css" rel="stylesheet">
   <!-- Custom styles for this template -->
   <link href="css/style.css" rel="stylesheet">

</head>

<body>


    <!-- LOGO HEADER END-->
<?php if($_SESSION['login']!="")
{
 include('includes/menubar.php');
}
?>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Lecture Slides  </h2>
                        
                    </div>
                </div>
                <div class="row" >
            
                <div class="col-md-12">
                    <!--    Bordered Table  -->
                    
                <div class="vid-main-wrapper clearfix">

              

      <!-- THE PLAYLIST -->
      <div class="vid-list-container">    
            <div class="row">

                <div class="col-lg-6">
                    <div class="card-body">
                        <h3> Intro to Mobile programming </h3>
                        <p class="card-text">This slide is for week 1. </p>
                    </div>

                    <div class="card-footer dropdown">
                        <a href="documents/slide_one.pdf" class="btn btn-success" class="dropbtn" style="color: white;font-weight: bolder;">Read online</a>
                    </div>

                    <div class="card-footer dropdown">
                        <a target="documents/slide_one.pdf" download><button class="btn btn-success"><i class="fa fa-download"></i> Download PDF</button></a>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="card-body">
                        <h3>Layout design</h3>
                        <p class="card-text">This slide is for week 2. </p>
                    </div>

                    <div class="card-footer dropdown">
                       <a href="documents/Orals.pdf" class="btn btn-success" class="dropbtn" style="color: white;font-weight: bolder;">Read online</a>
                    </div>

                    <div class="card-footer dropdown">
                        <a target="documents/Orals.pdf" download><button class="btn btn-success"><i class="fa fa-download"></i> Download PDF</button></a>
                    </div>

                </div>

            </div>
            <!-- /.row -->
           
       </div>

      <!-- <div class="col-md-12">
          <h1>Add more slide</h1>
      </div> -->
</div>

<!--  End  Bordered Table  -->

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
