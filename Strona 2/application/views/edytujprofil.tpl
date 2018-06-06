{include file=$header}
{include file=$top}
	<div class="center">
		<div class="center-left">
			<h1>Edycja profilu</h1>
			<div class="edytuj-p-menu">
				<ul>
					<li><a href="{$HTTP}edytuj-profil/dane">Edytuj dane</a></li>
					<li><a href="{$HTTP}edytuj-profil/haslo">Zmień hasło</a></li>
					<li><a href="{$HTTP}edytuj-profil/email">Zmień e-mail</a></li>
					<li><a href="{$HTTP}edytuj-profil/avatar">Zmień avatar</a></li>
					<li><a href="#">Usuń konto</a></li>
				</ul>
			</div>
			
			{if $page eq 'dane'}
				<div class="edytuj-p-left">
					<form name="edytuj-p-profil" action="{$HTTP}user/edytuj-profil/dane" method="post">
						<div class="edytuj-p-label">Nick:</div>
						<div><input class="edytuj-p-edit" type="text" name="nick" maxlength="20" value="{$user.nick}" disabled="disabled" /></div>
						
						<div class="edytuj-p-label">GG:</div>
						<div><input class="edytuj-p-edit" type="text" name="gg" maxlength="15" value="{$user.gg}" /></div>
						
						<div class="edytuj-p-label">Ulubiony film:</div>
						<div><input class="edytuj-p-edit" type="text" name="favorite_movie" maxlength="50" value="{$user.favorite_movie}" /></div>
						
						<div class="edytuj-p-label">O sobie:</div>
						<div><textarea class="edytuj-p-textarea" name="about_me" rows="6" cols="50">{$user.about_me}</textarea></div>
						<div class="znaki"><b>Pozostało znaków:</b> 1000</div>
						
						<div><label class="edytuj-p-label" for="checked1"><input name="sex" id="checked1" value="Mężczyzna" {$checked1} type="radio" />Mężczyzna</label></div>
						<div><label class="edytuj-p-label" for="checked2"><input name="sex" id="checked2" value="Kobieta" {$checked2} type="radio" />Kobieta</label></div>
						
						<div class="edytuj-p-sr"><input class="center-left-button" type="submit" name="edytuj1" value="Zapisz" /></div>
					</form>
				</div>
				
				<div class="edytuj-p-right">
					{if $edytuj_profil eq 2}
						<div class="edytuj-p-success">Zmiany zostały pomyślnie zapisane</div>
					{else if $edytuj_profil eq 1}
						<div class="edytuj-p-label">Podczas zapisu wystąpiły błędy:</div>
						<ul id="ul1">
							{section name=showinfo loop=$minfo}
								<li>{$minfo[showinfo]}</li>
							{/section}
						</ul>
					{else}
						<div class="edytuj-p-label">Wypełnij formularz według wskazówek:</div>
						<ul id="ul2">
							<li>Numer gadu-gadu może składać się wyłącznie z liczb</li>
							<li>Aby ukryć wyświetlanie numeru gadu-gadu na stronie profilu użytkownika, usuń zawartość pola "GG"</li>
							<li>Opis nie może przekraczać 1000 znaków</li>
							<li>Aby ukryć wyświetlanie opisu na stronie profilu użytkownika, usuń zawartość pola "O sobie"</li>
						</ul>
					{/if}
				</div>
				
			{else if $page eq 'haslo'}
				<div class="edytuj-p-left">
					<form action="{$HTTP}user/edytuj-profil/haslo" method="post">
						<div class="edytuj-p-label">Aktualne hasło:</div>
						<div><input class="edytuj-p-edit" type="password" name="password1" maxlength="25" /></div>
						
						<div class="edytuj-p-label">Nowe hasło:</div>
						<div><input class="edytuj-p-edit" type="password" name="password2" maxlength="25" /></div>
						
						<div class="edytuj-p-label">Powtórz nowe hasło:</div>
						<div><input class="edytuj-p-edit" type="password" name="password3" maxlength="25" /></div>
						
						<div class="edytuj-p-sr"><input class="center-left-button" type="submit" name="edytuj2" value="Zapisz" /></div>
					</form>
				</div>
				
				<div class="edytuj-p-right">
					{if $edytuj_profil eq 2}
						<div class="edytuj-p-success">Zmiany zostały pomyślnie zapisane</div>
					{else if $edytuj_profil eq 1}
						<div class="edytuj-p-label">Podczas zapisu wystąpiły błędy:</div>
						<ul id="ul1">
							{section name=showinfo loop=$minfo}
								<li>{$minfo[showinfo]}</li>
							{/section}
						</ul>
					{else}
						<div class="edytuj-p-label">Wypełnij formularz według wskazówek:</div>
						<ul id="ul2">
							<li>Nowe hasło musi zawierać od 1 do 25 znaków</li>
						</ul>
					{/if}
				</div>
				
			{else if $page eq 'email'}
				<div class="edytuj-p-left">
					<form action="{$HTTP}user/edytuj-profil/email" method="post">
						<div class="edytuj-p-label">Aktualny e-mail:</div>
						<div><input class="edytuj-p-edit" type="text" name="email" maxlength="50" disabled="disabled" value="{$user.email}" /></div>
						
						<div class="edytuj-p-label">Nowy e-mail:</div>
						<div><input class="edytuj-p-edit" type="text" name="email1" maxlength="50" value="" /></div>
						
						<div class="edytuj-p-label">Powtórz nowy e-mail:</div>
						<div><input class="edytuj-p-edit" type="text" name="email2" maxlength="50" value="" /></div>
						
						<div class="edytuj-p-sr"><input class="center-left-button" type="submit" name="edytuj3" value="Zapisz" /></div>
					</form>
				</div>
				
				<div class="edytuj-p-right">
					{if $edytuj_profil eq 2}
						<div class="edytuj-p-success">Zmiany zostały pomyślnie zapisane</div>
					{else if $edytuj_profil eq 1}
						<div class="edytuj-p-label">Podczas zapisu wystąpiły błędy:</div>
						<ul id="ul1">
							{section name=showinfo loop=$minfo}
								<li>{$minfo[showinfo]}</li>
							{/section}
						</ul>
					{else}
						<div class="edytuj-p-label">Wypełnij formularz według wskazówek:</div>
						<ul id="ul2">
							<li>Nowe e-mail musi być prowidłowy, ponieważ posłuży on w celu odzyskania zapomnianego hasła</li>
						</ul>
					{/if}
				</div>
				
			{else if $page eq 'avatar'}
				<div class="edytuj-p-left">
					<div class="edytuj-p-label">Aktualny avatar:</div>
					<p><img src="{$HTTP}{$DATA}avatar/{$user.avatar}" alt="avatar" title="{$user.nick}" width="100px;" height="100px;" /></p>
						
					<form action="{$HTTP}user/edytuj-profil/avatar" method="post" enctype="multipart/form-data">
						<div class="edytuj-p-label">Nowy avatar:</div>
						<div><input class="edytuj-p-edit" type="hidden" name="MAX_FILE_SIZE" value="3145728" /></div>
						<div><input class="edytuj-p-file" type="file" name="avatar" /></div>
						
						<div class="edytuj-p-sr"><input class="center-left-button" type="submit" name="edytuj4" value="Zapisz" /></div>
					</form>
				</div>
				
				<div class="edytuj-p-right">
					{if $edytuj_profil eq 2}
						<div class="edytuj-p-success">Zmiany zostały pomyślnie zapisane</div>
					{else if $edytuj_profil eq 1}
						<div class="edytuj-p-label">Podczas zapisu wystąpiły błędy:</div>
						<ul id="ul1">
							{section name=showinfo loop=$minfo}
								<li>{$minfo[showinfo]}</li>
							{/section}
						</ul>
					{else}
						<div class="edytuj-p-label">Wypełnij formularz według wskazówek:</div>
						<ul id="ul2">
							<li>Minimalne wymiary obrazka: 80x80 px</li>
							<li>Dopuszczalne rozszerzenia: JPG, GIF, PNG</li>
							<li>Maksymalny rozmiar pliku: 3MB</li>
						</ul>
					{/if}
				</div>
			{/if}
		</div>
				
		<div class="center-right">
			<h1>Losowy film</h1>
		</div>	
		<div class="both"></div>
	</div>
{include file=$bottom}