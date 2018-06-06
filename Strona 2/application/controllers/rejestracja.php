<?php if(!defined('SYSTEM')) exit('Access denied');

	class rejestracja extends helper_controller
	{
		public function __construct($controller)
		{
			$this->init($controller);
			if($this->store->get('login') == true) 
			{
				$this->smarty->assign('user', $this->store->get('user'));
			}
			
			$this->smarty->assign('HTTP', HTTP);
			$this->smarty->assign('DATA', DATA);
			$this->smarty->assign('galeria', '');
			$this->smarty->assign('login', $this->store->get('login'));
			$this->smarty->assign('info', $this->info->getDI());
			
			$this->smarty->assign('minfo', $this->info->getMI());
			$this->smarty->assign('register', $this->store->get('register'));		
		}
		
		public function __destruct()
		{
			$this->smarty->assign('header', 'parts/header.tpl');
			$this->smarty->assign('top', 		'parts/top.tpl');
			$this->smarty->assign('bottom', 'parts/bottom.tpl');
			$this->smarty->display('rejestracja.tpl');
			
			$this->info->deleteDI();
			$this->info->deleteMI();
			$this->store->delete('register');
		}
		
		public function defaultaction()
		{																	
	
		}
	}
	
?>