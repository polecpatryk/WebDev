<?php /* Smarty version Smarty-3.0.7, created on 2011-05-03 18:31:55
         compiled from "application/views/rejestracja.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2711428484dc02dfb0bd330-86314781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4465aaabb2252a0e396450986ca9a8462d44a9a8' => 
    array (
      0 => 'application/views/rejestracja.tpl',
      1 => 1304332547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2711428484dc02dfb0bd330-86314781',
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
			<h1>Rejestracja</h1>
			<div class="reje-left">
				<form action="<?php echo $_smarty_tpl->getVariable('HTTP')->value;?>
user/rejestruj" method="post">
					<div class="reje-label">Nick:</div>
					<div><input class="reje-edit" type="text" name="nick" maxlength="20" value="" /></div>
					
					<div class="reje-label">Hasło:</div>
					<div><input class="reje-edit" type="password" name="password1" maxlength="25" value="" /></div>

					<div class="reje-label">Powtórz hasło:</div>
					<div><input class="reje-edit" type="password" name="password2" maxlength="25" value="" /></div>

					<div class="reje-label">Adres e-mail:</div>
					<div><input class="reje-edit" type="text" name="email" maxlength="50" value="" /></div>
					
					<div class="reje-sr"><input class="center-left-button" type="submit" name="rejestruj" value="Zarejestruj" /></div>
				</form>
			</div>

			<div class="reje-right">
				<?php if ($_smarty_tpl->getVariable('register')->value==2){?>
					<div class="reje-success">Rejestracja konta przebiegła pomyślnie. Na podany adres e-mail, została wysłana wiadomość z linkiem aktywującym konto.</div>
				<?php }elseif($_smarty_tpl->getVariable('register')->value==1){?>
					<div class="reje-label">Podczas rejestracji wystąpiły błędy:</div>
					<ul id="ul1">
						<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['name'] = 'showinfo';
$_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('minfo')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['showinfo']['total']);
?>
							<li><?php echo $_smarty_tpl->getVariable('minfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['showinfo']['index']];?>
</li>
						<?php endfor; endif; ?>
					</ul>
				<?php }else{ ?>
					<div class="reje-label">Wypełnij formularz według wskazówek:</div>
					<ul id="ul2">
						<li>Nick może się składać wyłącznie ze znaków: [a-z], [A-Z], [0-9], kropki i _</li>
						<li>Nick musi zawierać od 1 do 20 znaków</li>
						<li>Hasło musi zawierać od 1 do 25 znaków</li>
						<li>Adres e-mail musi być poprawny, ponieważ po udanej rejestracji zostanie na niego wysłana wiadomość z linkiem aktywującym konto</li>
					</ul>
				<?php }?>
			</div>
			<div class="both"></div>
		</div>
				
		<div class="center-right">
			<h1>Losowy film</h1>
		</div>	
		<div class="both"></div>
	</div>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('bottom')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>