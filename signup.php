
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HOLLYDAYDROP OFF - SIGNUP</title>
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/style2.css" />
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<!-- starting signup validation and process here -->
<script src="scripts/jquery-1.7.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
function signup(){

var title = $("#title").val();
var forename = $("#forename").val();
var surname = $("#surname").val();
var username = $("#username").val();
var password1 = $("#password1").val();
var password2 = $("#password2").val();
var email = $("#email").val();
var add1 = $("#add1").val();
var landline = $("#landline").val();
var mobile = $("#mobile").val();
var add1 = $("#add1").val();
var add2 = $("#add2").val();
var add3 = $("#add3").val();
var postcode = $("#postcode").val();
var country = $("#country").val();
var ref = $("#ref").val();

if(title == ""){
$("#title").focus();
alert("Title Must Not be Blank.");
return false;
}


if(forename == ""){
$("#forename").focus();
alert("Forename Must Not be Blank.");
return false;
}

if(surname == ""){
$("#surname").focus();
alert("Surname Must Not be Blank.");
return false;
}

if(username.length < 4){
$("#username").focus();
alert("Username Must be Atleast 4 Character Long.");
return false;
}


if(password1.length < 4){
$("#password1").focus();
alert("Password Must be Atleast 4 Character Long.");
return false;
}

if(password1 != password2){
$("#password1").focus();
alert("Password Must Match.");
return false;
}

if(email.length < 10){
$("#email").focus();
alert("Email Address is Not Valid.");
return false;
}

if(landline == ""){
$("#landline").focus();
alert("Landline Must Not be Blank.");
return false;
}

if(mobile == ""){
$("#mobile").focus();
alert("Mobile Must Not be Blank.");
return false;
}

if(add1 == ""){
$("#add1").focus();
alert("Address Line 1 Must Not be Blank.");
return false;
}

if(country == ""){
$("#country").focus();
alert("Country Must Not be Blank.");
return false;
}

if(postcode == ""){
$("#postcode").focus();
alert("Postcode Must Not be Blank.");
return false;
}

if(username != ""){
$.post("signup_process.php", "title="+title+"&forename="+forename+"&surname="+surname+"&username="+username+"&password="+password1+"&email="+email+"&landline="+landline+"&mobile="+mobile+"&add1="+add1+"&add2="+add2+"&add3="+add3+"&postcode="+postcode+"&country="+country+"&ref="+ref+"&action=signup", function(results){
if(results == "1"){
$("#username").focus();
alert("Username is Already Taken.");
} else if(results == "done"){
location.href="login.php?status=success"
}
})
return false;
}

}
</script>
<!-- starting signup validation and process here -->
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
  <div id="wrap">
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
      <div class="menubottomco1"></div>
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
            <div class="ourcampus-right-content">
              <div class="login-heading-text1">
                <h1>Sign up</h1>
                <p>To create an account with us, please complete the form below</p>
                <form id="signup" method="post">
                  <div class="signup-right-content">
                    <div class="formdetails"><span>Title:</span>
                      <p>
                        <input name="" type="text" id="title" />
                      </p>
                    </div>
                    <div class="formdetails"><span>Forename:</span>
                      <p>
                        <input name="" type="text" id="forename" />
                      </p>
                    </div>
                    <div class="formdetails"><span>Surname:</span>
                      <p>
                        <input name="" type="text" id="surname" />
                      </p>
                    </div>
                    <div class="formdetails"><span>Username:</span>
                      <p>
                        <input name="" type="text" id="username" />
                      </p>
                    </div>
                    <div class="formdetails"><span>Password:</span>
                      <p>
                        <input name="" type="password" id="password1" />
                      </p>
                    </div>
                    <div class="formdetails"><span>Re-enter password:</span>
                      <p>
                        <input name="" type="password" id="password2" />
                      </p>
                    </div>
                    <div class="formdetails"><span>Email address:</span>
                      <p>
                        <input name="" type="text" id="email" />
                      </p>
                    </div>
                    <div class="formdetails"><span>Daytime phone number:</span>
                      <p>
                        <input name="" type="text" id="landline" />
                      </p>
                    </div>
                    <div class="formdetails"><span>Mobile phone number:</span>
                      <p>
                        <input name="" type="text" id="mobile" />
                      </p>
                    </div>
                    <div class="formdetails"><span>Address line 1:</span>
                      <p>
                        <input name="" type="text" id="add1" />
                      </p>
                    </div>
                    <div class="formdetails"><span>Address line 2:</span>
                      <p>
                        <input name="" type="text" id="add2" />
                      </p>
                    </div>
                    <div class="formdetails"><span>Address line 3:</span>
                      <p>
                        <input name="" type="text" id="add3" />
                      </p>
                    </div>
                    <div class="formdetails"><span>Postcode:</span>
                      <p>
                        <input name="" type="text" id="postcode" />
                      </p>
                    </div>
                    <div class="formdetails"><span>Country</span>
                      <p>
                        <input name="" type="text" id="country" />
                      </p>
                    </div>
                    <div class="formdetails"><span>Where did you hear about us:</span>
                      <p>
                        <input name="" type="text" id="ref" />
                      </p>
                    </div>
                    <div class="signupbt" onclick="signup()"><a href="#">Sign Up</a></div>
                  </div>
                </form>
              </div>
            </div>
            <div class="c1"></div>
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
