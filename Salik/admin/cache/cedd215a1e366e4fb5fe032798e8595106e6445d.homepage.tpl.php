<?php /*%%SmartyHeaderCode:51097120557892d8434d669-27371226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cedd215a1e366e4fb5fe032798e8595106e6445d' => 
    array (
      0 => '/home1/salik/public_html/Salik/admin/templates/homepage.tpl',
      1 => 1466943760,
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
  'nocache_hash' => '51097120557892d8434d669-27371226',
  'variables' => 
  array (
    'prefix' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57892d84431e89_33186139',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57892d84431e89_33186139')) {function content_57892d84431e89_33186139($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
		<li style="width:110px;" class="selected" >	<a href="./home.php">HOME</a></li>
		<li style="width:160px;"><a href="./drivers.php?times=1">DRIVERS</a></li>
		<li style="width:120px;"> <a href="./orders.php?times=1">ODERS</a></li>
        <li style="width:100px;"> <a href="./car.php?times=1">CARS</a></li>
                
        <li style="width:130px;"> <a href="./logout.php">LOGOUT</a></li>
			
	</ul>
</div>
<!-- content -->

<div class="body">
    <div class="featured">
    <h1>SALIK ADMIN</h1>
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