<?php
session_start();
include('../includes/config.php');

//initialization
$st = curl_init();
curl_setopt($st, CURLOPT_URL, "http://127.0.0.1:5000/trial");
curl_setopt($st, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($st);
$res = json_decode($output);
echo $res->text;

curl_close($st);

error_reporting(0);
if(strlen($_SESSION['login'])==0)
{   
header('location:../index.php');
}
else{
?>


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./rec.css">
	<title>Speech to Text</title>
     <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
	
</head>


<body>
    <!-- LOGO HEADER END-->
<?php if($_SESSION['login']!="")
{
 include('../includes/menubar.php');
}
 ?> 
   <div class="container-video">
   <div class="main-video-container">
      <video src="images/vid-1.mp4" loop controls class="main-video"></video>
      <h3 class="main-vid-title">Lecture 1</h3>
   </div>
   <div class="video-list-container">
      <div class="list active">
         <video src="images/vid-1.mp4" class="list-video"></video>
         <h3 class="list-title">Lecture 2</h3>
      </div>

      <div class="list">
         <video src="images/vid-2.mp4" class="list-video"></video>
         <h3 class="list-title">Lecture 3</h3>
      </div>

      <div class="list">
         <video src="images/vid-3.mp4" class="list-video"></video>
         <h3 class="list-title">Lecture 4</h3>
      </div>

      <div class="list">
         <video src="images/vid-4.mp4" class="list-video"></video>
         <h3 class="list-title">Lecture 5 </h3>
      </div>

      <div class="list">
         <video src="images/vid-5.mp4" class="list-video"></video>
         <h3 class="list-title">Lecture 6</h3>
      </div>

      <div class="list">
         <video src="images/vid-6.mp4" class="list-video"></video>
         <h3 class="list-title">Lecture 7 </h3>
      </div>

      <div class="list">
         <video src="images/vid-7.mp4" class="list-video"></video>
         <h3 class="list-title">Lecture 8 </h3>
      </div>

      <div class="list">
         <video src="images/vid-8.mp4" class="list-video"></video>
         <h3 class="list-title">Lecture 9 </h3>
      </div>

      <div class="list">
         <video src="images/vid-9.mp4" class="list-video"></video>
         <h3 class="list-title"> Lecture 10 </h3>
      </div>

   </div>

</div>
	
	<center>
		<div class="container">
			<br>
			<img id="playButton" class="playButton" src="images/mic.png" onclick="speechToTextConversion();">
			<br>
			<span><button id="submitButton" style="font-size: 15px; width: 50%" class="submitButton">C L I C K&nbsp;&nbsp;&nbsp;O N&nbsp;&nbsp;&nbsp;T H E&nbsp;&nbsp;&nbsp;M I C&nbsp;&nbsp;&nbsp;T O&nbsp;&nbsp;&nbsp;S T A R T&nbsp;&nbsp;&nbsp;R E C O R D I N G</button><br></span>
      </br>
      </div>

		<div id="wrapper">
			<form id="paper">
            <h3>  Transcribed Text </h3> 
				<textarea placeholder="The words spoken by your lecturer will be trancribed and displayed in English." id="text" name="text" rows="20" style="overflow: hidden; word-wrap: break-word; resize: none; height: 460px; width: 800px " required></textarea>  
			</form>

      <input id="filename" placeholder="Name your file with its extension." / required>

      <button id="download">Download file</button>

      <!-- <button id ="savebutton"  style="font-size: 15px; width: 25%; float: right" class="submitButton"> SAVE FILE</button> -->
		</div>
	   
	</center>

    <b>

   <div class = "transcript">
   </div>

<!-- <div class="th">
<p class="blink">Speech to Text<br> Convertor <br>By <a href="put project link on github" target=_blank><b><font color="yellow"> Zibah </font></b></a></p>
</div>
</b> -->

<?php include('../includes/footer.php');?>

<script src="./rec.js"></script>
    <!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>

<?php } ?>