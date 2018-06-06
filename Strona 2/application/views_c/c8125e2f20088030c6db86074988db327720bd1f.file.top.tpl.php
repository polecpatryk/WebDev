<?php /* Smarty version Smarty-3.0.7, created on 2011-05-02 12:36:00
         compiled from "application/views/parts/top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21153984224dbe89104eb721-49614041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8125e2f20088030c6db86074988db327720bd1f' => 
    array (
      0 => 'application/views/parts/top.tpl',
      1 => 1304332548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21153984224dbe89104eb721-49614041',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="top">
	<?php if ($_smarty_tpl->getVariable('login')->value!=true){?>
		<div class="log-form">
			<form action="<?php echo $_smarty_tpl->getVariable('HTTP')->value;?>
user/loguj" method="post">	
				<div><input class="log-edit1" type="text" name="nick" maxlength="20" /></div>
				<div><input class="log-edit2" type="password" name="password" maxlength="25" /></div>
				<div><input class="log-button" type="submit" name="zaloguj" value=" " /></div>
			</form>
			<div class="log-text">Nie pamiętasz hasła? <a href="<?php echo $_smarty_tpl->getVariable('HTTP')->value;?>
przypomnij-haslo">Kliknij!</a></div>
			<div class="log-text">Nie masz konta? <a href="<?php echo $_smarty_tpl->getVariable('HTTP')->value;?>
rejestracja">Zarejestruj się!</a></div>
		</div>
		<div class="both"></div>
	<?php }else{ ?>
		<div class="user-panel">
			<div class="user-avatar">
				<a href="<?php echo $_smarty_tpl->getVariable('HTTP')->value;?>
profil/<?php echo $_smarty_tpl->getVariable('user')->value['id'];?>
/<?php echo $_smarty_tpl->getVariable('user')->value['nick'];?>
"><img class="no-border" src="<?php echo $_smarty_tpl->getVariable('HTTP')->value;?>
<?php echo $_smarty_tpl->getVariable('DATA')->value;?>
avatar/<?php echo $_smarty_tpl->getVariable('user')->value['avatar'];?>
" alt="" title="<?php echo $_smarty_tpl->getVariable('user')->value['nick'];?>
" /></a>
			</div>
			
			<div class="user-header"><?php echo $_smarty_tpl->getVariable('user')->value['nick'];?>
</div>
			
			<div class="user-menu">
				<ul>
					<li><a href="<?php echo $_smarty_tpl->getVariable('HTTP')->value;?>
edytuj-profil">Edytuj profil</a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('HTTP')->value;?>
wiadomosci">Wiadomości</a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('HTTP')->value;?>
user/wyloguj">Wyloguj</a></li>
				</ul>
			</div>
		</div>
		<div class="both"></div>
	<?php }?>
	
	<div class="q">
		<form name="q" action="<?php echo $_smarty_tpl->getVariable('HTTP')->value;?>
szukaj" method="post">	
			<div><input class="q-edit" type="text" name="tytul" maxlength="80" value="Wpisz tytuł filmu..." /></div>
			<div><input class="q-button" type="submit" name="szukaj" value="Szukaj" /></div>
		</form>
	</div>
	
	<div class="menu-g">
		<ul>
			<li><a href="<?php echo $_smarty_tpl->getVariable('HTTP')->value;?>
index">Strona główna</a></li>
			<li><a href="<?php echo $_smarty_tpl->getVariable('HTTP')->value;?>
filmy">Filmy</a></li>
			<li><a href="<?php echo $_smarty_tpl->getVariable('HTTP')->value;?>
seriale">Seriale</a></li>
			<li><a href="<?php echo $_smarty_tpl->getVariable('HTTP')->value;?>
tagi">Tagi</a></li>
			<li><a href="<?php echo $_smarty_tpl->getVariable('HTTP')->value;?>
dodaj">Dodaj film</a></li>
		</ul>
	</div>
</div>

<?php if ($_smarty_tpl->getVariable('info')->value['tresc']!=''){?>
	<div class="info">
		<?php if ($_smarty_tpl->getVariable('info')->value['typ']=='E'){?> 	
			<div class="info-text-error"><?php echo $_smarty_tpl->getVariable('info')->value['tresc'];?>
<img src="<?php echo $_smarty_tpl->getVariable('HTTP')->value;?>
<?php echo $_smarty_tpl->getVariable('DATA')->value;?>
images/info-x1.png" alt="x" title="" class="info-x" /></div>
		<?php }elseif($_smarty_tpl->getVariable('info')->value['typ']=='S'){?>
			<div class="info-text-success"><?php echo $_smarty_tpl->getVariable('info')->value['tresc'];?>
<img src="<?php echo $_smarty_tpl->getVariable('HTTP')->value;?>
<?php echo $_smarty_tpl->getVariable('DATA')->value;?>
images/info-x2.png" alt="x" title="" class="info-x" /></div>
		<?php }?>
	</div>
<?php }?>
	