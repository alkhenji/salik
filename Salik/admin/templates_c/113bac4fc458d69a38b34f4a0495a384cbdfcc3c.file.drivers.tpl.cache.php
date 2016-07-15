<?php /* Smarty version Smarty-3.1.11, created on 2016-07-15 12:56:54
         compiled from "/home1/salik/public_html/Salik/admin/templates/drivers.tpl" */ ?>
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
  ),
  'nocache_hash' => '391669624578923e60ad3c5-48821883',
  'function' => 
  array (
  ),
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
  'unifunc' => 'content_578923e61a3a88_33522996',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578923e61a3a88_33522996')) {function content_578923e61a3a88_33522996($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['prefix']->value)."header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>"HomePage",'bodyid'=>"dashboard"), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['prefix']->value)."nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('currentnav'=>"users"), 0);?>

<?php  $_config = new Smarty_Internal_Config("ads_en.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
			<form action="drivers.php?action=driver_info&driver_id=<?php echo $_smarty_tpl->tpl_vars['driver_id']->value;?>
&times=<?php echo $_smarty_tpl->tpl_vars['times']->value;?>
" name="driver_info_form" id="driver_info_form"  method="post" enctype="multipart/form-data"autocomplete="off" >
				<input type="hidden"name="mode"value="<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
"/>
                <input type="hidden" name="car_in" id="car_in" value=""/>
				<p style="margin-left:20px;">
				Name:<input type="text" id="fullname" name="fullname" value="<?php echo $_smarty_tpl->tpl_vars['fullname']->value;?>
" class="input_data" style="width:250px;" placeholder="Enter FullName"/>
				Username:<input type="text" id="username1" name="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" class="input_data" style="width:250px;" placeholder="Enter Username" />
				Password:<input type="password" id="password1" name="password" value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
" class="input_data" style="width:250px;" placeholder="Enter Password:*********"/>
				Car:<select id="car_numbers" style="width:400px;">
					<option value="<?php echo $_smarty_tpl->tpl_vars['selectedcar_id']->value;?>
" Selected>Name:[<?php echo $_smarty_tpl->tpl_vars['selectedcar_name']->value;?>
] Type:[<?php echo $_smarty_tpl->tpl_vars['selectedcar_type']->value;?>
] Number:[<?php echo $_smarty_tpl->tpl_vars['selectedcar_number']->value;?>
]</option>
						<?php  $_smarty_tpl->tpl_vars["data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["data"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["data"]->key => $_smarty_tpl->tpl_vars["data"]->value){
$_smarty_tpl->tpl_vars["data"]->_loop = true;
?>
							<option value='<?php echo $_smarty_tpl->tpl_vars['data']->value['car_id'];?>
'>Name:[<?php echo $_smarty_tpl->tpl_vars['data']->value['car_name_color'];?>
] Type:[<?php echo $_smarty_tpl->tpl_vars['data']->value['car_type'];?>
] Number:[<?php echo $_smarty_tpl->tpl_vars['data']->value['car_plate_number'];?>
]</option>							
						<?php } ?>						
					</select>
  
				<a href="javascript: submit();" id = "btnsave" class="view" style="font-size:1.1em;margin-left:30px;width:100px;"><?php if ($_smarty_tpl->tpl_vars['mode']->value=='Add'){?>Add<?php }else{ ?>Save<?php }?></a>
				
				</p>
			</form>
		</div>	
	</div>
	<h2 class="heading2">Drivers Data</h2>
	<div id="div_seperate" class="div_seperate"></div>
		
		<div id="div_tbl_user" class="div_tbl_user" style="margin:0 auto;">

			<h2 style="margin-left:1350px;margin-bottom:-15px;color:#ffffff;">Number of Drivers : <?php echo $_smarty_tpl->tpl_vars['totalDriversNumber']->value;?>
</h2>
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
					<?php  $_smarty_tpl->tpl_vars["data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["data"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['drivers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["data"]->key => $_smarty_tpl->tpl_vars["data"]->value){
$_smarty_tpl->tpl_vars["data"]->_loop = true;
?>
						<tr class="statsrow">
                        	<td>
								<?php echo $_smarty_tpl->tpl_vars['data']->value['driver_fullname'];?>

							</td>
							<td>
								<?php echo $_smarty_tpl->tpl_vars['data']->value['driver_number_id'];?>

							</td>
							<td>
								<?php echo $_smarty_tpl->tpl_vars['data']->value['car_number_id'];?>

							</td>
							<td>
								<?php echo $_smarty_tpl->tpl_vars['data']->value['driver_name'];?>

							</td>
							
							<td>
								<?php echo $_smarty_tpl->tpl_vars['data']->value['driver_password'];?>

							</td>
                            
                            
							<td>
							<div class="modifyDiv">
								<ul >
									<li ><a href="javascript: driverEdit(<?php echo $_smarty_tpl->tpl_vars['data']->value['driver_id'];?>
,<?php echo $_smarty_tpl->tpl_vars['times']->value;?>
);"class="view">edit</a></li>|
									
									<li><a href="javascript:driverDelete(<?php echo $_smarty_tpl->tpl_vars['data']->value['driver_id'];?>
,<?php echo $_smarty_tpl->tpl_vars['times']->value;?>
);"class="view">delete</a></li>
								
								</ul>
							</div>
								
							</td>
							
							
							
						</tr>
					<?php } ?>
					</tbody>
						
				</table>
				<div style="width:120px;margin:0 auto;">
				 	<a href="javascript:viewMore(<?php echo $_smarty_tpl->tpl_vars['times']->value;?>
);"class="view">View More</a>
				</div>
				</br>
		</div>
	
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['prefix']->value)."footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<?php }} ?>