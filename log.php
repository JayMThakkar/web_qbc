<?php
session_start();
?>
<?php
if(isset($_POST['log']))
{
	//session_start();
$ema=$_POST["em"];
$pas=$_POST["paa"];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qbcnew";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT pass FROM signup WHERE email = '$ema'";

$g_pass = mysqli_query($conn,$sql);
while($row = $g_pass->fetch_assoc()) {
	   //echo $row["pass"];
	   if($row["pass"] == $pas)
	   {
		   //ob_start();
		   header("Location: afterlog.php");
		   
		   //	session_start();
		   //$_SESSION["log_status"] = 1;
	   }
	   else {
		echo '<script>alert("Please Enter Correct Password")</script>';
		//$_SESSION["log_status"] = 0;
}
    }

/*if ($conn->query($sql) === TRUE) {
	echo "$sql";
    header("Location: index.html");

} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}*/

$conn->close();
}
?>
<html>
<head>
	<title>Login</title>
	<script src="https://www.gstatic.com/firebasejs/7.13.0/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.12.0/firebase-analytics.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.13.0/firebase-auth.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.12.0/firebase-database.js"></script>
	<script type="text/javascript" src="assets/js/login.js"></script>


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
	<!--script src="https://www.gstatic.com/firebasejs/7.12.0/firebase-analytics.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.12.0/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.13.0/firebase-auth.js"></script-->
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}
.sign_form{
  margin-left: 240px;
  margin-right: 240px;
  padding-top: 80px;

}
/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
  width: 920px;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}

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

<div class="hero-background">
    <div>
        <img class="strips" src="assets/images/strips.png">
    </div>
    <div class="container">
        <div class="header-container header">
            <a class="navbar-brand logo" href="#"> <img class="logo" style="height: 80px; " src="assets/images/web_qbc.png"/> </a>
            <div class="header-right">

				<a class="navbar-item" href="index.php">Home</a>
                <a class="navbar-item" href="log.php" id="logi" name="logi" >Login</a>
                <a class="navbar-item" href="sign.php" id="sign" name="sign" >Signup</a>
                <!--a class="navbar-item" href="index.php" id="logout" name="logout">Logout</a>
                <p class="navbar-item" id="email" ></p-->
                

            </div>
        </div>
		</div>
		</div>
	

  <div class="sign_form">

	<form style="border:1px solid #ccc" method="POST">
  <div class="container">
    <h1>Log In</h1>
    <p>Please fill in this form to logged in.</p>	
    <hr>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" id="email" name="em"required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" id="password" name="paa" required>
    
   
    <div class="clearfix">
      <a href="index.php"><button type="button" class="cancelbtn">Cancel</button></a>
      <button type="submit" class="signupbtn" name="log" >Login</button>
    </div>
  </div>
</form>
</div>

</body>
</html>


