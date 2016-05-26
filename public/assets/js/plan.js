$(document).ready(function(){

	var planTable = [];
	

	function addNewGuest(nom, prenom){
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



			// console.log($('.ui-draggable-dragging .nom').text());
			// console.log( $(this).find('.placeNumber').text() );

			var userName = $('.ui-draggable-dragging .nom').text();
			var userFirstName = $('.ui-draggable-dragging .prenom').text();
			var userPlace = $(this).find('.placeNumber').text();



			count = 0;
			stock = 0;

			for (var i=0; i<planTable.length; i++) { 
		   		if(count = 1) {
		   			stock = i;
		   		}
			   	if (planTable[i].guestL == userName && planTable[i].guestF == userFirstName) {
			   		console.log("c'est bon, index :"+i);
			   		count++;

			   		if(count > 1) {
			   			planTable[stock].guestL = 0;
			   			planTable[stock].guestF = 0;
			   		}

			   	}
			   	else {
					console.log('pas bon');
				}
			   
			}

			planTable[userPlace].guestF = userFirstName;
			planTable[userPlace].guestL = userName;
			console.log(planTable);


			console.log(count);
			
		}
	});


	$.ajax({
		type: 'GET',
		url: 'assets/json/data.json',
		dataType: 'json',

		success: function(data){

			for (var j = 0; j <= 32; j++) {

				planTable.push({place:j, guestF:0, guestL:0});

			}

			for(var i=0; i<data.length; i++){
	
				addNewGuest(data[i].lastname, data[i].firstname);
			}
		},
		error: function(){
			console.log('Bad Request...');
		},
		complete: function(){
			$( ".draggable" ).draggable();
		}
	})

	$('.valider').click(function(){

		console.log("helloooo");

		$.ajax({
			url:'http://localhost:8888/plan',
			type:'POST',
			data:({planTable:planTable}),

			success:function(data){
				alert(data);
			},
			error: function(){
				console.log('Bad Request...');
			},
			complete: function(){
				console.log('complete');
			}
		
		});

	});





})