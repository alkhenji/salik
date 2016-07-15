<?php /* Smarty version Smarty-3.1.11, created on 2016-07-08 12:58:08
         compiled from "/home/oczxbfkm/public_html/Salik/admin/templates/homepage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1283023425577fdba070e576-40178201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36b3a21d32f57cba49bdcbd1821ee4a877a95805' => 
    array (
      0 => '/home/oczxbfkm/public_html/Salik/admin/templates/homepage.tpl',
      1 => 1466943760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1283023425577fdba070e576-40178201',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefix' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_577fdba073e1f7_61376802',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577fdba073e1f7_61376802')) {function content_577fdba073e1f7_61376802($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['prefix']->value)."header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>"HomePage",'bodyid'=>"dashboard"), 0);?>

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