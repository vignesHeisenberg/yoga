<?php
session_start();
?>

<html>
    <head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Divineyogaforwomen</title>
<link href="bootstrap-3.2.0/dist/css/bootstrap.min.css" rel="stylesheet"> 
<link href="css/c_style.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
    <style>
        body
        {
            /* background-color: rgba(235,54,86,0.03137254901960784); */
            background-color: pink;

            /* background: -webkit-linear-gradient(left, #ff3e75, #ff75a6);
            background: -o-linear-gradient(left,#ff3e75,#ff75a6); */
            background-position: fixed;
            background-repeat: no-repeat;
        }
        .frame
        {
            background-color: white;
            margin-top: 130px;
            border-radius:30px;
        }
        @media only screen and (max-width:767px){
        .frame
        {  
            background-color: white;
            margin-top: 30px;
            border-radius:30px;
            margin-top:100px;
        }
        }
        #main-font
        {
            font-size:3em; 
            color:#333333; 
            margin-top:30px;    
        }
        
        #txtbox
        {
            width:400px;
        }
        
        #btn
        {
            padding:20px;
        }
        #btn1
        {
            border-radius:20px; 
            height:50px;
            border:none;
            outline:none;
        }
        
    .btn-gar
    {
       background: #EB3656;
    }
    .btn-gar:hover{
        background: #EB3656;
    }
</style>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="./asset/Divineyoga.png" alt="logo" height="100%" width="100%"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="./index.php">Home</a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 bgimg col-xs-12" id="img">
                <div class="col-lg-6 col-lg-offset-3 col-xs-10 col-xs-offset-1 frame">
                    <div class="col-lg-6 col-lg-offset-4 col-xs-10 col-xs-offset-3" id="main-font">
                       <b>Admin</b>
                    </div>
<form method="POST" action="demo1.php">
                    <div class="form-group col-lg-10 col-lg-offset-1" style="margin-top:30px;">
                        <label for="Name">Name</label>
                        <input type="text" class="form-control" name="name" id="name">
                      </div>

                      <div class="form-group col-lg-10 col-lg-offset-1" style="margin-top:15px;">
                        <label for="email">Password</label>
                        <input type="password" class="form-control" name="pass" id="email">
                      </div>

                      <div class="row">
                          <div class="col-lg-10 col-xs-12 " id="btn">
                            <input type="submit" class="btn btn-primary col-lg-8 col-xs-6 col-xs-offset-3 btn-gar" id="btn1" name="btn" value="Login">
                        </div>
</form>
                    </div>
					</div>
                </div>     
          </div>
        </div>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>   
  </body>
</html>

<?php


include('db.php');
// error_reporting(0);

$_SESSION["check"] = 34;

// echo $_SESSION["check"]; 
if(isset($_POST['btn']))
{
    
$check=mysqli_query($connection,"select * from login where name='$_POST[name]' and password='$_POST[pass]'");
$retrieve=mysqli_fetch_array($check,MYSQLI_ASSOC);
$row=mysqli_num_rows($check);
if($row==1)
{

    $_SESSION["check"] = 35;
    echo '<meta http-equiv="refresh" content="1;URL=demo2.php">';

}
else
{
    
    $_SESSION["check"] = 34;
    echo '<script>alert("something went wrong");</script>';

}
}
