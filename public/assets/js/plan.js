$(document).ready(function(){

	var planTable = [];

	function addNewGest(nom, prenom, place){
		$('#guestList').append(''+
			'<article class="draggable">'+
			'<p class="nom">' + nom + '<p>'+
			'<p class="prenom">' + prenom + '</p>'+
			'</article>'
			)
	}

	var list = new Array();

	$( ".droppable" ).droppable({
		drop: function( event, ui ) {

		console.log($('.ui-draggable-dragging').text());
		console.log( $(this).find('.placeNumber').text() );

		var userName = $('.ui-draggable-dragging').text();
		var userPlace = $(this).find('.placeNumber').text();

		planTable[userPlace].guest = userName;
		console.log(planTable);
		
		}
	});


	$.ajax({
		type: 'GET',
		url: 'assets/json/data.json',
		dataType: 'json',

		success: function(data){
			for(var i=0; i<data.length; i++){
	
				addNewGest(data[i].lastname, data[i].firstname);

				planTable.push({place:i, guest:0});
			}
		},
		error: function(){
			console.log('Bad Request...');
		},
		complete: function(){
			$( ".draggable" ).draggable();
		}
	})


	// $.ajax({
	// 	url:'app/templates/default/plan.php',
	// 	type:'post',
	// 	data:{ json: "hello" },

	// 	success:function(data){
	// 	//réponse du serveur
	// 	},
	// 	error: function(){
	// 		console.log('Bad Request...');
	// 	},
	// 	complete: function(){
	// 		console.log('complete');
	// 	}
	
	// });




})