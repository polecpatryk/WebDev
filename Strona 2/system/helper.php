<?php if(!defined("SYSTEM")) exit('Access denied');
	
	abstract class helper
	{
		public function __construct($controller)
		{
			$this->controller = $controller;
			
			$this->loadModuleC('store', M_STORE);
			$this->loadModuleC('input', M_INPUT);
			$this->loadModuleC('router', M_ROUTER);
			$this->loadModuleC('info', M_INFO);
			
			$this->loadModuleF('filtr', M_FILTR);
			
			$this->loadSmarty();
			
			$this->loadModel($this->controller);
		}
		
		private function __set($name, $value)
		{
			$this->$name = $value;
		}
		
		private function __get($name)
		{
			return $this->$name;
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
				
				$this->smarty->template_dir = VIEWS;
				$this->smarty->compile_dir  = VIEWS_C;
				$this->smarty->debugging = DEBUGGING_SMARTY;
			}
		}
		
		private function loadModel($model)
		{
			include(MODELS."$model.php");
			if(class_exists('model'))
			$this->model = new model;
		}

		private function loadCommonAction($action)
		{	
			require(COMMON_ACTION."action.$action.php");
			eval('$this->'.$action.' = new $action;');
		}
	}
	
?>