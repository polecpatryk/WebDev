<?php /* Smarty version Smarty-3.0.7, created on 2011-05-02 12:36:00
         compiled from "application/views/parts/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18786045974dbe89102f06f9-17164594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4736567cabe1c3263a314d0d0eedf76d8b5808d7' => 
    array (
      0 => 'application/views/parts/header.tpl',
      1 => 1304332548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18786045974dbe89102f06f9-17164594',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="pl" />
  <meta name="Keywords" content=" " />
  <meta name="Description" content=" "/>
  <meta name="Author" content="Patryk Połeć" />
  <meta name="Robots" content="all" />
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('HTTP')->value;?>
<?php echo $_smarty_tpl->getVariable('DATA')->value;?>
js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('HTTP')->value;?>
<?php echo $_smarty_tpl->getVariable('DATA')->value;?>
js/simplegallery.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('HTTP')->value;?>
<?php echo $_smarty_tpl->getVariable('DATA')->value;?>
js/function.js"></script>
  <link rel="Stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('HTTP')->value;?>
<?php echo $_smarty_tpl->getVariable('DATA')->value;?>
css/style.css" />
  <link rel="shortcut icon" href="<?php echo $_smarty_tpl->getVariable('HTTP')->value;?>
<?php echo $_smarty_tpl->getVariable('DATA')->value;?>
images/ikona.png" />
  <title>Strona główna</title>
	<?php if ($_smarty_tpl->getVariable('galeria')->value=='show'){?>
		<script type="text/javascript">
		var mygallery=new simpleGallery
		({
			wrapperid: "simplegallery1",
			dimensions: [685, 420],
			imagearray:
			[
				["<?php echo $_smarty_tpl->getVariable('HTTP')->value;?>
<?php echo $_smarty_tpl->getVariable('DATA')->value;?>
images/ls.jpg", "", "_new", "Inwazja: Bitwa o Los Angeles (2011)", "Od lat na całym świecie - Buenos Aires, Seul, Francja, Niemcy czy Chiny - dokumentowane są przypadki pojawienia się UFO. Ale w roku 2011 to, co kiedyś było tylko znakiem na niebie, stanie się przerażającą rzeczywistością. Ziemia zostanie zaatakowana przez nieznane siły. Podczas gdy ludzie będą świadkami upadku największych miast świata, Los Angeles stanie się ostatnim bastionem ludzkości w bitwie, której nikt się nie spodziewał. I to przed sierżantem marines (Aaron Eckhart) i jego nowym plutonem będzie postawione zadanie starcia z wrogiem, z jakim nigdy do tej pory nie mieli do czynienia..."],
				["<?php echo $_smarty_tpl->getVariable('HTTP')->value;?>
<?php echo $_smarty_tpl->getVariable('DATA')->value;?>
images/n4.jpg", "", "_new", "Jestem numerem cztery (2011)", "John Smith to pozornie zwyczajny młody mieszkaniec jednego z miasteczek w USA. W rzeczywistości jest jednak uciekinierem z pogrążonej w wojnie planety Lorien, który na Ziemi szuka schronienia. Trafia do cichego miasteczka w Ohio. Tu spotyka Sarę Hart, dziewczynę miejscowej gwiazdy footballu. Rodzi się między nimi uczucie. Wkrótce jednak John i jego szkolna miłość znajdą się w śmiertelnym niebezpieczeństwie. Okazuje się, że John jest jednym z dziewięciu uciekinierów z tajemniczej, unicestwionej planety, ściganych przez bezlitosnego wroga. Numer Jeden, Dwa i Trzy już nie żyją. Teraz kolej na Numer Cztery."],
				["<?php echo $_smarty_tpl->getVariable('HTTP')->value;?>
<?php echo $_smarty_tpl->getVariable('DATA')->value;?>
images/jb.jpg", "", "_new", "Jestem Bogiem (2011)", "Wyobraź sobie narkotyk, który czyni Twój mózg niezwykle wydajnym i sprawia, że chłoniesz ogromną wiedzę. Narkotyk, który czyni cię nadzwyczaj skupionym, szybkim, sprawnym, a nawet atrakcyjnym. Narkotyk, dzięki któremu pokonujesz wszystkie ograniczenia. Niewyobrażalne staje się możliwe nawet dla Eddiego, który od życia nie spodziewa się niczego. Zażycie specyfiku pozwala mu osiągnąć sukces o jakim zawsze marzył. Ceną, jaką przychodzi mu zapłacić, są: bóle głowy, omdlenia, utraty świadomości, niekontrolowane wybuchy przemocy..."]
			],
			autoplay: [true, 5000, 9999],
			persist: false,
			fadeduration: 400
		})
	<?php }?>
</script>
</head>
<body>
<div class="pds">