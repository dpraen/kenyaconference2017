<?php

$name     =   $_POST['name'];
$surname  =   $_POST['surname'];
$contact  =   $_POST['contact'];
$email    =   $_POST['email'];
$captcha  =   $_POST['captcha'];
$message  =   $_POST['message'];



  
  //client mail
  $to = "candice@loud.za.com";
  $cc = "gerhard@loud.za.com";
  $headers = 'From:  SYSPRO Event Website <' . $email . '>'."\r\n";
  $headers  .= 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $subject = "SYSPRO Connect the Dots Enquiry: " . $name . " " . $surname . " <" . $email . ">"; 
  $message = "<table border=0 cellspacing=0 cellpadding=3>
  <tr>
    <td width=80><div align=left> <font face=arial >Name</font></div></td>
    <td><div align=left><font face=arial >
      ". $name ."
   </font>   </div></td>
  </tr>

   <tr>
    <td width=80><div align=left> <font face=arial >Surname</font></div></td>
    <td><div align=left><font face=arial >
      ". $surname ."
   </font>   </div></td>
  </tr>

  <tr>
    <td width=80><div align=left><font face=arial >Company</font></div></td>
    <td><div align=left><font face=arial >
      ". $company ."
   </font>   </div></td>
  </tr>
  <tr>
    <td width=80><div align=left><font face=arial >Contact</font></div></td>
    <td><div align=left><font face=arial >
      ". $contact ."
    </font>  </div></td>
  </tr>
  <tr>
    <td width=80><div align=left><font face=arial >Email</font></div></td>
    <td><div align=left><font face=arial >
      ". $email ."
   </font>   </div></td>
  </tr>
  <tr>
    <td width=80><div align=left><font face=arial >Message</font></div></td>
    <td><div align=left><font face=arial >
      ". $message ."
   </font> </div></td>
  </tr>
</table>";

if ($captcha == "PGGW" || $captcha == "pggw")
{
mail($to,$subject,$message,$headers);
  mail($cc,$subject,$message,$headers);
}


  


?>

<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Wed Mar 29 2017 12:09:57 GMT+0000 (UTC)  -->
<html data-wf-page="58db55ff44073c610259a529" data-wf-site="5880caec1c83d44a4d36073f">
<head>
  <meta charset="utf-8">
  <title>Contact Us - Thank You</title>
  <meta content="FAQ" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/syspro.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script type="text/javascript">
    WebFont.load({
      google: {
        families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic"]
      }
    });
  </script>
  <script src="js/modernizr.js" type="text/javascript"></script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/faviconbig.ico" rel="apple-touch-icon">
</head>
<body>








  <div class="topsection">
    <div class="topbtns w-clearfix"><a class="contactbtn w-button" href="contact-us.html">Contact Us</a><a class="registerbtntop w-button" href="register-for-event.html">Register Now</a>
    </div>
    <div class="sidebar w-clearfix">
      <a class="sidelink1 w-clearfix w-inline-block" data-ix="new-interaction" href="register-for-event.html">
        <div class="sidetext">REGISTER NOW</div>
      </a>
      <a class="sidelink1 w-inline-block" data-ix="new-interaction" href="contact-us.html">
        <div class="sidetext">CONTACT US</div>
      </a>
    </div>
    <div class="navbar w-nav" data-animation="default" data-collapse="medium" data-duration="400">
      <div class="navcontainer w-container">
        <a class="navbrand w-nav-brand" href="index.html"><img class="brandlogo" sizes="(max-width: 479px) 88vw, (max-width: 991px) 145.515625px, 100vw" src="images/sysprologo.png" srcset="images/sysprologo-p-500x207.png 500w, images/sysprologo.png 650w">
        </a>
        <nav class="navmenu w-clearfix w-nav-menu" role="navigation"><a class="navlinks" href="index.html">HOME</a>
          <div class="navdrop w-dropdown" data-delay="0">
            <div class="navtoggle w-dropdown-toggle">
              <div class="navtext">Why participate</div>
              <div class="navicns w-icon-dropdown-toggle"></div>
            </div>
            <nav class="navlist w-clearfix w-dropdown-list"><a class="ddlinks w-dropdown-link" href="why-come-to-the-event.html">Why come to the event</a><a class="ddlinks w-dropdown-link" href="why-syspro.html">Why Syspro</a><a class="ddlinks w-dropdown-link" href="faq.html">Faq</a>
            </nav>
          </div>
          <div class="navdrop w-dropdown" data-delay="0">
            <div class="navtoggle w-dropdown-toggle">
              <div class="navtext">Agenda</div>
              <div class="navicns w-icon-dropdown-toggle"></div>
            </div>
            <nav class="navlist w-clearfix w-dropdown-list"><a class="ddlinks w-dropdown-link" href="speakers-bios.html">SpeakerS</a><a class="ddlinks w-dropdown-link" href="agenda-johannesburg-day1.html">JOHANNESBURG</a><a class="ddlinks w-dropdown-link" href="agenda-cape-town.html">Cape Town</a><a class="ddlinks w-dropdown-link" href="agenda-durban.html">Durban</a>
            </nav>
          </div>
          <div class="navdrop w-dropdown" data-delay="0">
            <div class="navtoggle w-dropdown-toggle">
              <div class="navtext">Register</div>
              <div class="navicns w-icon-dropdown-toggle"></div>
            </div>
            <nav class="navlist w-clearfix w-dropdown-list"><a class="ddlinks w-dropdown-link" href="register-for-event.html" target="_blank">OVERVIEW</a><a class="ddlinks w-dropdown-link" href="register-johannesburg.html" target="_blank">Johannesburg</a><a class="ddlinks w-dropdown-link" href="register-cape-town.html" target="_blank">Cape Town</a><a class="ddlinks w-dropdown-link" href="register-durban.html" target="_blank">Durban</a>
            </nav>
          </div><a class="navlinks" href="sponsors.html">SPONSORS</a>
          <div class="navdrop w-dropdown" data-delay="0">
            <div class="navtoggle w-dropdown-toggle">
              <div class="navtext">Venues</div>
              <div class="navicns w-icon-dropdown-toggle"></div>
            </div>
            <nav class="navlist w-clearfix w-dropdown-list"><a class="ddlinks w-dropdown-link" href="venues-johannesburg.html">Johannesburg</a><a class="ddlinks w-dropdown-link" href="venues-cape-town.html">Cape Town</a><a class="ddlinks w-dropdown-link" href="venues-durban.html">Durban</a>
            </nav>
          </div>
          <div class="navdrop w-dropdown" data-delay="0">
            <div class="navtoggle w-dropdown-toggle">
              <div class="navtext">Gallery</div>
              <div class="navicns w-icon-dropdown-toggle"></div>
            </div>
            <nav class="navlist w-clearfix w-dropdown-list"><a class="ddlinks w-dropdown-link" href="gallery-johannesburg.html">Johannesburg</a><a class="ddlinks w-dropdown-link" href="gallery-cape-town.html">Cape Town</a><a class="ddlinks w-dropdown-link" href="gallery-durban.html">Durban</a>
            </nav>
          </div><a class="navlinks w-nav-link" href="contact-us.html">Contact Us</a>
        </nav>
        <div class="menubtn w-nav-button">
          <div class="navicon w-icon-nav-menu"></div>
        </div>
      </div>
    </div>




    <div class="header">
      <div class="containerh w-container">
        <div class="hrow w-row">
          <div class="hcol1 w-col w-col-3">
            <a class="logo w-inline-block" href="index.html"><img class="logoimg" sizes="(max-width: 991px) 100vw, 240px" src="images/sysprologo.png" srcset="images/sysprologo-p-500x207.png 500w, images/sysprologo.png 650w">
            </a>
          </div>
          <div class="hcol2 w-clearfix w-col w-col-9">
            <div class="menurow w-clearfix">
              <div class="menublocks w-clearfix"><a class="mlink" href="index.html">HOME</a>
              </div>
              <div class="menublocks">
                <div class="dditem w-clearfix w-dropdown" data-delay="0">
                  <div class="ddtoggle w-dropdown-toggle">
                    <div class="ddlabel">Why Participate</div>
                  </div>
                  <nav class="ddlist w-clearfix w-dropdown-list">
                    <div class="spreadimg"></div>
                    <div class="ddexpand">
                      <div class="droparrow"><img class="dropimg" src="images/dropimg2.png">
                      </div><a class="ddlink w-dropdown-link" href="why-come-to-the-event.html">Why come to the event</a><a class="ddlink w-dropdown-link" href="why-syspro.html">why syspro</a><a class="ddlink w-dropdown-link" href="faq.html">faq</a>
                    </div>
                  </nav>
                </div>
              </div>
              <div class="menublocks">
                <div class="dditem w-clearfix w-dropdown" data-delay="0">
                  <div class="ddtoggle w-dropdown-toggle">
                    <div class="ddlabel">Agenda</div>
                  </div>
                  <nav class="ddlist w-clearfix w-dropdown-list">
                    <div class="spreadimg"></div>
                    <div class="ddexpand">
                      <div class="droparrow"><img class="dropimg" src="images/dropimg2.png">
                      </div><a class="ddlink w-dropdown-link" href="speakers-bios.html">SPEAKERS</a><a class="ddlink w-dropdown-link" href="agenda-johannesburg-day1.html">JohannesBurg</a><a class="ddlink w-dropdown-link" href="agenda-cape-town.html">Cape Town</a><a class="ddlink w-dropdown-link" href="agenda-durban.html">Durban</a>
                    </div>
                  </nav>
                </div>
              </div>
              <div class="menublocks">
                <div class="dditem w-clearfix w-dropdown" data-delay="0">
                  <div class="ddtoggle w-dropdown-toggle">
                    <div class="ddlabel">Register</div>
                  </div>
                  <nav class="ddlist w-clearfix w-dropdown-list">
                    <div class="spreadimg"></div>
                    <div class="ddexpand">
                      <div class="droparrow"><img class="dropimg" src="images/dropimg2.png">
                      </div><a class="ddlink w-dropdown-link" href="register-for-event.html">OVERVIEW</a><a class="ddlink w-dropdown-link" href="register-johannesburg.html">JOHANNESBURG</a><a class="ddlink w-dropdown-link" href="register-cape-town.html">CAPE TOWN</a><a class="ddlink w-dropdown-link" href="register-durban.html">DURBAN</a>
                    </div>
                  </nav>
                </div>
              </div>
              <div class="menublocks w-clearfix"><a class="mlink" href="sponsors.html">Sponsors</a>
              </div>
              <div class="menublocks">
                <div class="dditem w-clearfix w-dropdown" data-delay="0">
                  <div class="ddtoggle w-dropdown-toggle">
                    <div class="ddlabel">Venues</div>
                  </div>
                  <nav class="ddlist w-clearfix w-dropdown-list">
                    <div class="spreadimg"></div>
                    <div class="ddexpand">
                      <div class="droparrow"><img class="dropimg" src="images/dropimg2.png">
                      </div><a class="ddlink w-dropdown-link" href="venues-johannesburg.html">Johannesburg</a><a class="ddlink w-dropdown-link" href="venues-cape-town.html">Cape Town</a><a class="ddlink w-dropdown-link" href="venues-durban.html">Durban</a>
                    </div>
                  </nav>
                </div>
              </div>
              <div class="menublockhide">
                <div class="dditem w-dropdown" data-delay="0">
                  <div class="ddtoggle w-dropdown-toggle">
                    <div class="ddlabel">Gallery</div>
                  </div>
                  <nav class="ddlist w-clearfix w-dropdown-list">
                    <div class="spreadimg"></div>
                    <div class="ddexpand">
                      <div class="droparrow"><img class="dropimg" src="images/dropimg.png">
                      </div><a class="ddlink w-dropdown-link" href="gallery-johannesburg.html">Johannesburg</a><a class="ddlink w-dropdown-link" href="gallery-cape-town.html">Cape Town</a><a class="ddlink w-dropdown-link" href="gallery-durban.html">Durban</a>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>





  <div class="slidersection w-clearfix">
    <div class="banner4">
      <div class="bannercontainer w-container">
        <h1 class="bannercopy">Contact us</h1>
      </div>
    </div>
  </div>
  <div class="gallerysection">
    <div class="gallerycontainer w-container">
      <div class="agendaheader w-clearfix">
        <div class="headingag">
          <h1 class="agendalocation">Contact Us</h1>
          <div class="shortline"></div>
        </div>
      </div>
      <div class="contactrow w-row">
        <div class="contactcol1 w-clearfix w-col w-col-6">
          <h4 class="contacth3">Message Us</h4>
          <h1 class="thanksmsg">Thank you<br>your message has been sent!</h1>
          <div class="thkmsg2">We will get back to you shortly!</div>
        </div>
        <div class="contactcol2 w-clearfix w-col w-col-6">
          <h4 class="contacth3">Speak to US</h4>
          <div class="contactdivs">
            <div class="contactdiv w-clearfix">
              <div class="contactleft"><img class="cimg1" src="images/homeg.png">
              </div>
              <div class="contactright">
                <p class="cinfos">9 Simba Rd, Sunninghill, Sandton, 2157</p>
              </div>
            </div>
            <div class="contactdiv w-clearfix">
              <div class="contactleft"><img class="cimg1" src="images/phoneg.png">
              </div>
              <div class="contactright">
                <p class="cinfos"><a href="tel:+27114611000" class="clinks">+27 (0) 11 461 1000 &nbsp;</a>- Office</p>
              </div>
            </div>
            <div class="contactdiv w-clearfix">
              <div class="contactleft"><img class="cimg1" src="images/emailg.png">
              </div>
              <div class="contactright">
                <p class="cinfos"><a href="mailto:info@za.syspro.com" class="clinks">info@za.syspro.com</a>
                </p>
              </div>
            </div>
          </div>
          <h4 class="contacth3">FIND US</h4>
          <div class="gmaps w-embed w-iframe">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6159.428038453837!2d28.065986259619457!3d-26.03347284997138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e95723319c449af%3A0xd75879f85a28abb7!2s9+Simba+Rd%2C+Sandton%2C+2157!5e0!3m2!1sen!2sza!4v1490618286711" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>




  <div class="footer w-clearfix">
    <div class="footertop">
      <div class="fcontainer w-container">
        <div class="frow w-row">
          <div class="fcol w-clearfix w-col w-col-4">
            <h3 class="sponsorheading">Diamond Sponsor</h3>
            <div class="sponsordiv">
              <div class="sponsorslider w-slider" data-animation="slide" data-duration="500" data-infinite="1">
                <div class="spmask w-slider-mask">
                  <div class="slslide w-clearfix w-slide">
                    <a class="slidelink w-clearfix w-inline-block" href="http://www.prophix.com/" target="_blank"><img class="spimage" src="images/botlogo1.png">
                    </a>
                  </div>
                </div>
                <div class="sparrowl w-slider-arrow-left">
                  <div class="w-icon-slider-left"></div>
                </div>
                <div class="sparrowr w-slider-arrow-right">
                  <div class="w-icon-slider-right"></div>
                </div>
                <div class="slidenav w-round w-slider-nav"></div>
              </div>
            </div>
          </div>
          <div class="fcol2 w-clearfix w-col w-col-4">
            <h3 class="sponsorheading">platinum sponsor</h3>
            <div class="sponsordiv">
              <div class="sponsorslider w-slider" data-animation="slide" data-duration="500" data-infinite="1">
                <div class="spmask w-slider-mask">
                  <div class="slslide w-clearfix w-slide">
                    <a class="slidelink w-clearfix w-inline-block" href="https://www.thinklynq.com/" target="_blank"><img class="spimage" src="images/botlogo2.png">
                    </a>
                  </div>
                </div>
                <div class="sparrowl w-slider-arrow-left">
                  <div class="w-icon-slider-left"></div>
                </div>
                <div class="sparrowr w-slider-arrow-right">
                  <div class="w-icon-slider-right"></div>
                </div>
                <div class="slidenav w-round w-slider-nav"></div>
              </div>
            </div>
          </div>
          <div class="fcol3 w-clearfix w-col w-col-4">
            <h3 class="sponsorheading">SILVER SPONSORS</h3>
            <div class="sponsordiv">
              <div class="sponsorslider w-slider" data-animation="cross" data-autoplay="1" data-delay="5000" data-duration="1000" data-easing="ease-in-out" data-infinite="1">
                <div class="spmask w-slider-mask">
                  <div class="slslide w-clearfix w-slide">
                    <a class="slidelink w-clearfix w-inline-block" href="http://www.iplan.global/" target="_blank"><img class="spimage" src="images/iplan.png">
                    </a>
                  </div>
                  <div class="slslide w-clearfix w-slide">
                    <a class="slidelink w-clearfix w-inline-block" href="http://www.translutionsoftware.com/" target="_blank"><img class="spimage" src="images/translspr2.png">
                    </a>
                  </div>
                  <div class="slslide w-clearfix w-slide">
                    <a class="slidelink w-clearfix w-inline-block" href="http://www.eoh.co.za/" target="_blank"><img class="spimage" src="images/eohlogo.png">
                    </a>
                  </div>
                </div>
                <div class="sparrowl w-slider-arrow-left">
                  <div class="w-icon-slider-left"></div>
                </div>
                <div class="sparrowr w-slider-arrow-right">
                  <div class="w-icon-slider-right"></div>
                </div>
                <div class="slidenav w-round w-slider-nav"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="footerbot">
      <div class="socialicons w-clearfix">
        <a class="sicons w-clearfix w-inline-block" href="https://www.facebook.com/SYSPROGlobal" target="_blank"><img class="sicnimg" src="images/fb.png">
        </a>
        <a class="sicons w-clearfix w-inline-block" href="https://twitter.com/syspro" target="_blank"><img class="sicnimg" src="images/tw.png">
        </a>
        <a class="sicons w-clearfix w-inline-block" href="https://www.linkedin.com/company/syspro" target="_blank"><img class="sicnimg" src="images/li.png">
        </a>
      </div>
      <div class="fcontainer w-container">
        <div class="w-row">
          <div class="botcol1 w-clearfix w-col w-col-5">
            <h3 class="fheading">About the event</h3>
            <p class="aboutevent">Connect the Dots Customer Event 2017 will bring together customers, partners and industry experts from across the African continent to focus on unlocking the potential and future-proofing your business.</p>
          </div>
          <div class="botcol2 w-clearfix w-col w-col-3">
            <h3 class="fheading">Quick Links</h3>
            <div class="quickmenu w-clearfix">
              <div class="quicklinkdd w-clearfix w-dropdown" data-delay="0">
                <div class="quicktoggle w-dropdown-toggle">
                  <div class="quicktext">WHY PARTICIPATE</div>
                  <div class="qicon w-icon-dropdown-toggle"></div>
                </div>
                <nav class="quickdrop w-clearfix w-dropdown-list"><a class="quickddlink w-dropdown-link" href="why-come-to-the-event.html">WHY COME TO THE EVENT</a><a class="quickddlink w-dropdown-link" href="why-syspro.html">WHY SYSPRO</a><a class="quickddlink w-dropdown-link" href="faq.html">FAQ</a>
                </nav>
              </div>
              <div class="quicklinkdd w-clearfix w-dropdown" data-delay="0">
                <div class="quicktoggle w-dropdown-toggle">
                  <div class="quicktext">Registration</div>
                  <div class="qicon w-icon-dropdown-toggle"></div>
                </div>
                <nav class="quickdrop w-clearfix w-dropdown-list"><a class="quickddlink w-dropdown-link" href="register-for-event.html">OVERVIEW</a><a class="quickddlink w-dropdown-link" href="register-johannesburg.html">Johannesburg</a><a class="quickddlink w-dropdown-link" href="register-cape-town.html">CAPE TOWN</a><a class="quickddlink w-dropdown-link" href="register-durban.html">DURBAN</a>
                </nav>
              </div>
              <div class="quicklinkdd w-clearfix w-dropdown" data-delay="0">
                <div class="quicktoggle w-dropdown-toggle">
                  <div class="quicktext">Agenda</div>
                  <div class="qicon w-icon-dropdown-toggle"></div>
                </div>
                <nav class="quickdrop w-clearfix w-dropdown-list"><a class="quickddlink w-dropdown-link" href="agenda-johannesburg-day1.html">Johannesburg</a><a class="quickddlink w-dropdown-link" href="agenda-cape-town.html">Cape Town</a><a class="quickddlink w-dropdown-link" href="agenda-durban.html">Durban</a>
                </nav>
              </div>
              <div class="quicklinkdd w-clearfix w-dropdown" data-delay="0">
                <div class="quicktoggle w-dropdown-toggle">
                  <div class="quicktext">Venues</div>
                  <div class="qicon w-icon-dropdown-toggle"></div>
                </div>
                <nav class="quickdrop w-clearfix w-dropdown-list"><a class="quickddlink w-dropdown-link" href="venues-johannesburg.html">Johannesburg</a><a class="quickddlink w-dropdown-link" href="venues-cape-town.html">Cape Town</a><a class="quickddlink w-dropdown-link" href="venues-durban.html">Durban</a>
                </nav>
              </div>
              <a class="quicklink w-clearfix w-inline-block" href="speakers-bios.html">
                <div class="quickl">SpeakeRS</div>
              </a>
            </div>
          </div>
          <div class="botcol3 w-clearfix w-col w-col-4">
            <h3 class="fheading">GET IN TOUCH</h3>
            <div class="contactdiv w-clearfix">
              <div class="contactleft"><img class="cimg1" src="images/homeg2.png">
              </div>
              <div class="contactright w-clearfix">
                <p class="address">9 Simba Rd, Sunninghill, Sandton, 2157</p>
              </div>
            </div>
            <div class="contactdiv w-clearfix">
              <div class="contactleft"><img class="cimg1" src="images/phoneg2.png">
              </div>
              <div class="contactright w-clearfix">
                <p class="address"><a href="tel:+27114611000" class="blink">+27 (0) 11 461 1000 </a>‍- Office</p>
              </div>
            </div>
            <div class="contactdiv w-clearfix">
              <div class="contactleft"><img class="cimg1" src="images/emailg2.png">
              </div>
              <div class="contactright w-clearfix">
                <p class="address"><a href="mailto:sarah.futter@za.syspro.com " class="blink">sarah.futter@za.syspro.com</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>