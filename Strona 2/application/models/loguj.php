<?php if(!defined("SYSTEM")) exit('Access denied');

	class model
	{
		private $row;
		
		public function loadData($nick, $password)
		{
			$this->row = mysql_fetch_array(mysql_query("SELECT `nick`, `avatar`, `ban`, `accepted` FROM `users` WHERE `nick` = '$nick' AND password = '$password'"));
		}
		
		public function getData($data)
		{
			if(!empty($this->row[$data])) return $this->row[$data];
			else						  return false;
		}	
	}
	
?>