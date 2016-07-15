<?php /*%%SmartyHeaderCode:391669624578923e60ad3c5-48821883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '113bac4fc458d69a38b34f4a0495a384cbdfcc3c' => 
    array (
      0 => '/home1/salik/public_html/Salik/admin/templates/drivers.tpl',
      1 => 1467682414,
      2 => 'file',
    ),
    '8dd430c9428914f31d0380d49ba8ae9028e7dc82' => 
    array (
      0 => '/home1/salik/public_html/Salik/admin/templates/header.tpl',
      1 => 1467084638,
      2 => 'file',
    ),
    '7e54ed9548251f6b5798095c2e65a159dd74f5de' => 
    array (
      0 => '/home1/salik/public_html/Salik/admin/templates/nav.tpl',
      1 => 1467046222,
      2 => 'file',
    ),
    'd5a7af4fd6b45f705382bdd4d4467f1c8afec814' => 
    array (
      0 => '/home1/salik/public_html/Salik/admin/configs/ads_en.conf',
      1 => 1335856588,
      2 => 'file',
    ),
    '2c8efa95729f8b575b163dbf922eb68676f94006' => 
    array (
      0 => '/home1/salik/public_html/Salik/admin/templates/footer.tpl',
      1 => 1467046168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '391669624578923e60ad3c5-48821883',
  'variables' => 
  array (
    'prefix' => 0,
    'driver_id' => 0,
    'times' => 0,
    'mode' => 0,
    'fullname' => 0,
    'username' => 0,
    'password' => 0,
    'selectedcar_id' => 0,
    'selectedcar_name' => 0,
    'selectedcar_type' => 0,
    'selectedcar_number' => 0,
    'cars' => 0,
    'data' => 0,
    'totalDriversNumber' => 0,
    'drivers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_578923e6218337_61169501',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578923e6218337_61169501')) {function content_578923e6218337_61169501($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Salik</title>
	<link type="text/css" rel="stylesheet" href="css/style.css"/>
	<link rel="shortcut icon" type="image/png" href="images/logo.png">
	 
	<link type="text/css" rel="stylesheet" href="css/ui-lightness/jquery-ui-1.8.23.custom.css" />
	<!--<link type="text/css" rel="stylesheet" href="css/jquery.ui.core.css" />
	<link type="text/css" rel="stylesheet" href="css/jquery.ui.theme.css" />!-->
	<link type="text/css" rel="stylesheet" href="css/jquery.ui.selectmenu.css" />
	<link type="text/css" rel="stylesheet" href="css/jquery.ui.tinytbl.css" />
<!--
    <link type="text/css" rel="stylesheet" href="css/ui.jqgrid.css" />
-->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.js"></script>
	<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.8.23.custom.min.js"></script>
	
	
	<script type="text/javascript" src="js/jquery.ui.selectmenu.js"></script>
	<script type="text/javascript" src="js/jquery.ui.tinytbl.js"></script>
<!--
    <script type="text/javascript" src="js/grid.locale-en.js"></script>
    <script type="text/javascript" src="js/jquery.jqGrid.min.js"></script>
-->

	<!--[if IE 7]>
		<link rel="stylesheet" href="css/ie7.css" type="text/css" />
	<![endif]-->
	
</head>
<body id="dashboard" >
		
	<div class="page">
		<!-- Here Comes Page's Conetent!-->
		<div class="title">
		 	
		 	
		</div>
<!-- header -->
<div class="header">
	
	<ul>
		<li style="width:110px;">	<a href="./home.php">HOME</a></li>
		<li style="width:160px;" class="selected" ><a href="./drivers.php?times=1">DRIVERS</a></li>
		<li style="width:120px;"> <a href="./orders.php?times=1">ODERS</a></li>
        <li style="width:100px;"> <a href="./car.php?times=1">CARS</a></li>
                
        <li style="width:130px;"> <a href="./logout.php">LOGOUT</a></li>
			
	</ul>
</div>
<script>

	function driverEdit(id,times){
		     
			location.href="drivers.php?action=mode&driver_id="+id+"&times="+times;
		
	}
	
	function viewMore(times){
		    times++;
			location.href="drivers.php?times="+times;
		
	}
   
    function submit(){
		  var car_id = $('select#car_numbers').val();   
         
		  document.driver_info_form.car_in.value=car_id;
                  if(car_id==0){
                     alert("Please choose car!"); 
                 }else{
                    document.driver_info_form.submit();
                 }
         
	}
	function driverDelete(id,times){
		 if(confirm("Are you sure you want to delete this driver?") == true){
			location.href="drivers.php?action=driver_delete&driver_id="+id+"&times="+times;
		}else{
			return;
		}
	}
</script>
<div class="body">
</br>
	<h2 class="heading2">edit drivers</h2>
	<div id="div_seperate" class="div_seperate"></div>
	<div id="div_user_edit" >
	
		<div class="div_form" >
			<form action="drivers.php?action=driver_info&driver_id=&times=1" name="driver_info_form" id="driver_info_form"  method="post" enctype="multipart/form-data"autocomplete="off" >
				<input type="hidden"name="mode"value="Add"/>
                <input type="hidden" name="car_in" id="car_in" value=""/>
				<p style="margin-left:20px;">
				Name:<input type="text" id="fullname" name="fullname" value="" class="input_data" style="width:250px;" placeholder="Enter FullName"/>
				Username:<input type="text" id="username1" name="username" value="" class="input_data" style="width:250px;" placeholder="Enter Username" />
				Password:<input type="password" id="password1" name="password" value="" class="input_data" style="width:250px;" placeholder="Enter Password:*********"/>
				Car:<select id="car_numbers" style="width:400px;">
					<option value="" Selected>Name:[XXX] Type:[YYY] Number:[00000000]</option>
													<option value='1'>Name:[BMW(Black) 2222] Type:[VIP(QAR 150)] Number:[4294961345]</option>							
													<option value='2'>Name:[AUdi(White)] Type:[VVIP(QAR 250)] Number:[4294967234]</option>							
													<option value='3'>Name:[BMW(Gray)] Type:[SUV(QAR 80)] Number:[4294967293]</option>							
													<option value='4'>Name:[BMW(Black)] Type:[SUV(QAR 80)] Number:[4294967295]</option>							
													<option value='5'>Name:[BMW(Black)] Type:[VIP(QAR 150)] Number:[432623543]</option>							
													<option value='7'>Name:[BMW(Gray)] Type:[Economy(QAR 30)] Number:[1324779]</option>							
													<option value='8'>Name:[BMW(Black)] Type:[Economy(QAR 30)] Number:[52345423]</option>							
													<option value='9'>Name:[BMW(Black)] Type:[(QAR 20)] Number:[234562435]</option>							
													<option value='10'>Name:[VW(Blue)] Type:[VVIP] Number:[89220]</option>							
													<option value='11'>Name:[Toyota] Type:[B] Number:[9393]</option>							
												
					</select>
  
				<a href="javascript: submit();" id = "btnsave" class="view" style="font-size:1.1em;margin-left:30px;width:100px;">Add</a>
				
				</p>
			</form>
		</div>	
	</div>
	<h2 class="heading2">Drivers Data</h2>
	<div id="div_seperate" class="div_seperate"></div>
		
		<div id="div_tbl_user" class="div_tbl_user" style="margin:0 auto;">

			<h2 style="margin-left:1350px;margin-bottom:-15px;color:#ffffff;">Number of Drivers : 9</h2>
			<table id="users" class="stats" border="1" border-spacing="1px"  >
					<tbody style="width:100%;">
					<tr class="statshead" style="width:100%;">
						<td style="width:18%;">
							Name
						</td>
						<td style="width:18%;">
							ID#
						</td>
                        
						 <td style="width:18%;">
							Car ID#
						</td>
						<td style="width:18%;">
							Username
						</td>
						<td style="width:18%;">
							Password
						</td>
                       
                       
						<td style="width:10%;">
							Modify
						</td>
						
												
											
					</tr>
											<tr class="statsrow">
                        	<td>
								Hamard333
							</td>
							<td>
								123456789
							</td>
							<td>
								102340340
							</td>
							<td>
								hamard123
							</td>
							
							<td>
								harmard123
							</td>
                            
                            
							<td>
							<div class="modifyDiv">
								<ul >
									<li ><a href="javascript: driverEdit(1,1);"class="view">edit</a></li>|
									
									<li><a href="javascript:driverDelete(1,1);"class="view">delete</a></li>
								
								</ul>
							</div>
								
							</td>
							
							
							
						</tr>
											<tr class="statsrow">
                        	<td>
								ManSour
							</td>
							<td>
								233456789
							</td>
							<td>
								128372827
							</td>
							<td>
								mansour234
							</td>
							
							<td>
								mansour234
							</td>
                            
                            
							<td>
							<div class="modifyDiv">
								<ul >
									<li ><a href="javascript: driverEdit(3,1);"class="view">edit</a></li>|
									
									<li><a href="javascript:driverDelete(3,1);"class="view">delete</a></li>
								
								</ul>
							</div>
								
							</td>
							
							
							
						</tr>
											<tr class="statsrow">
                        	<td>
								Mozabint
							</td>
							<td>
								234132432
							</td>
							<td>
								100032031
							</td>
							<td>
								mozabint134
							</td>
							
							<td>
								mozabint134
							</td>
                            
                            
							<td>
							<div class="modifyDiv">
								<ul >
									<li ><a href="javascript: driverEdit(4,1);"class="view">edit</a></li>|
									
									<li><a href="javascript:driverDelete(4,1);"class="view">delete</a></li>
								
								</ul>
							</div>
								
							</td>
							
							
							
						</tr>
										</tbody>
						
				</table>
				<div style="width:120px;margin:0 auto;">
				 	<a href="javascript:viewMore(1);"class="view">View More</a>
				</div>
				</br>
		</div>
	
</div>
</div>
		<div class="footer">
				<ul>
				
					<li ><a href="home.php">HOME</a></li>
					<li><a href="drivers.php?times=1">DRIVERS</a></li>
					<li> <a href="orders.php?times=1">ODERS</a></li>
					<li> <a href="car.php?times=1">CARS</a></li>
							
					<li> <a href="logout.php">LOGOUT</a></li>
					
				</ul>
				</br>
				</br>
				<p>&#169; Copyright &#169; 2016.</p>
			</div>
		</div>
	</body>
</html>  

<?php }} ?>