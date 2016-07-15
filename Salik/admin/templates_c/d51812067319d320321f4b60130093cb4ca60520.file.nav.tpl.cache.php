<?php /* Smarty version Smarty-3.1.11, created on 2016-07-08 18:51:07
         compiled from "/home/oczxbfkm/public_html/Salik/admin/templates/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3507105857802e5b9bfdb3-98724762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd51812067319d320321f4b60130093cb4ca60520' => 
    array (
      0 => '/home/oczxbfkm/public_html/Salik/admin/templates/nav.tpl',
      1 => 1467046222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3507105857802e5b9bfdb3-98724762',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currentnav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57802e5b9d4571_92451384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57802e5b9d4571_92451384')) {function content_57802e5b9d4571_92451384($_smarty_tpl) {?><!-- header -->
<div class="header">
	
	<ul>
		<li style="width:110px;"<?php if ($_smarty_tpl->tpl_vars['currentnav']->value=="homepage"){?> class="selected" <?php }?>>	<a href="./home.php">HOME</a></li>
		<li style="width:160px;"<?php if ($_smarty_tpl->tpl_vars['currentnav']->value=="users"){?> class="selected" <?php }?>><a href="./drivers.php?times=1">DRIVERS</a></li>
		<li style="width:120px;"<?php if ($_smarty_tpl->tpl_vars['currentnav']->value=="orders"){?> class="selected" <?php }?>> <a href="./orders.php?times=1">ODERS</a></li>
        <li style="width:100px;"<?php if ($_smarty_tpl->tpl_vars['currentnav']->value=="cars"){?> class="selected" <?php }?>> <a href="./car.php?times=1">CARS</a></li>
                
        <li style="width:130px;"<?php if ($_smarty_tpl->tpl_vars['currentnav']->value=="logout"){?> class="selected" <?php }?>> <a href="./logout.php">LOGOUT</a></li>
			
	</ul>
</div><?php }} ?>