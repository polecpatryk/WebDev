<?php if(!defined('SYSTEM')) exit('Access denied');

	require(SYSTEM.'config.php');
	require(SYSTEM.'connect.php');
	require(SYSTEM.'helper_controller.php');
	require(SYSTEM.'helper_model.php');
	
	final class core
	{
		private $controller, $action, $arguments;
		private $gcontroller;
		
		public function __construct()
		{
			$this->getParameters();
			$this->loadController();
			$this->executeMethod();
		}
		
		private function getParameters()
		{
			$this->arguments = $_SERVER['REQUEST_URI'];
			$this->arguments = preg_replace('#[\.\s-]*#', '', $this->arguments);
			$this->arguments = preg_replace('#/+#', '/', $this->arguments, '/');
			$this->arguments = explode('/', trim($this->arguments, '/'));

			if(!empty($this->arguments[0])) $this->controller = array_shift($this->arguments);
			else														$this->controller = DEFAULT_CONTROLLER;
			
			if(!empty($this->arguments[0])) $this->action = array_shift($this->arguments);
			else														$this->action = DEFAULT_ACTION;
		}
		
		private function loadController()
		{
			if(!file_exists(CONTROLLERS.$this->controller.'.php')) $this->controller = DEFAULT_CONTROLLER;
			require(CONTROLLERS.$this->controller.'.php');	
				
			if(!class_exists($this->controller)) $this->controller = DEFAULT_CONTROLLER; 

			$this->gcontroller = new $this->controller($this->controller);
		}
		
		private function executeMethod()
		{
			if(!method_exists($this->gcontroller, $this->action)) $this->action = DEFAULT_ACTION;
			
			$class  = new ReflectionClass($this->gcontroller);
			$action = $class->getMethod($this->action);
			$parameters = $action->getParameters();
			
			while(count($parameters) > count($this->arguments))
			{
				array_push(&$this->arguments, '');
			}
			
			$action->invokeArgs($this->gcontroller, $this->arguments);
		}
	}
	
	$core = new core();

?>