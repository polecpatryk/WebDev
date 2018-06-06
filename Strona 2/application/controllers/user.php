<?php if(!defined('SYSTEM')) exit('Access denied');

	class user extends helper_controller
	{
		public function __construct($controller)
		{
			$this->init($controller);
		}
		
		public function defaultaction()
		{
			$this->router->redirect('d');
		}
		
		public function edytujprofil($page)
		{
			$page = filtr($page);
			if($page == 'dane')
			{
				$nick = $this->store->get('user', 'nick');
				$gg = filtr($this->input->post('gg'), 'int');
				$favorite_movie = filtr($this->input->post('favorite_movie'), 'db');
				$about_me = filtr($this->input->post('about_me'), 'db');
				$sex = filtr($this->input->post('sex'), 'db');
				
				if(strlen($gg) > 15)
				{
					$this->store->add('edytuj_profil', 1);
					$this->info->addMI('Numer gadu-gadu przekroczył 25 znaków');
				}
				
				if(strlen($about_me) > 1000)
				{
					$this->store->add('edytuj_profil', 1);
					$this->info->addMI('Opis przekroczył 1000 znaków');
				}
				
				if($this->store->get('edytuj_profil') !== 1)
				{
					$this->model->updateDataUser("gg = '$gg', favorite_movie = '$favorite_movie', about_me = '$about_me', sex = '$sex'", "nick = '$nick'");
					$this->store->add('user', $this->model->getDataUser());
					$this->store->add('edytuj_profil', 2);
				}
			}
			if($page == 'haslo')
			{
				$nick = $this->store->get('user', 'nick');
				$password1 = crc32(md5(sha1(md5(filtr($this->input->post('password1'), 'db')))));
				$password2 = filtr($this->input->post('password2'), 'db');
				$password3 = filtr($this->input->post('password3'), 'db');
				
				if(!$this->model->checkDataIsset("nick = '$nick' AND password = '$password1'"))
				{
					$this->store->add('edytuj_profil', 1);
					$this->info->addMI('Aktualne hasło nie jest prawidłowe');
				}
				
				if($password2 !== $password3)
				{
					$this->store->add('edytuj_profil', 1);
					$this->info->addMI('Podane hasła różnią się');
				}
				
				if(!preg_match('#^.+$#', $password1) || !preg_match('#^.+$#', $password2) || !preg_match('#^.+$#', $password3))
				{
					$this->store->add('edytuj_profil', 1);
					$this->info->addMI('Musisz wypełnić wszystkie pola');
				}
				
				if($this->store->get('edytuj_profil') !== 1)
				{
					$password2 = crc32(md5(sha1(md5($password2))));
					$this->model->updateDataUser("password = '$password2'", "nick = '$nick'");
					$this->store->add('edytuj_profil', 2);
				}
			}
			if($page == 'email')
			{
				$nick = $this->store->get('user', 'nick');
				$email1 = filtr($this->input->post('email1'), 'db');
				$email2 = filtr($this->input->post('email2'), 'db');
				
				if(!preg_match('#^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$#', $email1) && !preg_match('#^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$#', $email2))
				{
					$this->store->add('edytuj_profil', 1);
					$this->info->addMI('Podany adres e-mail jest nieprawidłowy');
				}
				
				if($email1 !== $email2)
				{
					$this->store->add('edytuj_profil', 1);
					$this->info->addMI('Podane adresy e-mail różnią się');
				}
				
				if($this->store->get('edytuj_profil') !== 1)
				{
					$this->model->updateDataUser("email = '$email1'", "nick = '$nick'");
					$this->store->add('edytuj_profil', 2);
				}
			}
			if($page == 'avatar')
			{
				$nick = $this->store->get('user', 'nick');
				$avatar_default_name = '0.jpg';
				$avatar_name = $this->store->get('user', 'avatar');
				$user_id = $this->store->get('user', 'id');
				$image_quality = 100;
				
				$file_tmp = filtr($this->input->files('avatar', 'tmp_name'));
				$file_name = filtr($this->input->files('avatar', 'name'));
				$file_size = filtr($_FILES['avatar']['size'], 'int'); 
				$extension = array_pop(explode('.', $file_name));
				
				$avatar_tmp_name = "img_$user_id_".rand(0, 99).".$extension";
				
				if(!is_uploaded_file($file_tmp))
				{
					$this->store->add('edytuj_profil', 1);
					$this->info->addMI('Nie wybrano pliku');
				}
				
				if(!preg_match('#^(png|jpg|jpeg|gif)$#', $extension))
				{
					$this->store->add('edytuj_profil', 1);
					$this->info->addMI('Nieprawidłowy format pliku');
				}
				
				if($file_size > 3145728)
				{
					$this->store->add('edytuj_profil', 1);
					$this->info->addMI('Przekroczono maksymalny rozmiar pliku');
				}

				if($this->store->get('edytuj_profil') !== 1)
				{
					move_uploaded_file($file_tmp, TEMP.$avatar_tmp_name);
					$resolution = getimagesize(TEMP.$avatar_tmp_name);
					
					if($resolution['0'] >= 80 && $resolution['1'] >= 80)
					{
						$mini = imagecreatetruecolor(80, 80);
						if($avatar_name !== $avatar_default_name) unlink(DATA."avatar/$avatar_name");

						if($extension == 'jpg' || $extension == 'jpeg')
						{
							$img = imagecreatefromjpeg(TEMP.$avatar_tmp_name);
							imagecopyresampled($mini, $img, 0, 0, 0, 0, 80, 80, $resolution['0'], $resolution['1']);
						}
						else if($extension == "png")
						{
							$img = imagecreatefrompng(TEMP.$avatar_tmp_name);
							imagecopyresampled($mini, $img, 0, 0, 0, 0, 80, 80, $resolution['0'], $resolution['1']);
						}
						else if($extension == "gif")
						{
							$img = imagecreatefromgif(TEMP.$avatar_tmp_name);
							imagecopyresampled($mini, $img, 0, 0, 0, 0, 80, 80, $resolution['0'], $resolution['1']);
						}
						imagejpeg($mini, DATA."avatar/$user_id.$extension", $image_quality);

						imagedestroy($img);
						imagedestroy($mini);
						
						$this->model->updateDataUser("avatar = '$user_id.$extension'", "nick = '$nick'");
						$this->store->add('user', $this->model->getDataUser());
						
						$this->store->add('edytuj_profil', 2);
					}
					else
					{
						$this->store->add('edytuj_profil', 1);
						$this->info->addMI('Nieprawidłowa rozdzielczość zdjęcia');
					}
					unlink(TEMP.$avatar_tmp_name);
				}
			}
			
			$this->router->redirect('edytuj-profil', $page);
		}
		
		public function rejestruj()
		{
			$ip = $_SERVER['REMOTE_ADDR'];
			$nick = filtr($this->input->post('nick'), 'db');
			$password1 = filtr($this->input->post('password1'), 'db');
			$password2 = filtr($this->input->post('password2'), 'db');
			$password  = crc32(md5(sha1(md5($password1))));
			$email = filtr($this->input->post('email'), 'db');
			$nr_activation = md5(rand(0,9999)).md5(rand(0,9999));
			$register_date = time();

			if(ereg("^[a-zA-Z0-9_\.]+$", $nick))
			{
				if($this->model->checkDataIsset("nick = '$nick'"))
				{
					$this->store->add('register', 1);
					$this->info->addMI('Podany nick jest już zajęty');
				}
			}
			else
			{
				$this->store->add('register', 1);
				$this->info->addMI('Nie wypełniono pola nick lub nick zawiera niedozwolone znaki');
			}
			
			if(eregi('^.+$', $password1) && eregi('^.+$', $password2))
  		{
				if($password1 !== $password2)
				{
					$this->store->add('register', 1);
					$this->info->addMI('Podane hasła różnią się');
				}
			}
			else 
			{
				$this->store->add('register', 1);
				$this->info->addMI('Nie wypełniono pola hasło');
			}
			
			if(preg_match('#^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$#', $email))
			{
				if($this->model->checkDataIsset("email = '$email'"))
				{
					$this->store->add('register', 1);
					$this->info->addMI('Podany email jest już zajęty');
				}
			}
			else
			{
				$this->store->add('register', 1);
				$this->info->addMI('Podany adres email składa się z niedozwolonych znaków');
			}
			
			if($this->store->get('register') !== 1)
			{
				require(SYSTEM.PHPMAILER.'class.phpmailer.php');
				
				$this->mail = new PHPMailer();
				$this->mail->SetLanguage("pl", './'.PHPMAILER.'language/');
				$this->mail->PluginDir = './'.PHPMAILER;
				$this->mail->CharSet   = "UTF-8";
				$this->mail->Mailer    = "mail";
				
				$this->mail->Host      = "poczta.o2.pl";
				$this->mail->Username  = "patryk_1993_1995";
				$this->mail->Password  = "741963456";
				
				$this->mail->From      = "administracja@dk.pl";
				$this->mail->FromName  = "Domowe-Kino.cba.pl";
				$this->mail->Subject   = "Aktywacja konta";
				$this->mail->Body     .= '<div style="font-size:1.1em;">';
				$this->mail->Body     .= '<p>Witamy nowego użytkownika w serwisie <a href="www.domowe-kino.cba.pl">www.domowe-kino.cba.pl</a>.</p>';
				$this->mail->Body     .= 'Poniżej znajdują się dane do Twojego konta.<br />';
				$this->mail->Body     .= 'Zapisz tą wiadomość lub zapamiętaj swój login i hasło, aby bezproblemowo logować się na stronie.<br /><br />';
				$this->mail->Body     .= 'Login: <i>'.$nick.'</i><br />';
				$this->mail->Body     .= 'Hasło: <i>'.$password1.'</i><br /><br />';
				$this->mail->Body     .= '<b>Kliknij w link poniżej, aby dokończyć rejestrację i aktywować swoje konto:</b><br />';
				$this->mail->Body     .= '<a href="'.HTTP.'user/aktywacja/'.$nick.'/'.$nr_activation.'">'.HTTP.'user/aktywacja/'.$nick.'/'.$nr_activation.'</a>';
				$this->mail->Body     .= '</div>';
				$this->mail->AddAddress($email, $nick);
				
				if($this->mail->Send())
				{
					if($this->model->addNewUser($nick, $password, $email, $ip, $register_date, $nr_activation))
						$this->store->add('register', 2);
					else
					{
						$this->store->add('register', 1);
						$this->info->addMI('Błąd zapytania MySQL');
					}
				}
			}
			
			$this->router->redirect('rejestracja');
		}
		
		public function loguj()
		{
			$nick = filtr($this->input->post('nick'), 'db');
			$password = crc32(md5(sha1(md5(filtr($this->input->post('password'), 'db')))));
			$last_activity = time();
			
			$this->model->loadDataUser("nick = '$nick' AND password = '$password'");
			if($this->model->getDataUser('nick'))
			{
				if($this->model->getDataUser('ban') == 0)
				{
					if($this->model->getDataUser('accepted') == 1)
					{
						$this->store->add('login', true);
						$this->model->updateDataUser("last_activity = '$last_activity'", "nick = '$nick'");
						$this->store->add('user', $this->model->getDataUser());
					}
					else $this->info->addDI('To konto nie zostało aktywowane', 'E');
				}
				else $this->info->addDI('To konto zostało zablokowane', 'E');
			}
			else $this->info->addDI('Błędny login lub hasło', 'E');
			
			$this->router->header(REF);
		}
		
		public function wyloguj()
		{
			session_unset();
			session_destroy();
			$this->router->header(REF);
		}
	}

?>