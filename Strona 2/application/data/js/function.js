$(document).ready(function()
{
	$(".center-left").height($(".center-right").height() - 110);
	q();
	usun();
	wyloguj();
	ukryj_info();
	max_znakow();
	reklama();
});

function reklama()
{
	if(/^.*\.cba\.pl.*/.test(self.location.href)) //cba.pl
	{

		$("div:first").css("display", "none");
		$(".cbalink").text("");
	}
	if(/^.*\.iscool\.pl.*/.test(self.location.href)) //osemka.pl
	{
		$("iframe:first").css("display", "none");
		$("img:last").css("display", "none");
	}
}

function q()
{
	$("form[name=q] input[name=tytul]").bind("focus", function(){if($(this).val() == 'Wpisz tytuł filmu...') $(this).val('')});
	$("form[name=q] input[name=tytul]").bind("blur", function(){if($(this).val() == '') $(this).val('Wpisz tytuł filmu...')});
}

function wyloguj()
{
	$(".user-menu a:last").bind("click", function()
	{
		createCookie("wyloguj", "1", 1)
		document.location = "";
	});
}

function ukryj_info()
{
	$(".info-x").bind("click", function()
	{
		$(".info").slideToggle(600);
	});
}

function usun()
{
	$(".edytuj-p-menu li:last").bind("click", function()
	{
		if(confirm('Czy napewno usunąć konto?'))
		{
			createCookie("wyloguj", "1", 1)
			document.location = "./index.php";
		}
	});
}

function max_znakow()
{
	$("form[name=edytuj-p-profil] textarea[name=o_sobie]").bind("keyup keypress", function()
	{
		var limit = 1000;
		var count_chars = $(this).val().length;
		if (count_chars > limit)
		{
			var new_value = $(this).val().substring(0, limit);
			$(this).val(new_value)
		}
		$(".znaki").html('<b>Pozostało znaków:</b> '+String(limit - $(this).val().length));
	});
}

function createCookie(name, value, days)
{
	if (days)
	{
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name)
{
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++)
	{
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}

function deleteCookie(name)
{
	createCookie(name,"",-1);
}