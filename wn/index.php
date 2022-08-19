<?php
include "navbar.php";
error_reporting(0);
include('db.php');
$retrieve=mysqli_query($connection,"select * from weeklyupdate");
session_start();
$_SESSION["check"] = 34;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <title>Divine Yoga</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="./bootstrap-3.4.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css-int/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="asset\Divineyoga.png" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

<style>

</style>

</head>
<body id="body">
    <div class="container-fluid">
        <div class="row">
            <div id="headBack" >
                 <div>
                     <img src="asset/shape-1.png" alt="shape" class="img-responsive" height="20%" width="20%">

                 </div>
                 <div class="col-lg-5 col-lg-offset-2">
                    <img src="asset/shape-2.png" alt="shape" class="img-responsive" height="20%" width="20%">
                </div>
                <div>
                    <img src="asset/shape-3.png" alt="shape" class="img-responsive" height="20%" width="20%" >
                </div>
                <div>
                    <img src="asset/shape.png" alt="shape" class="img-responsive col-lg-offset-3" height="20%" width="20%">
                </div>
            </div>       
        </div>
        <div style="position: relative;">
        <div class="row">
<!-- try start -->
<!-- try end -->

            <div class="col-lg-6 col-md-6 col-xs-6">
                <div class="col-lg-6 col-lg-offset-3 animated animatedFadeInUp fadeInUp" id="head_text">
                    <h3 style="line-height:1.1;font-size: 24px; color: #EB3656;text-transform: uppercase; ">Online Yoga</h3>
                   <div class="row" style="width:30em"> <h1 style="line-height:1.1; font-weight: 700;color: #121619;margin-left: 10px;">Need physical & <br> mental wellness </h1></div>
                    <h3  style="line-height:1.1;font-size: 24px; color: #EB3656;text-transform: uppercase;">Join our online yoga classes!</h3>
                </div>
            </div>
             <div class="col-lg-6 col-md-6 col-xs-12 animated animatedFadeInUp fadeInUp img-responsive" style=" position:relative; padding:0px;">
              <!-- previous img -->
             <!-- <div id="head_img">                   
                </div> -->

                <!-- new carousel -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="./asset/8C1A0356-Edit.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="./asset/8C1A7412-Edit.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="./asset/Pregnancy yoga.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <!-- <span class="glyphicon glyphicon-chevron-left"></span> -->
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <!-- <span class="glyphicon glyphicon-chevron-right"></span> -->
      <span class="sr-only">Next</span>
    </a>
  </div>
             </div>
            
           </div>
        </div>
       </div>
        </div>
    </div>
<!-- about us -->

<!-- about us end -->

<!-- OUT SERVICES -->



<!-- OUT SERVICES END -->
<!-- accordian start -->
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 " id="ourServices">
          
            <h1 data-aos="fade-up" data-aos-delay="100">Our Services</h1>
             </div>
        </div>
        <div class="row">
           <div class="col-lg-4 col-md-4 col-xs-12" >
               <div id="yoga_details">
                   <h4 style="color:#EB3656">YOGA SESSIONS </h4>
                   <ul style="list-style-type: none;">
                    <li> 
                       <h5>
                          <a href="group-yoga.php" style="text-decoration: none;" id="link">
                            <span class="material-icons" style="font-size: 18px;">
                           filter_vintage
                            </span>
                           GROUP YOGA SESSIONS
                          </a>
                         </h5>
                      </li>
                    <li> 
                       <h5>
                          <a href="pregnancy-yoga.php" style="text-decoration: none;" id="link">
                             <span class="material-icons" style="font-size: 25px;">
                              pregnant_woman
                             </span>
                            PREGNANCY YOGA
                            </a>
                           </h5>
                     </li>
                    <!-- <li>
                       <h5>
                          <a href="kids-yoga.php" style="text-decoration: none;" id="link">
                          <span class="material-icons" style="font-size: 25px;">
                            self_improvement
                          </span>
                             KIDS YOGA
                          </a>
                     </li> -->
                     <!-- <li> 
                       <h5>
                          <a href="personal-sessions.php" style="text-decoration: none;" id="link">
                          <span class="material-icons" style="font-size: 25px;">
                              connect_without_contact
                          </span>
                              PERSONAL YOGA SESSION
                            </a>
                           </h5>
                     </li> -->
                  </ul>
               </div>
           </div>
           <div class="col-lg-4 col-md-4 col-xs-12">
               <div id="yoga_details">
                   <h4 style="color:#EB3656">DIET PROGRAMS </h4>
                   <ul style="list-style-type: none;">
                    <li> 
                       <h5>
                          <a href="detox-diet.php" style="text-decoration: none;" id="link">
                            <span class="material-icons" style="font-size: 20px;">
                              ramen_dining
                            </span> 
                            DETOX DIET
                          </a>
                        </h5>
                      </li>
                      <li> 
                       <h5>
                          <a href="pcos-diet.php " style="text-decoration: none;" id="link">
                            <span class="material-icons" style="font-size: 20px;">
                              ramen_dining
                            </span> 
                           PCOS DIET
                          </a>
                        </h5>
                      </li>
                      <li> 
                       <h5>
                          <a href="postpartum-diet.php" style="text-decoration: none;" id="link">
                            <span class="material-icons" style="font-size: 20px;">
                              ramen_dining
                            </span> 
                            POSTPARTUM DIET
                          </a>
                        </h5>
                      </li>
                    <li> 
                      <h5>
                         <a href="weight-loss-diet.php" style="text-decoration: none;" id="link">
                            <span class="material-icons" style="font-size: 25px;">
                              local_dining
                            </span>
                            WEIGHTLOSS DIET
                          </a>
                      </h5>
                    </li> 
                    <li> 
                      <h5>
                         <a href="weight-gain.php" style="text-decoration: none;" id="link">
                            <span class="material-icons" style="font-size: 25px;">
                              local_dining
                            </span>
                            WEIGHTGAIN DIET
                          </a>
                      </h5>
                    </li> 
                  </ul>
               </div>
           </div>
           <div class="col-lg-4 col-md-4 col-xs-12">
             <div class="row">
               <h4 style="color:#EB3656">OTHERS </h4>
             </div>
              <div id="lastDiv">
                  <!-- <h4 style="font-size:14px;"><a href="bws.php" style="text-decoration: none;"><i class="fad fa-angel" style="font-size: 14px;"></i> BEAUTIFUL WOMEN SERIES </a></h4> -->
                  <h4 style="font-size:14px;"><a href="our-product.php" style="text-decoration: none;"><i class="fab fa-opencart" style="font-size: 14px;"></i> PRODUCTS </a></h4>
                  <h4 style="font-size:14px;"><a href="consultation.php" style="text-decoration: none; ">
                  <i class="fas fa-desktop" style="font-size: 14px;"></i> CONSULTATIONS </a></h4>
                  <h4 style="font-size:14px;"><a href="contact.php" style="text-decoration: none; "> 
                  <i class="fas fa-address-book" style="font-size: 14px;"></i> &nbsp; CONTACT</a></h4>
                  <h4 style="font-size:14px;"><a href="about.php" style="text-decoration: none; "> <i class="fas fa-user-friends" style="font-size: 14px;"></i> ABOUT</a></h4>
              </div>
           </div>
        </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 " id="ourServices">
          
          <h1 data-aos="fade-up" data-aos-delay="100" style="font-size:23px;"><b>Choose Package</b></h1>
          <h1 data-aos="fade-up" data-aos-delay="100" style="font-size:23px;">DYFW Group Yoga</h1>
           </div>
          <div class="col-lg-4">
              <div class="border">
              <div class="table basic">
                  <p class="round">
                      <span class="text">
                            
                              </span>1 month</p>
                  <!-- <div class="package-name">
           
                  </div> -->
                  <div class="features">
                       <li>Timings available: 6 AM, 9.30 AM, 6 PM IST</li>
                        <li>Monday to Friday</li>
                        <li>1 hour per session</li>
                          <!-- <span class="list-name">One Selected Template</span>
                          <span class="icon check"><i class="fas fa-check-circle"></i></span>
                      </li>
                      <li>
                          <span class="list-name">100% Responsive Design</span>
                          <span class="icon check"><i class="fas fa-check-circle"></i></span>
                      </li>
                      <li>
                          <span class="list-name">Credit Remove Permission</span>
                          <span class="icon cross"><i class="far fa-times-circle"></i></span>
                      </li>
                      <li>
                          <span class="list-name">Lifetime Template Updates</span>
                          <span class="icon cross"><i class="far fa-times-circle"></i></span>
                      </li> --> 

                      <div class="btn"><button onclick="location.href='https://imjo.in/h3PaXx';">Pay Now</button></div>
                  </div>
              </div>
          </div>
          </div>
          <div class="col-lg-4">
               <div class="border">
              <div class="table basic">
                  <p class="round">
                      <span class="text">
                            
                              </span>2 months</p>
                  <!-- <div class="package-name">
           
                  </div> -->
                  <div class="features">
                       <li>Timings available: 6 AM, 9.30 AM, 6 PM IST</li>
                           <li>Monday to Friday</li>
                           <li>1 hour per session</li>
                          <!-- <span class="list-name">One Selected Template</span>
                          <span class="icon check"><i class="fas fa-check-circle"></i></span>
                      </li>
                      <li>
                          <span class="list-name">100% Responsive Design</span>
                          <span class="icon check"><i class="fas fa-check-circle"></i></span>
                      </li>
                      <li>
                          <span class="list-name">Credit Remove Permission</span>
                          <span class="icon cross"><i class="far fa-times-circle"></i></span>
                      </li>
                      <li>
                          <span class="list-name">Lifetime Template Updates</span>
                          <span class="icon cross"><i class="far fa-times-circle"></i></span>
                      </li> -->  
                      <div class="btn"><button onclick="location.href='https://imjo.in/h3PaXx';">Pay Now</button></div>
                  </div>
              </div>
              </div>
          </div>
          <div class="col-lg-4">
              <div class="border">
              <div class="table basic">
                  <p class="round">
                      <span class="text">
                            
                              </span>3 months</p>
                  <!-- <div class="package-name">
           
                  </div> -->
                  <div class="features">
                       <li>Timings available: 6 AM, 9.30 AM, 6 PM IST</li>
                        <li>Monday to Friday</li>
                        <li>1 hour per session</li>
                          <!-- <span class="list-name">One Selected Template</span>
                          <span class="icon check"><i class="fas fa-check-circle"></i></span>
                      </li>
                      <li>
                          <span class="list-name">100% Responsive Design</span>
                          <span class="icon check"><i class="fas fa-check-circle"></i></span>
                      </li>
                      <li>
                          <span class="list-name">Credit Remove Permission</span>
                          <span class="icon cross"><i class="far fa-times-circle"></i></span>
                      </li>
                      <li>
                          <span class="list-name">Lifetime Template Updates</span>
                          <span class="icon cross"><i class="far fa-times-circle"></i></span>
                      </li> -->  
                      <div class="btn"><button onclick="location.href='https://imjo.in/h3PaXx';">Pay Now</button></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
  
  <div class="row">
    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 " id="ourServices">
          
        <h1 data-aos="fade-up" data-aos-delay="100"style="font-size:23px;">DYFW Other Programs</h1>
         </div>
      <div class="col-lg-4">
          <div class="border">
          <div class="table basic">
              <p class="round">
                  <span class="text">
                            
                          </span> PCOS Yoga</p>
              <!-- <div class="package-name">
       
              </div> -->
              <div class="features">
                   <li>Time: 6 PM IST</li>
                    <li>Monday to Friday</li>
                    <li>1 hour per session</li>
                    <li>10 days diet plan</li>                           
                      <!-- <span class="list-name">One Selected Template</span>
                      <span class="icon check"><i class="fas fa-check-circle"></i></span>
                  </li>
                  <li>
                      <span class="list-name">100% Responsive Design</span>
                      <span class="icon check"><i class="fas fa-check-circle"></i></span>
                  </li>
                  <li>
                      <span class="list-name">Credit Remove Permission</span>
                      <span class="icon cross"><i class="far fa-times-circle"></i></span>
                  </li>
                  <li>
                      <span class="list-name">Lifetime Template Updates</span>
                      <span class="icon cross"><i class="far fa-times-circle"></i></span>
                  </li> -->  
                  <div class="btn"><button onclick="location.href='https://imjo.in/wHg5FW';">Pay Now</button></div>
              </div>
          </div>
      </div>
      </div>
      <div class="col-lg-4">
           <div class="border">
          <div class="table basic">
              <p class="round">
                  <span class="text">
                            <!-- &#8377; -->
                          </span>Pregnancy Yoga</p>
              <!-- <div class="package-name">
       
              </div> -->
              <div class="features">
                   <li>Timings available: 7 AM & 6 PM IST</li>
                   <li>Days: Mon, Wed, Fri</li>
<li></li>
<li></li>
<li></li>              
<li></li>              
                      <!-- <span class="list-name">One Selected Template</span>
                      <span class="icon check"><i class="fas fa-check-circle"></i></span>
                  </li>
                  <li>
                      <span class="list-name">100% Responsive Design</span>
                      <span class="icon check"><i class="fas fa-check-circle"></i></span>
                  </li>
                  <li>
                      <span class="list-name">Credit Remove Permission</span>
                      <span class="icon cross"><i class="far fa-times-circle"></i></span>
                  </li>
                  <li>
                      <span class="list-name">Lifetime Template Updates</span>
                      <span class="icon cross"><i class="far fa-times-circle"></i></span>
                  </li> -->  
                  <div class="btn"><button onclick="location.href='contact.php'">Contact us</button></div>
              </div>
          </div>
          </div>
      </div>
      <div class="col-lg-4">
          <div class="border">
          <div class="table basic">
              <p class="round">
                  <span class="text">
                            <!-- &#8377; -->
                          </span>Postpartum Yoga</p>
              <!-- <div class="package-name">
       
              </div> -->
              <div class="features">
                   <li>Time:6 PM IST</li>
                    <li>Days: Mon, Wed, Fri</li>
                    <li></li>
                    <li></li>
                    <li></li>              

                    

                      <!-- <span class="list-name">One Selected Template</span>
                      <span class="icon check"><i class="fas fa-check-circle"></i></span>
                  </li>
                  <li>
                      <span class="list-name">100% Responsive Design</span>
                      <span class="icon check"><i class="fas fa-check-circle"></i></span>
                  </li>
                  <li>
                      <span class="list-name">Credit Remove Permission</span>
                      <span class="icon cross"><i class="far fa-times-circle"></i></span>
                  </li>
                  <li>
                      <span class="list-name">Lifetime Template Updates</span>
                      <span class="icon cross"><i class="far fa-times-circle"></i></span>
                  </li> -->  
                  <div class="btn"><button onclick="location.href='https://imjo.in/Hxgreu';">Pay Now</button></div>
              </div>
          </div>
      </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-4">
      <div class="border">
      <div class="table basic">
          <p class="round">
              <span class="text">
                        <!-- &#8377; -->
                      </span>Meditation Sessions</p>
          <!-- <div class="package-name">
   
          </div> -->
          <div class="features">
               <li>Time: 6.30 PM IST</li>
                <li>Days: Mon to Fri</li>
                <li>Duration: 30 mins</li>
                   
                  <!-- <span class="list-name">One Selected Template</span>
                  <span class="icon check"><i class="fas fa-check-circle"></i></span>
              </li>
              <li>
                  <span class="list-name">100% Responsive Design</span>
                  <span class="icon check"><i class="fas fa-check-circle"></i></span>
              </li>
              <li>
                  <span class="list-name">Credit Remove Permission</span>
                  <span class="icon cross"><i class="far fa-times-circle"></i></span>
              </li>
              <li>
                  <span class="list-name">Lifetime Template Updates</span>
                  <span class="icon cross"><i class="far fa-times-circle"></i></span>
              </li> -->  
              <div class="btn"><button onclick="location.href='https://imjo.in/p5Bvp7';">Pay Now</button></div>
          </div>
      </div>
  </div>
  </div>
  <div class="col-lg-4">
       <div class="border">
      <div class="table basic">
          <p class="round">
              <span class="text">
                        <!-- &#8377; -->
                      </span>Detox Diet</p>
          <!-- <div class="package-name">
   
          </div> -->
          <div class="features">
               <li>10 days diet</li>
               <li>Through Whatsapp group</li>
               <li></li>
               <li></li>
               <li></li>              
               <li></li>
               
               
                  <!-- <span class="list-name">One Selected Template</span>
                  <span class="icon check"><i class="fas fa-check-circle"></i></span>
              </li>
              <li>
                  <span class="list-name">100% Responsive Design</span>
                  <span class="icon check"><i class="fas fa-check-circle"></i></span>
              </li>
              <li>
                  <span class="list-name">Credit Remove Permission</span>
                  <span class="icon cross"><i class="far fa-times-circle"></i></span>
              </li>
              <li>
                  <span class="list-name">Lifetime Template Updates</span>
                  <span class="icon cross"><i class="far fa-times-circle"></i></span>
              </li> -->  
              <div class="btn"><button onclick="location.href='detox-diet.php'">More Details</button></div>
          </div>
      </div>
      </div>
  </div>
  <div class="col-lg-4">
      <div class="border">
      <div class="table basic">
          <p class="round">
              <span class="text">
                        <!-- &#8377; -->
                      </span>Europe Sessions</p>
          <!-- <div class="package-name">
   
          </div> -->
          <div class="features">
               <li>Time: 6 AM CET</li>
                <li>Monday to Friday</li>
                <li>1 hour per session</li>
                <li></li>
               <li></li>
               
                  
                  <!-- <span class="list-name">One Selected Template</span>
                  <span class="icon check"><i class="fas fa-check-circle"></i></span>
              </li>
              <li>
                  <span class="list-name">100% Responsive Design</span>
                  <span class="icon check"><i class="fas fa-check-circle"></i></span>
              </li>
              <li>
                  <span class="list-name">Credit Remove Permission</span>
                  <span class="icon cross"><i class="far fa-times-circle"></i></span>
              </li>
              <li>
                  <span class="list-name">Lifetime Template Updates</span>
                  <span class="icon cross"><i class="far fa-times-circle"></i></span>
              </li> -->  
              <div class="btn"><button onclick="location.href='contact.php'">Contact Us</button></div>
          </div>
      </div>
  </div>
</div>
</div>


<!-- accordian end -->
<!-- client form starts -->

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 " id="ourServices">
  
    <h1 data-aos="fade-up" data-aos-delay="100">Registration  </h1>
     </div>
</div>
      <div class="row">
        <div
          class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12"
        >
          <form action="" method="POST">
            <div class="form-group">
              <!-- <label for="exampleInputEmail1">Email address</label> -->
              <input
                type="email"
                class="form-control"
                name="mail"
                id="inputEmail3"
                placeholder="Email"
                required
              />
            </div>
            <div class="form-group">
              <!-- <label for="exampleInputPassword1">Name</label> -->
              <input
                type="text"
                class="form-control"
                name="name"
                id="inputEmail3"
                placeholder="Name"
                required
              />
            </div>
            <div class="form-group">
              <!-- <label for="exampleInputPassword1"
                >Whatsapp Number (with Code)
              </label> -->
              <input
                type="tel"
                class="form-control"
                name="wp_number"
                id="inputEmail3"
                placeholder="Whatsapp Number"
                required
              />
            </div>
            <div class="form-group">
              <!-- <label for="exampleInputPassword1"
                >Contact Number (with Code)
              </label> -->
              <input
                type="text"
                class="form-control"
                name="contact_number"
                id="inputEmail3"
                placeholder="Contact Number"
                required
              />
            </div>
            <div class="form-group">
              <!-- <label for="exampleInputPassword1"
                >Country that you are residing currently
              </label> -->
              <input
                type="text"
                class="form-control"
                name="country"
                id="inputEmail3"
                placeholder="Country that you are residing currently"
                required
              />
            </div>
            <div class="form-group">
              <!-- <label for="exampleInputPassword1"
                >Are you a beginner in yoga?
              </label> -->
              <input
                type="text"
                class="form-control"
                name="beginner"
                id="inputEmail3"
                placeholder="Are you a beginner in yoga?"
                required
              />
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1"
                >What online classes are you interested in?
              </label>
              <select class="form-control" name="class" id="inputEmail3" required>
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
              <!-- <label for="exampleInputPassword1"
                >Do you have any health issues?
              </label> -->
              <input
                type="text"
                class="form-control"
                name="health_issue"
                id="inputEmail3"
                placeholder="Do you have any health issues ?"
                required
              />
            </div>
            <div class="form-group">
              <!-- <label for="exampleInputPassword1"
                >Your available time for call?
              </label> -->
              <input
                type="text"
                class="form-control"
                name="time"
                id="inputEmail3"
                placeholder="Your available time for call ?"
                required
              />
            </div>
            <center>
            <button type="submit" name="btn" id="foem_btn" class="btn btn-default">Submit</button>
          </center>
          </form>
        </div>
      </div>
    </div>

    <?php
    // $con = mysqli_connect("localhost","root","","yoga");
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
    
    
      // echo $mail."<br/>";
      // echo $name."<br/>";
      // echo $wp_number."<br/>";
      // echo $contact_number."<br/>";
      // echo $country."<br/>";
      // echo $beginner."<br/>";
      // echo $class."<br/>";
      // echo $health_issue."<br/>";
      // echo $time."<br/>";
    
    
      $insert = "insert into client (mail,name,wp_number,contact_number,country,beginner,class,health_issue,time)
                 values('$mail','$name','$wp_number','$contact_number','$country','$beginner','$class','$health_issue','$time')";
    
      // if(mysqli_query($connection,$insert)){
      //   echo "<script>alert('Registerd Successfully')</script>";  
      // }
      if(mail($mail,"Divine yoga","Name:".$name.",<br>"."\r\n"."E-Mail:".$mail.",<br>"."\r\n"."Whatsapp Number :".$wp_number.",<br>"."\r\n"."Contact Number 
      :".$contact_number.",<br>"."\r\n"."Country:".$country.",<br>"."\r\n"."beginner:".$beginner.",<br>"."\r\n"."class:".$class.",<br>"."\r\n"."health_issue:".$health_issue.",<br>"."\r\n"."time:".$time,$headers)){
        echo "<script>alert('Registerd Successfully')</script>";  
      }else{
        echo "<script>alert('Registration Failed')</script>";  
      }
    }
    
    ?>


<!-- client form ends  -->

<div class="container">
  <div class="row">
    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1" id="ourServices">
    <h1 data-aos="fade-up" data-aos-delay="100">Group Yoga Schedule</h1>
     </div>
</div>
<div class="row"> 
    <div class="col-lg-12 col-md-12 col-xs-12" style="margin-top: 2%;">
    
  <div class="table-responsive">          
  <table class="table" style="border-radius: 25px 0 0 0;">
    <thead>
      <tr class="danger">
        <th>Weeks</th>
        <th>Monday</th>
        <th>Tuesday</th>
        <th>Wednesday</th>
        <th>Thursday</th>
        <th>Friday</th>
        <th>Saturday</th>
      </tr>
    </thead>
    <tbody>
    <?php
    while($fetch=mysqli_fetch_assoc($retrieve))
    {
    ?>
                <tr>
                    <th scope="row" name="1" ><?php echo $fetch['week'];?></th>
                    <td><?php echo $fetch['monday'];?></td>
                    <td><?php echo $fetch['tuesday'];?></td>
                    <td><?php echo $fetch['wedneday'];?></td>
                    <td><?php echo $fetch['thursday'];?></td>
                    <td><?php echo $fetch['friday'];?></td>
                    <td><?php echo $fetch['saturday'];?></td>
                  </tr>
                   
    <?php
    }
    ?>
      
    </tbody>
  </table>
  </div>
</div>
  </div>
</div>
<!-- Our Expert Designers -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1" id="ourServices">
      
        <h1  data-aos="fade-up" data-aos-delay="100">Our Mission</h1>
         </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1  animated animatedFadeInUp fadeInUp" >
            <div style="text-align: center;">
               <p style="font-size:14px">Right from adolescence to motherhood, menopause and old age, women undergo many life changes. A daily Yoga Routine can be modified and adapted to suit a woman’s changing needs in each phase of life, helping her to achieve peace of mind and bodily poise.
                Divine Yoga for Women's mission is to help every women by teaching a variety of yoga routines, which can be practiced in the comfort of her home.</p>
            </div>
        </div>
</div>
</div>
</div>
<!-- Our Expert Designers end -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12" id="ourServices">
            <div style="text-align:center; margin-top: 2%;">
           
            <h1  data-aos="fade-up" data-aos-delay="200">The Team</h1>
            <p style="color:#333333; font-size:14px;">We are a community of talented teacher-leaders who are passionate about teaching you. Each teacher brings their own unique style, and all of their classes are designed to be challenging, fun, and empowering.</p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row"  style="margin-top: 5%;">
        <div class="col-lg-6 col-md-12 col-xs-12">
            <div>
                <center>
                <img src="./asset/Sathya.jpeg" alt="Avatar" height="30%" width="30%"  data-aos="fade-right" data-aos-delay="150">

                </center>
                <div style="text-align: center;">
                <a href="ceo.php" style="text-decoration: none;">  <h3 style="color: #EB3656;"> Sathyapriya A </h3></a>
                <p> Founder & CEO</p>

                <a href="https://www.facebook.com/sathyapriya.anand"><i class="fa fa-facebook" style="font-size: 25px; "></i></a> &nbsp; &nbsp; 
                <a href="https://instagram.com/sathyapriya_anandhajothi"><i class="fa fa-instagram"  style="font-size: 25px;"></i></a>
               </div>
            </div> 
        </div>
        <div class="col-lg-6 col-md-12 col-xs-12">
           
            <div>
                <center>
                <img src="./asset/Saranya A.jpeg" alt="Avatar" height="30%" width="30%" data-aos="fade-left" data-aos-delay="150">

                </center>
                <div style="text-align: center;">
                <a href="director.php" style="text-decoration: none;"> <h3 style="color: #EB3656;">  Saranya A  </h3></a>
                <p>Director</p>
                <a href="https://www.facebook.com/SaranyaAnandhajothi"><i class="fa fa-facebook" style="font-size: 25px; "></i></a> &nbsp; &nbsp; 
                <a href="https://instagram.com/saranya_anandhajothi"><i class="fa fa-instagram"  style="font-size: 25px;"></i></a> 
                </div>                
            </div>  
        </div>

<div class="col-lg-10 col-md-12 col-xs-10 col-xs-offset-1">
        <div class="embed-responsive embed-responsive-16by9" style="margin-top:3%;">
             <iframe class="embed-responsive-item" src="./asset/video3.mp4" allowfullscreen></iframe>
        </div>
</div>
    </div>
</div>  



<!-- contact us -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1" id="ourServices">
        <h3 >contact us</h3>  
        <h1 data-aos="fade-up" data-aos-delay="100">Get in touch</h1>
         </div>
    </div>
    <div class="row">
        <div class="col-lg-7 col-lg-offset-3 col-md-8 col-md-offset-2">
            <form class="form-horizontal" method="POST" action="index.php">
                <div class="form-group">                 
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="inputEmail3" placeholder="Your Name" required>
                  </div>
                </div>
                <div class="form-group">
                  
                  <div class="col-lg-10 col-md-10 col-sm-10">
                    <input type="text" class="form-control" name="mail" id="inputEmail3" placeholder="Your Mail" required>
                  </div>
                </div>
              
                    <div class="form-group">
                      
                      <div class="col-lg-10 col-md-10 col-sm-10">
                        <input type="text" class="form-control" name="subject" id="inputEmail3" placeholder="Subject" required>
                      </div>
                    </div>
                    <div class="form-group">
                      
                      <div class="col-lg-10 col-md-10 col-sm-10">
                        <input type="tel" maxlength="10" name="mob" class="form-control" id="inputEmail3" placeholder="Phone" required>
                      </div>
                    </div>
                    <div class="form-group">
                        
                        <div class="col-lg-10 col-md-10 col-sm-10">
                            <textarea class="form-control" name="message" rows="3" id="ta" placeholder="Message" required></textarea>
                        </div>
                      </div>
                <div class="form-group">
                  <div class="col-lg-4 col-lg-offset-4 col-lg-4 col-lg-offset-4 col-xs-4 col-xs-offset-4">
                    <button type="submit" class="btn btn-default" id="foem_btn" name="btn" placeholder="Your Message">Send</button>
                  </div>
                </div>
              </form>      
    </div>
</div>

<!-- contact us end -->
<!-- footer start -->
<?php
 include "footer.php";
?>
<button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
    <span class="material-icons">
        keyboard_double_arrow_up
        </span>
  </button>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="./js/index.js"></script>
    <script src="bootstrap-3.4.1-dist/js/bootstrap.js"></script>
</body>
</html>
<?php
if(isset($_POST['btn']))
{
  $mail="divineyogaforwomen@gmail.com";
  $tc=$_POST['name'];
  $tc1=$_POST['mail'];
  $tc2=$_POST['subject'];
  $tc3=$_POST['mob'];
  $tc4=$_POST['message'];
  $headers="";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  $insert=mysqli_query($connection,"insert into home (name,mail,subject,phone,message) values ('$_POST[name]','$_POST[mail]','$_POST[subject]','$_POST[mob]','$_POST[message]')");
  if($insert)
  {
    if(mail($mail,"Divine yoga","Name:".$tc.",<br>"."\r\n"."E-Mail:".$tc1.",<br>"."\r\n"."Subject:".$tc2.",<br>"."\r\n"."Mobile:".$tc3.",<br>"."\r\n"."Message:".$tc4,$headers))
            {
                echo '<script>window.location.href="index.php";alert("Successfully register");</script>';
            }
            else
            {
                echo '<script>window.location.href="index.php";alert("Mail is not send");</script>';
            }
  }
  else
  {
    echo 'not';
  }
}
?>