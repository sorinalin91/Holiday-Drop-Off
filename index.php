
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Holiday Drop Off</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="jsgallery/fadeslideshow.js"></script>
</head>
<body>
<div id="wrapper">
  <div id="wrap">
    <div id="page">
      
<div class="header">
  <div class="logo"><a href="index.php"><img src="images/logo.png"></a></div>
  <div class="loginbox">
    <div class="login">
            <!-- <font class="welcomemsg">Welcome, <b></b></font>-->
      <div class="myaccount"><a href="mydetails.php">My Account</a></div>
      <div class="sigunup"><a href="logout.php">Sign Out</a></div>
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
          <div class="bannerbox">
            <script type="text/javascript">

var mygallery=new fadeSlideShow({
	wrapperid: "fadeshow1", //ID of blank DIV on page to house Slideshow
	dimensions: [671, 229], //width/height of gallery in pixels. Should reflect dimensions of largest image
	imagearray: [
	["images/uploads/cache/gallery26.jpg"],["images/uploads/cache/gallery27.jpg"],["images/uploads/cache/gallery28.jpg"],				],	
	displaymode: {type:'auto', pause:2500, cycles:0, wraparound:false},
	persist: false, //remember last viewed slide and recall within same session?
	fadeduration: 500, //transition duration (milliseconds)
	descreveal: "ondemand",
	togglerid: ""
})

</script>
            <div id="fadeshow1"></div>
          </div>
          <div class="middlecontant2">
            <div class="welcome"><img src="images/welcome.png" width="428" height="40" /></div>
            <div class="welcome2">Holiday Boredom solved!</div>
            <div class="icon2"> <img src="images/holidaystar.png" alt="" /> <img src="images/holidaystar.png" alt="" /> <img src="images/holidaystar.png" alt="" /> <img src="images/holidaystar.png" alt="" /> <img src="images/holidaystar.png" alt="" /> <img src="images/holidaystar.png" alt="" /> <img src="images/holidaystar.png" alt="" /> <img src="images/holidaystar.png" alt="" /> <img src="images/holidaystar.png" alt="" /> <img src="images/holidaystar.png" alt="" /> <img src="images/holidaystar.png" alt="" /> <img src="images/holidaystar.png" alt="" /> <img src="images/holidaystar.png" alt="" /> <img src="images/holidaystar.png" alt="" /> <img src="images/holidaystar.png" alt="" /> <img src="images/holidaystar.png" alt="" /> <img src="images/holidaystar.png" alt="" /> </div>
            <div class="body-main-content">
              <div class="bodycontent1">
                                <p>
	Holiday Drop Off is a great way for children to learn new sports in a fun and exciting environment. &#39;HDO&#39; believe that sport should be enjoyed by all and have created a sports camp for children between the ages of Rising 4 -14 years old..<br />
	&#39;HDO&#39; is a sports camp which is taught by coaches of various sporting backgrounds, helping develop sporting techniques or simply introducing children to sports they are yet to learn.<br />
	<br />
	Places are limited so its best to book in advance. Although you can turn up on the day (depending on availability) &#39;HDO&#39; have great discounts when booking online...<br />
	<br />
	To take advantage of the first class coaching in an admirable sporting facility, book online now and don&#39;t miss out.</p>
<p>
	&nbsp;</p>
<p>
	<img alt="" src="https://scontent-a-lhr.xx.fbcdn.net/hphotos-prn1/935249_527113407324075_272446065_n.jpg" style="width: 200px; height: 267px;" /><img alt="" src="https://fbcdn-sphotos-g-a.akamaihd.net/hphotos-ak-prn1/935469_527502617285154_733424246_n.jpg" style="width: 200px; height: 267px;" /></p>
<p>
	&nbsp;</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
<p>
	&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>
	&nbsp;</p>
<p>
	<a href="http://storiesandsavings.com/test/holiday/book-online.php">Next Camp is the Xmas Camp - Click here to book now</a>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
 </div>
            </div>
          </div>
          <div class="middlecontant3">
            <div class="flayer">
              <div class="downloadtext">
                <a href="download.php?download_file=050226171113.pdf">Download Our HDO E-Flyer</a>              </div>
              <div class="img-effect"><img src="images/img-effect.png" /></div>
            </div>
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
</body>
</html>
