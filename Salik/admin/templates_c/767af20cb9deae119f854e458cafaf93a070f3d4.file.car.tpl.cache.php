<?php /* Smarty version Smarty-3.1.11, created on 2016-07-15 13:01:25
         compiled from "/home1/salik/public_html/Salik/admin/templates/car.tpl" */ ?>
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
  ),
  'nocache_hash' => '486786258578924f5a17336-04134218',
  'function' => 
  array (
  ),
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
  'unifunc' => 'content_578924f5adac49_94294354',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578924f5adac49_94294354')) {function content_578924f5adac49_94294354($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['prefix']->value)."header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>"HomePage",'bodyid'=>"dashboard"), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['prefix']->value)."nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('currentnav'=>"cars"), 0);?>

<?php  $_config = new Smarty_Internal_Config("ads_en.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
			<form action="car.php?action=car_info&car_id=<?php echo $_smarty_tpl->tpl_vars['car_id']->value;?>
&times=<?php echo $_smarty_tpl->tpl_vars['times']->value;?>
" name="driver_info_form" id="driver_info_form"  method="post" enctype="multipart/form-data" autocomplete="off">
				<input type="hidden"name="mode"value="<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
"/>
				<p style="margin-left:20px;">
				Name(Color):<input type="text" id="carname" name="carname" value="<?php echo $_smarty_tpl->tpl_vars['carname']->value;?>
" class="input_data" style="margin-right:20px;"placeholder="Enter Carname:BMW(Black)"/>
				Plate Number:<input type="number" id="paltenumber" name="platenumber" value="<?php echo $_smarty_tpl->tpl_vars['platenumber']->value;?>
" class="input_data" placeholder="Enter Plate Number!" />
						
				Class:<input type="text" id="class" name="class" value="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" class="input_data" placeholder="Enter Car Class!"/>
				<input id="btnsave" type="submit" class="submit" value="<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
"/>
				
				</p>
			</form>
		</div>	
	</div>
	<h2 class="heading2">Cars Data</h2>
	<div id="div_seperate" class="div_seperate"></div>
		
		<div id="div_tbl_user" class="div_tbl_user" style="margin:0 auto;">

			<h2 style="margin-left:1350px;margin-bottom:-15px;color:#ffffff;">Number of Cars : <?php echo $_smarty_tpl->tpl_vars['totalCarsNumber']->value;?>
</h2>
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
					<?php  $_smarty_tpl->tpl_vars["data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["data"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["data"]->key => $_smarty_tpl->tpl_vars["data"]->value){
$_smarty_tpl->tpl_vars["data"]->_loop = true;
?>
						<tr class="statsrow">
                        	<td>
								<?php echo $_smarty_tpl->tpl_vars['data']->value['car_name_color'];?>

							</td>
							<td>
								<?php echo $_smarty_tpl->tpl_vars['data']->value['car_number_id'];?>

							</td>
							<td>
								<?php echo $_smarty_tpl->tpl_vars['data']->value['car_type'];?>

							</td>
							<td>
								<?php echo $_smarty_tpl->tpl_vars['data']->value['car_plate_number'];?>

							</td>
							
							<td>
							<div class="modifyDiv">
								<ul >
									<li ><a href="javascript: carEdit(<?php echo $_smarty_tpl->tpl_vars['data']->value['car_id'];?>
,<?php echo $_smarty_tpl->tpl_vars['times']->value;?>
);"class="view">edit</a></li>|
									
									<li><a href="javascript:carDelete(<?php echo $_smarty_tpl->tpl_vars['data']->value['car_id'];?>
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