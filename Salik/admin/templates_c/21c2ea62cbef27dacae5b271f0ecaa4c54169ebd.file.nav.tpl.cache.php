<?php /* Smarty version Smarty-3.1.11, created on 2016-07-15 13:31:24
         compiled from "/home1/salik/public_html/saladmin/admin/templates/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145748604457892bfc3fd0b4-76737504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21c2ea62cbef27dacae5b271f0ecaa4c54169ebd' => 
    array (
      0 => '/home1/salik/public_html/saladmin/admin/templates/nav.tpl',
      1 => 1467046222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145748604457892bfc3fd0b4-76737504',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currentnav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57892bfc42dc14_05196291',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57892bfc42dc14_05196291')) {function content_57892bfc42dc14_05196291($_smarty_tpl) {?><!-- header -->
<div class="header">
	
	<ul>
		<li style="width:110px;"<?php if ($_smarty_tpl->tpl_vars['currentnav']->value=="homepage"){?> class="selected" <?php }?>>	<a href="./home.php">HOME</a></li>
		<li style="width:160px;"<?php if ($_smarty_tpl->tpl_vars['currentnav']->value=="users"){?> class="selected" <?php }?>><a href="./drivers.php?times=1">DRIVERS</a></li>
		<li style="width:120px;"<?php if ($_smarty_tpl->tpl_vars['currentnav']->value=="orders"){?> class="selected" <?php }?>> <a href="./orders.php?times=1">ODERS</a></li>
        <li style="width:100px;"<?php if ($_smarty_tpl->tpl_vars['currentnav']->value=="cars"){?> class="selected" <?php }?>> <a href="./car.php?times=1">CARS</a></li>
                
        <li style="width:130px;"<?php if ($_smarty_tpl->tpl_vars['currentnav']->value=="logout"){?> class="selected" <?php }?>> <a href="./logout.php">LOGOUT</a></li>
			
	</ul>
</div><?php }} ?>