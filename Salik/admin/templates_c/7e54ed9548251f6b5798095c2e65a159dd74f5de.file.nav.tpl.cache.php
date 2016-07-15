<?php /* Smarty version Smarty-3.1.11, created on 2016-07-15 14:47:42
         compiled from "/home1/salik/public_html/Salik/admin/templates/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17451383757893dde16c5e1-48215189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e54ed9548251f6b5798095c2e65a159dd74f5de' => 
    array (
      0 => '/home1/salik/public_html/Salik/admin/templates/nav.tpl',
      1 => 1467046222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17451383757893dde16c5e1-48215189',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currentnav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57893dde191098_05314893',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57893dde191098_05314893')) {function content_57893dde191098_05314893($_smarty_tpl) {?><!-- header -->
<div class="header">
	
	<ul>
		<li style="width:110px;"<?php if ($_smarty_tpl->tpl_vars['currentnav']->value=="homepage"){?> class="selected" <?php }?>>	<a href="./home.php">HOME</a></li>
		<li style="width:160px;"<?php if ($_smarty_tpl->tpl_vars['currentnav']->value=="users"){?> class="selected" <?php }?>><a href="./drivers.php?times=1">DRIVERS</a></li>
		<li style="width:120px;"<?php if ($_smarty_tpl->tpl_vars['currentnav']->value=="orders"){?> class="selected" <?php }?>> <a href="./orders.php?times=1">ODERS</a></li>
        <li style="width:100px;"<?php if ($_smarty_tpl->tpl_vars['currentnav']->value=="cars"){?> class="selected" <?php }?>> <a href="./car.php?times=1">CARS</a></li>
                
        <li style="width:130px;"<?php if ($_smarty_tpl->tpl_vars['currentnav']->value=="logout"){?> class="selected" <?php }?>> <a href="./logout.php">LOGOUT</a></li>
			
	</ul>
</div><?php }} ?>