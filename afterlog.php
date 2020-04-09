<?php
session_start();
?>

<html>

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quote-Bio-Caption</title>
    <meta name="Quote-Bio-Caption" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/logo_qbc.png"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/responsive.css"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <script src="https://www.gstatic.com/firebasejs/7.12.0/firebase-database.js"></script>
    <!--script src="https://www.gstatic.com/firebasejs/7.12.0/firebase-app.js"></script-->
	<script src="https://www.gstatic.com/firebasejs/7.13.0/firebase-app.js"></script>
	<!--script src="https://www.gstatic.com/firebasejs/7.12.0/firebase-analytics.js"></script-->
	<script src="https://www.gstatic.com/firebasejs/7.12.0/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.13.0/firebase-auth.js"></script>
    <style>

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: green;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>

</head>

<body>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<!-- Navigation
    ================================================== -->
<div class="hero-background">
    <div>
        <img class="strips" src="assets/images/strips.png">
    </div>
    <div class="container">
        <div class="header-container header">
            <a class="navbar-brand logo" href="#"> <img class="logo" style="height: 80px; " src="assets/images/web_qbc.png"/> </a>
            <div class="header-right">

                
                <a class="navbar-item" href="#pricing">Content</a>
                <a class="navbar-item" href="index.php" id="logout" name="logout">Logout</a>
                <p class="navbar-item" id="email" ></p>
                

            </div>
        </div>
        <!--navigation-->

        <!-- Hero-Section
          ================================================== -->

        <div class="hero row">
            <div class="hero-right col-sm-6 col-sm-6">
                <h1 class="header-headline bold"> Beautiful Captions, Quotes and Bio <br></h1>
                <h4 class="header-running-text light"> You can also attract more buzz around your posts with more likes and followers on Social Media.</h4>
            </div><!--hero-left-->

            <div class="col-sm-6 col-sm-6 ipad" style="margin-top: 7%;">
                <img class="ipad-screen img-responsive" src="assets/images/screen1.png"/>
            </div>

        </div><!--hero-->

    </div> <!--hero-container-->

</div><!--hero-background-->
<!-- Pricing
  ================================================== -->
  <div id="pricing" class="pricing-background">

    <h2 class="pricing-section-header text-center">VARIETY</h2>

    <div class="pricing-table row">
        <div class="col-sm-4">
                        	<a href="caption.html"><img src="assets/images/cap.png" style="border-radius: 18px; height: 300px; width: 300px; box-shadow: 5px 8px 40px; rgba(99, 117, 138, 0.3); "></a>
                        
                <!--basic-plan--->
        </div><!--col-->

        <div class="col-sm-4">
            <div class="mid-plan">
            	<a href="quote.html"><img src="assets/images/Quote.png" style="border-radius: 18px; height: 300px; width: 300px; box-shadow: 5px 8px 40px; rgba(99, 117, 138, 0.3); "></a>
                
            </div><!--pro-plan--->
        </div><!--col-->

        <div class="col-sm-4">
            <div class="mid-plan">
                <a href="bio.html"><img src="assets/images/Bio.png" style="border-radius: 18px; height: 300px; width: 300px; box-shadow: 5px 8px 40px; rgba(99, 117, 138, 0.3); "></a>
            </div><!--pro-plan--->
        </div><!--col-->

    </div>  <!--pricing-table-->

</div><!--pricing-background-->


<!-- Features
  ================================================== -->

<!--div id="features" class="features-section">

    <div class="features-container row">

        <h2 class="features-headline light">FEATURES</h2>

        <div class="col-sm-4 feature">

            <div class="feature-icon feature-no-display">
                <img class="feature-img" src="assets/images/responsive.svg">
            </div>
            <h5 class="feature-head-text feature-no-display"> FULLY RESPONSIVE </h5>
            <p class="feature-subtext light feature-no-display"> Looks amazing on any
                device: smartphone, tablet, laptop and desktop.</p>
        </div>

        <div class="col-sm-4 feature">
            <div class="feature-icon feature-no-display feature-display-mid">
                <img class="feature-img" src="assets/images/customizable.svg">
            </div>
            <h5 class="feature-head-text feature-no-display feature-display-mid"> CUSTOMIZABLE </h5>
            <p class="feature-subtext light feature-no-display feature-display-mid"> Change the colors, pictures or any
                of the sections
                to suit your needs.</p>
        </div>

        <div class="col-sm-4 feature">
            <div class="feature-icon feature-no-display feature-display-last">
                <img class="bullet-img" src="assets/images/design.svg">
            </div>
            <h5 class="feature-head-text feature-no-display feature-display-last"> SLICK AND BEAUTIFUL DESIGN </h5>
            <p class="feature-subtext light feature-no-display feature-display-last"> Trendy and fresh design, fits any
                website.</p-->
        <!--/div>
    </div> <!--features-container=>
</div> <!--features-section-->









<!-- Team
  ================================================== -->

<div id="team" class="team">
    <h2 class="team-section-header text-center">THE TEAM</h2>

    <div class="team-container row" >


        <div class="col-sm-4 team-member">
            <img src="assets/images/jay2.jpg">
            <div class="team-member-text">
                <h5 class="bold">Jay Thakkar</h5>
                <p class="light">Love to work with friends.</p>
                <a href="http://www.twitter.com"><img class="team-social-icon" src="assets/images/team-twitter.svg"></a>
                <a href="http://www.facebook.com"><img class="team-social-icon"
                                                       src="assets/images/team-facebook.svg"></a>
                <a href="https://plus.google.com/"><img class="team-social-icon"
                                                        src="assets/images/team-google.svg"></a>
            </div>
        </div>

        <div class="col-sm-4 team-member">
            <img src="assets/images/kenil2.jpg">
            <div class="team-member-text">
                <h5 class="bold">Kenil Vavaliya</h5>
                <p class="light">Love to work with friends.</p>
                <a href="http://www.twitter.com"><img class="team-social-icon" src="assets/images/team-twitter.svg"></a>
                <a href="http://www.facebook.com"><img class="team-social-icon"
                                                       src="assets/images/team-facebook.svg"></a>
                <a href="https://plus.google.com/"><img class="team-social-icon"
                                                        src="assets/images/team-google.svg"></a>
            </div>
        </div>

        <!--div class="col-sm-4 team-member">
            <img src="assets/images/pratik2.jpg">
            <div class="team-member-text">
                <h5 class="bold">Pratik Patel</h5>
                <p class="light">Love to work with friends.</p>
                <a href="http://www.twitter.com"><img class="team-social-icon" src="assets/images/team-twitter.svg"></a>
                <a href="http://www.facebook.com"><img class="team-social-icon"
                                                       src="assets/images/team-facebook.svg"></a>
                <a href="https://plus.google.com/"><img class="team-social-icon"
                                                        src="assets/images/team-google.svg"></a>
            </div>

        </div>
        <div class="col-sm-4 team-member">
            <img src="assets/images/poojan2.jpg">
            <div class="team-member-text">
                <h5 class="bold">Poojan Sutariya</h5>
                <p class="light">Love to work with friends.</p>
                <a href="http://www.twitter.com"><img class="team-social-icon" src="assets/images/team-twitter.svg"></a>
                <a href="http://www.facebook.com"><img class="team-social-icon"
                                                       src="assets/images/team-facebook.svg"></a>
                <a href="https://plus.google.com/"><img class="team-social-icon"
                                                        src="assets/images/team-google.svg"></a>
            </div>

        </div-->
        <! -- .row -->

    </div> <!--team-container--->

</div> <!--team-section--->

<!-- Email-Section
  ================================================== -->
<!--script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script-->

<!--script type="text/javascript">
	
	var firebaseConfig = {
    apiKey: "AIzaSyBbvPGQhgFbjp8uHbvWpkYhg0_OODw0X6w",
    authDomain: "qbcnew-6e028.firebaseapp.com",
    databaseURL: "https://qbcnew-6e028.firebaseio.com",
    projectId: "qbcnew-6e028",
    storageBucket: "qbcnew-6e028.appspot.com",
    messagingSenderId: "1021754037483",
    appId: "1:1021754037483:web:d3567d671ed26a9e389aae",
    measurementId: "G-CNPWMQX648"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  const auth = firebase.auth();
  firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    console.log(user.email);
    document.getElementById('log').style.visibility = 'hidden';
    document.getElementById('sign').style.visibility = 'hidden';
    document.getElementById('email').innerHTML = user.email;
    document.getElementById('logout').style.visibility = 'visible';
    // User is signed in.
  } else {
    // No user is signed in.
    document.getElementById('log').style.visibility = 'visible';
    document.getElementById('sign').style.visibility = 'visible';
    document.getElementById('logout').style.visibility = 'hidden';
  }

});
  function theFunction(){
  	firebase.auth().signOut();
  }

</script-->







<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>

<script src="assets/js/script.js"></script>



</body>

</html>