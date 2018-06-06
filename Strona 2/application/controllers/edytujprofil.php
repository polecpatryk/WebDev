<?php if(!defined('SYSTEM')) exit('Access denied');

	class edytujprofil extends helper_controller
	{
		public function __construct($controller)
		{
			$this->init($controller);
			if($this->store->get('login') == true) 
			{
				$this->smarty->assign('user', $this->store->get('user'));
			}
			else
				$this->router->redirect('d');
			
			$this->smarty->assign('HTTP', HTTP);
			$this->smarty->assign('DATA', DATA);
			$this->smarty->assign('galeria', '');
			$this->smarty->assign('login', $this->store->get('login'));
			$this->smarty->assign('info', $this->info->getDI());
			
			$this->smarty->assign('minfo', $this->info->getMI());
			$this->smarty->assign('edytuj_profil', $this->store->get('edytuj_profil'));
		}
		public function __destruct()
		{
			$this->smarty->assign('header', 'parts/header.tpl');
			$this->smarty->assign('top', 		'parts/top.tpl');
			$this->smarty->assign('bottom', 'parts/bottom.tpl');
			$this->smarty->display('edytujprofil.tpl');
			
			$this->info->deleteDI();
			$this->info->deleteMI();
			$this->store->delete('edytuj_profil');
		}
		
		public function defaultaction()
		{
			if($this->store->get('user', 'sex') == 'Mężczyzna') $checked1 = 'checked="checked"'; else $checked1 = '';
			if($this->store->get('user', 'sex') == 'Kobieta') 	$checked2 = 'checked="checked"'; else $checked2 = '';
			
			$this->smarty->assign('page', 'dane');
			
			$this->smarty->assign('checked1', $checked1);
			$this->smarty->assign('checked2', $checked2);
		}
		
		public function haslo()
		{		
			$this->smarty->assign('page', 'haslo');
		}
		
		public function email()
		{
			$this->smarty->assign('page', 'email');
		}
		
		public function avatar()
		{
			$this->smarty->assign('page', 'avatar');
		}
	}
	
?>