<?php /* Smarty version Smarty-3.0.7, created on 2011-05-01 14:17:46
         compiled from "application/views/profil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1269791354dbd4f6a5dbc25-53593749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53f7ec8141401224a0fcc2bbea2adc6c7af75be8' => 
    array (
      0 => 'application/views/profil.tpl',
      1 => 1304252138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1269791354dbd4f6a5dbc25-53593749',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('header')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('top')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
	<div class="center">
		<div class="center-left">
			<h1>Profil użytkownika - <?php echo $_smarty_tpl->getVariable('profil')->value['nick'];?>
</h1>
		</div>
				
		<div class="center-right">
			<h1>Losowy film</h1>
		</div>	
		<div class="both"></div>
	</div>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('bottom')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>