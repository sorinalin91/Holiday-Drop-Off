
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Holiday Drop Off - My Details</title>
<link rel="stylesheet" href="css/style.css" />
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryTabbedPanels2.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryTabbedPanels3.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
		function valid(txtfirstname,txtlastname)
		{
			if(document.addchildform1.txtfirstname.value == "")
			{
				alert("Please Enter Forename");
				return false;
			}
			if(document.addchildform1.txtlastname.value == "")
			{
				alert("Please Enter Lastname");
				return false;
			}
		}
		
		function validation1(txtfirstname,txtlastname)
		{
			if(document.addchildform.txtfirstname.value == "")
			{
				alert("Please Enter Forename");
				return false;
			}
			
			if(document.addchildform.txtfirstname.value == "")
			{
				alert("Please Enter Lastname");
				return false;
			}
			
		}

		
		function addChild()
		{ 
			document.getElementById("addchildTbl").style.display= ''; 
			document.getElementById("new_child").style.display= '';
			document.getElementById("newtbl123").style.display= ''; 
			document.getElementById("old_child").style.display= 'none';
			return false;
		}			
		function showbooking(id)
		{
			//alert("hello");
			window.location = "mydetails.php?CampID=" +id;
		}
 	</script>
</head>
<body>
<div id="wrapper">
  <div id="orenge">
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
          <div class="myaccount-right-content">
            <div class="myaccount-heading-text" style="padding-bottom:0px;"><img src="images/myaccounttitle.png" alt="" /> <span> <a href="logout.php"><img src="images/signoutbt.png" alt="" /></a> <a href="book-online.php"><img src="images/bookoninebt.png" alt="" /> </a></span></div>
			<div style="color:#FFFFFF;">Children must be registered prior to booking online</div>
            <div class="myaccount-middle-content">
              <div id="TabbedPanels3" class="TabbedPanels3">
                <ul class="TabbedPanelsTabGroup">
                  <li class="TabbedPanelsTab" tabindex="0" style="margin:0px;">My details</li>
                  <li class="TabbedPanelsTab3" tabindex="0">My children</li>
                  <li class="TabbedPanelsTab3" tabindex="0">My bookings</li>
                </ul>
                <div class="TabbedPanelsContentGroup">
                  <div class="TabbedPanelsContent1">
                    <table width="642" border="0" cellspacing="0" cellpadding="0" style="
	-moz-border-radius-bottomright: 10px;
	border-bottom-right-radius: 10px;
	-moz-border-radius-topright: 10px;
	border-top-right-radius: 10px;
	-moz-border-radius-bottomleft: 10px;
	border-bottom-left-radius: 10px;">
                      <tr>
                        <td style="padding:15px; font-size:15px; font-weight:bold;">If you need to update/change any of your details, please make sure that you save your changes by clicking the update button below</td>
                      </tr>
                      <tr>
                        <td>                          <form action="update_users_process.php" method="post">
                            <div class="mydetail-right-content">
                              <div class="formdetails"><span>Title:</span>
                                <p>
                                  <input name="title" type="text" value="demo" />
                                </p>
                              </div>
                              <div class="formdetails"><span>Forename:</span>
                                <p>
                                  <input name="forename" type="text" value="demo" />
                                </p>
                              </div>
                              <div class="formdetails"><span>Surname:</span>
                                <p>
                                  <input name="surname" type="text" value="demo" />
                                </p>
                              </div>
                              <div class="formdetails"><span>Username:</span>
                                <p>
                                  <input name="username" type="text" value="admin" readonly />
                                </p>
                              </div>
                              <div class="formdetails"><span>Password:</span>
                                <p>
                                  <input name="password" type="password" value="admin" />
                                </p>
                              </div>
                              <div class="formdetails"><span>Re-enter password:</span>
                                <p>
                                  <input name="password" type="password" value="admin" />
                                </p>
                              </div>
                              <div class="formdetails"><span>Email address:</span>
                                <p>
                                  <input name="email" type="text" value="demo@gmail.com" />
                                </p>
                              </div>
                              <div class="formdetails"><span>Daytime phone number:</span>
                                <p>
                                  <input name="landline" type="text" value="9632531456" />
                                </p>
                              </div>
                              <div class="formdetails"><span>Mobile phone number:</span>
                                <p>
                                  <input name="mobile" type="text" value="9856321458" />
                                </p>
                              </div>
                              <div class="formdetails"><span>Address line 1:</span>
                                <p>
                                  <input name="add1" type="text" value="satellite" />
                                </p>
                              </div>
                              <div class="formdetails"><span>Address line 2:</span>
                                <p>
                                  <input name="add2" type="text" value="ahmedabad" />
                                </p>
                              </div>
                              <div class="formdetails"><span>Address line 3:</span>
                                <p>
                                  <input name="add3" type="text" value="" />
                                </p>
                              </div>
                              <div class="formdetails"><span>Postcode:</span>
                                <p>
                                  <input name="postcode" type="text" value="380007" />
                                </p>
                              </div>
                              <div class="formdetails"><span>Country</span>
                                <p>
                                  <input name="country" type="text" value="india" />
                                </p>
                              </div>
                              <div class="formdetails"><span>Where did you hear about us:</span>
                                <p>
                                  <input name="ref" type="text" value="online" />
                                </p>
                              </div>
                              <div>
                                <input type="submit" class="signupbt" value="Update" style="border-radius:15px; border:none; cursor:pointer">
                              </div>
                            </div>
                          </form></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                    </table>
                  </div>
                  <div class="TabbedPanelsContent2">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" >
                      <tr>
							<td width="11%" align="center" style="font-weight: normal; padding: 16px 0pt 13px 28px;"><a href="#"><img height="22" width="24" alt="" src="images/star-icon.png"></a></td>
							<td width="22%" style="font-size: 15px; height: 32px; line-height: 27px;"><a style="color: rgb(51, 51, 51);" href="mydetails.php?child_id=118">Finn Ashworth</a> </td>
							<td><a href="mydetails.php?child_id=118"><img alt="" src="images/updateyellobt.png"></a></td>
							<td style="margin-right:5%;"><a href="mydetails.php?action=del&child_id=118"><img alt="" src="images/deleteyellobt.png"></a></td>							
							
						  </tr><tr>
							<td width="11%" align="center" style="font-weight: normal; padding: 16px 0pt 13px 28px;"><a href="#"><img height="22" width="24" alt="" src="images/star-icon.png"></a></td>
							<td width="22%" style="font-size: 15px; height: 32px; line-height: 27px;"><a style="color: rgb(51, 51, 51);" href="mydetails.php?child_id=119">Mieke Ashworth</a> </td>
							<td><a href="mydetails.php?child_id=119"><img alt="" src="images/updateyellobt.png"></a></td>
							<td style="margin-right:5%;"><a href="mydetails.php?action=del&child_id=119"><img alt="" src="images/deleteyellobt.png"></a></td>							
							
						  </tr><tr>
							<td width="11%" align="center" style="font-weight: normal; padding: 16px 0pt 13px 28px;"><a href="#"><img height="22" width="24" alt="" src="images/star-icon.png"></a></td>
							<td width="22%" style="font-size: 15px; height: 32px; line-height: 27px;"><a style="color: rgb(51, 51, 51);" href="mydetails.php?child_id=120">Noortje Ashworth</a> </td>
							<td><a href="mydetails.php?child_id=120"><img alt="" src="images/updateyellobt.png"></a></td>
							<td style="margin-right:5%;"><a href="mydetails.php?action=del&child_id=120"><img alt="" src="images/deleteyellobt.png"></a></td>							
							
						  </tr>                      <tr>
                        <td width="11%" align="center" style=" font-weight:normal; padding:13px 0 13px 20px;"><a href="#"><img src="images/add+.png" onclick="return addChild();" alt="" /></a></td>
                        <td width="63%" style="  font-size:15px; font-weight:bold; height:32px; line-height:27px; "><a href="#" style="color:#333333; text-decoration:none;" onclick="return addChild();" >Add new child</a> </td>
                        <td width="26%">&nbsp;</td>
                      </tr>
                    </table>
                    <table style="margin-left:5%;">
                      <tr id="old_child" style=" ">
                        <td><form id="addchildform" name="addchildform" method="post" action="actions.php?action=Add_child">
                            <table id="addchildTbl" width="300" border="0" align="center" cellpadding="0" cellspacing="0" style=" display:none; ">
                              <tr>
                                <td colspan="3" style="border-bottom: #999999 dotted 2px; padding:0px 0 15px 0;"></td>
                              </tr>
                              <tr>
                                <td style="margin-left:5%;"></td>
                                <td>Forename:</td>
                                <td width="225"><input name="txtfirstname" class="afnamebg" type="text" value="" /></td>
                                <td width="302">&nbsp;</td>
                              </tr>
                              <tr>
                                <td style="margin-left:5%;"></td>
                                <td>Surname:</td>
                                <td><input name="txtlastname" class="afnamebg" type="text"  value=""  /></td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td colspan="3" style="border-bottom: #999999 dotted 1px;"></td>
                              </tr>
                              <tr>
                                <td colspan="3"><table width="600" border="0" align="left" cellpadding="0" cellspacing="0" style="margin-top:10px;">
                                    <tr>
                                      <td width="155">Date of birth:</td>
                                      <td width="52" style=" height:32px;   padding:5px; padding-right:13px;"><!--<img src="images/topbottom-arrow.png" alt="" style="float:right;" /> -->
                                        <select name="sel_day">
                                          <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>                                        </select>
                                      </td>
                                      <td width="149" style=" height:33px; padding:5px; padding-right:14px;"><select name="sel_month">
                                          <option   value="1">January</option>
                                          <option    value="2">february </option>
                                          <option    value="3">March </option>
                                          <option    value="4">April</option>
                                          <option    value="5">May </option>
                                          <option    value="6">June</option>
                                          <option    value="7">july</option>
                                          <option   selected="selected" value="8">August </option>
                                          <option  selected="selected"  value="9">September </option>
                                          <option    value="10">October </option>
                                          <option    value="11">November</option>
                                          <option    value="12">December </option>
                                        </select>
                                        <!--<img src="images/topbottom-arrow.png" alt="" style="float:right;" />--></td>
                                      <td width="117" style=" height:32px;  padding:5px; padding-right:8px;"><!--<img src="images/topbottom-arrow.png" alt="" style="float:right;" />-->
                                        <select name="sel_year">
                                          <option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option>                                        </select>
                                      </td>
                                      <td width="34"></td>
                                      <td width="93">&nbsp;</td>
                                    </tr>
                                  </table></td>
                              </tr>
                              <tr>
                                <td colspan="3">&nbsp;</td>
                              </tr>
                              <tr>
                                <td colspan="3"><table width="585" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td width="210" valign="top">Allergies/notes:</td>
                                      <td valign="top"><textarea name="txtnotes" class="textbox" cols="" rows=""></textarea>
                                      </td>
                                    </tr>
                                  </table></td>
                              </tr>
                              <tr>
                                <td colspan="3" style="border-top: #999999 dotted 1px;"></td>
                              </tr>
                              <tr>
                                <td colspan="3"></td>
                              </tr>
                              <tr>
                                <td colspan="3"><table width="300" border="0" align="right" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <td width="199" height="80">&nbsp;</td>
                                      <td width="101"><input type="hidden" name="children_id" value="0" />
                                        <input type="hidden" name="parent_id" value="25" />
                                        <input type="hidden" name="related_id" value="0" />
                                        <!--<input type="image" src="images/addbt.png" id="submit" />-->
                                      
                                    	<input type="image" name="image" src="images/addbt.png" id="submit" value="Submit" onclick="return validation1(txtfirstname,txtlastname);" />                                       
                                      </td>
                                    </tr>
                                  </table></td>
                              </tr>
                            </table>
                          </form></td>
                      </tr>
                      <tr id="new_child" style=" ">
                        <td><form id="addchildform1" name="addchildform1" method="post" action="actions.php?action=Add_child">
                            <table id="newtbl123" width="300" border="0" align="center" cellpadding="0" cellspacing="0" style=" display:none; ">
                              <tr>
                                <td colspan="3" style="border-bottom: #999999 dotted 2px; padding:0px 0 15px 0;"></td>
                              </tr>
                              <tr>
                                <td style="margin-left:5%;"></td>
                                <td>Forename:</td>
                                <td width="225"><input name="txtfirstname" class="afnamebg" type="text" value="" /></td>
                                <td width="302">&nbsp;</td>
                              </tr>
                              <tr>
                                <td style="margin-left:5%;"></td>
                                <td>Surname:</td>
                                <td><input name="txtlastname" class="afnamebg" type="text"  value=""  /></td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td colspan="3" style="border-bottom: #999999 dotted 1px;"></td>
                              </tr>
                              <tr>
                                <td colspan="3"><table width="600" border="0" align="left" cellpadding="0" cellspacing="0" style="margin-top:10px;">
                                    <tr>
                                      <td width="155">Date of birth:</td>
                                      <td width="52" style=" height:32px;   padding:5px; padding-right:13px;"><!--<img src="images/topbottom-arrow.png" alt="" style="float:right;" /> -->
                                        <select name="sel_day">
                                          <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>                                        </select>
                                      </td>
                                      <td width="149" style=" height:33px; padding:5px; padding-right:14px;"><select name="sel_month">
                                          <option   value="1">January</option>
                                          <option    value="2">february </option>
                                          <option    value="3">March </option>
                                          <option    value="4">April</option>
                                          <option    value="5">May </option>
                                          <option    value="6">June</option>
                                          <option    value="7">july</option>
                                          <option   selected="selected" value="8">August </option>
                                          <option  selected="selected"  value="9">September </option>
                                          <option    value="10">October </option>
                                          <option    value="11">November</option>
                                          <option    value="12">December </option>
                                        </select>
                                        <!--<img src="images/topbottom-arrow.png" alt="" style="float:right;" />--></td>
                                      <td width="117" style=" height:32px;  padding:5px; padding-right:8px;"><!--<img src="images/topbottom-arrow.png" alt="" style="float:right;" />-->
                                        <select name="sel_year">
                                          <option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option>                                        </select>
                                      </td>
                                      <td width="34"></td>
                                      <td width="93">&nbsp;</td>
                                    </tr>
                                  </table></td>
                              </tr>
                              <tr>
                                <td colspan="3">&nbsp;</td>
                              </tr>
                              <tr>
                                <td colspan="3"><table width="585" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td width="210" valign="top">Allergies/notes:</td>
                                      <td valign="top"><textarea name="txtnotes" class="textbox" cols="" rows=""></textarea>
                                      </td>
                                    </tr>
                                  </table></td>
                              </tr>
                              <tr>
                                <td colspan="3" style="border-top: #999999 dotted 1px;"></td>
                              </tr>
                              <tr>
                                <td colspan="3"></td>
                              </tr>
                              <tr>
                                <td colspan="3"><table width="300" border="0" align="right" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <td width="199" height="80">&nbsp;</td>
                                      <td width="101"><input type="hidden" name="children_id" value="0" />
                                        <input type="hidden" name="parent_id" value="25" />
                                        <input type="hidden" name="related_id" value="0" />
                                        <input type="image" name="image" src="images/addbt.png" id="submit" value="Submit" onclick="return valid(txtfirstname,txtlastname);" />
                                      </td>
                                    </tr>
                                  </table></td>
                              </tr>
                            </table>
                          </form></td>
                      </tr>
                    </table>
                  </div>
                  <div class="TabbedPanelsContent3">
                    <table width="642" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="185" align="center" style="padding-top:40px; padding-bottom:42px;">Select Camp :</td>
                        <td width="237" class=""><select    onchange="showbooking(this.value);">
                            <option value="0">Summer Camp</option>
                            <option value="35">januari camp - 2014-01-27 2014-01-31</option>                          </select>
                          <div class="photogallerysearch">
                            <div class="demo"> </div>
                          </div></td>
                        <td width="248">&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="3"></td>
                        <td width="1"></td>
                      </tr>
                      <tr>
                        <td height="30" colspan="4" align="right" valign="top" style="padding-right:20px;">Extended days are shown in <span>RED</span></td>
                      </tr>
                      <tr>
                        <td colspan="3"><table width="654" border="0" align="center" cellpadding="0" cellspacing="0" style="background:#f9f5b1; padding-left:15px;">
                                                        <tr>
                              <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="2"><table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td style="font-size:15px;  border-top: #999999 dotted 1px;padding:10px 0 15px 0;">Finn Ashworth</td>
                                    <td align="right" style="font-size:15px;  border-top: #999999 dotted 1px;padding:10px 0 15px 0;"><span>Pending</span></td>
                                  </tr>
                                  <tr>
                                    <td colspan="2" >Camp : Start Date: 27 Jan 2014- Days :Mon &nbsp; - Mon</td>
                                  </tr>
                                </table></td>
                            </tr>
                            <tr>
                              <td colspan="2">&nbsp;</td>
                            </tr>
                                                        <tr>
                              <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="2"><table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td style="font-size:15px;  border-top: #999999 dotted 1px;padding:10px 0 15px 0;">Mieke Ashworth</td>
                                    <td align="right" style="font-size:15px;  border-top: #999999 dotted 1px;padding:10px 0 15px 0;"><span>Pending</span></td>
                                  </tr>
                                  <tr>
                                    <td colspan="2" >Camp : Start Date: 27 Jan 2014- Days :Mon &nbsp; - Mon</td>
                                  </tr>
                                </table></td>
                            </tr>
                            <tr>
                              <td colspan="2">&nbsp;</td>
                            </tr>
                                                        <tr>
                              <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="2"><table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td style="font-size:15px;  border-top: #999999 dotted 1px;padding:10px 0 15px 0;">Noortje Ashworth</td>
                                    <td align="right" style="font-size:15px;  border-top: #999999 dotted 1px;padding:10px 0 15px 0;"><span>Pending</span></td>
                                  </tr>
                                  <tr>
                                    <td colspan="2" >Camp : Start Date: 27 Jan 2014- Days :Mon &nbsp; - Mon</td>
                                  </tr>
                                </table></td>
                            </tr>
                            <tr>
                              <td colspan="2">&nbsp;</td>
                            </tr>
                                                        <tr>
                              <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="2"><table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td style="font-size:15px;  border-top: #999999 dotted 1px;padding:10px 0 15px 0;">Finn Ashworth</td>
                                    <td align="right" style="font-size:15px;  border-top: #999999 dotted 1px;padding:10px 0 15px 0;"><span>Pending</span></td>
                                  </tr>
                                  <tr>
                                    <td colspan="2" >Camp : Start Date: 02 Dec 2009- Days :Wed,Thu,Fri,EXT_Thu &nbsp; - Wed,Thu,Fri,<span>Thu</span></td>
                                  </tr>
                                </table></td>
                            </tr>
                            <tr>
                              <td colspan="2">&nbsp;</td>
                            </tr>
                                                        <tr>
                              <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="2"><table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td style="font-size:15px;  border-top: #999999 dotted 1px;padding:10px 0 15px 0;">Mieke Ashworth</td>
                                    <td align="right" style="font-size:15px;  border-top: #999999 dotted 1px;padding:10px 0 15px 0;"><span>Pending</span></td>
                                  </tr>
                                  <tr>
                                    <td colspan="2" >Camp : Start Date: 02 Dec 2009- Days :Wed,Thu,Fri,EXT_Thu &nbsp; - Wed,Thu,Fri,<span>Thu</span></td>
                                  </tr>
                                </table></td>
                            </tr>
                            <tr>
                              <td colspan="2">&nbsp;</td>
                            </tr>
                                                        <tr>
                              <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="2"><table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td style="font-size:15px;  border-top: #999999 dotted 1px;padding:10px 0 15px 0;">Finn Ashworth</td>
                                    <td align="right" style="font-size:15px;  border-top: #999999 dotted 1px;padding:10px 0 15px 0;"><span>Pending</span></td>
                                  </tr>
                                  <tr>
                                    <td colspan="2" >Camp : Start Date: 02 Dec 2009- Days :Wed,Thu,Fri,EXT_Thu &nbsp; - Wed,Thu,Fri,<span>Thu</span></td>
                                  </tr>
                                </table></td>
                            </tr>
                            <tr>
                              <td colspan="2">&nbsp;</td>
                            </tr>
                                                        <tr>
                              <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="2"><table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td style="font-size:15px;  border-top: #999999 dotted 1px;padding:10px 0 15px 0;">Mieke Ashworth</td>
                                    <td align="right" style="font-size:15px;  border-top: #999999 dotted 1px;padding:10px 0 15px 0;"><span>Pending</span></td>
                                  </tr>
                                  <tr>
                                    <td colspan="2" >Camp : Start Date: 02 Dec 2009- Days :Wed,Thu,Fri,EXT_Thu &nbsp; - Wed,Thu,Fri,<span>Thu</span></td>
                                  </tr>
                                </table></td>
                            </tr>
                            <tr>
                              <td colspan="2">&nbsp;</td>
                            </tr>
                                                        <tr>
                              <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="2"><table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td style="font-size:15px;  border-top: #999999 dotted 1px;padding:10px 0 15px 0;">Finn Ashworth</td>
                                    <td align="right" style="font-size:15px;  border-top: #999999 dotted 1px;padding:10px 0 15px 0;"><span>Pending</span></td>
                                  </tr>
                                  <tr>
                                    <td colspan="2" >Camp : Start Date: 19 Dec 2013- Days :Thu &nbsp; - Thu</td>
                                  </tr>
                                </table></td>
                            </tr>
                            <tr>
                              <td colspan="2">&nbsp;</td>
                            </tr>
                                                        <tr>
                              <td colspan="2"><table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="115"><a href="#"><img src="images/printbt.png" alt="" /></a></td>
                                    <td width="523"><div style="position:relative; background:url(images/amountbt2.png) top left no-repeat; line-height:25px; text-align:right; width:182px; padding-right:10px;">&pound;182.5</div></td>
                                  </tr>
                                </table></td>
                            </tr>
                            <tr>
                              <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                            </tr>
                          </table></td>
                      </tr>
                      <tr>
                        <td height="33" colspan="3">&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="3" style="padding-left:30px;"><img src="images/changebt.png" alt="" /></td>
                      </tr>
                      <tr>
                        <td colspan="3" style="font-size:18px; font-weight:normal; color:#666666; padding:10px 0 0 30px;">Please note that bookings can’t be changed<br/>
                          or cancelled 3 days prior to booking </td>
                      </tr>
                      <tr>
                        <td height="33" colspan="3">&nbsp;</td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
              <div class="c1"></div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="c1"></div>
    </div><div class="footer">
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
var TabbedPanels3 = new Spry.Widget.TabbedPanels("TabbedPanels3",0);
//-->
</script>
</body>
</html>
