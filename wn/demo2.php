<?php
session_start();
// error_reporting();
include('db.php');
// echo $_SESSION["check"];


$c = $_SESSION["check"];
if( $c == 35)
{
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
#textbox1
{
    border:none;
    outline: none;
}

#btn1
{
    background-color: #eb3656;
    color:white;
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
        <form action="demo2.php" method="POST">
        <li><button type="submit" name="logout" class="btn btn-primary">Log-out</button></li>
        </form>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <dic class="container">
        <div class="row">
        <div class="col-lg-12 col-xs-12">
          <form method="POST" action="demo2.php">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">WEEKS</th>
                    
                    <th scope="col">MONDAY</th>
                    <th scope="col">TUESDAY</th>
                    <th scope="col">WEDNESDAY</th>
                    <th scope="col">THRUSDAY</th>
                    <th scope="col">FRIDAY</th>
                    <th scope="col">SATURDAY</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row" name="1" >1</th>
                    <td><input type="text" id="textbox1" name="m1" placeholder="Text"></td>
                    <td><input type="text" id="textbox1" name="t1" placeholder="Text"></td>
                    <td><input type="text" id="textbox1" name="w1" placeholder="Text"></td>
                    <td><input type="text" id="textbox1" name="th1" placeholder="Text"></td>
                    <td><input type="text" id="textbox1" name="f1" placeholder="Text"></td>
                    <td><input type="text" id="textbox1" name="s1" placeholder="Text"></td>
                  </tr>
                  <tr>
                    <th scope="row" name="2">2</th>
                    <td><input type="text" id="textbox1" name="m2" placeholder="Text"></td>
                    <td><input type="text" id="textbox1" name="t2" placeholder="Text"></td>
                    <td><input type="text" id="textbox1" name="w2" placeholder="Text"></td>
                    <td><input type="text" id="textbox1" name="th2"placeholder="Text"></td>
                    <td><input type="text" id="textbox1" name="f2" placeholder="Text"></td>
                    <td><input type="text" id="textbox1" name="s2" placeholder="Text"></td>
                  </tr>
                  <tr>
                    <th scope="row"  name="3">3</th>
                    <td><input type="text" id="textbox1" name="m3"  placeholder="Text"></td>
                    <td><input type="text" id="textbox1" name="t3"  placeholder="Text"></td>
                    <td><input type="text" id="textbox1" name="w3"  placeholder="Text"></td>
                    <td><input type="text" id="textbox1" name="th3" placeholder="Text"></td>
                    <td><input type="text" id="textbox1" name="f3"  placeholder="Text"></td>
                    <td><input type="text" id="textbox1" name="s3"  placeholder="Text"></td>
                  </tr>
                  <tr>
                    <th scope="row" name="4">4</th>
                    <td><input type="text" id="textbox1" name="m4" placeholder="Text"></td>
                    <td><input type="text" id="textbox1" name="t4" placeholder="Text"></td>
                    <td><input type="text" id="textbox1"name="w4"  placeholder="Text"></td>
                    <td><input type="text" id="textbox1"name="th4" placeholder="Text"></td>
                    <td><input type="text" id="textbox1" name="f4" placeholder="Text"></td>
                    <td><input type="text" id="textbox1" name="s4" placeholder="Text"></td>
                  </tr>
                  
                </tbody>
              </table>
          
              <div class="row">
                <div class="col-lg-10 col-xs-12 " id="btn">
                  <input type="submit" class="btn col-lg-4 col-lg-offset-5 col-xs-4 col-xs-offset-4 btn-gar" name="btn1" value="SUBMIT">
              </div>
              <br>
              <br>
              <br>
              <div class="row">
                <div class="col-lg-10 col-xs-12 " id="btn">
                  <input type="submit" class="btn col-lg-4 col-lg-offset-5 col-xs-4 col-xs-offset-4 btn-gar" name="delete" value="DELETE">
              </div>
            </form>
        </div>
    </div>
    </dic>
    
</body>
</html>

<?php 
}
else
  echo '404 ERROR';

if(isset($_POST['logout']))
{
  session_destroy();
  echo '<meta http-equiv="refresh" content="1;URL=index.php">';

}


if(isset($_POST['delete']))
{
  mysqli_query($connection,"delete from weeklyupdate");
}
if(isset($_POST['btn1']))
{
    // echo $_POST['t1'];
    $name=1;
    mysqli_query($connection,"delete from weeklyupdate");
    $insert1=mysqli_query($connection,"insert into weeklyupdate(week,monday,tuesday,wedneday,thursday,friday,saturday) values('$name','$_POST[m1]','$_POST[t1]','$_POST[w1]','$_POST[th1]','$_POST[f1]','$_POST[s1]')");
    

    $insert2=mysqli_query($connection,"insert into weeklyupdate(week,monday,tuesday,wedneday,thursday,friday,saturday) values('2','$_POST[m1]','$_POST[t2]','$_POST[w2]','$_POST[th2]','$_POST[f2]','$_POST[s2]')");
    $insert3=mysqli_query($connection,"insert into weeklyupdate(week,monday,tuesday,wedneday,thursday,friday,saturday) values('3','$_POST[m3]','$_POST[t3]','$_POST[w3]','$_POST[th3]','$_POST[f3]','$_POST[s3]')");
    $insert4=mysqli_query($connection,"insert into weeklyupdate(week,monday,tuesday,wedneday,thursday,friday,saturday) values('4','$_POST[m4]','$_POST[t4]','$_POST[w4]','$_POST[th4]','$_POST[f4]','$_POST[s4]')");
   
    if($insert1 && $insert2 && $insert3 && $insert4)
    { 
      echo '<meta http-equiv="refresh" content="1;URL=index.php">';
    }
    else
    {       echo '<script>alert("Something went wrong");</script>';
    }
}
?>