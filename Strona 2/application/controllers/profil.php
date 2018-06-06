<?php if(!defined('SYSTEM')) exit('Access denied');

	class profil extends helper_controller
	{
		public function __construct($controller)
		{
			$this->init('user');
			if($this->store->get('login') == true) 
			{
				$this->smarty->assign('user', $this->store->get('user'));
			}
			
			$this->smarty->assign('HTTP', HTTP);
			$this->smarty->assign('DATA', DATA);
			$this->smarty->assign('galeria', 'show');
			$this->smarty->assign('login', $this->store->get('login'));
			$this->smarty->assign('info', $this->info->getDI());
		}
		
		public function __destruct()
		{
			$this->smarty->assign('header', 'parts/header.tpl');
			$this->smarty->assign('top', 		'parts/top.tpl');
			$this->smarty->assign('bottom', 'parts/bottom.tpl');
			$this->smarty->display('profil.tpl');
			
			$this->info->deleteDI();
		}
		
		public function defaultaction($nick)
		{
			$this->smarty->assign('profil', array('nick' => $nick));
		}
	}
	
?>