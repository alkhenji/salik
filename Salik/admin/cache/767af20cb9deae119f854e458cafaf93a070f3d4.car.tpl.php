<?php /*%%SmartyHeaderCode:486786258578924f5a17336-04134218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '767af20cb9deae119f854e458cafaf93a070f3d4' => 
    array (
      0 => '/home1/salik/public_html/Salik/admin/templates/car.tpl',
      1 => 1467047178,
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
  'nocache_hash' => '486786258578924f5a17336-04134218',
  'variables' => 
  array (
    'prefix' => 0,
    'car_id' => 0,
    'times' => 0,
    'mode' => 0,
    'carname' => 0,
    'platenumber' => 0,
    'class' => 0,
    'totalCarsNumber' => 0,
    'cars' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_578924f5b3e330_87646185',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578924f5b3e330_87646185')) {function content_578924f5b3e330_87646185($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
		<li style="width:160px;"><a href="./drivers.php?times=1">DRIVERS</a></li>
		<li style="width:120px;"> <a href="./orders.php?times=1">ODERS</a></li>
        <li style="width:100px;" class="selected" > <a href="./car.php?times=1">CARS</a></li>
                
        <li style="width:130px;"> <a href="./logout.php">LOGOUT</a></li>
			
	</ul>
</div>
<script>

	function carEdit(id,times){
		     
			location.href="car.php?action=mode&car_id="+id+"&times="+times;
		
	}
	
	function viewMore(times){
		    times++;
			location.href="car.php?times="+times;
		
	}
   
      
	function carDelete(id,times){
		 if(confirm("Are you sure you want to delete this car?") == true){
			location.href="car.php?action=car_delete&car_id="+id+"&times="+times;
		}else{
			return;
		}
	}
</script>
<div class="body">
</br>
	<h2 class="heading2">edit cars</h2>
	<div id="div_seperate" class="div_seperate"></div>
	<div id="div_user_edit" class="user_edit">
	
		<div class="div_form">
			<form action="car.php?action=car_info&car_id=&times=1" name="driver_info_form" id="driver_info_form"  method="post" enctype="multipart/form-data" autocomplete="off">
				<input type="hidden"name="mode"value="Add"/>
				<p style="margin-left:20px;">
				Name(Color):<input type="text" id="carname" name="carname" value="" class="input_data" style="margin-right:20px;"placeholder="Enter Carname:BMW(Black)"/>
				Plate Number:<input type="number" id="paltenumber" name="platenumber" value="" class="input_data" placeholder="Enter Plate Number!" />
						
				Class:<input type="text" id="class" name="class" value="" class="input_data" placeholder="Enter Car Class!"/>
				<input id="btnsave" type="submit" class="submit" value="Add"/>
				
				</p>
			</form>
		</div>	
	</div>
	<h2 class="heading2">Cars Data</h2>
	<div id="div_seperate" class="div_seperate"></div>
		
		<div id="div_tbl_user" class="div_tbl_user" style="margin:0 auto;">

			<h2 style="margin-left:1350px;margin-bottom:-15px;color:#ffffff;">Number of Cars : 10</h2>
			<table id="users" class="stats" border="1" border-spacing="1px"  >
					<tbody style="width:100%;">
					<tr class="statshead" style="width:100%;">
						<td style="width:18%;">
							Name(Color)
						</td>
						<td style="width:18%;">
							ID#
						</td>
                        
						 <td style="width:18%;">
							Class
						</td>
						<td style="width:18%;">
							Plate Number
						</td>
						                     
                       
						<td style="width:10%;">
							Modify
						</td>
						
												
											
					</tr>
											<tr class="statsrow">
                        	<td>
								BMW(Black) 2222
							</td>
							<td>
								102340340
							</td>
							<td>
								VIP(QAR 150)
							</td>
							<td>
								4294961345
							</td>
							
							<td>
							<div class="modifyDiv">
								<ul >
									<li ><a href="javascript: carEdit(1,1);"class="view">edit</a></li>|
									
									<li><a href="javascript:carDelete(1,1);"class="view">delete</a></li>
								
								</ul>
							</div>
								
							</td>
							
							
							
						</tr>
											<tr class="statsrow">
                        	<td>
								AUdi(White)
							</td>
							<td>
								123028382
							</td>
							<td>
								VVIP(QAR 250)
							</td>
							<td>
								4294967234
							</td>
							
							<td>
							<div class="modifyDiv">
								<ul >
									<li ><a href="javascript: carEdit(2,1);"class="view">edit</a></li>|
									
									<li><a href="javascript:carDelete(2,1);"class="view">delete</a></li>
								
								</ul>
							</div>
								
							</td>
							
							
							
						</tr>
											<tr class="statsrow">
                        	<td>
								BMW(Gray)
							</td>
							<td>
								128372827
							</td>
							<td>
								SUV(QAR 80)
							</td>
							<td>
								4294967293
							</td>
							
							<td>
							<div class="modifyDiv">
								<ul >
									<li ><a href="javascript: carEdit(3,1);"class="view">edit</a></li>|
									
									<li><a href="javascript:carDelete(3,1);"class="view">delete</a></li>
								
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