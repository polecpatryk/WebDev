{include file=$header}
{include file=$top}
	<div class="center">
		<div class="center-left">
			<h1>Rejestracja</h1>
			<div class="reje-left">
				<form action="{$HTTP}user/rejestruj" method="post">
					<div class="reje-label">Nick:</div>
					<div><input class="reje-edit" type="text" name="nick" maxlength="20" value="" /></div>
					
					<div class="reje-label">Hasło:</div>
					<div><input class="reje-edit" type="password" name="password1" maxlength="25" value="" /></div>

					<div class="reje-label">Powtórz hasło:</div>
					<div><input class="reje-edit" type="password" name="password2" maxlength="25" value="" /></div>

					<div class="reje-label">Adres e-mail:</div>
					<div><input class="reje-edit" type="text" name="email" maxlength="50" value="" /></div>
					
					<div class="reje-sr"><input class="center-left-button" type="submit" name="rejestruj" value="Zarejestruj" /></div>
				</form>
			</div>

			<div class="reje-right">
				{if $register eq 2}
					<div class="reje-success">Rejestracja konta przebiegła pomyślnie. Na podany adres e-mail, została wysłana wiadomość z linkiem aktywującym konto.</div>
				{else if $register eq 1}
					<div class="reje-label">Podczas rejestracji wystąpiły błędy:</div>
					<ul id="ul1">
						{section name=showinfo loop=$minfo}
							<li>{$minfo[showinfo]}</li>
						{/section}
					</ul>
				{else}
					<div class="reje-label">Wypełnij formularz według wskazówek:</div>
					<ul id="ul2">
						<li>Nick może się składać wyłącznie ze znaków: [a-z], [A-Z], [0-9], kropki i _</li>
						<li>Nick musi zawierać od 1 do 20 znaków</li>
						<li>Hasło musi zawierać od 1 do 25 znaków</li>
						<li>Adres e-mail musi być poprawny, ponieważ po udanej rejestracji zostanie na niego wysłana wiadomość z linkiem aktywującym konto</li>
					</ul>
				{/if}
			</div>
			<div class="both"></div>
		</div>
				
		<div class="center-right">
			<h1>Losowy film</h1>
		</div>	
		<div class="both"></div>
	</div>
{include file=$bottom}