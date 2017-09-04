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




  <form name="exportcsv" method="post" action="exportcsv.php">

<textarea style="display:none;" name="data"><?php 
$cityarray = getRegistrationArray("ct");

for ($k = 0; $k <= sizeof($cityarray); $k++ )
{
  echo $cityarray[$k];
}

 ?>
</textarea>

  <input type="hidden" name="city" value="ct" />
<input style="position:fixed;" type="submit" name="Export" value="Download Spreadsheet" />

  </form>





  <div class="reportsection">
    <div class="reportpage w-clearfix">
      <h1 class="registrations">Registrations: CAPE TOWN</h1>


      
      <script>
function deleteDoc($id)
 {
  var r = confirm('Are you sure you want to delete this person ?');
if (r == true) {
   $( '#delform' + $id).submit();
} else {}
 }
</script>



<?php getRegistrations("ct"); ?>




    </div>
  </div>






  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>