
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

	$('.first_co').click(function () {
      $(this).parent().hide();
      $('.bloc_first_co .login_head').css('border-radius','15px 15px 0 0');
      $('.bloc_first_co').show("slide", { direction: "left" }, 1000);
	});
	

	$('.connexion').click(function () {
      $(this).parent().hide();
      $('.bloc_connexion .login_head').css('border-radius','15px 15px 0 0');
      $('.bloc_connexion').show("slide", { direction: "right" }, 1000);
	});





	// ************************************ //
	//										//
	// 			appel de fonction			//
	//										//
	// ************************************ //

	verticalAlignCenter(".vertical_align");
	reloadResize();
	textareaDisplay('input[name="regime"]:eq(0)', 'input[name="regime"]:eq(1)', 'textarea[name="aliment_specs"]');
	textareaDisplay('input[name="enfants"]:eq(0)', 'input[name="enfants"]:eq(1)', '#bloc_child');


	// ************************************ //
	//										//
	// 		fin d'appel de fonction			//
	//										//
	// ************************************ //

	
	



	

});








