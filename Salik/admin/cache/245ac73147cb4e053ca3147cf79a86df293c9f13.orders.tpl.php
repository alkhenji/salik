<?php /*%%SmartyHeaderCode:386369579577fdbbd633e16-16016879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '245ac73147cb4e053ca3147cf79a86df293c9f13' => 
    array (
      0 => '/home/oczxbfkm/public_html/Salik/admin/templates/orders.tpl',
      1 => 1467561638,
      2 => 'file',
    ),
    'bd8afcc598f0833c60e4e47507ba6bd7228422dd' => 
    array (
      0 => '/home/oczxbfkm/public_html/Salik/admin/templates/header.tpl',
      1 => 1467084638,
      2 => 'file',
    ),
    'd51812067319d320321f4b60130093cb4ca60520' => 
    array (
      0 => '/home/oczxbfkm/public_html/Salik/admin/templates/nav.tpl',
      1 => 1467046222,
      2 => 'file',
    ),
    'da59802b52b9c3405c035c8bf32b9a506a02ba49' => 
    array (
      0 => '/home/oczxbfkm/public_html/Salik/admin/configs/ads_en.conf',
      1 => 1335856588,
      2 => 'file',
    ),
    '178b6cc7f2eaf99fd4f27d446b3ee6fbb228d757' => 
    array (
      0 => '/home/oczxbfkm/public_html/Salik/admin/templates/footer.tpl',
      1 => 1467046168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '386369579577fdbbd633e16-16016879',
  'variables' => 
  array (
    'prefix' => 0,
    'totalOrderNumber' => 0,
    'totalPendingNumber' => 0,
    'totalInprogressNumber' => 0,
    'totalCancelledNumber' => 0,
    'totalCompletedNumber' => 0,
    'orders' => 0,
    'data' => 0,
    'times' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_577fdbbd6e7d08_96007613',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577fdbbd6e7d08_96007613')) {function content_577fdbbd6e7d08_96007613($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
		<li style="width:120px;" class="selected" > <a href="./orders.php?times=1">ODERS</a></li>
        <li style="width:100px;"> <a href="./car.php?times=1">CARS</a></li>
                
        <li style="width:130px;"> <a href="./logout.php">LOGOUT</a></li>
			
	</ul>
</div>
<script>

	function orderEdit(id,times){
            
            var x = document.getElementById(id).value;
           
		     if(confirm("Are you sure you want to change this order?") == true){
			location.href="orders.php?action=edit&order_id="+id+"&times="+times+"&order_state="+x;
		    }else{
			return;
		}
	}
	
	function viewMore(times){
		    times++;
			location.href="orders.php?times="+times;
		
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
	<h2 class="heading2">Summary of Orders</h2>
	<div id="div_seperate" class="div_seperate"></div>
	<div id="div_order_edit" class="div_order_edit">
        <ul >
            <li ><h2>19</h2><h3>Orders</h3></li>
            <li><h2>7</h2><h3>Pending</h3></li>
            <li ><h2>3</h2><h3>Inprogress</h3></li>
            <li ><h2>5</h2><h3>Cancelled</h3></li>
            <li ><h2>4</h2><h3>Completed</h3></li>

		</ul>
       
	</div>
   
	<h2 class="heading2">Orders Data</h2>
	<div id="div_seperate" class="div_seperate"></div>
		
		<div id="div_tbl_user" class="div_tbl_user" style="margin:0 auto;">

			<table id="users" class="stats" border="1" border-spacing="1px"  >
					<tbody style="width:100%;">
					<tr class="statshead" style="width:100%;">
						<td style="width:22%;">
							Date/Time
						</td>
						<td style="width:22%;">
							Client#
						</td>
                        
						 <td style="width:22%;">
							Driver ID
						</td>
						<td style="width:22%;">
							Status
						</td>
						                      
                       
						<td style="width:12%;">
							Modify
						</td>
						
												
											
					</tr>
											<tr class="statsrow">
                        	<td>
								2016-06-14 04:35:55
							</td>
							<td>
								1
							</td>
							<td>
								3
							</td>
							<td><select id="1" class="status" disabled  >
                                    <option value="4" Selected>
                                                                                                                                                                  Cancelled                                          
                                        </option>
                                    <option value='1'>Pending</option>
                                    <option value='2'>Inprogress</option>
                                    <option value='3'>Completed</option>	
                                    <option value='4'>Cancelled</option>						
                                    					
                                </select>
							</td>
							
							<td>
							<div class="modifyDiv">
								<ul >
									<li ><a href="javascript: orderEdit(1,1);"class="view"> - </a></li>
									
																
								</ul>
							</div>
								
							</td>
							
							
							
						</tr>
											<tr class="statsrow">
                        	<td>
								2016-06-14 06:08:08
							</td>
							<td>
								2
							</td>
							<td>
								0
							</td>
							<td><select id="2" class="status" >
                                    <option value="2" Selected>
                                                                                  Inprogress                                                                                                                         
                                        </option>
                                    <option value='1'>Pending</option>
                                    <option value='2'>Inprogress</option>
                                    <option value='3'>Completed</option>	
                                    <option value='4'>Cancelled</option>						
                                    					
                                </select>
							</td>
							
							<td>
							<div class="modifyDiv">
								<ul >
									<li ><a href="javascript: orderEdit(2,1);"class="view">edit</a></li>
									
																
								</ul>
							</div>
								
							</td>
							
							
							
						</tr>
											<tr class="statsrow">
                        	<td>
								2016-06-14 04:52:41
							</td>
							<td>
								3
							</td>
							<td>
								1
							</td>
							<td><select id="3" class="status" >
                                    <option value="1" Selected>
                                          Pending                                                                                                                                                                 
                                        </option>
                                    <option value='1'>Pending</option>
                                    <option value='2'>Inprogress</option>
                                    <option value='3'>Completed</option>	
                                    <option value='4'>Cancelled</option>						
                                    					
                                </select>
							</td>
							
							<td>
							<div class="modifyDiv">
								<ul >
									<li ><a href="javascript: orderEdit(3,1);"class="view">edit</a></li>
									
																
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