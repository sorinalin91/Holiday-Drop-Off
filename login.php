
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HOLIDAY DROP OFF - LOGIN</title>
<link rel="stylesheet" href="css/style.css" />
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script src="scripts/jquery_mini.js" type="text/javascript"></script>
<script type="text/javascript">
function login(){
var username = $("#username").val();
var password = $("#password").val();
$.post("login_check.php","username="+username+"&password="+password+"&action=login_check", function(results){
if(results == "0")
{
	$("#wrong_login").css("display","block");
	
} 
else{
	location.href="book-online.php";
	}
	
});
} 

function submitfrm(e) {
if (e.keyCode == 13) {
login();
return false;
}
}

</script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
  <div id="orenge">
    <div id="page">
      
<div class="header">
  <div class="logo"><a href="index.php"><img src="images/logo.png"></a></div>
  <div class="loginbox">
    <div class="login">
            <div class="myaccount"><a href="signup.php">Sign Up Now</a></div>
      <div class="sigunup"><a href="login.php">Log In</a></div>
          </div>
    <div class="mailbox">
      <div class="envelop"><img src="images/envelop.png"></div>
      <div class="mailid"><a href="mailto:Info@holidaydropoff.com">Info@holidaydropoff.com</a></div>
    </div>
    <div class="contact">
      <div class="envelop"><img src="images/phon-icon.png"></div>
      <div class="mailid">07944 485 552</div>
    </div>
  </div>
  <div class="navigation">
    <ul>
      <li><a href="index.php" class="home">Home</a></li>
      <li><a href="about-us.php" class="about">About Us</a></li>
      <li><a href="ourcampus.php" class="our-camps">Our Camps</a></li>
      <li><a href="useful-stuff.php" class="useful-stuff">Useful Stuff</a></li>
      <li><a href="prices.php" class="prices">Prices</a></li>
      <li><a href="book-online.php" class="bookonline">Book Online</a></li>
      <li><a href="contactus.php" class="contact-us">Contact Us</a></li>
    </ul>
  </div>
</div>
      <div class="menubottomco6"></div>
      <div class="container">
        <div class="middlepart1">
          <script type="text/javascript">
function validation(newsEmail)
{
	var regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	if(document.frmMail.newsEmail.value.length < 1)
	{
 		alert("You cannot leave the Email Field Empty");
		document.getElementById('newsEmail').focus();
		return false;	
	}
	if(!regex.test(document.frmMail['newsEmail'].value))
	{
		alert("Invalid email address format");
		document.getElementById('newsEmail').focus();	
		return false;
	}
}
</script>

<div class="middleleft">
  <div class="newslatter">
    <div class="newstext1">Newsletters</div>
    <div class="newstext2">Enter your e-mail address</div>
    <table>
      <tr>
        <td align="center"><form id="frmMail" name="frmMail" method="post">
            <input name="newsEmail" id="newsEmail" class="newstext3"   type="text" style="color:#333333;text-decoration:none;" onfocus="if(this.value == 'Enter your e-mail address') this.value=''" onblur="if(this.value == '') this.value='Enter your e-mail address'"  value="Enter your e-mail address" />
            <br/>
            <input type="image" src="images/submit.jpg" name="mail" style="margin-bottom:10px;" id="mail" value="Submit" onclick="return validation(newsEmail);" />
          </form></td>
      </tr>
    </table>
  </div>
  <div class="nextcamps">
    <div class="newstext1">Next Camps</div>
    <div class="newstext2"><a style="color: #FFFFFF; text-decoration:none;font-size: 13px;   font-weight: bold;" href="book-online.php?tab=33">Summer Camp</a></div><div class="newstext2"><a style="color: #FFFFFF; text-decoration:none;font-size: 13px;   font-weight: bold;" href="book-online.php?tab=32">Easter Camp</a></div>  </div>
  <div class="gallery2"> <a href="photogallery.php">
    <div class="gallery-img1"><img width="66" height="66" src="images/uploads/cache/gallery29.jpg" /></div><div class="gallery-img2"><img width="66" height="66" src="images/uploads/cache/gallery28.jpg" /></div><div class="gallery-img3"><img width="66" height="66" src="images/uploads/cache/gallery24.jpg" /></div><div class="gallery-img4"><img width="66" height="66" src="images/uploads/cache/gallery25.jpg" /></div><div class="gallery-img4"><img width="66" height="66" src="images/uploads/cache/gallery26.jpg" /></div><div class="gallery-img4"><img width="66" height="66" src="images/uploads/cache/gallery27.jpg" /></div><div class="gallery-img4"><img width="66" height="66" src="images/uploads/cache/gallery23.jpg" /></div><div class="gallery-img4"><img width="66" height="66" src="images/uploads/cache/gallery22.jpg" /></div><div class="gallery-img4"><img width="66" height="66" src="images/uploads/cache/gallery20.jpg" /></div>    <div class="gallery-img5">See the latest Holiday Drop Off<br />
      photos</div>
    </a> </div>
  <div class="checklist2">
    <div class="cheklist-text-hd">HDO Checklist...</div>
    <div class="cheklist-text-hd2">
      <div class="cheklist-offer"><img src="images/icon.png" />Packed Lunch</div>
      <div class="cheklist-offer"><img src="images/icon.png" />Swimming Kit</div>
      <div class="cheklist-offer"><img src="images/icon.png" />Clothing</div>
      <div class="cheklist-offer"><img src="images/icon.png" />Medical Equipment</div>
      <div class="cheklist-offer"><img src="images/icon.png" />Application Form</div>
      <div class="c1"></div>
    </div>
  </div>
  <div class="c1"></div>
</div>
          <div class="ourcampus-right-content1">
                        <div class="bookonline-right-content">
              <div class="login-heading-text1">
                <h1>Log in</h1>
                <table width="650" border="0" align="center" cellpadding="0" cellspacing="0" style="border:#333333 solid 1px; 
	-moz-border-radius: 10px; /* Firefox */
	-webkit-border-radius: 10px; /* Safari and Chrome */
	border-radius: 10px; /* Opera 10.5+, future browsers, and now also Internet Explorer 6+ using IE-CSS3 */
	background:#ffffff;   ">
                  <tr>
                    <td style="padding-left:20px; padding-top:50px;"><table width="610" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td colspan="2" style="color:#000000; font-size:15px;">Username :</td>
                          <td><input id="username" type="text"  class="useriputbg" onkeypress="return submitfrm(event);" /></td>
                          <!--<td class="massagebg">This will be used to sign
                        into your account</td>-->
                        </tr>
                        <tr>
                          <td colspan="2" style="color:#000000; font-size:15px; ">Password :</td>
                          <td colspan="2"><input id="password" type="password"  class="useriputbg" onkeypress="return submitfrm(event);"/></td>
                          <!--<td class="massagebg">Pick something that you 
                        will remember!</td>-->
                        </tr>
                        <tr>
                          <td colspan="2">&nbsp;</td>
                        </tr>
                        <tr></tr>
                        <tr>
                          <td colspan="2">&nbsp;</td>
                          <td colspan="4" class="loginbt"><font style="cursor:pointer; color:white" onclick="login()">Submit</font>
                            <div style="color:red; margin-left:-20px; margin-top:10px; display:none" id="wrong_login">Wrong Username or Password.</div></td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                </table>
                <div class="login-content-text1">Having your own log in allows you to book, amend and cancel* HDO bookings. If you haven’t yet created an account click on the link below</div>
              </div>
            </div>
            <div class="c1"></div>
            <div class="forgotbt"><a href="forgotpassword.php">I forgot my password</a></div>
            <div class="accountsignbt"><a href="signup.php">Haven’t got an account - Sign up</a></div>
          </div>
        </div>
      </div>
      <div class="c1"></div>
    </div>
    <div class="footer">
      <div class="c1"></div>
      <div class="main-footer">
  <div class="footer-news-content">
    <div class="rightpart">
      <h2>Latest HDO News</h2>
            <ul>
        <li><a href="news.php?newsID=2">Parents Feedback</a></li><li><a href="news.php?newsID=15">FAQs</a></li><li><a href="news.php?newsID=20">What to bring</a></li>      </ul>
    </div>
    <div class="middilepart">
      <ul>
        <li><a href="news.php?newsID=17">Discounts + Pricing</a></li><li><a href="news.php?newsID=27">Press releases</a></li><li><a href="news.php?newsID=26">New Sports</a></li>      </ul>
    </div>
    <div class="footer-text-part3">
      <h2>Join Us on Facebook</h2>
      <p> See all the latest Holiday Drop Off photos on our Facebook page
        </p>
      <div class="like-icon"> <a href="http://www.facebook.com/HolidayDropOff" target="_blank"><img src="images/like-icon.png"></a><a href="http://www.facebook.com/HolidayDropOff" target="_blank"><img src="images/facebook-icon.png"></a> </div>
    </div>
    <div class="c1"></div>
  </div>
  <div class="c1"></div>
  <div class="footertext"><a href="termcondition.php">Terms and conditions</a> | <a href="privacy.php">Privacy Policy</a> | <a href="contactus.php">Contact Us</a> | <a href="contactus.php">Site Map</a> | <a href="workforus.php">Work for Us</a></div>
</div>
    </div>
  </div>
</div>
<script type="text/javascript">
<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
//-->
</script>
</body>
</html>
