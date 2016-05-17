
	// ************************************ //
	//										//
	// 				fonctions				//
	//										//
	// ************************************ //

var verticalAlignCenter = function(element) {

	$(element).each(function() {
		var $elem = $(this);
		var elemHeight = $(element).height();
		if (elemHeight == 0) { return; }

		var marginTop = Math.floor(($(window).height() - elemHeight) / 2);

		if (marginTop > 0) {
			$(element).css("margin-top", marginTop);
		}
	});

}


var display = function(element1, element2) {


	$(element1).click(function() {

		$(element2).toggle();

		if ($(element2).css('display') == 'block') {
			$(this).css('border-radius','15px 15px 0 0');
		}

		else {
			$(this).css('border-radius','15px 15px 15px 15px');
		}
	});
}

var textareaDisplay = function(inputName1, inputName2, textarea) {


	$(inputName1).click(function(){

		$(textarea).css('display','block');

	});

	$(inputName2).click(function(){

		$(textarea).css('display','none');

	});

}

var reloadResize = function() {
	$(window).resize(function(){location.reload();});
}


	// ************************************ //
	//										//
	// 			fin de fonctions			//
	//										//
	// ************************************ //




$(document).ready(function() {

	


	// Page login en fonction de la taille d'écran

	if ($(window).width() < 1200) {

		display('.bloc_first_co .login_head', '.form_first_co');

		display('.bloc_connexion .login_head', '.form_login');
	   
	}

	else {

	   $('.form_first_co').css('display', 'block');
	   $('.form_login').css('display', 'block');
	   $('.bloc_first_co .login_head').css('border-radius', '15px 15px 0 0');
	   $('.bloc_connexion .login_head').css('border-radius', '15px 15px 0 0');

	}

	// ************************************ //
	//										//
	// 			appel de fonction			//
	//										//
	// ************************************ //

	verticalAlignCenter(".vertical_align");
	reloadResize();
	textareaDisplay('input[name="regime"]:eq(0)', 'input[name="regime"]:eq(1)', 'textarea[name="aliment_specs"]');
	textareaDisplay('input[name="enfants"]:eq(0)', 'input[name="enfants"]:eq(1)', 'textarea[name="enfants_name"]');


	// ************************************ //
	//										//
	// 		fin d'appel de fonction			//
	//										//
	// ************************************ //

	
	



	

});








