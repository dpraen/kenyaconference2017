<?php


function connectDBss()
{
    //Connect to MySQL server
    $condb = mysql_pconnect("localhost","louddtnh_gerhard","gerharddk");
    if (!$condb) {
        die("Could not connect: " . mysql_error());
    }
    //Connect to database
    mysql_select_db("louddtnh_sysproreg", $condb);
    
    return $condb;
}



function connectDBs()
{
    //Connect to MySQL server
    $condb = mysql_pconnect("localhost","root","root");
    if (!$condb) {
        die("Could not connect: " . mysql_error());
    }
    //Connect to database
    mysql_select_db("Syspro", $condb);
    
    return $condb;
}




function connectDB()
{
    //Connect to MySQL server
    $condb = mysql_pconnect("localhost","louddtnh_syspror","JF6daBUJ7KeFWqUa");
    if (!$condb) {
        die("Could not connect: " . mysql_error());
    }
    //Connect to database
    mysql_select_db("louddtnh_syspror", $condb);
    
    return $condb;
}


function exportCSV($city, $text)
{

// Open the text file
  $f = fopen("files/" . $city ."_registrations.csv", "w");

  // Write text
  fwrite($f, $text); 

  // Close the text file
  fclose($f);

  // Open file for reading, and read the line
  $f = fopen("files/" . $city ."_registrations.csv", "r");

echo "<a href='https://www.syspro.com/africacustomerconference2017/Report/files/" . $city . "_registrations.csv' download>Click here to download Spreadsheet</a>";
  // Read text

  fclose($f);


}






function exportCSV2($city, $text)
{

$fp = fopen("files/" . $city . "file.csv", 'w');

    fputcsv($fp, $text);

fclose($fp);


}





function getRegistrationArray($city)
{
  $con = connectDB();
  $sql = mysql_query("SELECT * FROM register_single_" . $city);

  $personarray = array();
  

  $personarray[0] = "Name" . "," . "Surname" . "," . "Mobile" . "," . "Phone" . "," . "Email" . "," . "Company" . "," . "Designation" . "," . "Dietary" . "," . "Other" . "\r\n";
  $k = 1; 

while ($row = mysql_fetch_array($sql))
{ 


$personarray[$k] = $row["Name"] . "," . $row["Surname"] . "," . $row["Mobile"] . "," . $row["Phone"] . "," . $row["Email"] . "," . $row["Company"].  "," . $row["Designation"] . "," . $row["Dietary"] . "," . $row["Other"] . "\r\n";

$k = $k + 1;


}

return $personarray;

}




function getRegistrationArray2($city)
{
  $con = connectDB();
  $sql = mysql_query("SELECT * FROM register_single_" . $city);

  $personarray = array();

  $personarray[0] = "Name" . "," . "Surname" . "," . "Mobile" . "," . "Phone" . "," . "Email" . "," . "Company" . "," . "Designation" . "," . "Dietary" . "," . "Other" . "," . "Attending Day 1" . "," . "Attending Day 2" . "," . "Attending Support" . "," . "Support" . "," . "Break1" . "," . "Break2" . "," . "Break3" . "," . "Break4" . "," . "Break5" . "," . "Break6" . "\r\n";

  $k = 1;

while ($row = mysql_fetch_array($sql))
{ 


$personarray[$k] = $row["Name"] . "," . $row["Surname"] . "," . $row["Mobile"] . "," . $row["Phone"] . "," . $row["Email"] . "," . $row["Company"].  ", " . $row["Designation"] . "," . $row["Dietary"] . "," . $row["Other"]  . "," .  $row["Attending_day1"] . "," .  $row["Attending_day2"] . "," . $row["Attending_support"] . "," . $row["Support"] . "," . $row["Break1"] . "," . $row["Break2"] . "," . $row["Break3"] . "," . $row["Break4"] . "," . $row["Break5"] . "," . $row["Break6"] . "\r\n";

$k = $k + 1;


}

return $personarray;

}







function createtableRegister($tablename)
{
    $con = connectDB();

    $sql = "CREATE TABLE register_single_" . $tablename . " (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Name VARCHAR(200) NOT NULL,
Surname VARCHAR(200) NOT NULL,
Contact VARCHAR(200) NOT NULL,
Email VARCHAR(200) NOT NULL,
Company VARCHAR(200) NOT NULL,
Designation VARCHAR(200) NOT NULL,
Dietary VARCHAR(200) NOT NULL,
Other VARCHAR(200) NOT NULL
)";

   mysql_query($sql, $con);
}




function createtableRegister2($tablename)
{
    $con = connectDB();

    $sql = "CREATE TABLE register_single_" . $tablename . " (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Name VARCHAR(200) NOT NULL,
Surname VARCHAR(200) NOT NULL,
Contact VARCHAR(200) NOT NULL,
Email VARCHAR(200) NOT NULL,
Company VARCHAR(200) NOT NULL,
Designation VARCHAR(200) NOT NULL,
Dietary VARCHAR(200) NOT NULL,
Other VARCHAR(200) NOT NULL,
Attending_day1 VARCHAR(200) NOT NULL,
Attending_day2 VARCHAR(200) NOT NULL,
Break1 VARCHAR(200) NOT NULL,
Break2 VARCHAR(200) NOT NULL,
Break3 VARCHAR(200) NOT NULL,
Break4 VARCHAR(200) NOT NULL,
Break5 VARCHAR(200) NOT NULL
)";

   mysql_query($sql, $con);
}







function register_single_person($tablename, $name, $surname, $contact, $email, $company, $designation, $dietary, $other, $attending1, $attending2, $breakone, $breaktwo, $breakthree, $breakfour, $breakfive, $breaksix)
{
  $con = connectDB();

  $sql = "INSERT INTO register_single_" . $tablename . " (Name,
Surname,
Contact,
Email,
Company,
Designation,
Dietary,
Other,
Attending_day1,
Attending_day2,
Break1,
Break2,
Break3,
Break4,
Break5,
Break6)
VALUES (
 '" . $name . "', 
 '" . $surname . "', 
 '" . $contact . "', 
 '" . $email . "', 
 '" . $company . "', 
 '" . $designation . "', 
 '" . $dietary . "', 
 '" . $other . "', 
 '" . $attending1 . "', 
 '" . $attending2 . "', 
 '" . $breakone . "', 
 '" . $breaktwo . "', 
 '" . $breakthree . "', 
 '" . $breakfour . "', 
 '" . $breakfive . "', 
 '" . $breaksix . "')";


mysql_query($sql, $con);

}







function register_single_person2($tablename, $name, $surname, $contact, $email, $company, $designation, $dietary, $other)
{
  $con = connectDB();

  $sql = "INSERT INTO register_single_" . $tablename . " (Name,
Surname,
Contact,
Email,
Company,
Designation,
Dietary,
Other)
VALUES (
 '" . $name . "', 
 '" . $surname . "', 
 '" . $contact . "', 
 '" . $email . "', 
 '" . $company . "', 
 '" . $designation . "', 
 '" . $dietary . "', 
 '" . $other . "')";


mysql_query($sql, $con);

}



function getSeatArray($num)
{
    $con = connectDB();
  $sql = mysql_query("SELECT * FROM jhb_seats");
  $row = mysql_fetch_array($sql);

$seatarray = array();

$k = 1;

for ($k == 1; $k <= 25; $k++)
{
    $seatarray[$k] = $row["Seat" . $k];
}
return $seatarray[$num];

mysql_query($sql, $con);
}








function createtableRegisterGroup($tablename)
{
    $con = connectDB();

    $sql = "CREATE TABLE register_group_" . $tablename . " (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Name VARCHAR(200) NOT NULL,
Surname VARCHAR(200) NOT NULL,
Contact VARCHAR(200) NOT NULL,
Email VARCHAR(200) NOT NULL,
Company VARCHAR(200) NOT NULL,
Designation VARCHAR(200) NOT NULL,
Dietary VARCHAR(200) NOT NULL,
Other VARCHAR(200) NOT NULL,
Attending_day1 VARCHAR(200) NOT NULL,
Attending_day2 VARCHAR(200) NOT NULL,
Topic_one VARCHAR(200) NOT NULL,
Topic_two VARCHAR(200) NOT NULL,
Topic_three VARCHAR(200) NOT NULL,
Topic_four VARCHAR(200) NOT NULL,
Topic_five VARCHAR(200) NOT NULL,
Topic_six VARCHAR(200) NOT NULL,
Topic_seven VARCHAR(200) NOT NULL,
Topic_eight VARCHAR(200) NOT NULL,
Topic_nine VARCHAR(200) NOT NULL,
Topic_ten VARCHAR(200) NOT NULL,
)";

   mysql_query($sql, $con);
}







function createTableSeats($tablename)
{
    $con = connectDB();

    $sql = "CREATE TABLE " . $tablename . "_seats (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Seat1 VARCHAR(200) NOT NULL,
Seat2 VARCHAR(200) NOT NULL,
Seat3 VARCHAR(200) NOT NULL,
Seat4 VARCHAR(200) NOT NULL,
Seat5 VARCHAR(200) NOT NULL,
Seat6 VARCHAR(200) NOT NULL,
Seat7 VARCHAR(200) NOT NULL,
Seat8 VARCHAR(200) NOT NULL,
Seat9 VARCHAR(200) NOT NULL,
Seat10 VARCHAR(200) NOT NULL,
Seat11 VARCHAR(200) NOT NULL,
Seat12 VARCHAR(200) NOT NULL,
Seat13 VARCHAR(200) NOT NULL,
Seat14 VARCHAR(200) NOT NULL,
Seat15 VARCHAR(200) NOT NULL,
Seat16 VARCHAR(200) NOT NULL,
Seat17 VARCHAR(200) NOT NULL,
Seat18 VARCHAR(200) NOT NULL,
Seat19 VARCHAR(200) NOT NULL,
Seat20 VARCHAR(200) NOT NULL,
Seat21 VARCHAR(200) NOT NULL,
Seat22 VARCHAR(200) NOT NULL,
Seat23 VARCHAR(200) NOT NULL,
Seat24 VARCHAR(200) NOT NULL,
Seat25 VARCHAR(200) NOT NULL
)";

   mysql_query($sql, $con);
}




function insertseats($tablename, $seat1, $seat2, $seat3, $seat4, $seat5, $seat6, $seat7, $seat8, $seat9, $seat10, $seat11, $seat12, $seat13, $seat14, $seat15, $seat16, $seat17, $seat18, $seat19, $seat20, $seat21, $seat22, $seat23, $seat24, $seat25)
{
  $con = connectDB();

  $sql = "INSERT INTO " . $tablename . "_seats (Seat1,
Seat2,
Seat3,
Seat4,
Seat5,
Seat6,
Seat7,
Seat8,
Seat9,
Seat10,
Seat11,
Seat12,
Seat13,
Seat14,
Seat15,
Seat16,
Seat17,
Seat18,
Seat19,
Seat20,
Seat21,
Seat22,
Seat23,
Seat24,
Seat25)
VALUES (
 '" . $seat1 . "', 
 '" . $seat2 . "', 
 '" . $seat3 . "', 
 '" . $seat4 . "', 
 '" . $seat5 . "', 
 '" . $seat6 . "', 
 '" . $seat7 . "', 
 '" . $seat8 . "', 
 '" . $seat9 . "', 
 '" . $seat10 . "', 
 '" . $seat11 . "', 
 '" . $seat12 . "', 
 '" . $seat13 . "', 
 '" . $seat14 . "', 
 '" . $seat15 . "', 
 '" . $seat16 . "', 
 '" . $seat17 . "', 
 '" . $seat18 . "', 
 '" . $seat19 . "', 
 '" . $seat20 . "', 
 '" . $seat21 . "', 
 '" . $seat22 . "', 
 '" . $seat23 . "', 
 '" . $seat24 . "', 
 '" . $seat25 . "')";


mysql_query($sql, $con);

}








function updateseats($tablename, $seat1, $seat2, $seat3, $seat4, $seat5, $seat6, $seat7, $seat8, $seat9, $seat10, $seat11, $seat12, $seat13, $seat14, $seat15, $seat16, $seat17, $seat18, $seat19, $seat20, $seat21, $seat22, $seat23, $seat24, $seat25)
{
  $con = connectDB();

  $sql = "UPDATE " . $tablename . "_seats 
SET Seat1='" . $seat1 . "',
Seat2='" . $seat2 . "',
Seat3='" . $seat3 . "',
Seat4='" . $seat4 . "',
Seat5='" . $seat5 . "',
Seat6='" . $seat6 . "',
Seat7='" . $seat7 . "',
Seat8='" . $seat8 . "',
Seat9='" . $seat9 . "',
Seat10='" . $seat10 . "',
Seat11='" . $seat11 . "',
Seat12='" . $seat12 . "',
Seat13='" . $seat13 . "',
Seat14='" . $seat14 . "',
Seat15='" . $seat15 . "',
Seat16='" . $seat16 . "',
Seat17='" . $seat17 . "',
Seat18='" . $seat18 . "',
Seat19='" . $seat19 . "',
Seat20='" . $seat20 . "',
Seat21='" . $seat21 . "',
Seat22='" . $seat22 . "',
Seat23='" . $seat23 . "',
Seat24='" . $seat24 . "',
Seat25='" . $seat25 . "'";


mysql_query($sql, $con);

echo "<h3 style='float:left; width:100%; text-align: center; font-family: arial; color:#333333;'>Seats have been updated!</h3>";

}


function getSeats($tablename)
{
  $con = connectDB();
  $sql = mysql_query("SELECT * FROM " . $tablename . "_seats");


echo "<div class='registersection'>
<div class='formsection w-clearfix'>
                <div class='formwrap w-clearfix w-form'>
";



echo "<form name='formseats" . $tablename . "' method='post' action='seats.php' >"; 
  while ($row = mysql_fetch_array($sql))
  { 

echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 1:</label><input class='inputfield w-input' type='text' value='" . $row["Seat1"] . "' name='seat1' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 2:</label><input class='inputfield w-input' type='text' value='" . $row["Seat2"] . "' name='seat2' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 3:</label><input class='inputfield w-input' type='text' value='" . $row["Seat3"] . "' name='seat3' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 4:</label><input class='inputfield w-input' type='text' value='" . $row["Seat4"] . "' name='seat4' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 5:</label><input class='inputfield w-input' type='text' value='" . $row["Seat5"] . "' name='seat5' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 6:</label><input class='inputfield w-input' type='text' value='" . $row["Seat6"] . "' name='seat6' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 7:</label><input class='inputfield w-input' type='text' value='" . $row["Seat7"] . "' name='seat7' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 8:</label><input class='inputfield w-input' type='text' value='" . $row["Seat8"] . "' name='seat8' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 9:</label><input class='inputfield w-input' type='text' value='" . $row["Seat9"] . "' name='seat9' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 10:</label><input class='inputfield w-input' type='text' value='" . $row["Seat10"] . "' name='seat10' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 11:</label><input class='inputfield w-input' type='text' value='" . $row["Seat11"] . "' name='seat11' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 12:</label><input class='inputfield w-input' type='text' value='" . $row["Seat12"] . "' name='seat12' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 13:</label><input class='inputfield w-input' type='text' value='" . $row["Seat13"] . "' name='seat13' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 14:</label><input class='inputfield w-input' type='text' value='" . $row["Seat14"] . "' name='seat14' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 15:</label><input class='inputfield w-input' type='text' value='" . $row["Seat15"] . "' name='seat15' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 16:</label><input class='inputfield w-input' type='text' value='" . $row["Seat16"] . "' name='seat16' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 17:</label><input class='inputfield w-input' type='text' value='" . $row["Seat17"] . "' name='seat17' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 18:</label><input class='inputfield w-input' type='text' value='" . $row["Seat18"] . "' name='seat18' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 19:</label><input class='inputfield w-input' type='text' value='" . $row["Seat19"] . "' name='seat19' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 20:</label><input class='inputfield w-input' type='text' value='" . $row["Seat20"] . "' name='seat20' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 21:</label><input class='inputfield w-input' type='text' value='" . $row["Seat21"] . "' name='seat21' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 22:</label><input class='inputfield w-input' type='text' value='" . $row["Seat22"] . "' name='seat22' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 23:</label><input class='inputfield w-input' type='text' value='" . $row["Seat23"] . "' name='seat23' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 24:</label><input class='inputfield w-input' type='text' value='" . $row["Seat24"] . "' name='seat24' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 25:</label><input class='inputfield w-input' type='text' value='" . $row["Seat25"] . "' name='seat25' /></div>";
  }
  echo "


<div class='submitrow'>
<input type='submit' class='submitbtn w-button' value='Update Seats' />
</div>


  </form></div></div>";

  mysql_query($sql, $con);
}




function getRegistrationsJHB()
{
  $con = connectDB();
  $sql = mysql_query("SELECT * FROM register_single_jhb");

  $city = "jhb";

while ($row = mysql_fetch_array($sql))
{ 
echo "


      <div class='reporttable w-clearfix' >
        <div class='reportrow w-clearfix'>
          <div class='col1 w-clearfix'>
            <h5 class='colh'>Name</h5>
          </div>
          <div class='col2'>
            <h5 class='colh'>Surname</h5>
          </div>
          <div class='col3'>
            <h5 class='colh'>Mobile</h5>
          </div>
           <div class='col4'>
            <h5 class='colh'>Phone</h5>
          </div>
          <div class='col5'>
            <h5 class='colh'>Email</h5>
          </div>
          <div class='col6'>
            <h5 class='colh'>Dietary Req</h5>
          </div>
          <div class='col7'>
            <h5 class='colh'>Other Dietary</h5>
          </div>
          <div class='col8'>
            <h5 class='colh'>Company</h5>
          </div>
          <div class='col9'>
            <h5 class='colh'>Designation</h5>
          </div>
          <div class='col10'>
            <h5 class='colh'>Day 1?</h5>
          </div>
          <div class='col11 w-clearfix'>
            <h5 class='colh'>Day 2?</h5>
          </div>
        </div>
        <div class='reportrow w-clearfix'>
          <div class='col1 w-clearfix'>
            <p class='plbl'>" . $row["Name"] . "</p>
          </div>
          <div class='col2 w-clearfix'>
            <p class='plbl'>" . $row["Surname"] . "</p>
          </div>
          <div class='col3 w-clearfix'>
            <p class='plbl'>" . $row["Mobile"] . "</p>
          </div>
           <div class='col4 w-clearfix'>
            <p class='plbl'>" . $row["Phone"] . "</p>
          </div>
          <div class='col5 w-clearfix'>
           <p class='plbl' style='overflow:hidden; padding-right:10px;'><a style='text-decoration:none; color:#666666; font-family:arial; font-weight:bold;' href='mailto:" . $row["Email"] . "'>" . $row["Email"] . "</a></p>
          </div>
          <div class='col6 w-clearfix'>
            <p class='plbl'>" . $row["Dietary"] . "</p>
          </div>
          <div class='col7 w-clearfix'>
            <p class='plbl'>" . $row["Other"] . "</p>
          </div>
          <div class='col8 w-clearfix'>
            <p class='plbl'>" . $row["Company"] . "</p>
          </div>
          <div class='col9 w-clearfix'>
            <p class='plbl'>" . $row["Designation"] . "</p>
          </div>
          <div class='col10 w-clearfix'>
            <p class='plbl'>" . $row["Attending_day1"] . "</p>
          </div>
          <div class='col11 w-clearfix'>
            <p class='plbl'>" . $row["Attending_day2"] . "</p>
          </div>
        </div>
        <div class='reportrow w-clearfix'>
          <div class='col1 w-clearfix'>
            <h5 class='colh'>09:00 - 09:45</h5>
          </div>
          <div class='col2'>
            <h5 class='colh'>10:00 - 10:45</h5>
          </div>
          <div class='col3'>
            <h5 class='colh'>11:15 - 12:00</h5>
          </div>
          <div class='col6'>
            <h5 class='colh'>12:15 - 13:00</h5>
          </div>
          <div class='col5'>
            <h5 class='colh'>14:00 - 14:45</h5>
          </div>
            <div class='col5'>
            <h5 class='colh'>15:00 - 15:45</h5>
          </div>
          <div class='col8'>
            <h5 class='colh'>Att. Supp Session ?</h5>
          </div>
           <div class='col5'>
            <h5 class='colh'>Supp Session:</h5>
          </div>
        </div>
        <div class='reportrow w-clearfix'>
          <div class='col1 w-clearfix'>
            <p class='plbl'>" . $row["Break1"] . "</p>
          </div>
          <div class='col2 w-clearfix'>
            <p class='plbl'>" . $row["Break2"] . "</p>
          </div>
          <div class='col3 w-clearfix'>
            <p class='plbl'>" . $row["Break3"] . "</p>
          </div>
          <div class='col6 w-clearfix'>
            <p class='plbl'>" . $row["Break4"] . "</p>
          </div>
          <div class='col5 w-clearfix'>
            <p class='plbl'>" . $row["Break5"] . "</p>
          </div>
           <div class='col5 w-clearfix'>
            <p class='plbl'>" . $row["Break6"] . "</p>
          </div>
          <div class='col8 w-clearfix'>
            <p class='plbl'>" . $row["Attending_support"] . "</p>
          </div>
          <div class='col5 w-clearfix'>
            <p class='plbl'>" . $row["Support"] . "</p>
          </div>
        </div>



       


           <div class='editrow w-clearfix' style='height:auto !important;'>
          <div class='personform w-clearfix w-form'>
            <form class='formdiv w-clearfix' method='post' action='editjhb.php'>
              <input class='persontxt w-input' name='id' value='" . $row["id"] . "'>
              <input class='persontxt w-input' name='city' value='" . $city . "'>
              <input class='personedit w-button' type='submit' value='Edit Person Information'>
            </form>
          </div>
        </div>



           <div class='editrow w-clearfix' style='height:auto !important;'>
          <div class='personform w-clearfix w-form'>
            <form id='delform" . $row["id"] . "' class='formdiv w-clearfix' method='post' action='deleteperson.php'>
              <input class='persontxt w-input' name='id' value='" . $row["id"] . "'>
              <input class='persontxt w-input' name='city' value='" . $city . "'>
              <input class='personedit w-button' onclick='deleteDoc(" . $row["id"] . ")' type='button' value='Delete Person'>
            </form>
          </div>
        </div>










      </div>
";

}


}






function updatePersonJHB($id, $name, $surname, $mobile, $phone, $email, $company, $designation,  $dietary, $other,  $day1, $day2, $supportq, $supporta, $break1, $break2, $break3, $break4, $break5, $break6)
{
  $con = connectDB();

  $sql = "UPDATE register_single_jhb
SET Name='" . $name . "',
Surname='" . $surname . "',
Mobile='" . $mobile . "',
Phone='" . $phone . "',
Email='" . $email . "',
Company='" . $company . "',
Designation='" . $designation . "',
Dietary='" . $dietary . "',
Other='" . $other . "',
Attending_day1='" . $day1 . "',
Attending_day2='" . $day2 . "',
Attending_support='" . $supportq . "',
Support='" . $supporta . "',
Break1='" . $break1 . "',
Break2='" . $break2 . "',
Break3='" . $break3 . "',
Break4='" . $break4 . "',
Break5='" . $break5 . "',
Break6='" . $break6 . "' WHERE id = " . $id ;


mysql_query($sql, $con);

echo "<h3 style='float:left; width:100%; text-align: center; font-family: arial; color:#333333;'>PERSON UPDATED!</h3>


<script>
function projectSaveClose() {
  setTimeout('closeWindow()',0);
}

function closeWindow()
{
 window.location.assign('jhb.php');
}

window.onload = projectSaveClose;

</script>


";

}












function getPersonJHB($id)
{
  $con = connectDB();
  $sql = mysql_query("SELECT * FROM register_single_jhb WHERE id = " . $id);

while ($row = mysql_fetch_array($sql))
{ 
echo "

<form name='updatePerson' method='post' action='updatejhb.php'>
      <div class='reporttable w-clearfix' data-ix='new-interaction-2'>
        <div class='reportrow w-clearfix'>
          <div class='col1 w-clearfix'>
            <h5 class='colh'>Name</h5>
          </div>
          <div class='col2'>
            <h5 class='colh'>Surname</h5>
          </div>
          <div class='col3'>
            <h5 class='colh'>Mobile</h5>
          </div>
          <div class='col4'>
            <h5 class='colh'>Phone</h5>
          </div>
          <div class='col5'>
            <h5 class='colh'>Email</h5>
          </div>
          <div class='col6'>
            <h5 class='colh'>Dietary Req</h5>
          </div>
          <div class='col7'>
            <h5 class='colh'>Other Dietary</h5>
          </div>
          <div class='col8'>
            <h5 class='colh'>Company</h5>
          </div>
          <div class='col9'>
            <h5 class='colh'>Designation</h5>
          </div>
          <div class='col10'>
            <h5 class='colh'>Day 1?</h5>
          </div>
          <div class='col11 w-clearfix'>
            <h5 class='colh'>Day 2?</h5>
          </div>
        </div>
        <div class='reportrow w-clearfix'>
          <div class='col1 w-clearfix'>
            <input class='editfield' type='text' value='" . $row["Name"] . "' name='name' />
          </div>
          <div class='col2 w-clearfix'>
            <input class='editfield' type='text' value='" . $row["Surname"] . "' name='surname' />
          </div>
          <div class='col3 w-clearfix'>
            <input class='editfield' type='text' value='" . $row["Mobile"] . "' name='mobile' />
          </div>
            <div class='col4 w-clearfix'>
            <input class='editfield' type='text' value='" . $row["Phone"] . "' name='phone' />
          </div>
          <div class='col5 w-clearfix'>
            <input class='editfield' type='text' value='" . $row["Email"] . "' name='email' />
          </div>
          <div class='col6 w-clearfix'>
            <input class='editfield' type='text' value='" . $row["Dietary"] . "' name='dietary' />
          </div>
          <div class='col7 w-clearfix'>
            <input class='editfield' type='text' value='" . $row["Other"] . "' name='other' />
          </div>
          <div class='col8 w-clearfix'>
            <input class='editfield' type='text' value='" . $row["Company"] . "' name='company' />
          </div>
          <div class='col9 w-clearfix'>
            <input class='editfield' type='text' value='" . $row["Designation"] . "' name='designation' />
          </div>
          <div class='col10 w-clearfix'>
            <input class='editfield' type='text' value='" . $row["Attending_day1"] . "' name='day1' />
          </div>
          <div class='col11 w-clearfix'>
            <input class='editfield' type='text' value='" . $row["Attending_day2"] . "' name='day2' />
          </div>
        </div>
        <div class='reportrow w-clearfix'>
          <div class='col1 w-clearfix'>
            <h5 class='colh'>09:00 - 09:45</h5>
          </div>
          <div class='col2'>
            <h5 class='colh'>10:00 - 10:45</h5>
          </div>
          <div class='col3'>
            <h5 class='colh'>11:15 - 12:00</h5>
          </div>
          <div class='col6'>
            <h5 class='colh'>12:15 - 13:00</h5>
          </div>
          <div class='col5'>
            <h5 class='colh'>14:00 - 14:45</h5>
          </div>
           <div class='col5'>
            <h5 class='colh'>15:00 - 15:45</h5>
          </div>
            <div class='col8'>
            <h5 class='colh'>Att. Supp Session ?</h5>
          </div>
           <div class='col5'>
            <h5 class='colh'>Supp Session:</h5>
          </div>
        </div>
        <div class='reportrow w-clearfix'>
          <div class='col1 w-clearfix'>
            <input class='editfield' type='text' value='" . $row["Break1"] . "' name='break1' />
          </div>
          <div class='col2 w-clearfix'>
            <input class='editfield' type='text' value='" . $row["Break2"] . "' name='break2' />
          </div>
          <div class='col3 w-clearfix'>
            <input class='editfield' type='text' value='" . $row["Break3"] . "' name='break3' />
          </div>
          <div class='col6 w-clearfix'>
            <input class='editfield' type='text' value='" . $row["Break4"] . "' name='break4' />
          </div>
          <div class='col5 w-clearfix'>
            <input class='editfield' type='text' value='" . $row["Break5"] . "' name='break5' />
          </div>
           <div class='col5 w-clearfix'>
            <input class='editfield' type='text' value='" . $row["Break6"] . "' name='break6' />
          </div>

          <div class='col8 w-clearfix'>
            <input class='editfield' type='text' value='" . $row["Attending_support"] . "' name='supportq' />
          </div>
          <div class='col5 w-clearfix'>
            <input class='editfield' type='text' value='" . $row["Support"] . "' name='supporta' />
          </div>
        </div>


<input type='hidden' class='personid' name='personid' value='" . $id . "' />
     
<div class='submitrow w-clearfix'>
<input type='submit' style='color:#ffffff;' class='personedit w-submit' value='Update Information' />
        </div>


      </div>
      </form>
";

}


}







function getRegistrations($city)
{
  $con = connectDB();
  $sql = mysql_query("SELECT * FROM register_single_" . $city);

  $personarray = array();
  $k = 0;

while ($row = mysql_fetch_array($sql))
{ 
echo "
          <div class='reporttable w-clearfix'>
        <div class='reportrow w-clearfix'>
          <div class='col1h w-clearfix'>
            <h5 class='colh'>Name</h5>
          </div>
          <div class='col2h'>
            <h5 class='colh'>Surname</h5>
          </div>
          <div class='col3h'>
            <h5 class='colh'>Mobile</h5>
          </div>
          <div class='col4h'>
            <h5 class='colh'>Phone</h5>
          </div>
          <div class='col5h'>
            <h5 class='colh'>Email</h5>
          </div>
          <div class='col6h'>
            <h5 class='colh'>Dietary Req</h5>
          </div>
          <div class='col7h'>
            <h5 class='colh'>Other Dietary</h5>
          </div>
          <div class='col8h'>
            <h5 class='colh'>Company</h5>
          </div>
          <div class='col9h'>
            <h5 class='colh'>Designation</h5>
          </div>
        </div>
        <div class='reportrow w-clearfix'>
          <div class='col1h w-clearfix'>
            <p class='plbl'>" . $row["Name"] . "</p>
          </div>
          <div class='col2h w-clearfix'>
            <p class='plbl'>" . $row["Surname"] . "</p>
          </div>
          <div class='col3h w-clearfix'>
            <p class='plbl'>" . $row["Mobile"] . "</p>
          </div>
          <div class='col4h w-clearfix'>
            <p class='plbl'>" . $row["Phone"] . "</p>
          </div>
          <div class='col5h w-clearfix' style='padding-right:10px;'>
           <p class='plbl' style='overflow:hidden; padding-right:10px;'><a style='text-decoration:none; color:#666666; font-family:arial; font-weight:bold;' href='mailto:" . $row["Email"] . "'>" . $row["Email"] . "</a></p>
          </div>
          <div class='col6h w-clearfix'>
            <p class='plbl'>" . $row["Dietary"] . "</p>
          </div>
          <div class='col7h w-clearfix'>
            <p class='plbl'>" . $row["Other"] . "</p>
          </div>
          <div class='col8h w-clearfix'>
            <p class='plbl'>" . $row["Company"] . "</p>
          </div>
          <div class='col9h w-clearfix'>
            <p class='plbl'>" . $row["Designation"] . "</p>
          </div>
        </div>


           <div class='editrow w-clearfix' style='height:auto !important;'>
          <div class='personform w-clearfix w-form'>
            <form class='formdiv w-clearfix' method='post' action='editperson.php'>
              <input class='persontxt w-input' name='id' value='" . $row["id"] . "'>
              <input class='persontxt w-input' name='city' value='" . $city . "'>
              <input class='personedit w-button' type='submit' value='Edit Person Information'>
            </form>
          </div>
        </div>


           <div class='editrow w-clearfix' style='height:auto !important;'>
          <div class='personform w-clearfix w-form'>
            <form id='delform" . $row["id"] . "' class='formdiv w-clearfix' method='post' action='deleteperson.php'>
              <input class='persontxt w-input' name='id' value='" . $row["id"] . "'>
              <input class='persontxt w-input' name='city' value='" . $city . "'>
              <input onclick='deleteDoc(" . $row["id"] . ")' class='personedit w-button' type='button' value='Delete Person'>
            </form>
          </div>
        </div>




      </div>

";


$personarray[$k] = $row["Name"] . "," . $row["Surname"] . "," . $row["Mobile"] . "," . $row["Email"] . "," . $row["Dietary"] . "," . $row["Other"].  ", " . $row["Company"] . "," . $row["Designation"];

$k = $k + 1;


}



}
















function getPerson($city, $id)
{
  $con = connectDB();
  $sql = mysql_query("SELECT * FROM register_single_" . $city . " WHERE id = " . $id);

while ($row = mysql_fetch_array($sql))
{ 
echo "
<form name='updatePerson' method='post' action='updateperson.php'>
          <div class='reporttable w-clearfix' data-ix='new-interaction-2'>
        <div class='reportrow w-clearfix'>
          <div class='col1h w-clearfix'>
            <h5 class='colh'>Name</h5>
          </div>
          <div class='col2h'>
            <h5 class='colh'>Surname</h5>
          </div>
          <div class='col3h'>
            <h5 class='colh'>Mobile</h5>
          </div>
            <div class='col4h'>
            <h5 class='colh'>Phone</h5>
          </div>
          <div class='col5h'>
            <h5 class='colh'>Email</h5>
          </div>
          <div class='col6h'>
            <h5 class='colh'>Dietary Req</h5>
          </div>
          <div class='col7h'>
            <h5 class='colh'>Other Dietary</h5>
          </div>
          <div class='col8h'>
            <h5 class='colh'>Company</h5>
          </div>
          <div class='col9h'>
            <h5 class='colh'>Designation</h5>
          </div>
        </div>
        <div class='reportrow w-clearfix'>
          <div class='col1h w-clearfix'>
            <input class='editfield' type='text' value='" . $row["Name"] . "' name='name' />
          </div>
          <div class='col2h w-clearfix'>
            <input class='editfield' type='text' value='" . $row["Surname"] . "' name='surname' />
          </div>
          <div class='col3h w-clearfix'>
            <input class='editfield' type='text' value='" . $row["Mobile"] . "' name='mobile' />
          </div>
          <div class='col4h w-clearfix'>
            <input class='editfield' type='text' value='" . $row["Phone"] . "' name='phone' />
          </div>
          <div class='col5h w-clearfix' style='padding-right:10px;'>
           <input class='editfield' type='text' value='" . $row["Email"] . "' name='email' />
          </div>
          <div class='col6h w-clearfix'>
            <input class='editfield' type='text' value='" . $row["Dietary"] . "' name='dietary' />
          </div>
          <div class='col7h w-clearfix'>
            <input class='editfield' type='text' value='" . $row["Other"] . "' name='other' />
          </div>
          <div class='col8h w-clearfix'>
            <input class='editfield' type='text' value='" . $row["Company"] . "' name='company' />
          </div>
          <div class='col9h w-clearfix'>
            <input class='editfield' type='text' value='" . $row["Designation"] . "' name='designation' />
          </div>
        </div>

      


      <input type='hidden' class='personid' name='id' value='" . $id . "' />
      <input type='hidden' class='personid' name='city' value='" . $city . "' />
     
<div class='submitrow w-clearfix'>
<input type='submit' style='color:#ffffff;' class='personedit w-submit' value='Update Information' />
        </div>




      </div>
</form>
";

}


}







function updatePersonCity($id, $city, $name, $surname, $mobile, $phone, $email, $company, $designation,  $dietary, $other)
{
  $con = connectDB();

  $sql = "UPDATE register_single_" . $city . "
SET Name='" . $name . "',
Surname='" . $surname . "',
Mobile='" . $mobile . "',
Phone='" . $phone . "',
Email='" . $email . "',
Company='" . $company . "',
Designation='" . $designation . "',
Dietary='" . $dietary . "',
Other='" . $other . "' WHERE id = " . $id ;


mysql_query($sql, $con);

echo "<h3 style='float:left; width:100%; text-align: center; font-family: arial; color:#333333;'>PERSON UPDATED!</h3>


<script>
function projectSaveClose() {
  setTimeout('closeWindow()',0);
}

function closeWindow()
{
 window.location.assign('" . $city . ".php');
}

window.onload = projectSaveClose;

</script>


";

}







function getSeats2($tablename)
{
  $con = connectDB();
  $sql = mysql_query("SELECT * FROM " . $tablename . "_seats");


echo "<div class='registersection'>
<div class='formsection w-clearfix'>
                <div class='formwrap w-clearfix w-form'>
";


  while ($row = mysql_fetch_array($sql))
  { 

echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 1:</label><input id='Seat1' class='inputfield w-input' type='text' value='" . $row["Seat1"] . "' name='seat1' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 2:</label><input id='Seat2' class='inputfield w-input' type='text' value='" . $row["Seat2"] . "' name='seat2' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 3:</label><input id='Seat3' class='inputfield w-input' type='text' value='" . $row["Seat3"] . "' name='seat3' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 4:</label><input id='Seat4' class='inputfield w-input' type='text' value='" . $row["Seat4"] . "' name='seat4' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 5:</label><input id='Seat5' class='inputfield w-input' type='text' value='" . $row["Seat5"] . "' name='seat5' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 6:</label><input id='Seat6' class='inputfield w-input' type='text' value='" . $row["Seat6"] . "' name='seat6' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 7:</label><input id='Seat7' class='inputfield w-input' type='text' value='" . $row["Seat7"] . "' name='seat7' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 8:</label><input id='Seat8' class='inputfield w-input' type='text' value='" . $row["Seat8"] . "' name='seat8' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 9:</label><input id='Seat9' class='inputfield w-input' type='text' value='" . $row["Seat9"] . "' name='seat9' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 10:</label><input id='Seat10' class='inputfield w-input' type='text' value='" . $row["Seat10"] . "' name='seat10' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 11:</label><input id='Seat11' class='inputfield w-input' type='text' value='" . $row["Seat11"] . "' name='seat11' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 12:</label><input id='Seat12' class='inputfield w-input' type='text' value='" . $row["Seat12"] . "' name='seat12' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 13:</label><input id='Seat13' class='inputfield w-input' type='text' value='" . $row["Seat13"] . "' name='seat13' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 14:</label><input id='Seat14' class='inputfield w-input' type='text' value='" . $row["Seat14"] . "' name='seat14' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 15:</label><input id='Seat15' class='inputfield w-input' type='text' value='" . $row["Seat15"] . "' name='seat15' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 16:</label><input id='Seat16' class='inputfield w-input' type='text' value='" . $row["Seat16"] . "' name='seat16' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 17:</label><input id='Seat17' class='inputfield w-input' type='text' value='" . $row["Seat17"] . "' name='seat17' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 18:</label><input id='Seat18' class='inputfield w-input' type='text' value='" . $row["Seat18"] . "' name='seat18' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 19:</label><input id='Seat19' class='inputfield w-input' type='text' value='" . $row["Seat19"] . "' name='seat19' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 20:</label><input id='Seat20' class='inputfield w-input' type='text' value='" . $row["Seat20"] . "' name='seat20' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 21:</label><input id='Seat21' class='inputfield w-input' type='text' value='" . $row["Seat21"] . "' name='seat21' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 22:</label><input id='Seat22' class='inputfield w-input' type='text' value='" . $row["Seat22"] . "' name='seat22' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 23:</label><input id='Seat23' class='inputfield w-input' type='text' value='" . $row["Seat23"] . "' name='seat23' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 24:</label><input id='Seat24' class='inputfield w-input' type='text' value='" . $row["Seat24"] . "' name='seat24' /></div>";
echo "<div class='formrow w-clearfix'><label class='formlbl' for='fieldvalue'>Seat 25:</label><input id='Seat25' class='inputfield w-input' type='text' value='" . $row["Seat25"] . "' name='seat25' /></div>";
  }
  echo "</div></div></div>";

  mysql_query($sql, $con);
}







function countfieldregs($city)
{
  $con = connectDB();
  $sql = mysql_query("SELECT * FROM register_single_" . $city);

$counter = 0;
$idcount = array();

while ($row = mysql_fetch_array($sql))
{ 
  $idcount[$counter] = $row["id"];
  $counter = $counter + 1;
}

echo $counter;

mysql_query($sql, $con);
}



function countdiet($city, $fieldval)
{
  $con = connectDB();
  $sql = mysql_query("SELECT Dietary FROM register_single_" . $city . " WHERE Dietary = '" . $fieldval . "'");

$counter = 0;
$idcount = array();

while ($row = mysql_fetch_array($sql))
{ 
  $idcount[$counter] = $row["id"];
  $counter = $counter + 1;
}

echo $counter;

mysql_query($sql, $con);
}




function countday($city, $daynum)
{
  $con = connectDB();
  $sql = mysql_query("SELECT Attending_day" . $daynum . " FROM register_single_" . $city . " WHERE Attending_day" . $daynum . " = 'Yes'");

$counter = 0;
$idcount = array();

while ($row = mysql_fetch_array($sql))
{ 
  $idcount[$counter] = $row["id"];
  $counter = $counter + 1;
}

echo $counter;

mysql_query($sql, $con);
}





function getSeatval($tablename, $seatnum)
{
  $seatval = getSeatArray($seatnum);

     if ($seatval != null || $seatval != 0)
     {
        echo "<input data-original-value='" . $seatval . "' id='seatno" . $seatnum . "' type='hidden' name='seat" . $seatnum . "' class='w-input numleft' value='" . $seatval . "' />";

         echo "<input data-original-value='Seats left: " . $seatval . "' id='seatnoh" . $seatnum . "' type='text' name='seathid" . $seatnum . "' class='w-input numleft' value='Seats left: " . $seatval . "' />";
     }
     else
     {
        echo "<div class='numleft'>No Seats Left !</div>";
     }

}



function deletePerson($city, $id)
{
  $con = connectDB();
 
   $sql = "DELETE FROM register_single_" . $city . " WHERE id=" . $id . "";


echo "<h3 style='float:left; width:100%; text-align: center; font-family: arial; color:#333333;'>PERSON DELETED!</h3>


<script>
function projectSaveClose() {
  setTimeout('closeWindow()',2000);
}

function closeWindow()
{
 window.location.assign('" . $city . ".php');
}

window.onload = projectSaveClose;

</script>


";


mysql_query($sql, $con);
    mysql_close($con);  

}











?>