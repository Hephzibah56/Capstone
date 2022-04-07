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

<!--- It displays all the uploaded video content---->
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
    <link href="assets/css/videos.css" rel="stylesheet" />
 
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
                        <h1 class="page-head-line">Video Lectures </h2>
                        
                    </div>
                </div>
                <div class="row" >
            
                <div class="col-md-12">
                    <!--    Bordered Table  -->
                    
                  <div class="vid-main-wrapper clearfix">

            <!-- THE YOUTUBE PLAYER -->
      <div class="vid-container">
          <iframe id="vid_frame" src="Images/class.jpg" frameborder="0" width="560" height="315"></iframe>
            
      </div>

      <!-- THE PLAYLIST OF VIDEOS-->
      <div class="vid-list-container">
            <ol id="vid-list">
              <li>
                <a href="javascript:void();" onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/cOSEOYi9JS4?autoplay=1&rel=0&showinfo=0&autohide=1'">
                  <span class="vid-thumb"><img width=72 src="Images/class4.jpg" /></span>
                  <div class="desc">Week 1 Lecture 1</div>
                </a>
              </li>
              <li>
                <a href="javascript:void();" onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/9P7mEf4bilg?autoplay=1&rel=0&showinfo=0&autohide=1'">
                  <span class="vid-thumb"><img width=72 src="Images/class2.jpg" /></span>
                  <div class="desc"> Week 1 Lecture 2</div>
                </a>
              </li>
              <li>
                <a href="javascript:void();" onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/KHxNpXovl58?autoplay=1&rel=0&showinfo=0&autohide=1'">
                  <span class="vid-thumb"><img width=72 src="Images/class3.jpg" /></span>
                  <div class="desc">Week 2 Lecture 1</div>
                </a>
              </li>
              <li>
                <a href="javascript:void();" onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/D_a2UBGsePQ?autoplay=1&rel=0&showinfo=0&autohide=1'">
                  <span class="vid-thumb"><img width=72 src="Images/class4.jpg" /></span>
                  <div class="desc">Week 2 Lecture 2</div>
                </a>
              </li>
              <li>
                <a href="javascript:void();" onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/vYoh2IgoBXg?autoplay=1&rel=0&showinfo=0&autohide=1'">
                  <span class="vid-thumb"><img width=72 src="Images/class5.jpg" /></span>
                  <div class="desc">Week 2 Lab </div>
                </a>
              </li>
              <li>
                <a href="javascript:void();" onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/RTHI_uGyfTM?autoplay=1&rel=0&showinfo=0&autohide=1'">
                  <span class="vid-thumb"><img width=72 src="Images/class4.jpg" /></span>
                  <div class="desc">Week 3 Lecture 1</div>
                </a>
              </li>
              <li>
                <a href="javascript:void();" onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/EvTjAjLNphE?autoplay=1&rel=0&showinfo=0&autohide=1'">
                  <span class="vid-thumb"><img width=72 src="Images/class7.jpg" /></span>
                  <div class="desc">Week 3 Lecture 2</div>
                </a>
              </li>
              <li>
                <a href="javascript:void();" onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/-Qpc79oaJQg?autoplay=1&rel=0&showinfo=0&autohide=1'">
                  <span class="vid-thumb"><img width=72 src="Images/class3.jpg" /></span>
                  <div class="desc">Week 3 Lab</div>
                </a>
              </li>
         </div>

         <div class = "col-md-12" >
                <button class="page-head-line2">Start Transcription</button></a>
          </div>

      <div class="col-md-12">
          <h1> Transcription in progress </h1>
      </div>
    
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
