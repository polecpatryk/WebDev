<?php if(!defined('SYSTEM')) exit('Access denied');

	class loguj extends helper
	{
		public function defaultaction()
		{
			$nick = filtr($this->input->post('nick'), 'db');
			$password = crc32(md5(sha1(md5(filtr($this->input->post('password'), 'db')))));
			
			$this->model->loadData($nick, $password);
			if($this->model->getData('nick'))
			{
				if($this->model->getData('ban') == 0)
				{
					if($this->model->getData('accepted') == 1)
					{
						$this->store->add('login', true);
						$this->store->add('nick', $this->model->getData('nick'));
						$this->store->add('avatar', $this->model->getData('avatar'));
					}
					else $this->info->addDI('To konto nie zostało aktywowane', 'E');
				}
				else $this->info->addDI('To konto zostało zablokowane', 'E');
			}
			else $this->info->addDI('Błędny login lub hasło', 'E');
			
			$this->router->header(REF);
		}
	}
	
?>