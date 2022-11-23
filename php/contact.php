<!DOCTYPE html>
<html lang="en">
<head>

<title>let's talk | manuelabis.com</title>

<!--

Template 2099 Scenic

http://www.tooplate.com/view/2099-scenic

-->

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">

<!-- MAIN CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="css/tooplate-style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="images/logo.jpg">
<style>
     body, html {
          font-family: 'Special Elite', cursive;
          background-image: url("../images/contact-bg.jpg");
          background-position: center;
  		  background-repeat: no-repeat;
  	   	  background-size: cover;
  	   	  font-size: 50px;
  	   	  text-align: center;
  	   	  padding-top: 50px;
     }
</style>
</head>
<body>
<div class="thank-you">
<span class="align-middle">
<?php
// database connection code
if(isset($_POST['txtName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'u315200375_manuelabis0705', 'R0d0lf0M3rl4**','u315200375_manuelabis0705');

// get the post records

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtSubject = $_POST['txtSubject'];
$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO `contact` (`Id`, `fldName`, `fldEmail`, `fldSubject`, `fldMessage`) VALUES ('0', '$txtName', '$txtEmail', '$txtSubject', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "thank you.<br>i have received your message<br>&<br>will get back to you soon.<br><a href='https://manuelabis.com/'>manuelabis.com</a>";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}

if(isset($_POST['Submit'])) {
     $mailto = "manuelabis070566@gmail.com"; //My email address
     //getting sender data
     $name = $_POST['txtName']; //getting sender name
     $fromEmail = $_POST['txtEmail']; //getting sender email
     $subject_sender = $_POST['txtSubject']; //getting sender phone number
     $subject = $_POST['txtMessage']; // getting sender message
     $subject2 = "confirmation message"; // sender confirmation

     //Email body I will receive
     $message = "name of sender: " . $name . "\n"
     . "subject: " . $subject_sender . "\n\n"
     . "message: " . "\n" . $_POST['txtMessage'];

     //Message for sender confirmation
     $message2 = "dear: " . $name . "\n"
     . "thank you for your message. i'll get back to you soon!" . "\n\n"
     . "you submitted the following message: " . "\n" . $_POST['txtMessage'] . "\n\n"
     . "stay safe," . "\n" . "manuelabis.com";

     //Email headers
     $headers = "from: " . $fromEmail; // sender email
     $headers2 = "from: " . $mailto; // received by sender

     //PHP mailer function

     $result1 = mail($mailto, $subject, $message, $headers); 
     $result2 = mail($fromEmail, $subject2, $message2, $headers2);

     //Checking if mails sent

     if ($result && $result2) {
          $success = "Your message was sent successfully!";
     } else { 
          $failed = "Sorry!";
     }
}
?>
</span>
</div>

<div class="clearfix"></div>

               <div class="col-md-12 col-sm-12">
                    <div class="copyright-text smoothScroll text-center">
                         <p class="buttons">copyright © 2022
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         <a href="https://manuelabis.com/" id="nonoy">manuelabis.com</a>
                    </div>
               </div>

<!-- SCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>

</body>
</html>