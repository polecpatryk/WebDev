<?php /* Smarty version Smarty-3.0.7, created on 2011-05-02 12:37:55
         compiled from "application/views/edytujprofil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14508264664dbe8983d2b950-15269062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b479e104558922f43b7d5b404b565b3f9a5778b1' => 
    array (
      0 => 'application/views/edytujprofil.tpl',
      1 => 1304332544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14508264664dbe8983d2b950-15269062',
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
			<h1>Edycja profilu</h1>
			<div class="edytuj-p-menu">
				<ul>
					<li><a href="<?php echo $_smarty_tpl->getVariable('HTTP')->value;?>
edytuj-profil/dane">Edytuj dane</a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('HTTP')->value;?>
edytuj-profil/haslo">Zmień hasło</a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('HTTP')->value;?>
edytuj-profil/email">Zmień e-mail</a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('HTTP')->value;?>
edytuj-profil/avatar">Zmień avatar</a></li>
					<li><a href="#">Usuń konto</a></li>
				</ul>
			</div>
			
			<?php if ($_smarty_tpl->getVariable('page')->value=='dane'){?>
				<div class="edytuj-p-left">
					<form name="edytuj-p-profil" action="<?php echo $_smarty_tpl->getVariable('HTTP')->value;?>
user/edytuj-profil/dane" method="post">
						<div class="edytuj-p-label">Nick:</div>
						<div><input class="edytuj-p-edit" type="text" name="nick" maxlength="20" value="<?php echo $_smarty_tpl->getVariable('user')->value['nick'];?>
" disabled="disabled" /></div>
						
						<div class="edytuj-p-label">GG:</div>
						<div><input class="edytuj-p-edit" type="text" name="gg" maxlength="15" value="<?php echo $_smarty_tpl->getVariable('user')->value['gg'];?>
" /></div>
						
						<div class="edytuj-p-label">Ulubiony film:</div>
						<div><input class="edytuj-p-edit" type="text" name="favorite_movie" maxlength="50" value="<?php echo $_smarty_tpl->getVariable('user')->value['favorite_movie'];?>
" /></div>
						
						<div class="edytuj-p-label">O sobie:</div>
						<div><textarea class="edytuj-p-textarea" name="about_me" rows="6" cols="50"><?php echo $_smarty_tpl->getVariable('user')->value['about_me'];?>
</textarea></div>
						<div class="znaki"><b>Pozostało znaków:</b> 1000</div>
						
						<div><label class="edytuj-p-label" for="checked1"><input name="sex" id="checked1" value="Mężczyzna" <?php echo $_smarty_tpl->getVariable('checked1')->value;?>
 type="radio" />Mężczyzna</label></div>
						<div><label class="edytuj-p-label" for="checked2"><input name="sex" id="checked2" value="Kobieta" <?php echo $_smarty_tpl->getVariable('checked2')->value;?>
 type="radio" />Kobieta</label></div>
						
						<div class="edytuj-p-sr"><input class="center-left-button" type="submit" name="edytuj1" value="Zapisz" /></div>
					</form>
				</div>
				
				<div class="edytuj-p-right">
					<?php if ($_smarty_tpl->getVariable('edytuj_profil')->value==2){?>
						<div class="edytuj-p-success">Zmiany zostały pomyślnie zapisane</div>
					<?php }elseif($_smarty_tpl->getVariable('edytuj_profil')->value==1){?>
						<div class="edytuj-p-label">Podczas zapisu wystąpiły błędy:</div>
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
						<div class="edytuj-p-label">Wypełnij formularz według wskazówek:</div>
						<ul id="ul2">
							<li>Numer gadu-gadu może składać się wyłącznie z liczb</li>
							<li>Aby ukryć wyświetlanie numeru gadu-gadu na stronie profilu użytkownika, usuń zawartość pola "GG"</li>
							<li>Opis nie może przekraczać 1000 znaków</li>
							<li>Aby ukryć wyświetlanie opisu na stronie profilu użytkownika, usuń zawartość pola "O sobie"</li>
						</ul>
					<?php }?>
				</div>
				
			<?php }elseif($_smarty_tpl->getVariable('page')->value=='haslo'){?>
				<div class="edytuj-p-left">
					<form action="<?php echo $_smarty_tpl->getVariable('HTTP')->value;?>
user/edytuj-profil/haslo" method="post">
						<div class="edytuj-p-label">Aktualne hasło:</div>
						<div><input class="edytuj-p-edit" type="password" name="password1" maxlength="25" /></div>
						
						<div class="edytuj-p-label">Nowe hasło:</div>
						<div><input class="edytuj-p-edit" type="password" name="password2" maxlength="25" /></div>
						
						<div class="edytuj-p-label">Powtórz nowe hasło:</div>
						<div><input class="edytuj-p-edit" type="password" name="password3" maxlength="25" /></div>
						
						<div class="edytuj-p-sr"><input class="center-left-button" type="submit" name="edytuj2" value="Zapisz" /></div>
					</form>
				</div>
				
				<div class="edytuj-p-right">
					<?php if ($_smarty_tpl->getVariable('edytuj_profil')->value==2){?>
						<div class="edytuj-p-success">Zmiany zostały pomyślnie zapisane</div>
					<?php }elseif($_smarty_tpl->getVariable('edytuj_profil')->value==1){?>
						<div class="edytuj-p-label">Podczas zapisu wystąpiły błędy:</div>
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
						<div class="edytuj-p-label">Wypełnij formularz według wskazówek:</div>
						<ul id="ul2">
							<li>Nowe hasło musi zawierać od 1 do 25 znaków</li>
						</ul>
					<?php }?>
				</div>
				
			<?php }elseif($_smarty_tpl->getVariable('page')->value=='email'){?>
				<div class="edytuj-p-left">
					<form action="<?php echo $_smarty_tpl->getVariable('HTTP')->value;?>
user/edytuj-profil/email" method="post">
						<div class="edytuj-p-label">Aktualny e-mail:</div>
						<div><input class="edytuj-p-edit" type="text" name="email" maxlength="50" disabled="disabled" value="<?php echo $_smarty_tpl->getVariable('user')->value['email'];?>
" /></div>
						
						<div class="edytuj-p-label">Nowy e-mail:</div>
						<div><input class="edytuj-p-edit" type="text" name="email1" maxlength="50" value="" /></div>
						
						<div class="edytuj-p-label">Powtórz nowy e-mail:</div>
						<div><input class="edytuj-p-edit" type="text" name="email2" maxlength="50" value="" /></div>
						
						<div class="edytuj-p-sr"><input class="center-left-button" type="submit" name="edytuj3" value="Zapisz" /></div>
					</form>
				</div>
				
				<div class="edytuj-p-right">
					<?php if ($_smarty_tpl->getVariable('edytuj_profil')->value==2){?>
						<div class="edytuj-p-success">Zmiany zostały pomyślnie zapisane</div>
					<?php }elseif($_smarty_tpl->getVariable('edytuj_profil')->value==1){?>
						<div class="edytuj-p-label">Podczas zapisu wystąpiły błędy:</div>
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
						<div class="edytuj-p-label">Wypełnij formularz według wskazówek:</div>
						<ul id="ul2">
							<li>Nowe e-mail musi być prowidłowy, ponieważ posłuży on w celu odzyskania zapomnianego hasła</li>
						</ul>
					<?php }?>
				</div>
				
			<?php }elseif($_smarty_tpl->getVariable('page')->value=='avatar'){?>
				<div class="edytuj-p-left">
					<div class="edytuj-p-label">Aktualny avatar:</div>
					<p><img src="<?php echo $_smarty_tpl->getVariable('HTTP')->value;?>
<?php echo $_smarty_tpl->getVariable('DATA')->value;?>
avatar/<?php echo $_smarty_tpl->getVariable('user')->value['avatar'];?>
" alt="avatar" title="<?php echo $_smarty_tpl->getVariable('user')->value['nick'];?>
" width="100px;" height="100px;" /></p>
						
					<form action="<?php echo $_smarty_tpl->getVariable('HTTP')->value;?>
user/edytuj-profil/avatar" method="post" enctype="multipart/form-data">
						<div class="edytuj-p-label">Nowy avatar:</div>
						<div><input class="edytuj-p-edit" type="hidden" name="MAX_FILE_SIZE" value="3145728" /></div>
						<div><input class="edytuj-p-file" type="file" name="avatar" /></div>
						
						<div class="edytuj-p-sr"><input class="center-left-button" type="submit" name="edytuj4" value="Zapisz" /></div>
					</form>
				</div>
				
				<div class="edytuj-p-right">
					<?php if ($_smarty_tpl->getVariable('edytuj_profil')->value==2){?>
						<div class="edytuj-p-success">Zmiany zostały pomyślnie zapisane</div>
					<?php }elseif($_smarty_tpl->getVariable('edytuj_profil')->value==1){?>
						<div class="edytuj-p-label">Podczas zapisu wystąpiły błędy:</div>
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
						<div class="edytuj-p-label">Wypełnij formularz według wskazówek:</div>
						<ul id="ul2">
							<li>Minimalne wymiary obrazka: 80x80 px</li>
							<li>Dopuszczalne rozszerzenia: JPG, GIF, PNG</li>
							<li>Maksymalny rozmiar pliku: 3MB</li>
						</ul>
					<?php }?>
				</div>
			<?php }?>
		</div>
				
		<div class="center-right">
			<h1>Losowy film</h1>
		</div>	
		<div class="both"></div>
	</div>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('bottom')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>