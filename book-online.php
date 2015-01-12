
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Holiday Drop Off - Book Online</title>
<link rel="stylesheet" href="css/style.css" />
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script language="javascript" src="jsgallery/jquery_mini.js"></script>
<script language="javascript" src="jsgallery/jquery.dimensions.js"></script>
<script src="jquery_2j.js" type="text/javascript"></script>
<script language="javascript">
	var name = "#floatMenu";
	var menuYloc = null;
	
		$(document).ready(function(){
			menuYloc = parseInt($(name).css("top").substring(0,$(name).css("top").indexOf("px")))
			$(window).scroll(function () { 
				offset = menuYloc+$(document).scrollTop()+"px";
				$(name).animate({top:offset},{duration:500,queue:false});
			});
		}); 
	 </script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryTabbedPanels2.css" rel="stylesheet" type="text/css" />
<style>
#addfrndmsg span{ color:#FF0000;}
.tdclassf {
	background:#FFFFFF;
	border-top:#666666 solid 1px;
	border-right:#666666 solid 1px;
	border-left:#666666 solid 1px;
	padding:5px 0 0 5px;
}
.tdclasso {
	background:#FFFFFF;
	border-bottom:#666666 solid 1px;
	border-right:#666666 solid 1px;
	border-top:#666666 solid 1px;
}
.tdextented {
	background:#FFFFFF;
	border-right:#666666 solid 1px;
	border-left:#666666 solid 1px;
	padding:5px 0 0 5px;
	font-size:12px;
}
.tdextentedr {
	background:#FFFFFF;
	border-right:#666666 solid 1px;
	border-bottom:#666666 solid 1px;
}
.tdbookall {
	background:#FFFFFF;
	border-bottom:#666666 solid 1px;
	border-right:#666666 solid 1px;
	border-left:#666666 solid 1px;
	padding-top:3px;
	padding-bottom:5px;
}
</style>
<script language="javascript" type="text/javascript">
	function addCamptoBasket_old(campid,campprice,obj,extra,chkallsel )
	{
		//alert(extra);
		// start new code - 16-6-12
		var chldiD = extra;
		var check_exist = 0;
		var check_priority = 0;
		var varsinglechildTotalprice = 'txt_children_tmp_value_' + chldiD;
		//alert(varsinglechildTotalprice);
		var singlechildTotalprice = document.getElementById(varsinglechildTotalprice ).value;
		
		var children_prior_1 = document.getElementById("txt_children_tmp_1").value ;
		var children_prior_2 = document.getElementById("txt_children_tmp_2").value ;
		var children_prior_3 = document.getElementById("txt_children_tmp_3").value ;

		if( children_prior_1 == chldiD ) {
			//document.getElementById("txt_children_tmp_2").value = chldiD;
			check_exist = 1;
		}else if( children_prior_2 == chldiD ) {
			check_exist = 1;
		} else if( children_prior_3 == chldiD ) {
			check_exist = 1;
		}
		if( check_exist == 0 ) {
			if( children_prior_1 == 0 ) {
				if( children_prior_2 != 0 ) {
					document.getElementById("txt_children_tmp_1").value = children_prior_2;
					if( children_prior_3 != 0 ) {
						document.getElementById("txt_children_tmp_2").value = children_prior_3;
						document.getElementById("txt_children_tmp_3").value = chldiD;
					} else {
						document.getElementById("txt_children_tmp_2").value = chldiD;
					}
					//document.getElementById("txt_children_tmp_2").value = chldiD;
				} else if( children_prior_3 != 0 ) {
					document.getElementById("txt_children_tmp_1").value = children_prior_3;
					document.getElementById("txt_children_tmp_2").value = chldiD;
				} else {
					document.getElementById("txt_children_tmp_1").value = chldiD;
				}					
			} 
			else if( children_prior_2 == 0 ) {
				if( children_prior_3 != 0 ) {
					document.getElementById("txt_children_tmp_2").value = children_prior_3;
					document.getElementById("txt_children_tmp_3").value = chldiD;
				} else {
					document.getElementById("txt_children_tmp_2").value = chldiD;
				}
			}
			else if( children_prior_3 == 0 ) {
				document.getElementById("txt_children_tmp_3").value = chldiD;
			}			
		}
	// end new code - 16-6-12
		//alert(campid);alert(campprice);
		//alert(extra);
		var p = document.getElementById("txttotal_price").value;
		// start new code - 14-6-12
		var varsinglechildTotalprice = 'txt_children_tmp_value_' + extra;
		var singlechildTotalprice = document.getElementById(varsinglechildTotalprice ).value;
		
		var children_prior_1 = document.getElementById("txt_children_tmp_1").value ;
		var children_prior_2 = document.getElementById("txt_children_tmp_2").value ;
		var children_prior_3 = document.getElementById("txt_children_tmp_3").value ;
		// end new code - 14-6-12
		var pp = 0;		
		var chkobj1,chk ,chkid,chkvalue = 0 ;
		if (obj.checked)
        {
			p = p*1 + campprice*1;
			//alert('checked');
			// start new code - 14-6-12
			singlechildTotalprice = singlechildTotalprice*1 +  campprice*1;
			// end new code - 14-6-12
		} else {
			//alert('unchecked');
			p = p*1 - campprice*1;			
			// start new code - 14-6-12
			singlechildTotalprice = singlechildTotalprice*1 -  campprice*1;
			// end new code - 14-6-12
		}
		// start new code 12-6-12 
		if(extra != '' ) {
			//chk = 'all_select_camps_'+extra+'_CHK';
			//chkid = 'all_select_camps_'+extra;
			chk = 'all_select_camps_'+chkallsel+'_CHK';
			chkid = 'all_select_camps_'+chkallsel;
			//alert(chkid);
			chkvalue = document.getElementById(chkid).value;
			chkobj1 = document.getElementById(chk);
			if (chkobj1.checked) {
				p = chkvalue*1 + p*1;
				// start new code - 14-6-12
				singlechildTotalprice =  chkvalue*1 + singlechildTotalprice*1 ;
				// end new code - 14-6-12
				chkobj1.checked = false;
			}
		}
		// end new code 12-6-12 
		// start new code - 14-6-12
		document.getElementById(varsinglechildTotalprice).value = singlechildTotalprice; 
		// end new code - 14-6-12
		//alert(p);
		// start new code - 14-6-12
		//singlechildTotalprice = singlechildTotalprice*1 +  campprice*1;
		// end new code - 14-6-12
		document.getElementById("txttotal_price").value = p;
		//document.getElementById("total_price").innerHTML = 'Total Charge: &pound;'+p;
		//document.getElementById("total_price1").innerHTML = 'Total Charge: &pound;'+p;
		////////////////////////////////////////////////////
		
		////////////////////////////////////////////////////
		// start new code - 16-6-12		
		 	var children_total_price_1 = 0; var children_EXTtotal_price_1 =0;
			var children_total_price_2 = 0 ; var children_EXTtotal_price_2 =0;
			var children_total_price_3 = 0; var children_EXTtotal_price_3 =0;
 			var children_prior_1 = document.getElementById("txt_children_tmp_1").value ;
			var children_prior_2 = document.getElementById("txt_children_tmp_2").value ;
			var children_prior_3 = document.getElementById("txt_children_tmp_3").value ;
			//alert(children_prior_1);
			if( children_prior_1 != 0 ) {
				var varchildren_total_price_1 = 'txt_children_tmp_value_' + children_prior_1;
				children_total_price_1 =  document.getElementById(varchildren_total_price_1).value ;
				
				var varchildren_EXTtotal_price_1 = 'txt_children_tmpEXT_value_' + children_prior_1;
				children_EXTtotal_price_1 =  document.getElementById(varchildren_EXTtotal_price_1).value ;
			} 	
			
			
			if( children_prior_2 != 0 ) {
				var varchildren_total_price_2 = 'txt_children_tmp_value_' + children_prior_2;
				children_total_price_2 =  document.getElementById(varchildren_total_price_2).value ;
				
				var varchildren_EXTtotal_price_2 = 'txt_children_tmpEXT_value_' + children_prior_2;
				children_EXTtotal_price_2 =  document.getElementById(varchildren_EXTtotal_price_2).value ;
			}
			
			
			if( children_prior_3 != 0 ) {			
				var varchildren_total_price_3 = 'txt_children_tmp_value_' + children_prior_3;
				var children_total_price_3 =  document.getElementById(varchildren_total_price_3).value ;
				
				var varchildren_EXTtotal_price_3 = 'txt_children_tmpEXT_value_' + children_prior_3;
				children_EXTtotal_price_3 =  document.getElementById(varchildren_EXTtotal_price_3).value ;
			}			
			//alert(varchildren_total_price_1);
			
			var totalEXTPrice = children_EXTtotal_price_1*1 + children_EXTtotal_price_2*1 + children_EXTtotal_price_3*1 ;
			
			
			var singlechildTotalprice = document.getElementById(varsinglechildTotalprice ).value;
			
			var child_prices_test_1 = children_total_price_1;
			var child_prices_test_2 = children_total_price_2*1 - ( children_total_price_2*0.25);
			var child_prices_test_3 = children_total_price_3*1 - ( children_total_price_3*0.50);
			var tot_price_of_children = child_prices_test_1*1 + child_prices_test_2*1 + child_prices_test_3*1 + totalEXTPrice*1;
		/*	alert('CHildren 1:'+child_prices_test_1);
			alert('CHildren 2:'+child_prices_test_2);
			alert('CHildren 3:'+child_prices_test_3);
			alert('CHildrens total:'+tot_price_of_children);*/
			
		//document.getElementById("total_price").innerHTML = 'Total Charge:'+tot_price_of_children;
		//document.getElementById("total_price1").innerHTML = 'Total Charge:'+tot_price_of_children; 
		document.getElementById("total_price").innerHTML = 'Total Charge:'+tot_price_of_children.toFixed(2);
		document.getElementById("total_price1").innerHTML = 'Total Charge:'+tot_price_of_children.toFixed(2);
		// end new code - 16-6-12
		swap_children();
		// new code - 20-6-12
		// start new code - 14-6-12		
		 	var children_total_price_1 = 0;  var children_EXTtotal_price_1 =0;
			var children_total_price_2 = 0 ;  var children_EXTtotal_price_2 =0;
			var children_total_price_3 = 0; var children_EXTtotal_price_3 =0;
 			var children_prior_1 = document.getElementById("txt_children_tmp_1").value ;
			var children_prior_2 = document.getElementById("txt_children_tmp_2").value ;
			var children_prior_3 = document.getElementById("txt_children_tmp_3").value ;
			//alert(children_prior_1);
			if( children_prior_1 != 0 ) {
				var varchildren_total_price_1 = 'txt_children_tmp_value_' + children_prior_1;
				children_total_price_1 =  document.getElementById(varchildren_total_price_1).value ;
								
				var varchildren_EXTtotal_price_1 = 'txt_children_tmpEXT_value_' + children_prior_1;
				children_EXTtotal_price_1 =  document.getElementById(varchildren_EXTtotal_price_1).value ;
			} 	
			
			
			if( children_prior_2 != 0 ) {
				var varchildren_total_price_2 = 'txt_children_tmp_value_' + children_prior_2;
				children_total_price_2 =  document.getElementById(varchildren_total_price_2).value ;
				
				var varchildren_EXTtotal_price_2 = 'txt_children_tmpEXT_value_' + children_prior_2;
				children_EXTtotal_price_2 =  document.getElementById(varchildren_EXTtotal_price_2).value ;
			}
			
			
			if( children_prior_3 != 0 ) {			
				var varchildren_total_price_3 = 'txt_children_tmp_value_' + children_prior_3;
				var children_total_price_3 =  document.getElementById(varchildren_total_price_3).value ;
				
				var varchildren_EXTtotal_price_3 = 'txt_children_tmpEXT_value_' + children_prior_3;
				children_EXTtotal_price_3 =  document.getElementById(varchildren_EXTtotal_price_3).value ;
			}			
			//alert(varchildren_total_price_1);
			
			
			var totalEXTPrice = children_EXTtotal_price_1*1 + children_EXTtotal_price_2*1 + children_EXTtotal_price_3*1 ;
			
			var singlechildTotalprice = document.getElementById(varsinglechildTotalprice ).value;
			
			var child_prices_test_1 = children_total_price_1;
			var child_prices_test_2 = children_total_price_2*1 - ( children_total_price_2*0.25);
			var child_prices_test_3 = children_total_price_3*1 - ( children_total_price_3*0.50);
			var tot_price_of_children = child_prices_test_1*1 + child_prices_test_2*1 + child_prices_test_3*1 + totalEXTPrice*1; 
			/*alert('CHildren 1:'+child_prices_test_1);
			alert('CHildren 2:'+child_prices_test_2);
			alert('CHildren 3:'+child_prices_test_3);
			alert('CHildrens total:'+tot_price_of_children);*/
			
		document.getElementById("total_price").innerHTML = 'Total Charge:'+tot_price_of_children.toFixed(2);
		document.getElementById("total_price1").innerHTML = 'Total Charge:'+tot_price_of_children.toFixed(2); 
		// end new code - 14-6-12
		// end code - 20-6-12
	}
	function addCamptoBasketEXT_old(campid,campprice,obj,chldID)
	{
		//alert(chldID);
		// start new code - 16-6-12
		var chldiD = chldID;
		var check_exist = 0;
		var check_priority = 0;
		var varsinglechildTotalprice = 'txt_children_tmp_value_' + chldiD;
//		alert(varsinglechildTotalprice);
		var singlechildTotalprice = document.getElementById(varsinglechildTotalprice ).value;
		
		var children_prior_1 = document.getElementById("txt_children_tmp_1").value ;
		var children_prior_2 = document.getElementById("txt_children_tmp_2").value ;
		var children_prior_3 = document.getElementById("txt_children_tmp_3").value ;

		if( children_prior_1 == chldiD ) {
			//document.getElementById("txt_children_tmp_2").value = chldiD;
			check_exist = 1;
		}else if( children_prior_2 == chldiD ) {
			check_exist = 1;
		} else if( children_prior_3 == chldiD ) {
			check_exist = 1;
		}
		if( check_exist == 0 ) {
			if( children_prior_1 == 0 ) {
				if( children_prior_2 != 0 ) {
					document.getElementById("txt_children_tmp_1").value = children_prior_2;
					if( children_prior_3 != 0 ) {
						document.getElementById("txt_children_tmp_2").value = children_prior_3;
						document.getElementById("txt_children_tmp_3").value = chldiD;
					} else {
						document.getElementById("txt_children_tmp_2").value = chldiD;
					}
					//document.getElementById("txt_children_tmp_2").value = chldiD;
				} else if( children_prior_3 != 0 ) {
					document.getElementById("txt_children_tmp_1").value = children_prior_3;
					document.getElementById("txt_children_tmp_2").value = chldiD;
				} else {
					document.getElementById("txt_children_tmp_1").value = chldiD;
				}					
			} 
			else if( children_prior_2 == 0 ) {
				if( children_prior_3 != 0 ) {
					document.getElementById("txt_children_tmp_2").value = children_prior_3;
					document.getElementById("txt_children_tmp_3").value = chldiD;
				} else {
					document.getElementById("txt_children_tmp_2").value = chldiD;
				}
			}
			else if( children_prior_3 == 0 ) {
				document.getElementById("txt_children_tmp_3").value = chldiD;
			}			
		}
	// end new code - 16-6-12
		//alert(campid);alert(campprice);
		// start new code - 14-6-12
		//alert(chldID);
		var varsinglechildTotalprice = 'txt_children_tmp_value_' + chldID;
		var varsinglechildEXTTotalprice = 'txt_children_tmpEXT_value_' + chldID;
		var singlechildTotalprice = document.getElementById(varsinglechildTotalprice ).value;
		var singlechildEXTTotalprice = document.getElementById(varsinglechildEXTTotalprice ).value;
		var varcheckboxall = 'checkBox_EXT_ALL_' + campid + '_' + chldID;
		var varcheckboxAllObj = document.getElementById(varcheckboxall );
		// end new code - 14-6-12
		var p = document.getElementById("txttotal_price").value;
		
		
				
		if (obj.checked)
        {
			p = p*1 + campprice*1;
			// start new code - 14-6-12
			//singlechildTotalprice = singlechildTotalprice*1 +  campprice*1;
			singlechildEXTTotalprice = singlechildEXTTotalprice*1 +  campprice*1;
			varcheckboxAllObj.checked = false;
			// end new code - 14-6-12
			//alert('checked');
		} else {
			//alert('unchecked');
			p = p*1 - campprice*1;
			// start new code - 14-6-12
			//singlechildTotalprice = singlechildTotalprice*1 -  campprice*1;
				singlechildEXTTotalprice = singlechildEXTTotalprice*1 -  campprice*1;
			varcheckboxAllObj.checked = false;
			// end new code - 14-6-12
		}
		p = p.toFixed(2);
		// start new code - 14-6-12
		document.getElementById(varsinglechildTotalprice).value = singlechildTotalprice; 
		document.getElementById(varsinglechildEXTTotalprice).value = singlechildEXTTotalprice; 
		// end new code - 14-6-12
		document.getElementById("txttotal_price").value = p;
		//document.getElementById("total_price").innerHTML = 'Total Charge: '+p;
		//document.getElementById("total_price1").innerHTML = 'Total Charge: '+p;
		////////////////////////////////////////////////////
		// start new code - 16-6-12		
		 	var children_total_price_1 = 0; var children_EXTtotal_price_1 =0;
			var children_total_price_2 = 0 ; var children_EXTtotal_price_2 =0;
			var children_total_price_3 = 0; var children_EXTtotal_price_3 =0;
 			var children_prior_1 = document.getElementById("txt_children_tmp_1").value ;
			var children_prior_2 = document.getElementById("txt_children_tmp_2").value ;
			var children_prior_3 = document.getElementById("txt_children_tmp_3").value ;
			//alert(children_prior_1);
			if( children_prior_1 != 0 ) {
				var varchildren_total_price_1 = 'txt_children_tmp_value_' + children_prior_1;
				children_total_price_1 =  document.getElementById(varchildren_total_price_1).value ;
				
				var varchildren_EXTtotal_price_1 = 'txt_children_tmpEXT_value_' + children_prior_1;
				children_EXTtotal_price_1 =  document.getElementById(varchildren_EXTtotal_price_1).value ;
			} 	
			
			
			if( children_prior_2 != 0 ) {
				var varchildren_total_price_2 = 'txt_children_tmp_value_' + children_prior_2;
				children_total_price_2 =  document.getElementById(varchildren_total_price_2).value ;
				
				var varchildren_EXTtotal_price_2 = 'txt_children_tmpEXT_value_' + children_prior_2;
				children_EXTtotal_price_2 =  document.getElementById(varchildren_EXTtotal_price_2).value ;
			}
			
			
			if( children_prior_3 != 0 ) {			
				var varchildren_total_price_3 = 'txt_children_tmp_value_' + children_prior_3;
				var children_total_price_3 =  document.getElementById(varchildren_total_price_3).value ;
				
				var varchildren_EXTtotal_price_3 = 'txt_children_tmpEXT_value_' + children_prior_3;
				children_EXTtotal_price_3 =  document.getElementById(varchildren_EXTtotal_price_3).value ;
			}			
			//alert(varchildren_total_price_1);
			
			
			var totalEXTPrice = children_EXTtotal_price_1*1 + children_EXTtotal_price_2*1 + children_EXTtotal_price_3*1 ;
			
			var singlechildTotalprice = document.getElementById(varsinglechildTotalprice ).value;
			
			var child_prices_test_1 = children_total_price_1;
			var child_prices_test_2 = children_total_price_2*1 - ( children_total_price_2*0.25);
			var child_prices_test_3 = children_total_price_3*1 - ( children_total_price_3*0.50);
			var tot_price_of_children = child_prices_test_1*1 + child_prices_test_2*1 + child_prices_test_3*1 + totalEXTPrice*1;
		/*	alert('CHildren 1:'+child_prices_test_1);
			alert('CHildren 2:'+child_prices_test_2);
			alert('CHildren 3:'+child_prices_test_3);
			alert('CHildrens total:'+tot_price_of_children);*/
			
		document.getElementById("total_price").innerHTML = 'Total Charge:'+tot_price_of_children.toFixed(2);
		document.getElementById("total_price1").innerHTML = 'Total Charge:'+tot_price_of_children.toFixed(2); 
		// end new code - 16-6-12
		
	}
	function checkBox_select_old(ids,obj, allPrice,diffprice)
	{
		// start new code - 16-6-12
		var chldiD = obj.value;
		var check_exist = 0;
		var check_priority = 0;
		var varsinglechildTotalprice = 'txt_children_tmp_value_' + chldiD;
		//alert(varsinglechildTotalprice);
		var singlechildTotalprice = document.getElementById(varsinglechildTotalprice ).value;
		
		var children_prior_1 = document.getElementById("txt_children_tmp_1").value ;
		var children_prior_2 = document.getElementById("txt_children_tmp_2").value ;
		var children_prior_3 = document.getElementById("txt_children_tmp_3").value ;

		if( children_prior_1 == chldiD ) {
			//document.getElementById("txt_children_tmp_2").value = chldiD;
			check_exist = 1;
		}else if( children_prior_2 == chldiD ) {
			check_exist = 1;
		} else if( children_prior_3 == chldiD ) {
			check_exist = 1;
		}
		if( check_exist == 0 ) {
			if( children_prior_1 == 0 ) {
				if( children_prior_2 != 0 ) {
					document.getElementById("txt_children_tmp_1").value = children_prior_2;
					if( children_prior_3 != 0 ) {
						document.getElementById("txt_children_tmp_2").value = children_prior_3;
						document.getElementById("txt_children_tmp_3").value = chldiD;
					} else {
						document.getElementById("txt_children_tmp_2").value = chldiD;
					}
					//document.getElementById("txt_children_tmp_2").value = chldiD;
				} else if( children_prior_3 != 0 ) {
					document.getElementById("txt_children_tmp_1").value = children_prior_3;
					document.getElementById("txt_children_tmp_2").value = chldiD;
				} else {
					document.getElementById("txt_children_tmp_1").value = chldiD;
				}					
			} 
			else if( children_prior_2 == 0 ) {
				if( children_prior_3 != 0 ) {
					document.getElementById("txt_children_tmp_2").value = children_prior_3;
					document.getElementById("txt_children_tmp_3").value = chldiD;
				} else {
					document.getElementById("txt_children_tmp_2").value = chldiD;
				}
			}
			else if( children_prior_3 == 0 ) {
				document.getElementById("txt_children_tmp_3").value = chldiD;
			}			
		}
	// end new code - 16-6-12
		
		// start new code - 14-6-12
		//alert(obj.value);
		var test123 = false;
		var varsinglechildTotalprice = 'txt_children_tmp_value_' + obj.value;
		var singlechildTotalprice = document.getElementById(varsinglechildTotalprice ).value;
		// end new code - 14-6-12
		
		//alert("hello");
		var p = document.getElementById("txttotal_price").value;
		var pTotal = 0;
		var a2 = new Array();
		var a3 = new Array();
		a2 = ids.split(",");
		//alert(a1);
		for(i = 0; i < a2.length; i++) {
          //string = string + "<br>" + a1[i];
		  a3 =  a2[i].split("_");
		  chkID_tmp = 'checkBox_normal_' +  a3[0]; //alert(tblID_tmp);
		 // alert(chkID_tmp);
		  chkObj = document.getElementById(chkID_tmp);
		  //alert(chkObj);
		  if (obj.checked) {
		  	if(chkObj != null ) {
				if (!chkObj.checked)
				{
					p = p*1 + a3[1]*1;
					pTotal += a3[1]*1;
					// start new code - 14-6-12
					singlechildTotalprice = singlechildTotalprice*1 + a3[1]*1;
					// end new code - 14-6-12
					//alert('checked');
				} 
				chkObj.checked = true;
			}
		  } else {
		  	test123 = true;
		  	if(chkObj != null ) {
				if (chkObj.checked)
				{
					p = p*1 - a3[1]*1;
					// start new code - 14-6-12
					singlechildTotalprice = singlechildTotalprice*1 - a3[1]*1;
					// end new code - 14-6-12
					//alert('checked');
				}
				chkObj.checked = false;
			}
		  }
        }
		
		// start new code - 11-6-12
		//alert(pTotal);
		if( diffprice != null) {
			if( allPrice != 0) {
				if (obj.checked) {
					//p = (document.getElementById("txttotal_price").value)*1 + allPrice*1 - pTotal*1;
					p = p*1 - diffprice*1 ;
					// start new code - 15 -6-12
					//alert('before diff1 : '+singlechildTotalprice);
					singlechildTotalprice = singlechildTotalprice*1 - diffprice*1 ;;
					//alert('after diff : '+singlechildTotalprice);
					// start new code - 15-6-12
				} else {
					
					// start new code - 15 -6-12
					//alert('before diff : '+singlechildTotalprice);
					singlechildTotalprice = singlechildTotalprice*1 + diffprice*1 ;;
					//alert('after diff : '+singlechildTotalprice);
					// start new code - 15-6-12
					p = (document.getElementById("txttotal_price").value)*1 - allPrice*1;
				}
			}
		} else {
			diffprice = 0;
		}
		// end new code - 11-6-12
		//alert(diffprice);
		//alert(p);
		// start new code - 14-6-12
		//alert(singlechildTotalprice);
		//alert(varsinglechildTotalprice);
			document.getElementById(varsinglechildTotalprice ).value = singlechildTotalprice*1 ; 
		 
		// end new code - 14-6-12
		document.getElementById("txttotal_price").value = p;		
		//document.getElementById("total_price").innerHTML = 'Total Charge:'+p;
		//document.getElementById("total_price1").innerHTML = 'Total Charge:'+p;
		// start new code - 14-6-12		
		 	var children_total_price_1 = 0;  var children_EXTtotal_price_1 =0;
			var children_total_price_2 = 0 ;  var children_EXTtotal_price_2 =0;
			var children_total_price_3 = 0; var children_EXTtotal_price_3 =0;
 			var children_prior_1 = document.getElementById("txt_children_tmp_1").value ;
			var children_prior_2 = document.getElementById("txt_children_tmp_2").value ;
			var children_prior_3 = document.getElementById("txt_children_tmp_3").value ;
			//alert(children_prior_1);
			if( children_prior_1 != 0 ) {
				var varchildren_total_price_1 = 'txt_children_tmp_value_' + children_prior_1;
				children_total_price_1 =  document.getElementById(varchildren_total_price_1).value ;
								
				var varchildren_EXTtotal_price_1 = 'txt_children_tmpEXT_value_' + children_prior_1;
				children_EXTtotal_price_1 =  document.getElementById(varchildren_EXTtotal_price_1).value ;
			} 	
			
			
			if( children_prior_2 != 0 ) {
				var varchildren_total_price_2 = 'txt_children_tmp_value_' + children_prior_2;
				children_total_price_2 =  document.getElementById(varchildren_total_price_2).value ;
				
				var varchildren_EXTtotal_price_2 = 'txt_children_tmpEXT_value_' + children_prior_2;
				children_EXTtotal_price_2 =  document.getElementById(varchildren_EXTtotal_price_2).value ;
			}
			
			
			if( children_prior_3 != 0 ) {			
				var varchildren_total_price_3 = 'txt_children_tmp_value_' + children_prior_3;
				var children_total_price_3 =  document.getElementById(varchildren_total_price_3).value ;
				
				var varchildren_EXTtotal_price_3 = 'txt_children_tmpEXT_value_' + children_prior_3;
				children_EXTtotal_price_3 =  document.getElementById(varchildren_EXTtotal_price_3).value ;
			}			
			//alert(varchildren_total_price_1);
			
			
			var totalEXTPrice = children_EXTtotal_price_1*1 + children_EXTtotal_price_2*1 + children_EXTtotal_price_3*1 ;
			
			var singlechildTotalprice = document.getElementById(varsinglechildTotalprice ).value;
			
			var child_prices_test_1 = children_total_price_1;
			var child_prices_test_2 = children_total_price_2*1 - ( children_total_price_2*0.25);
			var child_prices_test_3 = children_total_price_3*1 - ( children_total_price_3*0.50);
			var tot_price_of_children = child_prices_test_1*1 + child_prices_test_2*1 + child_prices_test_3*1 + totalEXTPrice*1; 
			/*alert('CHildren 1:'+child_prices_test_1);
			alert('CHildren 2:'+child_prices_test_2);
			alert('CHildren 3:'+child_prices_test_3);
			alert('CHildrens total:'+tot_price_of_children);*/
			
		document.getElementById("total_price").innerHTML = 'Total Charge:'+tot_price_of_children.toFixed(2);
		document.getElementById("total_price1").innerHTML = 'Total Charge:'+tot_price_of_children.toFixed(2); 
		// end new code - 14-6-12
		
		swap_children();
		// new code - 20-6-12
		// start new code - 14-6-12		
		 	var children_total_price_1 = 0;  var children_EXTtotal_price_1 =0;
			var children_total_price_2 = 0 ;  var children_EXTtotal_price_2 =0;
			var children_total_price_3 = 0; var children_EXTtotal_price_3 =0;
 			var children_prior_1 = document.getElementById("txt_children_tmp_1").value ;
			var children_prior_2 = document.getElementById("txt_children_tmp_2").value ;
			var children_prior_3 = document.getElementById("txt_children_tmp_3").value ;
			//alert(children_prior_1);
			if( children_prior_1 != 0 ) {
				var varchildren_total_price_1 = 'txt_children_tmp_value_' + children_prior_1;
				children_total_price_1 =  document.getElementById(varchildren_total_price_1).value ;
								
				var varchildren_EXTtotal_price_1 = 'txt_children_tmpEXT_value_' + children_prior_1;
				children_EXTtotal_price_1 =  document.getElementById(varchildren_EXTtotal_price_1).value ;
			} 	
			
			
			if( children_prior_2 != 0 ) {
				var varchildren_total_price_2 = 'txt_children_tmp_value_' + children_prior_2;
				children_total_price_2 =  document.getElementById(varchildren_total_price_2).value ;
				
				var varchildren_EXTtotal_price_2 = 'txt_children_tmpEXT_value_' + children_prior_2;
				children_EXTtotal_price_2 =  document.getElementById(varchildren_EXTtotal_price_2).value ;
			}
			
			
			if( children_prior_3 != 0 ) {			
				var varchildren_total_price_3 = 'txt_children_tmp_value_' + children_prior_3;
				var children_total_price_3 =  document.getElementById(varchildren_total_price_3).value ;
				
				var varchildren_EXTtotal_price_3 = 'txt_children_tmpEXT_value_' + children_prior_3;
				children_EXTtotal_price_3 =  document.getElementById(varchildren_EXTtotal_price_3).value ;
			}			
			//alert(varchildren_total_price_1);
			
			
			var totalEXTPrice = children_EXTtotal_price_1*1 + children_EXTtotal_price_2*1 + children_EXTtotal_price_3*1 ;
			
			var singlechildTotalprice = document.getElementById(varsinglechildTotalprice ).value;
			
			var child_prices_test_1 = children_total_price_1;
			var child_prices_test_2 = children_total_price_2*1 - ( children_total_price_2*0.25);
			var child_prices_test_3 = children_total_price_3*1 - ( children_total_price_3*0.50);
			var tot_price_of_children = child_prices_test_1*1 + child_prices_test_2*1 + child_prices_test_3*1 + totalEXTPrice*1; 
			/*alert('CHildren 1:'+child_prices_test_1);
			alert('CHildren 2:'+child_prices_test_2);
			alert('CHildren 3:'+child_prices_test_3);
			alert('CHildrens total:'+tot_price_of_children);*/
			
		document.getElementById("total_price").innerHTML = 'Total Charge:'+tot_price_of_children.toFixed(2);
		document.getElementById("total_price1").innerHTML = 'Total Charge:'+tot_price_of_children.toFixed(2); 
		// end new code - 14-6-12
		// end code - 20-6-12
	}
	
	function checkBoxEXT_select_old(ids,obj, allPrice,diffprice)
	{
		// start new code - 16-6-12
		var chldiD = obj.value;
		var check_exist = 0;
		var check_priority = 0;
		var varsinglechildTotalprice = 'txt_children_tmp_value_' + chldiD;
		var singlechildTotalprice = document.getElementById(varsinglechildTotalprice ).value;
		var varsinglechildEXTTotalprice = 'txt_children_tmpEXT_value_' + chldiD;
		var singlechildEXTTotalprice = document.getElementById(varsinglechildEXTTotalprice ).value;
		
		var children_prior_1 = document.getElementById("txt_children_tmp_1").value ;
		var children_prior_2 = document.getElementById("txt_children_tmp_2").value ;
		var children_prior_3 = document.getElementById("txt_children_tmp_3").value ;

		if( children_prior_1 == chldiD ) {
			//document.getElementById("txt_children_tmp_2").value = chldiD;
			check_exist = 1;
		}else if( children_prior_2 == chldiD ) {
			check_exist = 1;
		} else if( children_prior_3 == chldiD ) {
			check_exist = 1;
		}
		if( check_exist == 0 ) {
			if( children_prior_1 == 0 ) {
				if( children_prior_2 != 0 ) {
					document.getElementById("txt_children_tmp_1").value = children_prior_2;
					if( children_prior_3 != 0 ) {
						document.getElementById("txt_children_tmp_2").value = children_prior_3;
						document.getElementById("txt_children_tmp_3").value = chldiD;
					} else {
						document.getElementById("txt_children_tmp_2").value = chldiD;
					}
					//document.getElementById("txt_children_tmp_2").value = chldiD;
				} else if( children_prior_3 != 0 ) {
					document.getElementById("txt_children_tmp_1").value = children_prior_3;
					document.getElementById("txt_children_tmp_2").value = chldiD;
				} else {
					document.getElementById("txt_children_tmp_1").value = chldiD;
				}					
			} 
			else if( children_prior_2 == 0 ) {
				if( children_prior_3 != 0 ) {
					document.getElementById("txt_children_tmp_2").value = children_prior_3;
					document.getElementById("txt_children_tmp_3").value = chldiD;
				} else {
					document.getElementById("txt_children_tmp_2").value = chldiD;
				}
			}
			else if( children_prior_3 == 0 ) {
				document.getElementById("txt_children_tmp_3").value = chldiD;
			}			
		}
	// end new code - 16-6-12
		
		// start new code - 14-6-12
		//alert(obj.value);
		var test123 = false;
		var varsinglechildTotalprice = 'txt_children_tmp_value_' + obj.value;
		var singlechildTotalprice = document.getElementById(varsinglechildTotalprice ).value;
		// end new code - 14-6-12
		
		//alert("hello");
		var p = document.getElementById("txttotal_price").value;
		var pTotal = 0;
		var a2 = new Array();
		var a3 = new Array();
		a2 = ids.split(",");
		//alert(a1);
		for(i = 0; i < a2.length; i++) {
          //string = string + "<br>" + a1[i];
		  a3 =  a2[i].split("_");
		  chkID_tmp = 'checkBox_normal_' +  a3[0]; //alert(tblID_tmp);
		 // alert(chkID_tmp);
		  chkObj = document.getElementById(chkID_tmp);
		  //alert(chkObj);
		  if (obj.checked) {
		  	if(chkObj != null ) {
				if (!chkObj.checked)
				{
					p = p*1 + a3[1]*1;
					pTotal += a3[1]*1;
					// start new code - 14-6-12
					singlechildEXTTotalprice = singlechildEXTTotalprice*1 +  a3[1]*1;
					//singlechildTotalprice = singlechildTotalprice*1 + a3[1]*1;
					// end new code - 14-6-12
					//alert('checked');
				} 
				chkObj.checked = true;
			}
		  } else {
		  	test123 = true;
		  	if(chkObj != null ) {
				if (chkObj.checked)
				{
					p = p*1 - a3[1]*1;
					// start new code - 14-6-12
					singlechildEXTTotalprice = singlechildEXTTotalprice*1 -  a3[1]*1;
					//singlechildTotalprice = singlechildTotalprice*1 - a3[1]*1;
					// end new code - 14-6-12
					//alert('checked');
				}
				chkObj.checked = false;
			}
		  }
        }
		
		// start new code - 11-6-12
		//alert(pTotal);
		if( diffprice != null) {
			if( allPrice != 0) {
				if (obj.checked) {
					//p = (document.getElementById("txttotal_price").value)*1 + allPrice*1 - pTotal*1;
					p = p*1 - diffprice*1 ;
					// start new code - 15 -6-12
					//alert('before diff1 : '+singlechildTotalprice);
					//singlechildTotalprice = singlechildTotalprice*1 - diffprice*1 ;
					singlechildEXTTotalprice = singlechildEXTTotalprice*1 - diffprice*1 ;
					//alert('after diff : '+singlechildTotalprice);
					// start new code - 15-6-12
				} else {
					
					// start new code - 15 -6-12
					//alert('before diff : '+singlechildTotalprice);
					//singlechildTotalprice = singlechildTotalprice*1 + diffprice*1 ;;
					singlechildEXTTotalprice = singlechildEXTTotalprice*1 + diffprice*1 ;
					//alert('after diff : '+singlechildTotalprice);
					// start new code - 15-6-12
					p = (document.getElementById("txttotal_price").value)*1 - allPrice*1;
				}
			}
		} else {
			diffprice = 0;
		}
		// end new code - 11-6-12
		//alert(diffprice);
		//alert(p);
		// start new code - 14-6-12
		//alert(singlechildTotalprice);
		//alert(varsinglechildTotalprice);
			document.getElementById(varsinglechildTotalprice ).value = singlechildTotalprice*1 ; 
			document.getElementById(varsinglechildEXTTotalprice ).value = singlechildEXTTotalprice*1 ; 
		 
		// end new code - 14-6-12
		document.getElementById("txttotal_price").value = p;		
		//document.getElementById("total_price").innerHTML = 'Total Charge:'+p;
		//document.getElementById("total_price1").innerHTML = 'Total Charge:'+p;
		// start new code - 14-6-12		
		 	var children_total_price_1 = 0;  var children_EXTtotal_price_1 =0;
			var children_total_price_2 = 0 ;  var children_EXTtotal_price_2 =0;
			var children_total_price_3 = 0; var children_EXTtotal_price_3 =0;
 			var children_prior_1 = document.getElementById("txt_children_tmp_1").value ;
			var children_prior_2 = document.getElementById("txt_children_tmp_2").value ;
			var children_prior_3 = document.getElementById("txt_children_tmp_3").value ;
			//alert(children_prior_1);
			if( children_prior_1 != 0 ) {
				var varchildren_total_price_1 = 'txt_children_tmp_value_' + children_prior_1;
				children_total_price_1 =  document.getElementById(varchildren_total_price_1).value ;
								
				var varchildren_EXTtotal_price_1 = 'txt_children_tmpEXT_value_' + children_prior_1;
				children_EXTtotal_price_1 =  document.getElementById(varchildren_EXTtotal_price_1).value ;
			} 	
			
			
			if( children_prior_2 != 0 ) {
				var varchildren_total_price_2 = 'txt_children_tmp_value_' + children_prior_2;
				children_total_price_2 =  document.getElementById(varchildren_total_price_2).value ;
				
				var varchildren_EXTtotal_price_2 = 'txt_children_tmpEXT_value_' + children_prior_2;
				children_EXTtotal_price_2 =  document.getElementById(varchildren_EXTtotal_price_2).value ;
			}
			
			
			if( children_prior_3 != 0 ) {			
				var varchildren_total_price_3 = 'txt_children_tmp_value_' + children_prior_3;
				var children_total_price_3 =  document.getElementById(varchildren_total_price_3).value ;
				
				var varchildren_EXTtotal_price_3 = 'txt_children_tmpEXT_value_' + children_prior_3;
				children_EXTtotal_price_3 =  document.getElementById(varchildren_EXTtotal_price_3).value ;
			}			
			//alert(varchildren_total_price_1);
			
			
			var totalEXTPrice = children_EXTtotal_price_1*1 + children_EXTtotal_price_2*1 + children_EXTtotal_price_3*1 ;
			
			var singlechildTotalprice = document.getElementById(varsinglechildTotalprice ).value;
			
			var child_prices_test_1 = children_total_price_1;
			var child_prices_test_2 = children_total_price_2*1 - ( children_total_price_2*0.25);
			var child_prices_test_3 = children_total_price_3*1 - ( children_total_price_3*0.50);
			var tot_price_of_children = child_prices_test_1*1 + child_prices_test_2*1 + child_prices_test_3*1 + totalEXTPrice*1; 
			/*alert('CHildren 1:'+child_prices_test_1);
			alert('CHildren 2:'+child_prices_test_2);
			alert('CHildren 3:'+child_prices_test_3);
			alert('CHildrens total:'+tot_price_of_children);*/
			
		document.getElementById("total_price").innerHTML = 'Total Charge:'+tot_price_of_children.toFixed(2);
		document.getElementById("total_price1").innerHTML = 'Total Charge:'+tot_price_of_children.toFixed(2); 
		// end new code - 14-6-12
	}
	
	function show_Childrens_area(id,obj)
	{
		var tblID = 'Childrens_area_' + id; 
		var tblID_tmp = '';
		var total_childrens = document.getElementById("total_childrens").value;
		total_childrens = total_childrens.trim();
		var a1 = new Array();
		a1 = total_childrens.split(",");
		//alert(a1);
		for(i = 0; i < a1.length; i++) {
          //string = string + "<br>" + a1[i];
		  tblID_tmp = 'Childrens_area_' +  a1[i]; //alert(tblID_tmp);
		  document.getElementById(tblID_tmp).style.display = 'none';
        }

		document.getElementById(tblID).style.display = 'block';
	//	alert( document.getElementById('select_children').options[document.getElementById('select_children').selectedIndex].text );
		
		//document.getElementById("children_name").innerHTML = 'Select Camps for - ' + document.getElementById('select_children').options[document.getElementById('select_children').selectedIndex].text ;
		
	}
	function addChild()
	{  
		if( document.getElementById("new_child").style.display == '' ){
			// start new code 30-6-12
			document.getElementById("addfrndmsg").innerHTML = 'You have <span>cancelled</span> to add friend';
			// start new code 30-6-12
			document.getElementById("add_children").value = 0;
			document.getElementById("new_child").style.display= 'none';
			document.getElementById("newtbl123").style.display= 'none';  
		} else {  
			// start new code 30-6-12
			document.getElementById("addfrndmsg").innerHTML = 'You have <span>selected</span> to add friend';
			// start new code 30-6-12
			document.getElementById("add_children").value = 1;
			document.getElementById("new_child").style.display= '';
			document.getElementById("newtbl123").style.display= '';  
		}
		var have_child_friend = document.getElementById("add_children").value;
		$('#mainbkdiv').show();
	$('#divmsg').show();
		$.post("cart_total.php", "&hv_chld_frnd="+have_child_friend+"&action=set_image_session", function(results){		
			$('#total_price').html(results);
			$('#total_price1').html(results);
			$('#mainbkdiv').hide();
			$('#divmsg').hide();	
		});
		return false;
	}		
	function showbooking(id)
	{
		//alert("hello");
		window.location = "mydetails.php?CampID=" +id;
	}
	function swap_children()
	{
		//alert("in");
		var children_prior_1 = document.getElementById("txt_children_tmp_1").value ;
		var children_prior_2 = document.getElementById("txt_children_tmp_2").value ;
		var children_prior_3 = document.getElementById("txt_children_tmp_3").value ;	
		
		//alert(children_prior_1);
		//alert(children_prior_2);
		//alert(children_prior_3);
		
		 
				var varchildren_total_price_1 = 'txt_children_tmp_value_' + children_prior_1;
				//alert(varchildren_total_price_1);
				if( document.getElementById(varchildren_total_price_1) != null ) {
					children_total_price_1 =  document.getElementById(varchildren_total_price_1).value ;
				} else {
					children_total_price_1 = 0;
				}
				var varchildren_total_price_2 = 'txt_children_tmp_value_' + children_prior_2;
				//alert(varchildren_total_price_2);
				if( document.getElementById(varchildren_total_price_2) != null ) {
					children_total_price_2 =  document.getElementById(varchildren_total_price_2).value ;
				} else {
					children_total_price_2 = 0;
				}
				var varchildren_total_price_3 = 'txt_children_tmp_value_' + children_prior_3;
				//alert(varchildren_total_price_3);
				if( document.getElementById(varchildren_total_price_3) != null ) {
					children_total_price_3 =  document.getElementById(varchildren_total_price_3).value ;
				} else {
					children_total_price_3 = 0 ;
				}
			//	alert(children_total_price_1);
				
				if(children_total_price_1 == 0)
				{ 
					if( children_total_price_2 != 0 ) 
					{
						document.getElementById("txt_children_tmp_1").value = children_prior_2;
						document.getElementById("txt_children_tmp_2").value = 0;
						if( children_total_price_3 != 0 ) {
							document.getElementById("txt_children_tmp_2").value = children_prior_3;
							document.getElementById("txt_children_tmp_3").value = 0;
						} 					 
					} else if( children_total_price_3 != 0 ) {
						document.getElementById("txt_children_tmp_1").value = children_prior_3;
					}					  
				} else if(children_total_price_2 == 0) {
					if( children_total_price_3 != 0 ) {
						document.getElementById("txt_children_tmp_2").value = children_prior_3;
						document.getElementById("txt_children_tmp_3").value = 0;
					}
				}
		  
	}
	function showtable_old(tbl,tbl1,chldiD)
	{
		// start new code - 14-6-12
		var check_exist = 0;
		var check_priority = 0;
		var varsinglechildTotalprice = 'txt_children_tmp_value_' + chldiD;
		var singlechildTotalprice = document.getElementById(varsinglechildTotalprice ).value;
		
		var children_prior_1 = document.getElementById("txt_children_tmp_1").value ;
		var children_prior_2 = document.getElementById("txt_children_tmp_2").value ;
		var children_prior_3 = document.getElementById("txt_children_tmp_3").value ;
		
		/*if( children_prior_1 == 0 ) {
			document.getElementById("txt_children_tmp_1").value = chldiD;
		} else if( children_prior_1 == chldiD ) {
			//document.getElementById("txt_children_tmp_2").value = chldiD;
		} else if( children_prior_2 == 0 ) {
			document.getElementById("txt_children_tmp_2").value = chldiD;
		} else if( children_prior_2 == chldiD ) {
			//document.getElementById("txt_children_tmp_2").value = chldiD;
		} else if( children_prior_3 == 0 ) {
			document.getElementById("txt_children_tmp_3").value = chldiD;
		} else if( children_prior_3 == chldiD ) {
			//document.getElementById("txt_children_tmp_2").value = chldiD;
		}*/
		
		
			// end new code - 14-6-12
		
		if(document.getElementById(tbl).style.display == 'none') {
			// start new code - 14-6-12
			if( children_prior_1 == chldiD ) {
				//document.getElementById("txt_children_tmp_2").value = chldiD;
				check_exist = 1;
			}else if( children_prior_2 == chldiD ) {
				check_exist = 1;
			} else if( children_prior_3 == chldiD ) {
				check_exist = 1;
			}
			if( check_exist == 0 ) {
				if( children_prior_1 == 0 ) {
					if( children_prior_2 != 0 ) {
						document.getElementById("txt_children_tmp_1").value = children_prior_2;
						if( children_prior_3 != 0 ) {
							document.getElementById("txt_children_tmp_2").value = children_prior_3;
							document.getElementById("txt_children_tmp_3").value = chldiD;
						} else {
							document.getElementById("txt_children_tmp_2").value = chldiD;
						}
						//document.getElementById("txt_children_tmp_2").value = chldiD;
					} else if( children_prior_3 != 0 ) {
						document.getElementById("txt_children_tmp_1").value = children_prior_3;
						document.getElementById("txt_children_tmp_2").value = chldiD;
					} else {
						document.getElementById("txt_children_tmp_1").value = chldiD;
					}					
				} 
				else if( children_prior_2 == 0 ) {
					if( children_prior_3 != 0 ) {
						document.getElementById("txt_children_tmp_2").value = children_prior_3;
						document.getElementById("txt_children_tmp_3").value = chldiD;
					} else {
						document.getElementById("txt_children_tmp_2").value = chldiD;
					}
				}
				else if( children_prior_3 == 0 ) {
					document.getElementById("txt_children_tmp_3").value = chldiD;
				}			
			}
			// end new code - 14-6-12
			document.getElementById(tbl).style.display= '';
			document.getElementById(tbl1).style.display= '';
		} else {
			// start new code - 14-6-12
			if( children_prior_1 == chldiD ) {
				//document.getElementById("txt_children_tmp_2").value = chldiD;
				if( singlechildTotalprice == 0 ) {
					document.getElementById("txt_children_tmp_1").value = 0;
				}
			}else if( children_prior_2 == chldiD ) {
				//document.getElementById("txt_children_tmp_2").value = chldiD;
				if( singlechildTotalprice == 0 ) {
					document.getElementById("txt_children_tmp_2").value = 0;
				}
			} else if( children_prior_3 == chldiD ) {
				//document.getElementById("txt_children_tmp_2").value = chldiD;
				if( singlechildTotalprice == 0 ) {
					document.getElementById("txt_children_tmp_3").value = 0;
				}
			}
			// end new code - 14-6-12
			document.getElementById(tbl).style.display= 'none';
			document.getElementById(tbl1).style.display= 'none';
		}

		// start new code - 16-6-12		
		 	var children_total_price_1 = 0;  var children_EXTtotal_price_1 =0;
			var children_total_price_2 = 0 ;  var children_EXTtotal_price_2 =0;
			var children_total_price_3 = 0;  var children_EXTtotal_price_3 =0;
 			var children_prior_1 = document.getElementById("txt_children_tmp_1").value ;
			var children_prior_2 = document.getElementById("txt_children_tmp_2").value ;
			var children_prior_3 = document.getElementById("txt_children_tmp_3").value ;
			
			//alert(children_prior_1);
			if( children_prior_1 != 0 ) {
				var varchildren_total_price_1 = 'txt_children_tmp_value_' + children_prior_1;
				children_total_price_1 =  document.getElementById(varchildren_total_price_1).value ;
				
				var varchildren_EXTtotal_price_1 = 'txt_children_tmpEXT_value_' + children_prior_1;
				children_EXTtotal_price_1 =  document.getElementById(varchildren_EXTtotal_price_1).value ;
			} 	
			
			
			if( children_prior_2 != 0 ) {
				var varchildren_total_price_2 = 'txt_children_tmp_value_' + children_prior_2;
				children_total_price_2 =  document.getElementById(varchildren_total_price_2).value ;
				
				var varchildren_EXTtotal_price_2 = 'txt_children_tmpEXT_value_' + children_prior_2;
				children_EXTtotal_price_2 =  document.getElementById(varchildren_EXTtotal_price_2).value ;
			}
			
			
			if( children_prior_3 != 0 ) {			
				var varchildren_total_price_3 = 'txt_children_tmp_value_' + children_prior_3;
				var children_total_price_3 =  document.getElementById(varchildren_total_price_3).value ;
				
				var varchildren_EXTtotal_price_3 = 'txt_children_tmpEXT_value_' + children_prior_3;
				children_EXTtotal_price_3 =  document.getElementById(varchildren_EXTtotal_price_3).value ;
			}			
			//alert(varchildren_total_price_1);
			
			
			var totalEXTPrice = children_EXTtotal_price_1*1 + children_EXTtotal_price_2*1 + children_EXTtotal_price_3*1 ;
			
			var singlechildTotalprice = document.getElementById(varsinglechildTotalprice ).value;
			
			var child_prices_test_1 = children_total_price_1;
			var child_prices_test_2 = children_total_price_2*1 - ( children_total_price_2*0.25);
			var child_prices_test_3 = children_total_price_3*1 - ( children_total_price_3*0.50);
			var tot_price_of_children = child_prices_test_1*1 + child_prices_test_2*1 + child_prices_test_3*1 + totalEXTPrice*1;
			//alert('CHildren 1:'+child_prices_test_1);
			//alert('CHildren 2:'+child_prices_test_2);
			//alert('CHildren 3:'+child_prices_test_3);
		//	alert('CHildrens total:'+tot_price_of_children);
			
		document.getElementById("total_price").innerHTML = 'Total Charge:'+tot_price_of_children.toFixed(2);
		document.getElementById("total_price1").innerHTML = 'Total Charge:'+tot_price_of_children.toFixed(2); 
		// end new code - 16-6-12
	}
	function chkfrm()
	{
		var varadd_children = document.getElementById("add_children").value ;
		if( varadd_children == 1 ) { 
			if(document.addtocartfrm.txtfirstname.value == "")
			{
				alert("Please Enter Forename");
				return false;
			}
			if(document.addtocartfrm.txtlastname.value == "")
			{
				alert("Please Enter Lastname");
				return false;
			}
			return true;
		} else {
			return true;
		}
	}

 // start new code - 22-6-12 
 function addCamptoBasketFriend(campid,campprice,obj,Children_id,chkallsel,day )
 {
 	//alert("hi");
 	//alert(campid + campprice + obj + extra + chkallsel );
	//////////////////////////////////
			chk = 'all_select_camps_'+chkallsel+'_CHK';  
			chkobj1 = document.getElementById(chk);
			if (chkobj1.checked) { 
				chkobj1.checked = false;
			}
			
	var have_child_friend = document.getElementById("add_children").value;
	////////////////////////////////////
	var removed_camp = 0 ;
	if (obj.checked) {
	} else {
		removed_camp = 1;	
	}
	// start loading image 
	$('#mainbkdiv').show();
	$('#divmsg').show();
	// end loading image 
		$.post("friend_cart.php", "campid="+campid+"&childid="+Children_id+"&day="+day+"&removecamp="+removed_camp+"&hv_chld_frnd="+have_child_friend+"&action=set_image_session", function(results){		
			$('#total_price').html(results);
			$('#total_price1').html(results);
			$('#mainbkdiv').hide();
			$('#divmsg').hide();	
		});
 }
 function checkBox_selectFriend(ids,obj, allPrice,diffprice,day,campid) 
 {
 	//alert("hello");
 	/////////////////////
	var a2 = new Array();
	var a3 = new Array();
	a2 = ids.split(",");
		//alert(a1);
		for(i = 0; i < a2.length; i++) {
          //string = string + "<br>" + a1[i];
		  a3 =  a2[i].split("_");
		  chkID_tmp = 'checkBox_normal_' +  a3[0]; //alert(tblID_tmp);
		 // alert(chkID_tmp);
		  chkObj = document.getElementById(chkID_tmp);
		  //alert(chkObj);
		  if (obj.checked) {
		  	if(chkObj != null ) {
				if (!chkObj.checked)
				{
					
				} 
				chkObj.checked = true;
			}
		  } else {
		  	if(chkObj != null ) {
				if (chkObj.checked)
				{
					
				}
				chkObj.checked = false;
			}
		  }
        }
	var have_child_friend = document.getElementById("add_children").value;	
	/////////////////////
 	var removed_camp = 0 ;
	if (obj.checked) {
	} else {
		removed_camp = 1;	
	}
	$('#mainbkdiv').show();
	$('#divmsg').show();
		$.post("friend_cart.php", "campid="+campid+"&childid="+obj.value+"&day="+day+"&removecamp="+removed_camp+"&hv_chld_frnd="+have_child_friend+"&action=set_image_session", function(results){		
			$('#total_price').html(results);
			$('#total_price1').html(results);
			$('#mainbkdiv').hide();
			$('#divmsg').hide();	
		});
 } 
  function addCamptoBasketEXTFriend(campid,campprice,obj,chldID,day) 
 {	
 	var chkallExtID = 'checkBox_EXT_ALL_' +  campid+ '_' + chldID;	
	var chkallExtObj = document.getElementById(chkallExtID);

	if(chkallExtObj.checked) {
		chkallExtObj.checked  = false;
	}
	var removed_camp = 0 ;
	if (obj.checked) {
	} else {
		removed_camp = 1;	
	}
	var have_child_friend = document.getElementById("add_children").value;
	$('#mainbkdiv').show();
	$('#divmsg').show();
 		$.post("friend_cart.php", "campid="+campid+"&childid="+chldID+"&day="+obj.value+"&removecamp="+removed_camp+"&hv_chld_frnd="+have_child_friend+"&extday=1", function(results){		
			$('#total_price').html(results);
			$('#total_price1').html(results);
			$('#mainbkdiv').hide();
			$('#divmsg').hide();	
		});
 }
 
  function checkBoxEXT_selectFriend(ids,obj,campid,day )
  {
 	/////////////////////
	var a2 = new Array();
	var a3 = new Array();
	a2 = ids.split(",");
		//alert(a1);
		for(i = 0; i < a2.length; i++) {
          //string = string + "<br>" + a1[i];
		  a3 =  a2[i].split("_");
		  chkID_tmp = 'checkBox_normal_' +  a3[0]; //alert(tblID_tmp);
		 // alert(chkID_tmp);
		  chkObj = document.getElementById(chkID_tmp);
		  //alert(chkObj);
		  if (obj.checked) {
		  	if(chkObj != null ) {
				if (!chkObj.checked)
				{
					
				} 
				chkObj.checked = true;
			}
		  } else {
		  	if(chkObj != null ) {
				if (chkObj.checked)
				{
					
				}
				chkObj.checked = false;
			}
		  }
        }
	var have_child_friend = document.getElementById("add_children").value;	
	/////////////////////
 	var removed_camp = 0 ;
	if (obj.checked) {
	} else {
		removed_camp = 1;	
	}
	$('#mainbkdiv').show();
	$('#divmsg').show();
		$.post("friend_cart.php", "campid="+campid+"&childid="+obj.value+"&day="+day+"&removecamp="+removed_camp+"&hv_chld_frnd="+have_child_friend+"&action=set_image_session", function(results){		
			$('#total_price').html(results);
			$('#total_price1').html(results);
			$('#mainbkdiv').hide();
			$('#divmsg').hide();	
		});
 } 
 
 function addCamptoBasket(campid,campprice,obj,Children_id,chkallsel,day )
 {
 	//alert(campid + campprice + obj + extra + chkallsel );
	//////////////////////////////////
			chk = 'all_select_camps_'+chkallsel+'_CHK';  
			chkobj1 = document.getElementById(chk);
			if (chkobj1.checked) { 
				chkobj1.checked = false;
			}
	////////////////////////////////////
	var removed_camp = 0 ;
	if (obj.checked) {
	} else {
		removed_camp = 1;	
	}
	var have_child_friend = document.getElementById("add_children").value;
	// start loading image 
	$('#mainbkdiv').show();
	$('#divmsg').show();
	// end loading image 
		$.post("cart.php", "campid="+campid+"&childid="+Children_id+"&day="+day+"&removecamp="+removed_camp+"&hv_chld_frnd="+have_child_friend+"&action=set_image_session", function(results){		
			$('#total_price').html(results);
			$('#total_price1').html(results);
			$('#mainbkdiv').hide();
			$('#divmsg').hide();	
		});
 }
 function addCamptoBasketEXT(campid,campprice,obj,chldID,day) 
 {	
 	var chkallExtID = 'checkBox_EXT_ALL_' +  campid+ '_' + chldID;	
	var chkallExtObj = document.getElementById(chkallExtID);

	if(chkallExtObj.checked) {
		chkallExtObj.checked  = false;
	}
	var removed_camp = 0 ;
	if (obj.checked) {
	} else {
		removed_camp = 1;	
	}
	var have_child_friend = document.getElementById("add_children").value;
	$('#mainbkdiv').show();
	$('#divmsg').show();
 		$.post("cart.php", "campid="+campid+"&childid="+chldID+"&day="+obj.value+"&removecamp="+removed_camp+"&hv_chld_frnd="+have_child_friend+"&extday=1", function(results){		
			$('#total_price').html(results);
			$('#total_price1').html(results);
			$('#mainbkdiv').hide();
			$('#divmsg').hide();	
		});
 }
 function checkBox_select(ids,obj, allPrice,diffprice,day,campid) 
 {
 	/////////////////////
	var a2 = new Array();
	var a3 = new Array();
	a2 = ids.split(",");
		//alert(a1);
		for(i = 0; i < a2.length; i++) {
          //string = string + "<br>" + a1[i];
		  a3 =  a2[i].split("_");
		  chkID_tmp = 'checkBox_normal_' +  a3[0]; //alert(tblID_tmp);
		 // alert(chkID_tmp);
		  chkObj = document.getElementById(chkID_tmp);
		  //alert(chkObj);
		  if (obj.checked) {
		  	if(chkObj != null ) {
				if (!chkObj.checked)
				{
					
				} 
				chkObj.checked = true;
			}
		  } else {
		  	if(chkObj != null ) {
				if (chkObj.checked)
				{
					
				}
				chkObj.checked = false;
			}
		  }
        }
	var have_child_friend = document.getElementById("add_children").value;	
	/////////////////////
 	var removed_camp = 0 ;
	if (obj.checked) {
	} else {
		removed_camp = 1;	
	}
	$('#mainbkdiv').show();
	$('#divmsg').show();
		$.post("cart.php", "campid="+campid+"&childid="+obj.value+"&day="+day+"&removecamp="+removed_camp+"&hv_chld_frnd="+have_child_friend+"&action=set_image_session", function(results){		
			$('#total_price').html(results);
			$('#total_price1').html(results);
			$('#mainbkdiv').hide();
			$('#divmsg').hide();	
		});
 } 
 
 function checkBoxEXT_select(ids,obj,campid,day )
  {
 	/////////////////////
	var a2 = new Array();
	var a3 = new Array();
	a2 = ids.split(",");
		//alert(a1);
		for(i = 0; i < a2.length; i++) {
          //string = string + "<br>" + a1[i];
		  a3 =  a2[i].split("_");
		  chkID_tmp = 'checkBox_normal_' +  a3[0]; //alert(tblID_tmp);
		 // alert(chkID_tmp);
		  chkObj = document.getElementById(chkID_tmp);
		  //alert(chkObj);
		  if (obj.checked) {
		  	if(chkObj != null ) {
				if (!chkObj.checked)
				{
					
				} 
				chkObj.checked = true;
			}
		  } else {
		  	if(chkObj != null ) {
				if (chkObj.checked)
				{
					
				}
				chkObj.checked = false;
			}
		  }
        }
	var have_child_friend = document.getElementById("add_children").value;
	/////////////////////
 	var removed_camp = 0 ;
	if (obj.checked) {
	} else {
		removed_camp = 1;	
	}
	$('#mainbkdiv').show();
	$('#divmsg').show();
		$.post("cart.php", "campid="+campid+"&childid="+obj.value+"&day="+day+"&removecamp="+removed_camp+"&hv_chld_frnd="+have_child_friend+"&action=set_image_session", function(results){		
			$('#total_price').html(results);
			$('#total_price1').html(results);
			$('#mainbkdiv').hide();
			$('#divmsg').hide();	
		});
 } 
 function showtable(tbl,tbl1,chldiD)
{
		// start new code - 14-6-12
		var check_exist = 0;
		var check_priority = 0;
		var varsinglechildTotalprice = 'txt_children_tmp_value_' + chldiD;
		var singlechildTotalprice = document.getElementById(varsinglechildTotalprice ).value;
		
		var children_prior_1 = document.getElementById("txt_children_tmp_1").value ;
		var children_prior_2 = document.getElementById("txt_children_tmp_2").value ;
		var children_prior_3 = document.getElementById("txt_children_tmp_3").value ;
		 // end new code - 14-6-12
		
		if(document.getElementById(tbl).style.display == 'none') {
		 
			document.getElementById(tbl).style.display= '';
			document.getElementById(tbl1).style.display= '';
		} else {
			 
			document.getElementById(tbl).style.display= 'none';
			document.getElementById(tbl1).style.display= 'none';
		}

		 
	}
 // end new code - 22-6-12  
</script>

</head>
<body>
<div id="mainbkdiv" style="background:#000000; opacity:0.7; position:fixed; top:0px; height:100%; width:100%; display:none; z-index:10000;">
</div>
<div id="divmsg" style="background:#fff;   position:fixed; top:200px; left:655px; height:100px;  display:none; z-index:10001; text-align:center; font-weight:normal; font-size:18px; color:#FF0000; " >
	<div style="padding:20px;"><img src="images/arrows64.gif"	 /></div>
</div>
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
          <form name="addtocartfrm" onsubmit="return chkfrm();" action="actions.php?action=add_to_cart"  method="post">
            <div class="bookonline-right-content">
              <div id="floatMenu">
                <div id="float_div">
                  <div id="total_price" class="total">Total Charge: &pound;0.00</div>
                </div>
              </div>
              <div class="bookonline-heading-text"><img src="images/book-online-img.png" alt="" />
                <p>You are signed in as admin</p>
                <spn>
                <a href="logout.php"><img src="images/signoutbt.png" alt="" /></a></span></div>
              <div class="bookonline-middle-content">
                <div id="TabbedPanels2" class="TabbedPane2s">
                  <ul class="TabbedPanelsTabGroup">
                                        <li class="TabbedPanelsTab TabbedPanelsTabSelected" tabindex="0" ><a href="book-online.php?tab=33">Summer Camp</a></li>
                                                            <li class="TabbedPanelsTab " tabindex="0" ><a href="book-online.php?tab=32">Easter Camp</a></li>
                                        <!-- <li class="TabbedPanelsTab" tabindex="0" ><a href="book-online.php?tab=1">Summer Camp</a></li>
                    <li  class="TabbedPanelsTab" tabindex="0"><a href="book-online.php?tab=2">October Half Term</a></li>
					<li class="TabbedPanelsTab" tabindex="0" ><a href="book-online.php?tab=3">test yab</a></li>-->
                  </ul>
                  <div class="TabbedPanelsContentGroup">
                    <div class="TabbedPanelsContent1">
                      <div class="bcodebg">Promotional Code
                        <input name="txtcoupon_code" type="text" />
                      </div>
                      <div style="clear:both;"></div>
                                            <table width="644" border="0" cellpadding="0" cellspacing="0" class="bgcolor">
                        <tr>
                        
                        <td colspan="3">
                        
                        <table width="615" border="0" align="center" cellpadding="0" cellspacing="0" style="padding-top:15px; margin-left:10px;">
                          <tr>
                            <td width="123" rowspan="3" colspan="3" valign="top" style="font-weight:normal; font-size:14px; padding-top:0px;">Please select your children</td>
                                                                                                                      <input type="hidden" name="total_childrens" id="total_childrens" value="118,119,120 " />
                             <div style="position:absolute; float:left; margin-left:-270px">
                                <div id="children_name" style="color:#E94825; font-size:20px;"></div>
                              </div></td>
                            <td width="211" style=" font-size:14px;  	border:#333333 solid 1px;-moz-border-radius: 10px; /* Firefox */-webkit-border-radius: 10px; /* Safari and Chrome */	border-radius: 10px; /* Opera 10.5+, future browsers, and now also Internet Explorer 6+ using IE-CSS3 */	background:#f7f5be; padding-left:15px; height:24px; line-height:24px; margin-bottom:10px;" >Normal Day:      9am - 4pm</td>
                          </tr>
                          <tr>
                            <td style="padding:2px;"></td>
                          </tr>
                          <tr>
                            <td style=" font-size:13px;  	border:#333333 solid 1px;
	-moz-border-radius: 10px; /* Firefox */
	-webkit-border-radius: 10px; /* Safari and Chrome */
	border-radius: 10px; /* Opera 10.5+, future browsers, and now also Internet Explorer 6+ using IE-CSS3 */
	background:#f7f5be; padding-left:15px; height:24px; line-height:24px; margin-top:10px;">Extended Day:  8am - 5pm</td>
                          </tr>
						  <tr><td style="line-height: 14px;"  colspan="4">&nbsp;</td></tr>
                                                    <tr>
                          
                          <td colspan="4">
                          
                                                                                                        <table onclick="showtable('Childrens_area_118','Childrens_area_1118','118');" style="background:#3e52a3; font-size: 18px; height: 32px; width:644px;  border-bottom:solid 2px #FFFFFF; line-height: 27px; margin-left:-10px;">
                            <tr>
                              <td style="color:#FFFFFF; cursor:pointer;"><img src="images/add+.png"  alt="" />Finn Ashworth                                <input type="hidden" name="txt_children_tmp_value_118" id="txt_children_tmp_value_118" value="0"  />
                                <input type="hidden" name="txt_children_tmpEXT_value_118" id="txt_children_tmpEXT_value_118" value="0"  />
                              </td>
                            </tr>
                          </table>
                          <table id="Childrens_area_1118" style="display:none;" >
                            <tr>
                              <td style="font-weight:bold; text-decoration:underline; color:#000000; font-size: 20px;">Book Camp For: Finn Ashworth </td>
                            </tr>
                          </table>
                                                                              <table id="Childrens_area_118" style=" display:none;" >
                            <tr>
                              <td>                            <tr>
                              <td colspan="4" style="font-size:16px; padding-bottom:5px;">januari camp                                27 Jan 2014 - 31 Jan 2014</td>
                            </tr>
                            <tr>
                              <td colspan="4" align="center" style=" font-size:13px;  	border:#333333 solid 1px;
			-moz-border-radius: 10px; /* Firefox */
			-webkit-border-radius: 10px; /* Safari and Chrome */
			border-radius: 10px; /* Opera 10.5+, future browsers, and now also Internet Explorer 6+ using IE-CSS3 */
			background:#3e52a3; 
		 margin-top:10px;"><table id="children_tbl0" width="620" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:10px;">
                                  <tr>
                                    <td width="174">&nbsp;</td>
                                                                        <td width="89" height="33" align="center" valign="bottom" style="color:#FFFFFF;">Mon 27Jan</td>
                                                                        <td width="89" height="33" align="center" valign="bottom" style="color:#FFFFFF;">Tue 28Jan</td>
                                                                        <td width="89" height="33" align="center" valign="bottom" style="color:#FFFFFF;">Wed 29Jan</td>
                                                                        <td width="89" height="33" align="center" valign="bottom" style="color:#FFFFFF;">Thu 30Jan</td>
                                                                        <td width="89" height="33" align="center" valign="bottom" style="color:#FFFFFF;">Fri 31Jan</td>
                                                                      </tr>
                                  <tr>
                                    <td width="169" class="tdclassf" style="text-align:center;" >Normal Day</td>
                                                                        <td width="89" rowspan="2" align="center" class="tdclasso"><input type="checkbox" onclick="addCamptoBasket(35,10.00,this,'118','118_35','Mon')" name="checkBox_118_35[]" id="checkBox_normal_1" value="Mon" />
                                      Book </td>
                                                                        <td width="89" rowspan="2" align="center" class="tdclasso"><input type="checkbox" onclick="addCamptoBasket(35,10.00,this,'118','118_35','Tues')" name="checkBox_118_35[]" id="checkBox_normal_2" value="Tues" />
                                      Book </td>
                                                                        <td width="89" rowspan="2" align="center" class="tdclasso"><input type="checkbox" onclick="addCamptoBasket(35,10.00,this,'118','118_35','Wed')" name="checkBox_118_35[]" id="checkBox_normal_3" value="Wed" />
                                      Book </td>
                                                                        <td width="89" rowspan="2" align="center" class="tdclasso"><input type="checkbox" onclick="addCamptoBasket(35,10.00,this,'118','118_35','Thu')" name="checkBox_118_35[]" id="checkBox_normal_4" value="Thu" />
                                      Book </td>
                                                                        <td width="89" rowspan="2" align="center" class="tdclasso"><input type="checkbox" onclick="addCamptoBasket(35,10.00,this,'118','118_35','Fri')" name="checkBox_118_35[]" id="checkBox_normal_5" value="Fri" />
                                      Book </td>
                                                                      </tr>
                                  <tr>
                                    <td valign="top" style="background:#FFFFFF;border-bottom:#666666 solid 1px; border-right:#666666 solid 1px; padding-left:10px; border-left:#666666 solid 1px; padding-top:3px; padding-bottom:5px;"><input type="checkbox" name="radio" id="all_select_camps_118_35_CHK" onclick="checkBox_select('1_10.00,1,2_10.00,2,3_10.00,3,4_10.00,4,5_10.00,5,',this,'10.00','60','book_all',35);" value="118" />
                                      <input type="hidden" name="all_select_camps_118" id="all_select_camps_118_35" value="60" />
                                      Book all days</td>
                                  </tr>
                                  <tr>
                                    <td width="169" class="tdextented" style="text-align:center;" >Extended Day (5 extra)</td>
                                                                        <td width="89" rowspan="2" align="center" class="tdextentedr"><input type="checkbox"  onclick="addCamptoBasketEXT(35,5,this,118)"  name="checkBox_ext_118_35[]"  id="checkBox_normal_6" value="EXT_Mon" />
                                      Book</td>
                                                                        <td width="89" rowspan="2" align="center" class="tdextentedr"><input type="checkbox"  onclick="addCamptoBasketEXT(35,5,this,118)"  name="checkBox_ext_118_35[]"  id="checkBox_normal_7" value="EXT_Tues" />
                                      Book</td>
                                                                        <td width="89" rowspan="2" align="center" class="tdextentedr"><input type="checkbox"  onclick="addCamptoBasketEXT(35,5,this,118)"  name="checkBox_ext_118_35[]"  id="checkBox_normal_8" value="EXT_Wed" />
                                      Book</td>
                                                                        <td width="89" rowspan="2" align="center" class="tdextentedr"><input type="checkbox"  onclick="addCamptoBasketEXT(35,5,this,118)"  name="checkBox_ext_118_35[]"  id="checkBox_normal_9" value="EXT_Thu" />
                                      Book</td>
                                                                        <td width="89" rowspan="2" align="center" class="tdextentedr"><input type="checkbox"  onclick="addCamptoBasketEXT(35,5,this,118)"  name="checkBox_ext_118_35[]"  id="checkBox_normal_10" value="EXT_Fri" />
                                      Book</td>
                                                                      </tr>
                                  <tr>
                                    <td valign="top" class="tdbookall" style=" padding-left:10px;"><input type="checkbox" onclick="checkBoxEXT_select('6_5,6,7_5,7,8_5,8,9_5,9,10_5,10,',this,35,'EXTALL');"  name="radio" id="checkBox_EXT_ALL_35_118" value="118" />
                                      Book all days</td>
                                  </tr>
                                </table></td>
                            </tr>
                            <tr>
                              <td colspan="4">&nbsp;</td>
                            </tr>
                                                        </td>
                            
                            </tr>
                            
                          </table>
                                                                                                        <table onclick="showtable('Childrens_area_119','Childrens_area_1119','119');" style="background:#3e52a3; font-size: 18px; height: 32px; width:644px;  border-bottom:solid 2px #FFFFFF; line-height: 27px; margin-left:-10px;">
                            <tr>
                              <td style="color:#FFFFFF; cursor:pointer;"><img src="images/add+.png"  alt="" />Mieke Ashworth                                <input type="hidden" name="txt_children_tmp_value_119" id="txt_children_tmp_value_119" value="0"  />
                                <input type="hidden" name="txt_children_tmpEXT_value_119" id="txt_children_tmpEXT_value_119" value="0"  />
                              </td>
                            </tr>
                          </table>
                          <table id="Childrens_area_1119" style="display:none;" >
                            <tr>
                              <td style="font-weight:bold; text-decoration:underline; color:#000000; font-size: 20px;">Book Camp For: Mieke Ashworth </td>
                            </tr>
                          </table>
                                                                              <table id="Childrens_area_119" style=" display:none;" >
                            <tr>
                              <td>                            <tr>
                              <td colspan="4" style="font-size:16px; padding-bottom:5px;">januari camp                                27 Jan 2014 - 31 Jan 2014</td>
                            </tr>
                            <tr>
                              <td colspan="4" align="center" style=" font-size:13px;  	border:#333333 solid 1px;
			-moz-border-radius: 10px; /* Firefox */
			-webkit-border-radius: 10px; /* Safari and Chrome */
			border-radius: 10px; /* Opera 10.5+, future browsers, and now also Internet Explorer 6+ using IE-CSS3 */
			background:#3e52a3; 
		 margin-top:10px;"><table id="children_tbl0" width="620" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:10px;">
                                  <tr>
                                    <td width="174">&nbsp;</td>
                                                                        <td width="89" height="33" align="center" valign="bottom" style="color:#FFFFFF;">Mon 27Jan</td>
                                                                        <td width="89" height="33" align="center" valign="bottom" style="color:#FFFFFF;">Tue 28Jan</td>
                                                                        <td width="89" height="33" align="center" valign="bottom" style="color:#FFFFFF;">Wed 29Jan</td>
                                                                        <td width="89" height="33" align="center" valign="bottom" style="color:#FFFFFF;">Thu 30Jan</td>
                                                                        <td width="89" height="33" align="center" valign="bottom" style="color:#FFFFFF;">Fri 31Jan</td>
                                                                      </tr>
                                  <tr>
                                    <td width="169" class="tdclassf" style="text-align:center;" >Normal Day</td>
                                                                        <td width="89" rowspan="2" align="center" class="tdclasso"><input type="checkbox" onclick="addCamptoBasket(35,10.00,this,'119','119_35','Mon')" name="checkBox_119_35[]" id="checkBox_normal_11" value="Mon" />
                                      Book </td>
                                                                        <td width="89" rowspan="2" align="center" class="tdclasso"><input type="checkbox" onclick="addCamptoBasket(35,10.00,this,'119','119_35','Tues')" name="checkBox_119_35[]" id="checkBox_normal_12" value="Tues" />
                                      Book </td>
                                                                        <td width="89" rowspan="2" align="center" class="tdclasso"><input type="checkbox" onclick="addCamptoBasket(35,10.00,this,'119','119_35','Wed')" name="checkBox_119_35[]" id="checkBox_normal_13" value="Wed" />
                                      Book </td>
                                                                        <td width="89" rowspan="2" align="center" class="tdclasso"><input type="checkbox" onclick="addCamptoBasket(35,10.00,this,'119','119_35','Thu')" name="checkBox_119_35[]" id="checkBox_normal_14" value="Thu" />
                                      Book </td>
                                                                        <td width="89" rowspan="2" align="center" class="tdclasso"><input type="checkbox" onclick="addCamptoBasket(35,10.00,this,'119','119_35','Fri')" name="checkBox_119_35[]" id="checkBox_normal_15" value="Fri" />
                                      Book </td>
                                                                      </tr>
                                  <tr>
                                    <td valign="top" style="background:#FFFFFF;border-bottom:#666666 solid 1px; border-right:#666666 solid 1px; padding-left:10px; border-left:#666666 solid 1px; padding-top:3px; padding-bottom:5px;"><input type="checkbox" name="radio" id="all_select_camps_119_35_CHK" onclick="checkBox_select('11_10.00,11,12_10.00,12,13_10.00,13,14_10.00,14,15_10.00,15,',this,'10.00','60','book_all',35);" value="119" />
                                      <input type="hidden" name="all_select_camps_119" id="all_select_camps_119_35" value="60" />
                                      Book all days</td>
                                  </tr>
                                  <tr>
                                    <td width="169" class="tdextented" style="text-align:center;" >Extended Day (5 extra)</td>
                                                                        <td width="89" rowspan="2" align="center" class="tdextentedr"><input type="checkbox"  onclick="addCamptoBasketEXT(35,5,this,119)"  name="checkBox_ext_119_35[]"  id="checkBox_normal_16" value="EXT_Mon" />
                                      Book</td>
                                                                        <td width="89" rowspan="2" align="center" class="tdextentedr"><input type="checkbox"  onclick="addCamptoBasketEXT(35,5,this,119)"  name="checkBox_ext_119_35[]"  id="checkBox_normal_17" value="EXT_Tues" />
                                      Book</td>
                                                                        <td width="89" rowspan="2" align="center" class="tdextentedr"><input type="checkbox"  onclick="addCamptoBasketEXT(35,5,this,119)"  name="checkBox_ext_119_35[]"  id="checkBox_normal_18" value="EXT_Wed" />
                                      Book</td>
                                                                        <td width="89" rowspan="2" align="center" class="tdextentedr"><input type="checkbox"  onclick="addCamptoBasketEXT(35,5,this,119)"  name="checkBox_ext_119_35[]"  id="checkBox_normal_19" value="EXT_Thu" />
                                      Book</td>
                                                                        <td width="89" rowspan="2" align="center" class="tdextentedr"><input type="checkbox"  onclick="addCamptoBasketEXT(35,5,this,119)"  name="checkBox_ext_119_35[]"  id="checkBox_normal_20" value="EXT_Fri" />
                                      Book</td>
                                                                      </tr>
                                  <tr>
                                    <td valign="top" class="tdbookall" style=" padding-left:10px;"><input type="checkbox" onclick="checkBoxEXT_select('16_5,16,17_5,17,18_5,18,19_5,19,20_5,20,',this,35,'EXTALL');"  name="radio" id="checkBox_EXT_ALL_35_119" value="119" />
                                      Book all days</td>
                                  </tr>
                                </table></td>
                            </tr>
                            <tr>
                              <td colspan="4">&nbsp;</td>
                            </tr>
                                                        </td>
                            
                            </tr>
                            
                          </table>
                                                                                                        <table onclick="showtable('Childrens_area_120','Childrens_area_1120','120');" style="background:#3e52a3; font-size: 18px; height: 32px; width:644px;  border-bottom:solid 2px #FFFFFF; line-height: 27px; margin-left:-10px;">
                            <tr>
                              <td style="color:#FFFFFF; cursor:pointer;"><img src="images/add+.png"  alt="" />Noortje Ashworth                                <input type="hidden" name="txt_children_tmp_value_120" id="txt_children_tmp_value_120" value="0"  />
                                <input type="hidden" name="txt_children_tmpEXT_value_120" id="txt_children_tmpEXT_value_120" value="0"  />
                              </td>
                            </tr>
                          </table>
                          <table id="Childrens_area_1120" style="display:none;" >
                            <tr>
                              <td style="font-weight:bold; text-decoration:underline; color:#000000; font-size: 20px;">Book Camp For: Noortje Ashworth </td>
                            </tr>
                          </table>
                                                                              <table id="Childrens_area_120" style=" display:none;" >
                            <tr>
                              <td>                            <tr>
                              <td colspan="4" style="font-size:16px; padding-bottom:5px;">januari camp                                27 Jan 2014 - 31 Jan 2014</td>
                            </tr>
                            <tr>
                              <td colspan="4" align="center" style=" font-size:13px;  	border:#333333 solid 1px;
			-moz-border-radius: 10px; /* Firefox */
			-webkit-border-radius: 10px; /* Safari and Chrome */
			border-radius: 10px; /* Opera 10.5+, future browsers, and now also Internet Explorer 6+ using IE-CSS3 */
			background:#3e52a3; 
		 margin-top:10px;"><table id="children_tbl0" width="620" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:10px;">
                                  <tr>
                                    <td width="174">&nbsp;</td>
                                                                        <td width="89" height="33" align="center" valign="bottom" style="color:#FFFFFF;">Mon 27Jan</td>
                                                                        <td width="89" height="33" align="center" valign="bottom" style="color:#FFFFFF;">Tue 28Jan</td>
                                                                        <td width="89" height="33" align="center" valign="bottom" style="color:#FFFFFF;">Wed 29Jan</td>
                                                                        <td width="89" height="33" align="center" valign="bottom" style="color:#FFFFFF;">Thu 30Jan</td>
                                                                        <td width="89" height="33" align="center" valign="bottom" style="color:#FFFFFF;">Fri 31Jan</td>
                                                                      </tr>
                                  <tr>
                                    <td width="169" class="tdclassf" style="text-align:center;" >Normal Day</td>
                                                                        <td width="89" rowspan="2" align="center" class="tdclasso"><input type="checkbox" onclick="addCamptoBasket(35,10.00,this,'120','120_35','Mon')" name="checkBox_120_35[]" id="checkBox_normal_21" value="Mon" />
                                      Book </td>
                                                                        <td width="89" rowspan="2" align="center" class="tdclasso"><input type="checkbox" onclick="addCamptoBasket(35,10.00,this,'120','120_35','Tues')" name="checkBox_120_35[]" id="checkBox_normal_22" value="Tues" />
                                      Book </td>
                                                                        <td width="89" rowspan="2" align="center" class="tdclasso"><input type="checkbox" onclick="addCamptoBasket(35,10.00,this,'120','120_35','Wed')" name="checkBox_120_35[]" id="checkBox_normal_23" value="Wed" />
                                      Book </td>
                                                                        <td width="89" rowspan="2" align="center" class="tdclasso"><input type="checkbox" onclick="addCamptoBasket(35,10.00,this,'120','120_35','Thu')" name="checkBox_120_35[]" id="checkBox_normal_24" value="Thu" />
                                      Book </td>
                                                                        <td width="89" rowspan="2" align="center" class="tdclasso"><input type="checkbox" onclick="addCamptoBasket(35,10.00,this,'120','120_35','Fri')" name="checkBox_120_35[]" id="checkBox_normal_25" value="Fri" />
                                      Book </td>
                                                                      </tr>
                                  <tr>
                                    <td valign="top" style="background:#FFFFFF;border-bottom:#666666 solid 1px; border-right:#666666 solid 1px; padding-left:10px; border-left:#666666 solid 1px; padding-top:3px; padding-bottom:5px;"><input type="checkbox" name="radio" id="all_select_camps_120_35_CHK" onclick="checkBox_select('21_10.00,21,22_10.00,22,23_10.00,23,24_10.00,24,25_10.00,25,',this,'10.00','60','book_all',35);" value="120" />
                                      <input type="hidden" name="all_select_camps_120" id="all_select_camps_120_35" value="60" />
                                      Book all days</td>
                                  </tr>
                                  <tr>
                                    <td width="169" class="tdextented" style="text-align:center;" >Extended Day (5 extra)</td>
                                                                        <td width="89" rowspan="2" align="center" class="tdextentedr"><input type="checkbox"  onclick="addCamptoBasketEXT(35,5,this,120)"  name="checkBox_ext_120_35[]"  id="checkBox_normal_26" value="EXT_Mon" />
                                      Book</td>
                                                                        <td width="89" rowspan="2" align="center" class="tdextentedr"><input type="checkbox"  onclick="addCamptoBasketEXT(35,5,this,120)"  name="checkBox_ext_120_35[]"  id="checkBox_normal_27" value="EXT_Tues" />
                                      Book</td>
                                                                        <td width="89" rowspan="2" align="center" class="tdextentedr"><input type="checkbox"  onclick="addCamptoBasketEXT(35,5,this,120)"  name="checkBox_ext_120_35[]"  id="checkBox_normal_28" value="EXT_Wed" />
                                      Book</td>
                                                                        <td width="89" rowspan="2" align="center" class="tdextentedr"><input type="checkbox"  onclick="addCamptoBasketEXT(35,5,this,120)"  name="checkBox_ext_120_35[]"  id="checkBox_normal_29" value="EXT_Thu" />
                                      Book</td>
                                                                        <td width="89" rowspan="2" align="center" class="tdextentedr"><input type="checkbox"  onclick="addCamptoBasketEXT(35,5,this,120)"  name="checkBox_ext_120_35[]"  id="checkBox_normal_30" value="EXT_Fri" />
                                      Book</td>
                                                                      </tr>
                                  <tr>
                                    <td valign="top" class="tdbookall" style=" padding-left:10px;"><input type="checkbox" onclick="checkBoxEXT_select('26_5,26,27_5,27,28_5,28,29_5,29,30_5,30,',this,35,'EXTALL');"  name="radio" id="checkBox_EXT_ALL_35_120" value="120" />
                                      Book all days</td>
                                  </tr>
                                </table></td>
                            </tr>
                            <tr>
                              <td colspan="4">&nbsp;</td>
                            </tr>
                                                        </td>
                            
                            </tr>
                            
                          </table>
                                                    </td>
                          
                          </tr>
                          
                                                  </table>
                        </td>
                        
                        </tr>
                        
                        <tr>
                        
                        <td colspan="3">
                        
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background: none repeat scroll 0% 0% rgb(244, 235, 34); border-bottom: 2px solid rgb(102, 102, 102); " >
                          <tr>
                            <td width="11%" align="center" style=" font-weight:normal; padding:13px 0 13px 20px;"><a href="#"><img src="images/add+.png" onclick="return addChild();" alt="" /></a></td>
                            <td width="50%" style="font-size:18px; height:32px; line-height:27px; "><a href="#" style="color:#333333;" onclick="return addChild();">Add a friend</a> who isnt registered</td>
                            <td width="39%"><div id="addfrndmsg" style="color:#000; font-size:12px;">you have <span>not selected</span> to add friend</div></td>
                          </tr>
                                                                              <tr>
                          
                          <td colspan="3">
                          
                          <table >
                            <tr id="new_child" style=" display:none;">
                            
                            <td>
                            
                            <table  id="newtbl123"  width="300" border="0" align="center" cellpadding="0" cellspacing="0" style=" display:none; ">
                              <tr>
                                <td colspan="3" style="border-bottom: #999999 dotted 2px; padding:0px 0 15px 0;"></td>
                              </tr>
                              <tr>
                                <td width="140" >Forename:</td>
                                <td width="225"><input name="txtfirstname" class="afnamebg" type="text" value="" /></td>
                                <td width="302">&nbsp;</td>
                              </tr>
                              <tr>
                                <td width="110">Surname:</td>
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
                                      <td width="101"><input type="hidden" name="add_children" id="add_children" value="0" />
                                        <input type="hidden" name="parent_id" value="25" />
                                        <input type="hidden" name="related_id" value="0" />
                                      </td>
                                    </tr>
                                  </table></td>
                              </tr>
                                                            <table id="Childrens_area_NEWFIEND" style=" " >
                                <tr>
                                  <td><input type="hidden" name="txt_children_tmp_value_NEWFIEND" id="txt_children_tmp_value_NEWFIEND" value="0"  />
                                    <input type="hidden" name="txt_children_tmpEXT_value_NEWFIEND" id="txt_children_tmpEXT_value_NEWFIEND" value="0"  />
                                                                    <tr>
                                  <td colspan="4" style="font-size:16px; padding-bottom:5px;">januari camp                                    27 Jan 2014 - 31 Jan 2014</td>
                                </tr>
                                <tr>
                                  <td colspan="4" align="center" style=" font-size:13px;  	border:#333333 solid 1px;
			-moz-border-radius: 10px; /* Firefox */
			-webkit-border-radius: 10px; /* Safari and Chrome */
			border-radius: 10px; /* Opera 10.5+, future browsers, and now also Internet Explorer 6+ using IE-CSS3 */
			background:#3e52a3; 
		 margin-top:10px;"><table id="children_tbl0" width="620" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:10px;">
                                      <tr>
                                        <td width="174">&nbsp;</td>
                                                                                <td width="89" height="33" align="center" valign="bottom" style="color:#FFFFFF;">Mon 27Jan</td>
                                                                                <td width="89" height="33" align="center" valign="bottom" style="color:#FFFFFF;">Tue 28Jan</td>
                                                                                <td width="89" height="33" align="center" valign="bottom" style="color:#FFFFFF;">Wed 29Jan</td>
                                                                                <td width="89" height="33" align="center" valign="bottom" style="color:#FFFFFF;">Thu 30Jan</td>
                                                                                <td width="89" height="33" align="center" valign="bottom" style="color:#FFFFFF;">Fri 31Jan</td>
                                                                              </tr>
                                      <tr>
                                        <td width="169" class="tdclassf"  style="text-align:center;" >Normal Day</td>
                                                                                <td width="89" rowspan="2" align="center" class="tdclasso"><input type="checkbox" onclick="addCamptoBasketFriend(35,10.00,this,'NEWFIEND','35NEWFIEND','Mon')" name="checkBox_NEWFIEND_35[]" id="checkBox_normal_31"  value="Mon" />
                                          Book </td>
                                                                                <td width="89" rowspan="2" align="center" class="tdclasso"><input type="checkbox" onclick="addCamptoBasketFriend(35,10.00,this,'NEWFIEND','35NEWFIEND','Tues')" name="checkBox_NEWFIEND_35[]" id="checkBox_normal_32"  value="Tues" />
                                          Book </td>
                                                                                <td width="89" rowspan="2" align="center" class="tdclasso"><input type="checkbox" onclick="addCamptoBasketFriend(35,10.00,this,'NEWFIEND','35NEWFIEND','Wed')" name="checkBox_NEWFIEND_35[]" id="checkBox_normal_33"  value="Wed" />
                                          Book </td>
                                                                                <td width="89" rowspan="2" align="center" class="tdclasso"><input type="checkbox" onclick="addCamptoBasketFriend(35,10.00,this,'NEWFIEND','35NEWFIEND','Thu')" name="checkBox_NEWFIEND_35[]" id="checkBox_normal_34"  value="Thu" />
                                          Book </td>
                                                                                <td width="89" rowspan="2" align="center" class="tdclasso"><input type="checkbox" onclick="addCamptoBasketFriend(35,10.00,this,'NEWFIEND','35NEWFIEND','Fri')" name="checkBox_NEWFIEND_35[]" id="checkBox_normal_35"  value="Fri" />
                                          Book </td>
                                                                              </tr>
                                      <tr>
                                        <td valign="top" style="background:#FFFFFF;border-bottom:#666666 solid 1px; border-right:#666666 solid 1px;  padding-left:10px;border-left:#666666 solid 1px; padding-top:3px; padding-bottom:5px;"><input type="checkbox"   name="radio" id="all_select_camps_35NEWFIEND_CHK" onclick="checkBox_selectFriend('31_10.00,31,32_10.00,32,33_10.00,33,34_10.00,34,35_10.00,35,',this,'10.00','60','book_all',35);" value="NEWFIEND" />
                                          <input type="hidden" name="all_select_camps_NEWFIEND" id="all_select_camps_35NEWFIEND" value="60" />
                                          Book all days</td>
                                      </tr>
                                      <tr>
                                        <td width="169" class="tdextented" style="text-align:center;" >Extended Day (5 extra)</td>
                                                                                <td width="89" rowspan="2" align="center" class="tdextentedr"><input type="checkbox"  onclick="addCamptoBasketEXTFriend(35,5,this,'NEWFIEND')" name="checkBox_ext_NEWFIEND_35[]" id="checkBox_normal_36"  value="EXT_Mon" />
                                          Book</td>
                                                                                <td width="89" rowspan="2" align="center" class="tdextentedr"><input type="checkbox"  onclick="addCamptoBasketEXTFriend(35,5,this,'NEWFIEND')" name="checkBox_ext_NEWFIEND_35[]" id="checkBox_normal_37"  value="EXT_Tues" />
                                          Book</td>
                                                                                <td width="89" rowspan="2" align="center" class="tdextentedr"><input type="checkbox"  onclick="addCamptoBasketEXTFriend(35,5,this,'NEWFIEND')" name="checkBox_ext_NEWFIEND_35[]" id="checkBox_normal_38"  value="EXT_Wed" />
                                          Book</td>
                                                                                <td width="89" rowspan="2" align="center" class="tdextentedr"><input type="checkbox"  onclick="addCamptoBasketEXTFriend(35,5,this,'NEWFIEND')" name="checkBox_ext_NEWFIEND_35[]" id="checkBox_normal_39"  value="EXT_Thu" />
                                          Book</td>
                                                                                <td width="89" rowspan="2" align="center" class="tdextentedr"><input type="checkbox"  onclick="addCamptoBasketEXTFriend(35,5,this,'NEWFIEND')" name="checkBox_ext_NEWFIEND_35[]" id="checkBox_normal_40"  value="EXT_Fri" />
                                          Book</td>
                                                                              </tr>
                                      <tr>
                                        <td valign="top" class="tdbookall" style=" padding-left:10px;"><input type="checkbox" onclick="checkBoxEXT_selectFriend('36_5,36,37_5,37,38_5,38,39_5,39,40_5,40,',this,35,'EXTALL');"  name="radio" id="checkBox_EXT_ALL_35_NEWFIEND" value="NEWFIEND"  />
                                          Book all days</td>
                                      </tr>
                                    </table></td>
                                </tr>
                                <tr>
                                  <td colspan="4">&nbsp;</td>
                                </tr>
                                                                </td>
                                
                                </tr>
                                
                              </table>
                                                          </table>
                            </td>
                            
                            </tr>
                            
                          </table>
                          </td>
                          
                          </tr>
                          
                                                  </table>
                        </td>
                        
                        </tr>
                        
                      </table>
                    </div>
                    <div class="TabbedPanelsContent1" style="display:none;">Content 2</div>
                  </div>
                </div>
                <div class="c1"></div>
              </div>
              <div class="bottomblock">
                <input type="hidden" name="txttotal_price" id="txttotal_price" />
                <div class="total" id="total_price1">Total Charge: &pound;0.00</div>
                <div class="c1"></div>
                <div align="right" style="color:#fff;">Discounts will be show on the next page</div>
                <div class="oncart11" style="display:none;">Update Cart</div>
                <div class="oncart1">
                  <input type="hidden" name="txt_children_tmp_1" id="txt_children_tmp_1" value="0" />
                  <input type="hidden" name="txt_children_tmp_2" id="txt_children_tmp_2" value="0" />
                  <input type="hidden" name="txt_children_tmp_3" id="txt_children_tmp_3" value="0" />
                  <input type="submit" style=" height:40px; cursor:pointer;color: rgb(0, 0, 0); text-decoration: none; border: 0px none; background: none repeat scroll 0% 0% transparent; font-weight: bold; font-size: 16px;" value="Confirm Booking" />
                </div>
              </div>
              <div class="c1"></div>
            </div>
          </form>
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
//var TabbedPanels2 = new Spry.Widget.TabbedPanels("TabbedPanels2",0);
//-->
</script>
</body>
</html>
