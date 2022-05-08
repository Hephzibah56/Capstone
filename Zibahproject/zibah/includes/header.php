<?php
include("includes/config.php");
error_reporting(0);
?>
<?php if($_SESSION['login']!="")
{?>

<!-- Headings of the system-->

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link href="assets/css/style.css" rel="stylesheet" />

</head>

<header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>Welcome: </strong><?php echo htmlentities($_SESSION['sname']);?>
                    &nbsp;&nbsp;
                    
                     <!-- <strong>Last Login:<?php 
                    //$ret=mysqli_query($con,"SELECT  * from userlog where studentRegno='".$_SESSION['login']."' order by id desc limit 1,1");
                    //$row=mysqli_fetch_array($ret);
                    echo $row['userip']; ?> at <?php echo $row['loginTime'];?></strong> -->
                </div>

            </div>
        </div>
    </header>
    <?php } ?>
    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" style="color:#fff; font-size:24px;4px; line-height:18px;font-family: cursive; ">
                <br>  </br>
                    <!-- <img src = "Images/logo.jpg"> </img> -->
                </a>
            </div>

            <div class="left-div" style="color:white;font-family: cursive;font-size: 20px;">
                DEAF STUDENTS LEARNING SYSTEM FOR A GHANAIAN UNIVERSITY CLASSROOM
            </div>
         </div>
        </div>