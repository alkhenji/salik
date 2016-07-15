<?php /* Smarty version Smarty-3.1.11, created on 2016-07-15 13:37:56
         compiled from "/home1/salik/public_html/Salik/admin/templates/homepage.tpl" */ ?>
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
  ),
  'nocache_hash' => '51097120557892d8434d669-27371226',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefix' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57892d843c81f8_23521598',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57892d843c81f8_23521598')) {function content_57892d843c81f8_23521598($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['prefix']->value)."header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>"HomePage",'bodyid'=>"dashboard"), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['prefix']->value)."nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('currentnav'=>"homepage"), 0);?>

<?php  $_config = new Smarty_Internal_Config("ads_en.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<!-- content -->

<div class="body">
    <div class="featured">
    <h1>SALIK ADMIN</h1>
    </div>
   					
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['prefix']->value)."footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<?php }} ?>