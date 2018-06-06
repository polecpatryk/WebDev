<?php if(!defined("SYSTEM")) exit('Access denied');
	
	abstract class helper_controller
	{
		public function __set($name, $value)
		{
			$this->$name = $value;
		}
		
		public function __get($name)
		{
			return $this->$name;
		}

		public function init($model)
		{
			$this->model = $model;
 			
			$this->loadModuleC('store',  M_STORE);
			$this->loadModuleC('input',  M_INPUT);
			$this->loadModuleC('router', M_ROUTER);
			$this->loadModuleC('info', 	 M_INFO);
			
			$this->loadModuleF('filtr', M_FILTR);
			
			$this->loadSmarty();
				
			$this->loadModel($this->model);
		}
		
		private function loadModuleC($module, $on)
		{	
			if($on == 1)
			{
				require(SYSTEM.MODULES."class.$module.php");
				eval('$this->'.$module.' = new $module;');
			}
		}
		
		private function loadModuleF($module, $on)
		{	
			if($on == 1)
			{
				require(SYSTEM.MODULES."function.$module.php");
			}
		}
		
		private function loadSmarty()
		{
			if(M_SMARTY == 1)
			{
				require(SYSTEM.SMARTY.'Smarty.class.php');
				
				$this->smarty = new Smarty();
				
				$this->smarty->setTemplateDir(VIEWS);
				$this->smarty->setCompileDir(VIEWS_C);
			}
		}
		
		private function loadModel($model)
		{
			if(file_exists(MODELS."$model.php"))
			{
				require(MODELS."$model.php");
				if(class_exists('model'))
				$this->model = new model;
			}
		}
	}
	
?>