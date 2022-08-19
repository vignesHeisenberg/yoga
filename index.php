<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>form</title>
    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css"
      integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu"
      crossorigin="anonymous"
    />

    <!-- Optional theme -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css"
      integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div
          class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12"
        >
          <form action="" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input
                type="email"
                class="form-control"
                name="mail"
                id="exampleInputEmail1"
                placeholder="Email"
                required
              />
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Name</label>
              <input
                type="text"
                class="form-control"
                name="name"
                id="exampleInputPassword1"
                placeholder="Name"
                required
              />
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1"
                >Whatsapp Number (with Code)
              </label>
              <input
                type="tel"
                class="form-control"
                name="wp_number"
                id="exampleInputPassword1"
                placeholder="Whatsapp Number"
                required
              />
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1"
                >Contact Number (with Code)
              </label>
              <input
                type="text"
                class="form-control"
                name="contact_number"
                id="exampleInputPassword1"
                placeholder="Contact Number"
                required
              />
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1"
                >Country that you are residing currently
              </label>
              <input
                type="text"
                class="form-control"
                name="country"
                id="exampleInputPassword1"
                placeholder="Country that you are residing currently"
                required
              />
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1"
                >Are you a beginner in yoga?
              </label>
              <input
                type="text"
                class="form-control"
                name="beginner"
                id="exampleInputPassword1"
                placeholder="Are you a beginner in yoga?"
                required
              />
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1"
                >What online classes are you interested in?
              </label>
              <select class="form-control" name="class" required>
                <option value="Yoga for Women">Yoga for Women</option>
                <option value="Yoga for Men">Yoga for Men</option>
                <option value="Pregnancy Yoga">Pregnancy Yoga</option>
                <option value="Meditation sessions">Meditation sessions</option>
                <option value="Europe Timezone Sessions">
                  Europe Timezone Sessions
                </option>
                <option value="Detox diet">Detox diet</option>
                <option value="Yoga with Diet">Yoga with Diet</option>
                <option value="Help me to choose">Help me to choose</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1"
                >Do you have any health issues?
              </label>
              <input
                type="text"
                class="form-control"
                name="health_issue"
                id="exampleInputPassword1"
                placeholder="Do you have any health issues ?"
                required
              />
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1"
                >Your available time for call?
              </label>
              <input
                type="text"
                class="form-control"
                name="time"
                id="exampleInputPassword1"
                placeholder="Your available time for call ?"
                required
              />
            </div>
            <button type="submit" name="btn" class="btn btn-default">Submit</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Latest compiled and minified JavaScript -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js"
      integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
      crossorigin="anonymous"
    ></script>
  
   
  </body>
</html>
<?php
$con = mysqli_connect("localhost","root","","yoga");
if(isset($_POST['btn']))
{


  $mail = $_POST['mail'];  
  $name = $_POST['name'];  
  $wp_number = $_POST['wp_number'];
  $contact_number = $_POST['contact_number'];
  $country = $_POST['country'];
  $beginner = $_POST['beginner'];
  $class = $_POST['class'];
  $health_issue = $_POST['health_issue'];
  $time = $_POST['time'];


  echo $mail."<br/>";
  echo $name."<br/>";
  echo $wp_number."<br/>";
  echo $contact_number."<br/>";
  echo $country."<br/>";
  echo $beginner."<br/>";
  echo $class."<br/>";
  echo $health_issue."<br/>";
  echo $time."<br/>";


  $insert = "insert into client (mail,name,wp_number,contact_number,country,beginner,class,health_issue,time)
             values('$mail','$name','$wp_number','$contact_number','$country','$beginner','$class','$health_issue','$time')";

  if(mysqli_query($con,$insert)){
    echo "registered";  
  }

}

?>