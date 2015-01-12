
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Holiday Drop Off - Our Camps</title>
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/style2.css" />
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/text.css" type="text/css" media="screen">
<script type="text/javascript" src="jsgallery/jquery_002.js"></script>
<script type="text/javascript">
            $(function() {
                //caching
				//next and prev buttons
				var $cn_next	= $('#cn_next');
				var $cn_prev	= $('#cn_prev');
				//wrapper of the left items
				var $cn_list 	= $('#cn_list');
				var $pages		= $cn_list.find('.cn_page');
				//how many pages
				var cnt_pages	= $pages.length;
				//the default page is the first one
				var page		= 1;
				//list of news (left items)
				var $items 		= $cn_list.find('.cn_item');
				//the current item being viewed (right side)
				var $cn_preview = $('#cn_preview');
				//index of the item being viewed. 
				//the default is the first one
				var current		= 1;
				
				/*
				for each item we store its index relative to all the document.
				we bind a click event that slides up or down the current item
				and slides up or down the clicked one. 
				Moving up or down will depend if the clicked item is after or
				before the current one
				*/
				$items.each(function(i){
					var $item = $(this);
					$item.data('idx',i+1);
					
					$item.bind('click',function(){
						var $this 		= $(this);
						$cn_list.find('.selected').removeClass('selected');
						$this.addClass('selected');
						var idx			= $(this).data('idx');
						var $current 	= $cn_preview.find('.cn_content:nth-child('+current+')');
						var $next		= $cn_preview.find('.cn_content:nth-child('+idx+')');
						
						if(idx > current){
							$current.stop().animate({'top':'-300px'},600,'easeOutBack',function(){
								$(this).css({'top':'310px'});
							});
							$next.css({'top':'310px'}).stop().animate({'top':'5px'},600,'easeOutBack');
						}
						else if(idx < current){
							$current.stop().animate({'top':'310px'},600,'easeOutBack',function(){
								$(this).css({'top':'310px'});
							});
							$next.css({'top':'-300px'}).stop().animate({'top':'5px'},600,'easeOutBack');
						}
						current = idx;
					});
				});
				
				/*
				shows next page if exists:
				the next page fades in
				also checks if the button should get disabled
				*/
				$cn_next.bind('click',function(e){
					var $this = $(this);
					$cn_prev.removeClass('disabled');
					++page;
					if(page == cnt_pages)
						$this.addClass('disabled');
					if(page > cnt_pages){ 
						page = cnt_pages;
						return;
					}	
					$pages.hide();
					$cn_list.find('.cn_page:nth-child('+page+')').fadeIn();
					e.preventDefault();
				});
				/*
				shows previous page if exists:
				the previous page fades in
				also checks if the button should get disabled
				*/
				$cn_prev.bind('click',function(e){
					var $this = $(this);
					$cn_next.removeClass('disabled');
					--page;
					if(page == 1)
						$this.addClass('disabled');
					if(page < 1){ 
						page = 1;
						return;
					}
					$pages.hide();
					$cn_list.find('.cn_page:nth-child('+page+')').fadeIn();
					e.preventDefault();
				});
				
            });
        </script>
</head>
<body>
<div id="wrapper">
  <div id="red">
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
      <div class="menubottomco3"></div>
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
          <div class="ourcampus-right-content">
            <div class="price-heading-text"><img src="images/ourcampus.png" alt="" /></div>
            <div class="ourcampus-middle-content ">
              <div id="TabbedPanels1" class="TabbedPanels">
                <ul class="TabbedPanelsTabGroup">
                  <li class="TabbedPanelsTab" tabindex="0">What Happens</li>
                  <li class="TabbedPanelsTab" tabindex="0">Sports at HDO</li>
                  <li class="TabbedPanelsTab" tabindex="0">Facilities</li>
                  <li class="TabbedPanelsTab" tabindex="0">Camp Dates</li>
                  <li class="TabbedPanelsTab" tabindex="0">Staff at HDO</li>
                </ul>
                <div class="TabbedPanelsContentGroup">
                  <div class="TabbedPanelsContent">
                                        <p>
	&nbsp;</p>
<p>
	<span style="font-size: 12px;"><font color="#0000ff">&nbsp;</font></span></p>
<p>
	<u><span style="font-size: 16px;"><span style="color: rgb(0, 0, 128);"><strong> Throughout the day:</strong></span></span></u></p>
<p>
	<br />
	<span style="color: rgb(0, 0, 0);"><span style="font-size: 12px;">The day will be split into several sessions and each of these sessions will have several sports to choose from. We encourage children to choose different sports throughout the day but also promote excelling in a particular favourites. We will have short breaks between each session and these breaks will allow the children to unwind and prepare for their next chosen activity. Lunch will be between 12-1 and will also&nbsp;provide a place for arts and crafts.</span></span></p>
<p>
	&nbsp;</p>
<p>
	&nbsp;</p>
<p>
	<u><span style="color: rgb(0, 0, 128);"><span style="font-size: 16px;"><strong>HDO Day Example:</strong></span></span></u></p>
<p>
	&nbsp;</p>
<p>
	<img alt="" src="https://scontent-b-lhr.xx.fbcdn.net/hphotos-frc3/539523_437526046282812_210544887_n.jpg" style="width: 600px; height: 847px;" /></p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
<p>
	&nbsp;</p>
<p>
	&nbsp;</p>
<div>
	<span style="font-size:12px;"><span style="color: rgb(0, 0, 0);">HDO is the perfect place to entertain those who are just starting to enjoy sports as well as those who already have a clear talent for sport. Our coaches range from county to international professionals and can boast great teaching success throughout a number sports. What better place to help your children improve and excel before school starts?</span></span></div>
<p>
	&nbsp;</p>
<p>
	<span style="color: rgb(0, 0, 0);"><span style="font-size: 12px;">For any more information please don&#39;t hesitate to&nbsp;contact&nbsp;us using our contact us drop down tab or emailing at info@saturdaydropoff.com<br />
	How do we Book?</span></span></p>
<p>
	&nbsp;</p>
<p>
	<span style="color: rgb(0, 0, 0);"><span style="font-size: 12px;">Book online for great discounts. You can just turn up on the day, but bookings are limited so spaced can&#39;t be guarenteed<br />
	Book up fast&hellip; Don&rsquo;t lose your spot!!!<br />
	&nbsp;<br />
	&nbsp;<br />
	&nbsp;</span></span></p>
<p>
	&nbsp;</p>
<p>
	<u><span style="color: rgb(0, 0, 128);"><span style="font-size: 12px;"><span style="font-size: 16px;">Holiday Drop-off Prices</span></span></span></u><br />
	<span style="color: rgb(0, 0, 0);"><span style="font-size: 12px;">&nbsp;</span></span></p>
<p>
	<span style="color: rgb(0, 0, 0);"><span style="font-size: 12px;">&nbsp;</span></span><br />
	<span style="color: rgb(0, 0, 128);"><span style="font-size: 12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Time &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Online Price &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Extended Hours: 8am-5pm<br />
	Whole Day &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;9AM - 4PM &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&pound;32.50 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Addional &pound;5 p/d<br />
	Monday - Friday &nbsp; &nbsp; &nbsp; 9AM - 4PM &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&pound;150 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Additional &pound;25<br />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
	Discounts: Up to 50% when booking additional siblings</span></span><br />
	<span style="color: rgb(0, 0, 0);"><span style="font-size: 12px;">&nbsp;&nbsp;</span></span></p>
<p>
	&nbsp;</p>
<p>
	&nbsp;</p>
<p>
	&nbsp;</p>
<p>
	&nbsp;</p>
<p>
	&nbsp;</p>
 </div>
                  <div class="TabbedPanelsContent">
                                        <p>
	&nbsp;</p>
<p>
	&nbsp;</p>
<p>
	<span style="color:#000080;"><span style="font-size: 14px; "><strong>As always Holiday Drop Off will provide amazing facilities, with an energetic and enthusiastic HDO Team</strong></span><strong style="font-size: 14px; ">&nbsp;- some HDO activities include:</strong></span></p>
<div>
	&nbsp;</div>
<div>
	&nbsp;</div>
<div>
	<span style="font-size:12px;"><strong><span style="color: rgb(0, 0, 205); ">Athletics</span></strong> - Track and field events such as hurdles, shot put, javelin, long jump and relays.</span></div>
<div>
	&nbsp;</div>
<div>
	<span style="font-size:12px;"><strong><span style="color: rgb(0, 0, 205); ">Badminton</span></strong> - Played with long necked racquets used to hit the shuttlecock back and forth over the net. Scoring points by making the shuttlecock hit the floor on your opponents side of the court.</span></div>
<div>
	&nbsp;</div>
<div>
	<span style="font-size:12px;"><strong><span style="color: rgb(0, 0, 205); ">Basketball</span></strong> - A game of speed, incorporating dribbling, passing and shooting to score goals in your oppositions hoop.</span></div>
<div>
	&nbsp;</div>
<div>
	<span style="font-size:12px;"><strong><span style="color: rgb(0, 0, 205); ">Cricket</span></strong> - A bat and ball sport, where two teams compete to score the most amount of runs, taking it in turns to field and bat.</span></div>
<div>
	&nbsp;</div>
<div>
	<span style="font-size:12px;"><strong><span style="color: rgb(0, 0, 205); ">Dance</span></strong> - Dance combines physical activity with creativity, using movement to express interpretations of music.</span></div>
<div>
	&nbsp;</div>
<div>
	<span style="font-size:12px;"><strong><span style="color: rgb(0, 0, 205); ">Field games</span></strong> - This is a variety of outdoor activities including games such as, Capture the flag, Ultimate Frisbee and more.</span></div>
<div>
	&nbsp;</div>
<div>
	<span style="font-size:12px;"><span style="color:#0000cd;"><strong>Football</strong></span> - A very popular team sport played by both boys and girls worldwide. In football the ball is kicked between players or dribbled towards the goal to score.</span></div>
<div>
	&nbsp;</div>
<div>
	<span style="font-size:12px;"><strong><span style="color:#0000cd;">Hall games</span></strong> - This is a variety of indoor activities including, Bench ball, Ultimate Dodge ball and more.</span></div>
<div>
	&nbsp;</div>
<div>
	<span style="font-size:12px;"><span style="color:#0000cd;"><strong>Hockey</strong></span> - Hockey is played with a small hard ball, players use there hockey stick to manoeuvre the ball around other players to score in the opponents goal.</span></div>
<div>
	&nbsp;</div>
<div>
	<span style="font-size:12px;"><span style="color:#0000cd;"><strong>Netball</strong></span> - Originally a girls sport that now has a large mixed following, combining catching and throwing with speed and agility.</span></div>
<div>
	&nbsp;</div>
<div>
	<span style="font-size:12px;"><strong><span style="color:#0000cd;">Pop Lacrosse</span></strong> - A non-contact version of Lacrosse. It is played with sticks which have nets on the end to catch and throw the ball with. Pop Lacrosse needs lots of skill and patients but can be great fun to play and watch.</span></div>
<div>
	&nbsp;</div>
<div>
	<span style="font-size:12px;"><span style="color:#0000cd;"><strong>Rounders</strong></span> - A batting and fielding sport, where teams bat to score as many Rounders as possible by running around the 4 posts depending on how far you hit the ball.</span></div>
<div>
	&nbsp;</div>
<div>
	<span style="font-size:12px;"><strong><span style="color:#0000cd;">Swimming</span></strong> - Pool activities range from swimming races to fun inflatable sessions. (Please note that swimming is only available on full day and half day pm only)</span></div>
<div>
	&nbsp;</div>
<div>
	<span style="font-size:12px;"><strong><span style="color:#0000cd;">Table tennis</span></strong> - A fast game which requires quick reactions and quick thinking to return the ball over the net to your opponents side of the table trying to force them to miss the ball or make a mistake to score a point.</span></div>
<div>
	&nbsp;</div>
<div>
	<span style="font-size:12px;"><strong><span style="color:#0000cd;">Tennis</span></strong> - A racquet sport, played in singles or double. Requires power and precision to outwit you opponent to score points.</span></div>
<div>
	&nbsp;</div>
<div>
	<span style="font-size:12px;"><strong><span style="color:#0000cd;">Touch Rugby</span></strong> - A version of traditional rugby with less physical contact. The emphasis is on speed, ball handling skills, teamwork and decision making.</span></div>
<div>
	&nbsp;</div>
<div>
	<span style="font-size:12px;"><strong><span style="color:#0000cd;">Trampolining</span></strong> - A favourite for children of all ages, learn new tricks and even start piecing together routines.</span></div>
<div>
	&nbsp;</div>
<div>
	<span style="font-size:12px;"><strong><span style="color:#0000cd;">Volleyball</span></strong> - Played with a soft ball which is passed back and forth over the net. Players choose one of 3 shots to make whether it be defensive, attacking or setting up a teammate to score a point.</span></div>
<div>
	&nbsp;</div>
<div>
	<span style="font-size:12px;"><strong><span style="color:#0000cd;">Water polo</span></strong> - Water polo as the name suggests is a water sport that takes place in the swimming pool, the two teams compete to score goals by throwing the ball into the oppositions net.</span></div>
<div>
	&nbsp;</div>
<div>
	&nbsp;</div>
 </div>
                  <div class="TabbedPanelsContent">
                                        <p>
	&nbsp;</p>
<p>
	<u><strong><span style="font-size: 16px;">HDO at Dulwich College&nbsp;</span></strong></u></p>
<p>
	&nbsp;</p>
<div>
	<span style="font-size:14px;">Dulwich College Boasts extensive facilities such as:</span></div>
<p>
	&nbsp;</p>
<p>
	<a href="http://www.dulwich.org.uk/images/sports-club-general-images/swimming-pool.jpg?sfvrsn=0"><img alt="" src="http://www.dulwich.org.uk/images/sports-club-general-images/swimming-pool.jpg?sfvrsn=0" style="width: 440px; height: 250px;" /></a></p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
<div>
	<span style="font-size:12px;">* Sports Hall (8 Badminton Courts)<br />
	&nbsp;&nbsp;&nbsp; * Swimming Pool (25 metres, 6 lanes)<br />
	&nbsp;&nbsp;&nbsp; * Floodlit Astroturf<br />
	&nbsp;&nbsp;&nbsp; * Second Large Astroturf<br />
	&nbsp;&nbsp;&nbsp; * 3 Tennis Courts<br />
	&nbsp;&nbsp;&nbsp; * 2 Squash Courts</span></div>
<div>
	<span style="font-size:12px;">&nbsp; &nbsp; * Athletics Track &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
<p>
	<img alt="" src="http://www.dulwich.org.uk/images/sports-club-facilities/sports-hall-view-2.jpg?sfvrsn=3" style="width: 440px; height: 334px;" /></p>
<div>
	<span style="font-size:12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</div>
<div>
	&nbsp;</div>
<div>
	<span style="font-size:12px;">&nbsp; &nbsp;&nbsp;</span></div>
 </div>
                  <div class="TabbedPanelsContent">
                                        <p>
	&nbsp;</p>
<p>
	&nbsp;</p>
<p>
	<span style="color:#000080;"><span style="font-size: 16px; ">Next HDO Camps:</span></span></p>
<p>
	<br />
	<br />
	<strong><span style="font-size:12px;"><span style="color: rgb(0, 0, 0); ">Summer Holidays: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 16th July - 24th August</span></span></strong></p>
<p>
	&nbsp;</p>
<p>
	<span style="font-size:12px;"><span style="color: rgb(0, 0, 0); ">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
	Holiday Drop Off (HDO)&nbsp;is a &nbsp;sports camp which is working in partnership with the SDO.&nbsp;Following the success of SDO, we have extended our camps to school holiday breaks</span></span></p>
<p>
	<br />
	<span style="font-size:12px;"><span style="color: rgb(0, 0, 0); ">Holiday Drop Off is perfect for both perfecting existing sporting interests as well as being a great environment to learn new sports. Our team will focus on encouraging children to enjoy activities while also helping them to focus on the task in hand.</span></span></p>
<p>
	<br />
	<span style="font-size:12px;"><span style="color: rgb(0, 0, 0); ">Dulwich College is a great secure location boasting great facilities which shelters a very modern 25m swimming pool, trampolines and several large areas in which to run around and get fit.. Safety is of utmost importance and our team have years of experience teaching children in sport.</span></span></p>
 </div>
                  <div class="TabbedPanelsContent">
                                        <p>
	&nbsp;</p>
<p>
	&nbsp;</p>
<p>
	<span style="color:#ff0000;"><u><span style="font-size: 16px; ">HDO Staff</span></u></span></p>
<p>
	&nbsp;</p>
<p>
	<span style="color:#ff0000;"><span style="font-size: 12px; ">Through experience we know that the staff and instructors are what can make a good experience great. Therefore we have simply picked the best staff to work at Holiday Drop Off to help inspire and motivate your children. All of our leaders have a passion for teaching and the drive and dedication to help children achieve their goals.</span></span></p>
<p>
	&nbsp;</p>
<p>
	<span style="color:#ff0000;"><span style="font-size: 12px; ">All our staff are CRB checked and many members of the team are qualified in specific sports leading to the high quality of coaching that is found at HDO. We aim to introduce new sports to children and also to train those who are keen to further their existing skills and ability.</span></span></p>
<p>
	&nbsp;</p>
<p>
	<span style="color:#ff0000;"><span style="font-size: 12px; ">Our staff have experience working with children and are committed to making every child&#39;s experience one to remember, we understand first day nerves and any apprehensions and we work hard to make everyone feel welcome and a part of the Saturday Drop Off family.</span></span></p>
<p>
	&nbsp;</p>
<p>
	<span style="font-size:12px;"><span style="color:#ff0000;">Safety is our top priority at HDO and because of this we follow the recommended guildlines for staff to child ratio&#39;s from the National Network&nbsp;for Child Care. For pool seesions we have a qualified lifeguard and an ASA qualified swimming instrustor on pool side at all times.</span><br />
	&nbsp;<br />
	&nbsp;</span></p>
<p>
	<br />
	<span style="font-size:12px;"><span style="font-size:16px;">Niels Buckland</span></span></p>
<p>
	<span style="font-size:12px;">Niels is well known around the Dulwich area as he has taught various sports for many years. He is a keen follower of keeping fit and has represented London in over 5 different sports. Niels is an ASA swimming teacher which has led to him starting his own swimming development company, helping children advance in the pool. Niels also had a short spell at Crystal Palace Football Club before injury prevented him from progressing further.&nbsp;Niels is also a qualified first aider.</span><br />
	&nbsp;</p>
<p>
	&nbsp;</p>
<p>
	<span style="font-size:12px;"><span style="font-size:16px;">Sam Holder</span></span></p>
<p>
	<span style="font-size:12px;">Sam has taught in many of the top schools for the past few years helping develop teams. During this time she has developed a very successful netball company which now competes in various competitions throughout the country. Sam has also competed at county level in netball and has advanced at teaching in many different sporting fields.</span></p>
<p>
	&nbsp;</p>
<p>
	&nbsp;</p>
<p>
	<span style="font-size: 16px; ">Dan Ousby:</span></p>
<p>
	<span style="font-size:12px;">Dan is a level 2 trampoline coach and qualified lifeguard. He was a semi professional footballer and is currently training for the marathon. He has worked on several different sports camps and is a qualified first aider</span><br />
	&nbsp;<br />
	&nbsp;</p>
<p>
	<span style="font-size:12px;"><span style="font-size:16px;">Other Staff:</span></span></p>
<p>
	<span style="font-size:12px;">- Greg Holder is a great up and coming rugby prospect. He also has proven to be quite talented in athletics representing Blackheath and Beckenham Harriers.</span></p>
<p>
	&nbsp;</p>
<p>
	<span style="font-size:12px;">- Emma Sullivan has played netball for Kent County netball club for a number of years and has recently moved to Chislehurst netball club. She was a part of the under 18s colfes netball team of whom reached the nationals.</span></p>
 </div>
                </div>
              </div>
            </div>
            <div class="ourcampus-testmonials">
              <div class="testitag">Testimonials</div>
              <div class="cn_nav"> <a id="cn_prev" class="cn_prev"></a> <a id="cn_next" class="cn_next"></a> </div>
              <style>
			  .cn_page p
			  {
			  	border:0px;
			  }
			  </style>
              <div id="cn_list" class="cn_list">
                                <div class="cn_page"  style="display:block;"  >
                  <p>
	Just to say a huge thanks for making the Easter holidays so much fun for Josh and Sam. They had an absolutely brilliant time, were so eager to get out of the house every morning and full of news about what they had been doing during the Just to say a huge Just to say a huge thanks for making the Easter holidays so much fun for Josh and Sam. They had an absolutely brilliant time.</p>
                </div>
                                <div class="cn_page"  >
                  <p>
	My two children, aged 9 and 4 absolutely love Holiday Drop-Off. They enjoy the variety of activities on offer and meeting other children. They feel safe and secure in a familiar environment and always ask to go back each holiday. The staff are warm, friendly and welcoming and my children are always delighted to see them again. I have no hesitation in recommending Holiday Drop-Off.</p>
                </div>
                                <div class="cn_page"  >
                  <p>
	<span style="font-family: arial, sans-serif; font-size: 13px;">My 5 year old son had a really enjoyable time at the October half term HDO. He has been to other holiday clubs but HDO is by far his preferred option. He really enjoyed trying out new sports like archery, and loves the trampoline, but its the relaxed, friendly and individual approach of the team that makes HDO different and so much better than other holiday clubs. He happily did his first full week with HDO,something I would not have even contemplated with another club. Thank you.</span></p>
                </div>
                                <div class="cn_page"  >
                  <p>
	<span style="font-family: arial, sans-serif; font-size: 13px;">11111111</span></p>
                </div>
                                <div class="cn_page"  >
                  <p>
	22222222222</p>
                </div>
                                <div class="cn_page"  >
                  <p>
	3333333</p>
                </div>
                                <div class="cn_page"  >
                  <p>
	44444444</p>
                </div>
                                <div class="cn_page"  >
                  <p>
	555555555</p>
                </div>
                                <div class="cn_page"  >
                  <p>
	666666666</p>
                </div>
                                <div class="cn_page"  >
                  <p>
	777777</p>
                </div>
                                                <!--“Just wanted to say a huge thanks for making the Easter holidays so much fun for Josh and Sam. They had an absolutely brilliant time, were so eager to get out of the house every morning and full of news about what they had been doing during the day. They're already asking when they can come back, so we'll definitely be seeing you in the next lot of holidays!”-->
                <!-- <div style="display: block;" class="cn_page">“Just wanted to say a huge thanks for making the Easter holidays so much fun for Josh and Sam. They had an absolutely brilliant time, were so eager to get out of the house every morning and full of news about what they had been doing during the day.</div>
                <div style="display: none;" class="cn_page">They're already asking when they can come back, so we'll definitely be seeing you in the next lot of holidays!”</div>
              </div>-->
              </div>
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
<script type="text/javascript">
<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1",0);
//-->
</script>
</body>
</html>
