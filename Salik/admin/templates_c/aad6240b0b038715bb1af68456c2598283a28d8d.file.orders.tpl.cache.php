<?php /* Smarty version Smarty-3.1.11, created on 2016-07-15 12:57:03
         compiled from "/home1/salik/public_html/Salik/admin/templates/orders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:750753995578923efe84772-15355724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aad6240b0b038715bb1af68456c2598283a28d8d' => 
    array (
      0 => '/home1/salik/public_html/Salik/admin/templates/orders.tpl',
      1 => 1468595078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '750753995578923efe84772-15355724',
  'function' => 
  array (
  ),
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
  'unifunc' => 'content_578923f000d724_83993755',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578923f000d724_83993755')) {function content_578923f000d724_83993755($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['prefix']->value)."header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>"HomePage",'bodyid'=>"dashboard"), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['prefix']->value)."nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('currentnav'=>"orders"), 0);?>

<?php  $_config = new Smarty_Internal_Config("ads_en.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
            <li ><h2><?php echo $_smarty_tpl->tpl_vars['totalOrderNumber']->value;?>
</h2><h3>Orders</h3></li>
            <li><h2><?php echo $_smarty_tpl->tpl_vars['totalPendingNumber']->value;?>
</h2><h3>Pending</h3></li>
            <li ><h2><?php echo $_smarty_tpl->tpl_vars['totalInprogressNumber']->value;?>
</h2><h3>Inprogress</h3></li>
            <li ><h2><?php echo $_smarty_tpl->tpl_vars['totalCancelledNumber']->value;?>
</h2><h3>Cancelled</h3></li>
            <li ><h2><?php echo $_smarty_tpl->tpl_vars['totalCompletedNumber']->value;?>
</h2><h3>Completed</h3></li>

		</ul>
       
	</div>
   
	<h2 class="heading2">Orders Data</h2>
	<div id="div_seperate" class="div_seperate"></div>
		
		<div id="div_tbl_user" class="div_tbl_user" >

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
					<?php  $_smarty_tpl->tpl_vars["data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["data"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["data"]->key => $_smarty_tpl->tpl_vars["data"]->value){
$_smarty_tpl->tpl_vars["data"]->_loop = true;
?>
						<tr class="statsrow">
                        	<td>
								<?php echo $_smarty_tpl->tpl_vars['data']->value['order_date_time'];?>

							</td>
							<td>
								<?php echo $_smarty_tpl->tpl_vars['data']->value['order_id'];?>

							</td>
							<td>
								<?php echo $_smarty_tpl->tpl_vars['data']->value['driver_id'];?>

							</td>
							<td><select id="<?php echo $_smarty_tpl->tpl_vars['data']->value['order_id'];?>
" class="status"<?php if ($_smarty_tpl->tpl_vars['data']->value['order_state']==3||$_smarty_tpl->tpl_vars['data']->value['order_state']==4){?> disabled <?php }?> >
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['order_state'];?>
" Selected>
                                        <?php if ($_smarty_tpl->tpl_vars['data']->value['order_state']==1){?>  Pending<?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['data']->value['order_state']==2){?>  Inprogress<?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['data']->value['order_state']==3){?>  Completed <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['data']->value['order_state']==4){?>  Cancelled <?php }?>
                                         
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
									<li ><a href="javascript: orderEdit(<?php echo $_smarty_tpl->tpl_vars['data']->value['order_id'];?>
,<?php echo $_smarty_tpl->tpl_vars['times']->value;?>
);"class="view"><?php if ($_smarty_tpl->tpl_vars['data']->value['order_state']==3||$_smarty_tpl->tpl_vars['data']->value['order_state']==4){?> - <?php }else{ ?>edit<?php }?></a></li>
									
																
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


<?php }} ?>