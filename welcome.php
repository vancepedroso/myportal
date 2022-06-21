<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<nav class="flex align-center">
  <p><span>Code</span>pen</p>
  <ul>
    <li class="big-screens">
      <a href="welcome.php">Home</a>
      <a href="#">Store</a>
      <a href="#">About Us</a>
      <a href="logout.php" class="btn btn-danger ml-3">Sign Out</a>
    </li>
    <li class="small-screens">
      <i class="fa-solid fa-bars"></i>
    </li>
  </ul>
</nav>

<body>

    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-warning">Report a Problem</a>
       

        <!--<a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>-->
    </p>
   
   <br>

   <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="card shadow">
                <img src="https://drive.google.com/uc?export=view&id=1aj_vT5zjJlkdEQ_VcCsdnvpVBi-Fjwyb" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2 class="card-title"><a href="#">EMAIL</a></h2>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="card shadow">
                <img src="https://drive.google.com/uc?export=view&id=1aj_vT5zjJlkdEQ_VcCsdnvpVBi-Fjwyb" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2 class="card-title"><a href="#">HRIS</a></h2>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="card shadow">
                <img src="https://drive.google.com/uc?export=view&id=1aj_vT5zjJlkdEQ_VcCsdnvpVBi-Fjwyb" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2 class="card-title"><a href="#">PAYROLL</a></h2>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
               
            </div>
        </div>
    </div>
</div>




<div id="bkgOverlay" class="backgroundOverlay"></div>
  
<div id="delayedPopup" class="delayedPopupWindow">
  <!-- This is the close button -->
  <a href="#" id="btnClose" title="Click here to close this deal box.">[ X ]</a>
  <!-- This is the left side of the popup for the description -->
  <div class="formDescription">
    <h2>Sign Up and <span style="color: #40c348; font-weight: bold;">Save $25!</span></h2>
    <p>Sign up for our Deal Alerts and save
      $25 Off of your first order of $50 or more!</p>
  </div>
  <!-- Begin MailChimp Signup Form -->
  <div id="mc_embed_signup">
    <form action="" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
      <div class="mc-field-group">
        <label for="mce-FNAME">First Name
          <span class="asterisk">*</span>
        </label>
        <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
      </div>
      <div class="mc-field-group">
        <label for="mce-LNAME">Last Name
          <span class="asterisk">*</span>
        </label>
        <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
      </div>
      <div class="mc-field-group">
        <label for="mce-EMAIL">Email Address
          <span class="asterisk">*</span>
        </label>
        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
      </div>

      <div id="mce-responses" class="clear">
        <div class="response" id="mce-error-response" style="display:none"></div>
        <div class="response" id="mce-success-response" style="display:none"></div>
      </div>
      <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
      <div style="position: absolute; left: -5000px;">
        <input type="text" name="b_2aabb98e55b83ba9d3bd551f5_e6c08b53b4" value="">
      </div>
      <div class="clear">
        <input type="submit" value="Save Money!" name="subscribe" id="mc-embedded-subscribe" class="button">
      </div>
    </form>
  </div>
  <!-- End MailChimp Signup Form -->
</div>


<footer class="new_footer_area bg_color">
            <div class="new_footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Get in Touch</h3>
                                <p>Don’t miss any updates of our new templates and extensions.!</p>
                                <form action="#" class="f_subscribe_two mailchimp" method="post" novalidate="true" _lpchecked="1">
                                    <input type="text" name="EMAIL" class="form-control memail" placeholder="Email">
                                    <button class="btn btn_get btn_get_two" type="submit">Subscribe</button>
                                    <p class="mchimp-errmessage" style="display: none;"></p>
                                    <p class="mchimp-sucmessage" style="display: none;"></p>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Download</h3>
                                <ul class="list-unstyled f_list">
                                    <li><a href="#">Company</a></li>
                                    <li><a href="#">Android App</a></li>
                                    <li><a href="#">ios App</a></li>
                                    <li><a href="#">Desktop</a></li>
                                    <li><a href="#">Projects</a></li>
                                    <li><a href="#">My tasks</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Help</h3>
                                <ul class="list-unstyled f_list">
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Term &amp; conditions</a></li>
                                    <li><a href="#">Reporting</a></li>
                                    <li><a href="#">Documentation</a></li>
                                    <li><a href="#">Support Policy</a></li>
                                    <li><a href="#">Privacy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Team Solutions</h3>
                                <div class="f_social_icon">
                                    <a href="#" class="fab fa-facebook"></a>
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-linkedin"></a>
                                    <a href="#" class="fab fa-pinterest"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_bg">
                    <div class="footer_bg_one"></div>
                    <div class="footer_bg_two"></div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-sm-7">
                            <p class="mb-0 f_400">© Codepen 2022 All rights reserved.</p>
                        </div>
                        <div class="col-lg-6 col-sm-5 text-right">
                            <p>Made with <i class="icon_heart"></i> in <a href="http://cakecounter.com" target="_blank">CakeCounter</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
<style>
    /* GOOGLE FONTS */
@import url("https://fonts.googleapis.com/css?family=Montserrat:400,400i,700");

/* CSS RESET */

*,
*::before,
*::after {
  box-sizing: border-box;
}
body {
    background: #fbfbfd;
}

.new_footer_area {
    background: #fbfbfd;
}
.instructions {
  text-align:center;
  font-size:20px;
  margin: 15vh;
}  

/* //////////////////////////////////////////////////////////////////////////////////////////////
    //   Default Modal Styles   //
////////////////////////////////////////////////////////////////////////////////////////////// */
/*   This is the background overlay   */
.backgroundOverlay {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    height: 100%;
    width: 100%;
    margin: 0;
    padding: 0;
    background: #000000;
    opacity: .85;
    filter: alpha(opacity=85);
    -moz-opacity: .85;
    z-index: 101;
    display: none;
}
/*   This is the Popup Window   */
.delayedPopupWindow {
    display: none;
    position: fixed;
    width: auto;
    max-width: 480px;
    height: 310px;
    top: 50%;
    left: 50%;
    margin-left: -260px;
    margin-top: -180px;
    background-color: #efefef;
    border: 2px solid #333;
    z-index: 102;
    padding: 10px 20px;
}
/*   This is the closing button  */
#btnClose {
    width:100%;
    display: block;
    text-align: right;
    text-decoration: none;
    color: #BCBCBC;
}
/*   This is the closing button hover state  */
#btnClose:hover {
    color: #c90c12;
}
/*   This is the description headline and paragraph for the form   */
#delayedPopup > div.formDescription {
    float: left;
    display: block;
    width: 44%;
    padding: 1% 3%;
    font-size: 18px;
    color: #666;
    clear: left;
}
/*   This is the styling for the form's headline   */
#delayedPopup > div.formDescription h2 {
    color: #444444;
    font-size: 36px;
    line-height: 40px;
}

/* 
////////// MailChimp Signup Form //////////////////////////////
*/

/*   This is the signup form body  */
#delayedPopup #mc_embed_signup {
    float: left;
    width: 47%;
    padding: 1%;
    display: block;
    font-size: 16px;
    color: #666;
    margin-left: 1%;
}
/*   This is the styling for the signup form inputs  */
#delayedPopup #mc-embedded-subscribe-form input {
    width: 95%;
    height: 30px;
    font-size: 18px;
    padding: 3px;
  margin-bottom: 5px;
}
/*   This is the styling for the signup form inputs when they are being hovered with the mouse  */
#delayedPopup #mc-embedded-subscribe-form input:hover {
    border:solid 2px #40c348;
    box-shadow: 0 1px 3px #AAAAAA;
}
/*   This is the styling for the signup form inputs when they are focused  */
#delayedPopup #mc-embedded-subscribe-form input:focus {
    border:solid 2px #40c348;
    box-shadow: none;
}
/*   This is the styling for the signup form submit button  */
#delayedPopup #mc-embedded-subscribe {
    width: 100%!important;
    height: 40px!important;
    margin: 10px auto 0 auto;
    background: #5D9E62;
    border: none;
    color: #fff;
}
/*   This is the styling for the signup form submit button hover state  */
#delayedPopup #mc-embedded-subscribe:hover {
    background: #40c348;
    color: #fff;
    box-shadow:none!important;
    cursor: pointer;
}

.new_footer_top {
    padding: 120px 0px 270px;
    position: relative;
      overflow-x: hidden;
}
.new_footer_area .footer_bottom {
    padding-top: 5px;
    padding-bottom: 50px;
}
.footer_bottom {
    font-size: 14px;
    font-weight: 300;
    line-height: 20px;
    color: #7f88a6;
    padding: 27px 0px;
}
.new_footer_top .company_widget p {
    font-size: 16px;
    font-weight: 300;
    line-height: 28px;
    color: #6a7695;
    margin-bottom: 20px;
}
.new_footer_top .company_widget .f_subscribe_two .btn_get {
    border-width: 1px;
    margin-top: 20px;
}
.btn_get_two:hover {
    background: transparent;
    color: #5e2ced;
}
.btn_get:hover {
    color: #fff;
    background: #6754e2;
    border-color: #6754e2;
    -webkit-box-shadow: none;
    box-shadow: none;
}
a:hover, a:focus, .btn:hover, .btn:focus, button:hover, button:focus {
    text-decoration: none;
    outline: none;
}



.new_footer_top .f_widget.about-widget .f_list li a:hover {
    color: #5e2ced;
}
.new_footer_top .f_widget.about-widget .f_list li {
    margin-bottom: 11px;
}
.f_widget.about-widget .f_list li:last-child {
    margin-bottom: 0px;
}
.f_widget.about-widget .f_list li {
    margin-bottom: 15px;
}
.f_widget.about-widget .f_list {
    margin-bottom: 0px;
}
.new_footer_top .f_social_icon a {
    width: 44px;
    height: 44px;
    line-height: 43px;
    background: transparent;
    border: 1px solid #e2e2eb;
    font-size: 24px;
}
.f_social_icon a {
    width: 46px;
    height: 46px;
    border-radius: 50%;
    font-size: 14px;
    line-height: 45px;
    color: #858da8;
    display: inline-block;
    background: #ebeef5;
    text-align: center;
    -webkit-transition: all 0.2s linear;
    -o-transition: all 0.2s linear;
    transition: all 0.2s linear;
}
.ti-facebook:before {
    content: "\e741";
}
.ti-twitter-alt:before {
    content: "\e74b";
}
.ti-vimeo-alt:before {
    content: "\e74a";
}
.ti-pinterest:before {
    content: "\e731";
}

.btn_get_two {
    -webkit-box-shadow: none;
    box-shadow: none;
    background: #5e2ced;
    border-color: #5e2ced;
    color: #fff;
}

.btn_get_two:hover {
    background: transparent;
    color: #5e2ced;
}

.new_footer_top .f_social_icon a:hover {
    background: #5e2ced;
    border-color: #5e2ced;
  color:white;
}
.new_footer_top .f_social_icon a + a {
    margin-left: 4px;
}
.new_footer_top .f-title {
    margin-bottom: 30px;
    color: #263b5e;
}
.f_600 {
    font-weight: 600;
}
.f_size_18 {
    font-size: 18px;
}
h1, h2, h3, h4, h5, h6 {
    color: #4b505e;
}
.new_footer_top .f_widget.about-widget .f_list li a {
    color: #6a7695;
}


.new_footer_top .footer_bg {
    position: absolute;
    bottom: 0;
    background: url("https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEigB8iI5tb8WSVBuVUGc9UjjB8O0708X7Fdic_4O1LT4CmLHoiwhanLXiRhe82yw0R7LgACQ2IhZaTY0hhmGi0gYp_Ynb49CVzfmXtYHUVKgXXpWvJ_oYT8cB4vzsnJLe3iCwuzj-w6PeYq_JaHmy_CoGoa6nw0FBo-2xLdOPvsLTh_fmYH2xhkaZ-OGQ/s16000/footer_bg.png") no-repeat scroll center 0;
    width: 100%;
    height: 266px;
}

.new_footer_top .footer_bg .footer_bg_one {
    background: url("https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEia0PYPxwT5ifToyP3SNZeQWfJEWrUENYA5IXM6sN5vLwAKvaJS1pQVu8mOFFUa_ET4JuHNTFAxKURFerJYHDUWXLXl1vDofYXuij45JZelYOjEFoCOn7E6Vxu0fwV7ACPzArcno1rYuVxGB7JY6G7__e4_KZW4lTYIaHSLVaVLzklZBLZnQw047oq5-Q/s16000/volks.gif") no-repeat center center;
    width: 330px;
    height: 105px;
  background-size:100%;
    position: absolute;
    bottom: 0;
    left: 30%;
    -webkit-animation: myfirst 22s linear infinite;
    animation: myfirst 22s linear infinite;
}

.new_footer_top .footer_bg .footer_bg_two {
    background: url("https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhyLGwEUVwPK6Vi8xXMymsc-ZXVwLWyXhogZxbcXQYSY55REw_0D4VTQnsVzCrL7nsyjd0P7RVOI5NKJbQ75koZIalD8mqbMquP20fL3DxsWngKkOLOzoOf9sMuxlbyfkIBTsDw5WFUj-YJiI50yzgVjF8cZPHhEjkOP_PRTQXDHEq8AyWpBiJdN9SfQA/s16000/cyclist.gif") no-repeat center center;
    width: 88px;
    height: 100px;
  background-size:100%;
    bottom: 0;
    left: 38%;
    position: absolute;
    -webkit-animation: myfirst 30s linear infinite;
    animation: myfirst 30s linear infinite;
}



@-moz-keyframes myfirst {
  0% {
    left: -25%;
  }
  100% {
    left: 100%;
  }
}

@-webkit-keyframes myfirst {
  0% {
    left: -25%;
  }
  100% {
    left: 100%;
  }
}

@keyframes myfirst {
  0% {
    left: -25%;
  }
  100% {
    left: 100%;
  }
}

/*************footer End*****************/


body,
html {
  font-family: "Montserrat", serif;
  margin: 0;
}

h1,
h2,
h3,
h4,
h5,
h6,
p {
  margin: 0;
  padding: 0;
}

button,
.btn {
  font-family: inherit;
}

/* CSS RESET ENDS */

/* NAVIGATION BAR */

nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-size: 20px;
  padding: 0.75rem 5vw;
  box-shadow: 0 0 30px lightgray;
}

nav span {
  color: #4caf50;
}

nav p {
  font-size: 25px;
  font-weight: 600;
  cursor: default;
}

nav li {
  display: flex;
  align-items: center;
  list-style: none;
}

nav a {
  text-decoration: none;
  color: #676767;
  padding: 0 1rem;
  transition: 0.1s ease-in-out;
  font-size: 20px;
}
nav a:hover {
  color: #121212;
}

nav .btn {
  padding: 0.5rem 1rem;
  margin: 0 0 0 0.5rem;
  border: 1px solid #4caf50;
  border-radius: 5px;
  font-weight: 600;
  cursor: pointer;
  transition: 0.2s ease-in-out;
  font-size: 17px;
}

.register {
  background-color: #4caf50;
  color: white;
  border: 1px solid #4caf50;
  border-radius: 5px;
}

.register:hover {
  background-color: #3c8c40;
}

.login {
  background-color: white;
  color: #4caf50;
}

.login:hover {
  background-color: #4caf50;
  color: white;
  border: 1px solid #4caf50;
  border-radius: 5px;
}

/* NAVIGATION BAR ENDS */


/* MEDIA QUERIES - RESPONSIVE LAYOUT */

/* DESKTOP - LAPTOP - TABLET */
@media screen and (min-width: 850px){
  nav .small-screens {
    display: none;
  }
}

/* MOBILE */
@media screen and (max-width: 850px){
  nav{
    padding: 1rem 5vw;
  }
  
  nav .small-screens i{
    font-size: 25px;
    cursor: pointer;
  }
  
  nav .big-screens {
    display: none;
  }
}

/* MEDIA QUERIES ENDS*/
</style>   
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script> 
<script>
    $(document).ready(function ()
{
    //Fade in delay for the background overlay (control timing here)
    $("#bkgOverlay").delay(4800).fadeIn(400);
  //Fade in delay for the popup (control timing here)
    $("#delayedPopup").delay(5000).fadeIn(400);
    
    //Hide dialouge and background when the user clicks the close button
    $("#btnClose").click(function (e)
    {
        HideDialog();
        e.preventDefault();
    });
});
//Controls how the modal popup is closed with the close button
function HideDialog()
{
    $("#bkgOverlay").fadeOut(400);
    $("#delayedPopup").fadeOut(300);
}

</script>
</body>
</html>