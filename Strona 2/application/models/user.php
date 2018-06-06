<?php if(!defined("SYSTEM")) exit('Access denied');

	class model
	{
		private $rowUser;

		public function loadDataUser($condition)
		{
			$this->rowUser = mysql_fetch_array(mysql_query("SELECT * FROM `users` WHERE $condition"));
		}
		
		public function checkDataIsset($condition)
		{
			if(mysql_num_rows(mysql_query("SELECT `id` FROM `users` WHERE $condition")) !== 0)
				return true;
			else 
				return false;
		}

		public function addNewUser($nick, $password, $email, $ip, $register_date, $nr_activation)
		{
			if(mysql_query("INSERT INTO `users` (`nick`, `password`, `email`, `ip`, `avatar`, `register_date`, `last_activity`, `watched_m`, `watched_e`, `comments`, `lvl`, `ban`, `accepted`, `last_msg`, `last_movie`, `last_comment`, `nr_activation`) VALUES ('$nick', '$password', '$email', '$ip', '0.jpg', '$register_date', 'Brak', 0, 0, 0, 0, 0, 0, 0, 0, 0, '$nr_activation')"))
				return true;
			else 
				return false;
		}
		
		public function updateDataUser($set, $condition)
		{
			if(mysql_query("UPDATE `users` SET $set WHERE $condition"))
			{
				$this->loadDataUser($condition);
				return true;
			}
			else 
				return false;
		}
		
		public function getDataUser($data)
		{
			if(!empty($this->rowUser) && empty($data)) return $this->rowUser;
			else if(!empty($this->rowUser[$data])) 		 return $this->rowUser[$data];
			else																			 return false;
		}
	}
	
?>