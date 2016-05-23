$(document).ready(function(){

	function addNewGest(nom, prenom){
		$('#guestList').append(''+
			'<article class="draggable">'+
			'<p class="nom">' + nom + '<p>'+
			'<p class="prenom">' + prenom + '</p>'+
			'</article>'
			)
	}

	$( ".droppable" ).droppable({
		drop: function( event, ui ) {
		$( this )
		.addClass( "ui-state-highlight" );
		// .find( "p" )
		// .html( "Dropped!" );

		console.log( $('.ui-draggable-dragging .nom').text() + ' ' + $('.ui-draggable-dragging .prenom').text() + ' ' + $(this).text());




		console.log('Numéro de chaise');
		var $newPosX = ui.offset.left - $(this).offset().left;
        var $newPosY = ui.offset.top - $(this).offset().top;
        console.log($newPosX);
        console.log($newPosY);
		}
	});

	$.ajax({
		type: 'GET',
		url: 'assets/json/data.json',
		dataType: 'json',

		success: function(data){
			for(var i=0; i<data.length; i++){
				console.log(data[i]);
				addNewGest(data[i].lastname, data[i].firstname);
			}
		},
		error: function(){
			console.log('Bad Request...');
		},
		complete: function(){
			$( ".draggable" ).draggable();
		}
	})



})