<?php 
    include "navbar.php";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <title>YOGA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="./bootstrap-3.4.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="./css-int/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="asset\Divineyoga.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/contact.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row" style="margin-top: 8%;">
           <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-12">
            <img src="./asset/yoga1.jpg" data-aos="fade-up" data-aos-delay="100" alt="" height="80%" width="100%" style="border-radius:10px;">
           </div> 
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
                <div id="head-title" data-aos="fade-up" data-aos-delay="100">
                    <h3>Contact us</h3>
                    <h5><a href="#">Home</a> / <a href="#">Contact us </a></h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
    <div class="row" style="margin-top: 5%;">
        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1" id="ourServices">
        <h1 data-aos="fade-up" data-aos-delay="100">Join Our Online Sessions!</h1>
        <h3 style="font-size: 16px;">Yoga is not about practicing on mat. We at Divine Yoga for Women, focus on mindful creative and entertaining yogic techniques with energetic ladies.</h3>  
         </div>
    </div>
    <div class="row" style="margin-top: 3%;">
        <div class="col-lg-7 col-lg-offset-3 col-md-8 col-md-offset-2">
            <form class="form-horizontal" method="POST" action="contact.php">
                <div class="form-group">                 
                  <div class="col-sm-10" data-aos="fade-up" data-aos-delay="100">
                    <input type="text" class="form-control" name="name" id="inputEmail3" placeholder="Your Name" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-10 col-md-10 col-sm-10" data-aos="fade-up" data-aos-delay="100">
                    <input type="text" class="form-control" name="mail" id="inputEmail3" placeholder="Your Mail" required>
                  </div>
                </div>
                    <div class="form-group">
                        
                        <div class="col-lg-10 col-md-10 col-sm-10" data-aos="fade-up" data-aos-delay="100">
                            <textarea class="form-control"  name="message"rows="3" id="ta" required></textarea>
                        </div>
                      </div>
                <div class="form-group">
                  <div class="col-lg-4 col-lg-offset-4 col-lg-4 col-lg-offset-4 col-xs-4 col-xs-offset-4">
                    <button type="submit" class="btn btn-default" name="btn" id="foem_btn" placeholder="Your Message">send </button>
                  </div>
                </div>
              </form>      
    </div>
</div>
    <?php
    include "footer.php";
    ?>
    </body>
    </html>
    <?php
if(isset($_POST['btn']))
{
  include('db.php');
  $mail="divineyogaforwomen@gmail.com";
  $tc=$_POST['name'];
  $tc1=$_POST['mail'];
  $tc2=$_POST['message'];
  $headers="";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  $insert=mysqli_query($connection,"insert into contact (name,mail,message) values ('$_POST[name]','$_POST[mail]','$_POST[message]')");
  if($insert)
  {
    if(mail($mail,"Divine yoga","Name:".$tc.",<br>"."\r\n"."E-Mail:".$tc1.",<br>"."\r\n"."Message:".$tc2,$headers))
            {
           echo '<script>window.location.href="index.php";alert("Successfully register");</script>';
            }
            else
            {
                echo '<script>window.location.href="index.php";alert("Mail is not send");</script>';
            }
  }

  }
    else
  {
    echo 'not';
  }
              //  echo '<script>window.location.href="index.php";alert("Mail is not send");</script>';


?>
