$(document).ready(function()
{
	hideMenu();
	scrollNav();
	scrollTop();
	email();
	
	$('div:last').css("display", "none");
	
	//heightContent();
});

$(window).on("load", function (e)
{
	$(".loader").fadeOut();
	$("body").css("overflow", "visible");
})

function hideMenu()
{	
	$(window).scroll(function()
	{
			if($(window).scrollTop() > 30)
			{
				if($(".slider").css("display") != "none") $(".header-top").fadeOut();
			}
		    else
			{
				if($(".slider").css("display") != "none") $(".header-top").fadeIn();
			}
	});	
}

function scrollNav()
{
	$('.nav-links').click(function (e) 
	{
        e.preventDefault();
        var getLink = $(this).attr('href'),
            goTop = $(getLink).offset().top;
        
        scrollTopAnimation(goTop);
    });
}

function scrollTop()
{
	$(".top").click(function()
	{
		scrollTopAnimation(0); 
	});
}

function scrollTopAnimation(goTop) 
{
    $('html, body').animate({scrollTop: goTop}, 800);
}

function heightContent()
{	
	$(".slider-frame img").height($(window).height());
	
	$("#oferta").height($(window).height());
	$("#terminy").height($(window).height());
	$("#cennik").height($(window).height());
	$("#kontakt").height($(window).height());
}

function email()
{
	$("input[name=send]").click(function()
	{
		var pattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

		if($("input[name=name]").val() !== "" && $("input[name=email]").val() !== "" && $("textarea[name=content]").val() !== "" && pattern.test($("input[name=email]").val()))
		{
			$.ajax({
				type: "POST",
				url: "http://www.cyklinowanie.org/assets/php/send.php",
				data: "title=" + $("input[name=name]").val() + " - " + $("title").html() + "&email=" + $("input[name=email]").val() + "&content=" + $("textarea[name=content]").val(),
				complete: function()
				{
					$("input[name=name]").val("");
					$("input[name=email]").val("");
					$("textarea[name=content]").val("");
					alert("Wiadomość została wysłana.");
				}
			});
		}
		else
		{
			alert("Najpierw wypełnij wszystkie pola.");
		}
	});
}