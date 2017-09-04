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
      <h1 class="registrations">Registrations Statistics</h1>







      <div class="statstable w-clearfix">
        <div class="statrow w-clearfix">
          <h1 class="citylbl">Johannesburg</h1>
        </div>
        <div class="statrow w-clearfix">
          <h4 class="infolbl">Number of Registrations:</h4>
          <h5 class="infos" style="color:red;"><?php countfieldregs("jhb"); ?></h5>
        </div>
        <div class="statrow w-clearfix">
          <h4 class="infolbl">Dietary: Halaal</h4>
          <h5 class="infos"><?php countdiet("jhb", "Halaal"); ?></h5>
        </div>
        <div class="statrow w-clearfix">
          <h4 class="infolbl">Dietary: Kosher</h4>
          <h5 class="infos"><?php countdiet("jhb", "Kosher"); ?></h5>
        </div>
        <div class="statrow w-clearfix">
          <h4 class="infolbl">Dietary: Vegetarian</h4>
          <h5 class="infos"><?php countdiet("jhb", "Vegetarian"); ?></h5>
        </div>
      
        <div class="statrow w-clearfix">
          <h4 class="infolbl">Attending Day 1:</h4>
          <h5 class="infos"><?php countday("jhb", 1); ?></h5>
        </div>
        <div class="statrow w-clearfix">
          <h4 class="infolbl">Attending Day 2:</h4>
           <h5 class="infos"><?php countday("jhb", 2); ?></h5>
        </div>
      
      </div>






      <div class="statstable w-clearfix">
        <div class="statrow w-clearfix">
          <h1 class="citylbl">Cape Town</h1>
        </div>
        <div class="statrow w-clearfix">
          <h4 class="infolbl">Number of Registrations:</h4>
          <h5 class="infos" style="color:red;"><?php countfieldregs("ct"); ?></h5>
        </div>
         <div class="statrow w-clearfix">
          <h4 class="infolbl">Dietary: Halaal</h4>
          <h5 class="infos"><?php countdiet("ct", "Halaal"); ?></h5>
        </div>
        <div class="statrow w-clearfix">
          <h4 class="infolbl">Dietary: Kosher</h4>
          <h5 class="infos"><?php countdiet("ct", "Kosher"); ?></h5>
        </div>
        <div class="statrow w-clearfix">
          <h4 class="infolbl">Dietary: Vegetarian</h4>
          <h5 class="infos"><?php countdiet("ct", "Vegetarian"); ?></h5>
        </div>
     
      </div>





     <div class="statstable w-clearfix">
        <div class="statrow w-clearfix">
          <h1 class="citylbl">Durban</h1>
        </div>
        <div class="statrow w-clearfix">
          <h4 class="infolbl">Number of Registrations:</h4>
          <h5 class="infos" style="color:red;"><?php countfieldregs("dbn"); ?></h5>
        </div>
          <div class="statrow w-clearfix">
          <h4 class="infolbl">Dietary: Halaal</h4>
          <h5 class="infos"><?php countdiet("dbn", "Halaal"); ?></h5>
        </div>
        <div class="statrow w-clearfix">
          <h4 class="infolbl">Dietary: Kosher</h4>
          <h5 class="infos"><?php countdiet("dbn", "Kosher"); ?></h5>
        </div>
        <div class="statrow w-clearfix">
          <h4 class="infolbl">Dietary: Vegetarian</h4>
          <h5 class="infos"><?php countdiet("dbn", "Vegetarian"); ?></h5>
        </div>
       
      </div>






    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>