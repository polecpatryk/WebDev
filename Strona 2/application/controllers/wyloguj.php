<?php if(!defined('SYSTEM')) exit('Access denied');

	class wyloguj extends helper
	{
		public function defaultaction()
		{
			session_unset();
			session_destroy();
			$this->router->header(REF);
		}
	}
	
?>