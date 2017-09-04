<?php




function connectDBs2()
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


function createtableRegister($tablename)
{
    $con = connectDB();

    $sql = "CREATE TABLE register_single_" . $tablename . " (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Name VARCHAR(200) NOT NULL,
Surname VARCHAR(200) NOT NULL,
Mobile VARCHAR(200) NOT NULL,
Phone VARCHAR(200) NOT NULL,
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
Mobile VARCHAR(200) NOT NULL,
Phone VARCHAR(200) NOT NULL,
Email VARCHAR(200) NOT NULL,
Company VARCHAR(200) NOT NULL,
Designation VARCHAR(200) NOT NULL,
Dietary VARCHAR(200) NOT NULL,
Other VARCHAR(200) NOT NULL,
Attending_day1 VARCHAR(200) NOT NULL,
Attending_day2 VARCHAR(200) NOT NULL,
Attending_support VARCHAR(200) NOT NULL,
Support VARCHAR(200) NOT NULL,
Break1 VARCHAR(200) NOT NULL,
Break2 VARCHAR(200) NOT NULL,
Break3 VARCHAR(200) NOT NULL,
Break4 VARCHAR(200) NOT NULL,
Break5 VARCHAR(200) NOT NULL,
Break6 VARCHAR(200) NOT NULL
)";

   mysql_query($sql, $con);
}




function createsupportSlots()
{
    $con = connectDB();

    $sql = "CREATE TABLE support_jhb (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Slot1 VARCHAR(200) NOT NULL,
Slot2 VARCHAR(200) NOT NULL,
Slot3 VARCHAR(200) NOT NULL,
Slot4 VARCHAR(200) NOT NULL,
Slot5 VARCHAR(200) NOT NULL,
Slot6 VARCHAR(200) NOT NULL,
Slot7 VARCHAR(200) NOT NULL,
Slot8 VARCHAR(200) NOT NULL,
Slot9 VARCHAR(200) NOT NULL,
Slot10 VARCHAR(200) NOT NULL,
Slot11 VARCHAR(200) NOT NULL,
Slot12 VARCHAR(200) NOT NULL,
Slot13 VARCHAR(200) NOT NULL,
Slot14 VARCHAR(200) NOT NULL
)";

   mysql_query($sql, $con);
}






function updatesupportSlots($Slot1, $Slot2, $Slot3, $Slot4, $Slot5, $Slot6, $Slot7, $Slot8, $Slot9, $Slot10, $Slot11, $Slot12, $Slot13, $Slot14)
{
  $con = connectDB();

  $sql = "UPDATE support_jhb
SET Slot1='" . $Slot1 . "',
Slot2='" . $Slot2 . "',
Slot3='" . $Slot3 . "',
Slot4='" . $Slot4 . "',
Slot5='" . $Slot5 . "',
Slot6='" . $Slot6 . "',
Slot7='" . $Slot7 . "',
Slot8='" . $Slot8 . "',
Slot9='" . $Slot9 . "',
Slot10='" . $Slot10 . "',
Slot11='" . $Slot11 . "',
Slot12='" . $Slot12 . "',
Slot13='" . $Slot13 . "',
Slot14='" . $Slot14 . "'";


mysql_query($sql, $con);

}








function getSlots()
{
  $con = connectDB();
  $sql = mysql_query("SELECT * FROM support_jhb");

echo " <div class='supportdiv w-clearfix'>
                        <h4 class='sessionh'>If you would like to attend a support session, please select a time Slot below (first come first serve):</h4>
                        <div class='sessionrows w-clearfix'>";

while ($row = mysql_fetch_array($sql))
{ 

if ($row["Slot1"] >= 1)
{
  echo "  <div class='sessionblock w-clearfix'>
                            <div class='sessionsradio w-radio'>
                              <input onchange='setFieldval(\"" . "fsupport" . "\",this.value); deductSupseat(1)' class='rbtnc w-radio-input' data-name='Support' id='Support: 9:00 - 9:' name='Support' type='radio' value='Support: 9:00 - 9:25'>
                              <label class='rfieldhid w-form-label' for='Support: 9:00 - 9:25'>Radio</label>
                            </div>
                            <div class='sessionlbl'>09:00 - 09:25</div>
                            
<input id='fSlot1' class='slotslft' data-original-value='" . $row["Slot1"] . " Slots Left' type='text' value='" . $row["Slot1"] . " Slots Left' />
<input id='Slot1' data-original-value='" . $row["Slot1"] . "' name='Slot1' type='hidden' value='" . $row["Slot1"] . "' />

                          </div>";
}



if ($row["Slot2"] >= 1)
{
  echo "  <div class='sessionblock w-clearfix'>
                            <div class='sessionsradio w-radio'>
                              <input onchange='setFieldval(\"" . "fsupport" . "\",this.value); deductSupseat(2)' class='rbtnc w-radio-input' data-name='Support' id='Support: 9:30 - 9:55' name='Support' type='radio' value='Support: 9:30 - 9:55'>
                              <label class='rfieldhid w-form-label' for='Support: 9:30 - 9:55'>Radio</label>
                            </div>
                            <div class='sessionlbl'>09:30 - 09:55</div>

<input id='fSlot2' class='slotslft' data-original-value='" . $row["Slot2"] . " Slots Left' type='text' value='" . $row["Slot2"] . " Slots Left' />
<input id='Slot2' data-original-value='" . $row["Slot2"] . "' name='Slot2' type='hidden' value='" . $row["Slot2"] . "' />

                          </div>";
}





if ($row["Slot3"] >= 1)
{
  echo "  <div class='sessionblock w-clearfix'>
                            <div class='sessionsradio w-radio'>
                              <input onchange='setFieldval(\"" . "fsupport" . "\",this.value); deductSupseat(3)' class='rbtnc w-radio-input' data-name='Support' id='Support: 10:00 - 10;' name='Support' type='radio' value='Support: 10:00 - 10:25'>
                              <label class='rfieldhid w-form-label' for='Support: 10:00 - 10:25'>Radio</label>
                            </div>
                            <div class='sessionlbl'>10:00 - 10:25</div>

<input id='fSlot3' class='slotslft' data-original-value='" . $row["Slot3"] . " Slots Left' type='text' value='" . $row["Slot3"] . " Slots Left' />
<input id='Slot3' data-original-value='" . $row["Slot3"] . "' name='Slot3' type='hidden' value='" . $row["Slot3"] . "' />

                          </div>";
}




if ($row["Slot4"] >= 1)
{
  echo "<div class='sessionblock w-clearfix'>
                            <div class='sessionsradio w-radio'>
                              <input onchange='setFieldval(\"" . "fsupport" . "\",this.value); deductSupseat(4)' class='rbtnc w-radio-input' data-name='Support' id='Support: 10:30 - 10:' name='Support' type='radio' value='Support: 10:30 - 10:55'>
                              <label class='rfieldhid w-form-label' for='Support: 10:30 - 10:55'>Radio</label>
                            </div>
                            <div class='sessionlbl'>10:30 - 10:55</div>

<input id='fSlot4' class='slotslft' data-original-value='" . $row["Slot4"] . " Slots Left' type='text' value='" . $row["Slot4"] . " Slots Left' />
<input id='Slot4' data-original-value='" . $row["Slot4"] . "' name='Slot4' type='hidden' value='" . $row["Slot4"] . "' />

                          </div>";
}





if ($row["Slot5"] >= 1)
{
  echo " <div class='sessionblock w-clearfix'>
                            <div class='sessionsradio w-radio'>
                              <input onchange='setFieldval(\"" . "fsupport" . "\",this.value); deductSupseat(5)' class='rbtnc w-radio-input' data-name='Support' id='Support: 11:00 - 11:' name='Support' type='radio' value='Support: 11:00 - 11:25'>
                              <label class='rfieldhid w-form-label' for='Support: 11:00 - 11:25'>Radio</label>
                            </div>
                            <div class='sessionlbl'>11:00 - 11:25</div>

<input id='fSlot5' class='slotslft' data-original-value='" . $row["Slot5"] . " Slots Left' type='text' value='" . $row["Slot5"] . " Slots Left' />
<input id='Slot5' data-original-value='" . $row["Slot5"] . "' name='Slot5' type='hidden' value='" . $row["Slot5"] . "' />

                          </div>";
}






if ($row["Slot6"] >= 1)
{
  echo "<div class='sessionblock w-clearfix'>
                            <div class='sessionsradio w-radio'>
                              <input onchange='setFieldval(\"" . "fsupport" . "\",this.value); deductSupseat(6)' class='rbtnc w-radio-input' data-name='Support' id='Support: 11:30 - 11:' name='Support' type='radio' value='Support: 11:30 - 11:55'>
                              <label class='rfieldhid w-form-label' for='Support: 11:30 - 11:55'>Radio</label>
                            </div>
                            <div class='sessionlbl'>11:30 - 11:55</div>

<input id='fSlot6' class='slotslft' data-original-value='" . $row["Slot6"] . " Slots Left' type='text' value='" . $row["Slot6"] . " Slots Left' />
<input id='Slot6' data-original-value='" . $row["Slot6"] . "' name='Slot6' type='hidden' value='" . $row["Slot6"] . "' />

                          </div>";
}






if ($row["Slot7"] >= 1)
{
  echo " <div class='sessionblock w-clearfix'>
                            <div class='sessionsradio w-radio'>
                              <input onchange='setFieldval(\"" . "fsupport" . "\",this.value); deductSupseat(7)' class='rbtnc w-radio-input' data-name='Support' id='Support: 12:00 - 12:' name='Support' type='radio' value='Support: 12:00 - 12:25'>
                              <label class='rfieldhid w-form-label' for='Support: 12:00 - 12:55'>Radio</label>
                            </div>
                            <div class='sessionlbl'>12:00 - 12:25</div>

<input id='fSlot7' class='slotslft' data-original-value='" . $row["Slot7"] . " Slots Left' type='text' value='" . $row["Slot7"] . " Slots Left' />
<input id='Slot7' data-original-value='" . $row["Slot7"] . "' name='Slot7' type='hidden' value='" . $row["Slot7"] . "' />

                          </div>";
}





if ($row["Slot8"] >= 1)
{
  echo "<div class='sessionblock w-clearfix'>
                            <div class='sessionsradio w-radio'>
                              <input onchange='setFieldval(\"" . "fsupport" . "\",this.value); deductSupseat(8)' class='rbtnc w-radio-input' data-name='Support' id='Support: 12:30 - 12:' name='Support' type='radio' value='Support: 12:30 - 12:55'>
                              <label class='rfieldhid w-form-label' for='Support: 12:30 - 12:55'>Radio</label>
                            </div>
                            <div class='sessionlbl'>12:30 - 12:55</div>

<input id='fSlot8' class='slotslft' data-original-value='" . $row["Slot8"] . " Slots Left' type='text' value='" . $row["Slot8"] . " Slots Left' />
<input id='Slot8' data-original-value='" . $row["Slot8"] . "' name='Slot8' type='hidden' value='" . $row["Slot8"] . "' />

                          </div>";
}





if ($row["Slot9"] >= 1)
{
  echo " <div class='sessionblock w-clearfix'>
                            <div class='sessionsradio w-radio'>
                              <input onchange='setFieldval(\"" . "fsupport" . "\",this.value); deductSupseat(9)' class='rbtnc w-radio-input' data-name='Support' id='Support: 13:00 - 13:' name='Support' type='radio' value='Support: 13:00 - 13:25'>
                              <label class='rfieldhid w-form-label' for='Support: 13:00 - 13:25'>Radio</label>
                            </div>
                            <div class='sessionlbl'>13:00 - 13:25</div>

<input id='fSlot9' class='slotslft' data-original-value='" . $row["Slot9"] . " Slots Left' type='text' value='" . $row["Slot9"] . " Slots Left' />
<input id='Slot9' data-original-value='" . $row["Slot9"] . "' name='Slot9' type='hidden' value='" . $row["Slot9"] . "' />

                          </div>";
}





if ($row["Slot10"] >= 1)
{
  echo "<div class='sessionblock w-clearfix'>
                            <div class='sessionsradio w-radio'>
                              <input onchange='setFieldval(\"" . "fsupport" . "\",this.value); deductSupseat(10)' class='rbtnc w-radio-input' data-name='Support' id='Support: 13:30 - 13:' name='Support' type='radio' value='Support: 13:30 - 13:55'>
                              <label class='rfieldhid w-form-label' for='Support: 13:30 - 13:55'>Radio</label>
                            </div>
                            <div class='sessionlbl'>13:30 - 13:55</div>

<input id='fSlot10' class='slotslft' data-original-value='" . $row["Slot10"] . " Slots Left' type='text' value='" . $row["Slot10"] . " Slots Left' />
<input id='Slot10' data-original-value='" . $row["Slot10"] . "' name='Slot10' type='hidden' value='" . $row["Slot10"] . "' />

                          </div>";
}





if ($row["Slot11"] >= 1)
{
  echo "<div class='sessionblock w-clearfix'>
                            <div class='sessionsradio w-radio'>
                              <input onchange='setFieldval(\"" . "fsupport" . "\",this.value); deductSupseat(11)' class='rbtnc w-radio-input' data-name='Support' id='Support: 14:00 - 14:' name='Support' type='radio' value='Support: 14:00 - 14:25'>
                              <label class='rfieldhid w-form-label' for='Support: 14:00 - 14:25'>Radio</label>
                            </div>
                            <div class='sessionlbl'>14:00 - 14:25</div>

<input id='fSlot11' class='slotslft' data-original-value='" . $row["Slot11"] . " Slots Left' type='text' value='" . $row["Slot11"] . " Slots Left' />
<input id='Slot11' data-original-value='" . $row["Slot11"] . "' name='Slot11' type='hidden' value='" . $row["Slot11"] . "' />

                          </div>";
}





if ($row["Slot12"] >= 1)
{
  echo "<div class='sessionblock w-clearfix'>
                            <div class='sessionsradio w-radio'>
                              <input onchange='setFieldval(\"" . "fsupport" . "\",this.value); deductSupseat(12)' class='rbtnc w-radio-input' data-name='Support' id='Support: 14:30 - 14:' name='Support' type='radio' value='Support: 14:30 - 14:55'>
                              <label class='rfieldhid w-form-label' for='Support: 14:30 - 14:55'>Radio</label>
                            </div>
                            <div class='sessionlbl'>14:30 - 14:55</div>
                            
<input id='fSlot12' class='slotslft' data-original-value='" . $row["Slot12"] . " Slots Left' type='text' value='" . $row["Slot12"] . " Slots Left' />
<input id='Slot12' data-original-value='" . $row["Slot12"] . "' name='Slot12' type='hidden' value='" . $row["Slot12"] . "' />

                          </div>";
}





if ($row["Slot13"] >= 1)
{
  echo "<div class='sessionblock w-clearfix'>
                            <div class='sessionsradio w-radio'>
                              <input onchange='setFieldval(\"" . "fsupport" . "\",this.value); deductSupseat(13)' class='rbtnc w-radio-input' data-name='Support' id='Support: 15:00 - 15:' name='Support' type='radio' value='Support: 15:00 - 15:25'>
                              <label class='rfieldhid w-form-label' for='Support: 15:00 - 15:25'>Radio</label>
                            </div>
                            <div class='sessionlbl'>15:00 - 15:25</div>
                         
<input id='fSlot13' class='slotslft' data-original-value='" . $row["Slot13"] . " Slots Left' type='text' value='" . $row["Slot13"] . " Slots Left' />
<input id='Slot13' data-original-value='" . $row["Slot13"] . "' name='Slot13' type='hidden' value='" . $row["Slot13"] . "' />

                          </div>";
}





if ($row["Slot14"] >= 1)
{
  echo "<div class='sessionblock w-clearfix'>
                            <div class='sessionsradio w-radio'>
                              <input onchange='setFieldval(\"" . "fsupport" . "\",this.value); deductSupseat(14)' class='rbtnc w-radio-input' data-name='Support' id='Support: 15:30 - 15:' name='Support' type='radio' value='Support: 15:30 - 15:55'>
                              <label class='rfieldhid w-form-label' for='Support: 15:30 - 15:55'>Radio</label>
                            </div>
                            <div class='sessionlbl'>15:30 - 15:55</div>

<input id='fSlot14' class='slotslft' data-original-value='" . $row["Slot14"] . " Slots Left' type='text' value='" . $row["Slot14"] . " Slots Left' />
<input id='Slot14' data-original-value='" . $row["Slot14"] . "' name='Slot14' type='hidden' value='" . $row["Slot14"] . "' />

                          </div>";
}




}

echo "</div></div>";

  mysql_query($sql, $con);
}









function register_single_person($tablename, $name, $surname, $mobile, $phone, $email, $company, $designation, $dietary, $other, $attending1, $attending2, $supportq, $supporta, $breakone, $breaktwo, $breakthree, $breakfour, $breakfive, $breaksix)
{
  $con = connectDB();

  $sql = "INSERT INTO register_single_" . $tablename . " (Name,
Surname,
Mobile,
Phone,
Email,
Company,
Designation,
Dietary,
Other,
Attending_day1,
Attending_day2,
Attending_support,
Support,
Break1,
Break2,
Break3,
Break4,
Break5,
Break6)
VALUES (
 '" . $name . "', 
 '" . $surname . "', 
 '" . $mobile . "', 
 '" . $phone . "', 
 '" . $email . "', 
 '" . $company . "', 
 '" . $designation . "', 
 '" . $dietary . "', 
 '" . $other . "', 
 '" . $attending1 . "', 
 '" . $attending2 . "', 
 '" . $supportq . "', 
 '" . $supporta . "', 
 '" . $breakone . "', 
 '" . $breaktwo . "', 
 '" . $breakthree . "', 
 '" . $breakfour . "', 
 '" . $breakfive . "', 
 '" . $breaksix . "')";


mysql_query($sql, $con);

}







function register_single_person2($tablename, $name, $surname, $mobile, $phone, $email, $company, $designation, $dietary, $other)
{
  $con = connectDB();

  $sql = "INSERT INTO register_single_" . $tablename . " (Name,
Surname,
Mobile,
Phone,
Email,
Company,
Designation,
Dietary,
Other)
VALUES (
 '" . $name . "', 
 '" . $surname . "', 
 '" . $mobile . "', 
 '" . $phone . "', 
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
Seat18 VARCHAR(200) NOT NULL
)";

   mysql_query($sql, $con);
}





function insertseats($tablename, $seat1, $seat2, $seat3, $seat4, $seat5, $seat6, $seat7, $seat8, $seat9, $seat10, $seat11, $seat12, $seat13, $seat14, $seat15, $seat16, $seat17, $seat18)
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
Seat18)
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
 '" . $seat18 .  "')";


mysql_query($sql, $con);

}








function updateseats($tablename, $seat1, $seat2, $seat3, $seat4, $seat5, $seat6, $seat7, $seat8, $seat9, $seat10, $seat11, $seat12, $seat13, $seat14, $seat15, $seat16, $seat17, $seat18)
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
Seat18='" . $seat18 . "'";


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
  }
  echo "


<div class='submitrow'>
<input type='submit' class='submitbtn w-button' value='Update Seats' />
</div>


  </form></div></div>";

  mysql_query($sql, $con);
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
  }
  echo "</div></div></div>";

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








?>