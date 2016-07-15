<?php /*%%SmartyHeaderCode:80209056457892bfc2aa974-29590424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fadf7bc394bce9968871bc85d4e83eef9ad5fff' => 
    array (
      0 => '/home1/salik/public_html/saladmin/admin/templates/login.tpl',
      1 => 1467047132,
      2 => 'file',
    ),
    '767a012c5baab350ad831530ddc019be85a9e58d' => 
    array (
      0 => '/home1/salik/public_html/saladmin/admin/templates/header.tpl',
      1 => 1467084638,
      2 => 'file',
    ),
    '21c2ea62cbef27dacae5b271f0ecaa4c54169ebd' => 
    array (
      0 => '/home1/salik/public_html/saladmin/admin/templates/nav.tpl',
      1 => 1467046222,
      2 => 'file',
    ),
    '2b5e71204553045279fa8c6a2ca64ab6de3a9772' => 
    array (
      0 => '/home1/salik/public_html/saladmin/admin/configs/ads_en.conf',
      1 => 1335856588,
      2 => 'file',
    ),
    'efa780f497f1798c876ac78aacd282f52e26717b' => 
    array (
      0 => '/home1/salik/public_html/saladmin/admin/templates/footer.tpl',
      1 => 1467046168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80209056457892bfc2aa974-29590424',
  'variables' => 
  array (
    'prefix' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57892bfc4956e0_90075518',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57892bfc4956e0_90075518')) {function content_57892bfc4956e0_90075518($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
<script>
$(window).load(function(){
    location.href = "#openModal";
});
</script>
<div class="body">
    <div class="featured">
    <h1>SALIK ADMIN</h1>
    </div>
    <p class="who">Today!Do you know who winner is?...I think that .........
    </p>
    <div id="openModal" class="modalDialog">
		
									
		<div >
				<form  action="login.php?action=login" id="loginform" method="post" style="margin-left:45px;" autocomplete="off"  > 
				    </br>
                    <p> 
                        <label for="username" class="uname" data-icon="u" style="font-size:1em;color:black;">Username:</label>
                        <input id="adminname" name="adminname" value=""required="required" type="text" placeholder="Username"/>
                    </p>
                    <p> 
                        <label for="password" class="youpasswd" data-icon="p"style="font-size:1em;color:black;">Password : </label>
                        <input id="adminpassword" name="adminpassword" required="required"value="" type="password" placeholder="Password" /> 
                    </p>
                    
                    <p class="keeplogin"style="font-size:0.8em;color:#606061;"> 
                        <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
                        <label for="loginkeeping">Keep me logged in</label>
                    </p>
                  
                    <p > 
                        <input class="btn" type="submit" value="Login" /> 
                    </p>
                    </br>
			</form>								
			
					
											
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