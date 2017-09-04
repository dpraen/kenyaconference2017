<?php include("script.php"); ?>

<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Mon Mar 13 2017 08:13:33 GMT+0000 (UTC)  -->
<html data-wf-page="58afdb37df0b4b6e3b35141e" data-wf-site="58afdb37df0b4b6e3b35141d">
<head>
  <meta charset="utf-8">
  <title>Syspro Registrations Report</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/syspro-registrations-report.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script type="text/javascript">
    WebFont.load({
      google: {
        families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic"]
      }
    });
  </script>
  <script src="js/modernizr.js" type="text/javascript"></script>
  <link href="https://daks2k3a4ib2z.cloudfront.net/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png" rel="apple-touch-icon">
</head>
<body>


  <div class="sidebar w-clearfix">
  <a class="citybtn w-button" href="index.php">Statistics</a>
  <a class="citybtn w-button" href="jhb.php">Johannesburg</a>
  <a class="citybtn w-button" href="ct.php">Cape Town</a>
  <a class="citybtn w-button" href="dbn.php">Durban</a>
  </div>




  <div class="reportsection">
    <div class="reportpage w-clearfix">
   

<?php 

$id = $_POST["personid"];
$name = $_POST["name"];
$surname = $_POST["surname"];
$mobile = $_POST["mobile"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$company = $_POST["company"];
$designation = $_POST["designation"];
$dietary = $_POST["dietary"];
$other = $_POST["other"];
$day1 = $_POST["day1"];
$day2 = $_POST["day2"];
$supportq = $_POST["supportq"];
$supporta = $_POST["supporta"];
$break1 = $_POST["break1"];
$break2 = $_POST["break2"];
$break3 = $_POST["break3"];
$break4 = $_POST["break4"];
$break5 = $_POST["break5"];
$break6 = $_POST["break6"];

updatePersonJHB($id, $name, $surname, $mobile, $phone, $email, $company, $designation,  $dietary, $other,  $day1, $day2, $supportq, $supporta, $break1, $break2, $break3, $break4, $break5, $break6);


?>





    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>