<?php /* Smarty version Smarty-3.1.11, created on 2016-07-08 12:57:58
         compiled from "/home/oczxbfkm/public_html/Salik/admin/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1027522842577fdb9698a174-43741159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb4c154fd5e79a1c070f192fb019bc882b38521b' => 
    array (
      0 => '/home/oczxbfkm/public_html/Salik/admin/templates/login.tpl',
      1 => 1467047132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1027522842577fdb9698a174-43741159',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefix' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_577fdb969c30f7_92133728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577fdb969c30f7_92133728')) {function content_577fdb969c30f7_92133728($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['prefix']->value)."header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>"HomePage",'bodyid'=>"dashboard"), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['prefix']->value)."nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('currentnav'=>"homepage"), 0);?>

<?php  $_config = new Smarty_Internal_Config("ads_en.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
				<form  action="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
login.php?action=login" id="loginform" method="post" style="margin-left:45px;" autocomplete="off"  > 
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
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['prefix']->value)."footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<?php }} ?>