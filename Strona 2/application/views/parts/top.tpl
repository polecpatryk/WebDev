<div class="top">
	{if $login neq true}
		<div class="log-form">
			<form action="{$HTTP}user/loguj" method="post">	
				<div><input class="log-edit1" type="text" name="nick" maxlength="20" /></div>
				<div><input class="log-edit2" type="password" name="password" maxlength="25" /></div>
				<div><input class="log-button" type="submit" name="zaloguj" value=" " /></div>
			</form>
			<div class="log-text">Nie pamiętasz hasła? <a href="{$HTTP}przypomnij-haslo">Kliknij!</a></div>
			<div class="log-text">Nie masz konta? <a href="{$HTTP}rejestracja">Zarejestruj się!</a></div>
		</div>
		<div class="both"></div>
	{else}
		<div class="user-panel">
			<div class="user-avatar">
				<a href="{$HTTP}profil/{$user.id}/{$user.nick}"><img class="no-border" src="{$HTTP}{$DATA}avatar/{$user.avatar}" alt="" title="{$user.nick}" /></a>
			</div>
			
			<div class="user-header">{$user.nick}</div>
			
			<div class="user-menu">
				<ul>
					<li><a href="{$HTTP}edytuj-profil">Edytuj profil</a></li>
					<li><a href="{$HTTP}wiadomosci">Wiadomości</a></li>
					<li><a href="{$HTTP}user/wyloguj">Wyloguj</a></li>
				</ul>
			</div>
		</div>
		<div class="both"></div>
	{/if}
	
	<div class="q">
		<form name="q" action="{$HTTP}szukaj" method="post">	
			<div><input class="q-edit" type="text" name="tytul" maxlength="80" value="Wpisz tytuł filmu..." /></div>
			<div><input class="q-button" type="submit" name="szukaj" value="Szukaj" /></div>
		</form>
	</div>
	
	<div class="menu-g">
		<ul>
			<li><a href="{$HTTP}index">Strona główna</a></li>
			<li><a href="{$HTTP}filmy">Filmy</a></li>
			<li><a href="{$HTTP}seriale">Seriale</a></li>
			<li><a href="{$HTTP}tagi">Tagi</a></li>
			<li><a href="{$HTTP}dodaj">Dodaj film</a></li>
		</ul>
	</div>
</div>

{if $info.tresc neq ''}
	<div class="info">
		{if $info.typ eq 'E'} 	
			<div class="info-text-error">{$info.tresc}<img src="{$HTTP}{$DATA}images/info-x1.png" alt="x" title="" class="info-x" /></div>
		{else if $info.typ eq 'S'}
			<div class="info-text-success">{$info.tresc}<img src="{$HTTP}{$DATA}images/info-x2.png" alt="x" title="" class="info-x" /></div>
		{/if}
	</div>
{/if}
	