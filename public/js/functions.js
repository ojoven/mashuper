/** CONCEPTS **/
function toAddConceptEvent() {
	$("#to-add-concept").click(function() {
		var concept = $("#concept").val();
		if (concept.trim()=='') {
			alert('El vacío como concepto...es interesante.\nPero introduce una palabra, por favor.');
		} else {
			addConcept(concept);
		}
	});
}

function addConcept(concept) {
	var url = urlBase + '/concepts/add';
	$.post(url, {
		concept:concept
	}, function(data) {
		responseAddConcept(data);
	});
	return false;
}

function responseAddConcept(data) {
	data = eval('(' + data + ')');
	if (data.valid) {
		$("#concept").val('');
		numConcepts++;
		$("#concept-table-body").prepend('<tr><td>'+numConcepts+'</td><td>'+data.concept+'</td></tr>');
	} else {
		alert('Ese concepto ya está añadido');
	}
	$("#concept").focus();
	return false;
}

/** MASHUPS **/
function toLoadNewConcepts() {
	$("#to-load-new-concepts").click(function() {
		$("#concept1").animate({ color:'#ffffff' }, 400);
		$("#concept2").animate({ color:'#ffffff' }, 400);

		var url = urlBase + '/concepts/load';
		$.post(url, {

		}, function(data) {
			responseLoadNewConcepts(data);
		});
		return false;
	});
}

function responseLoadNewConcepts(data) {
	data = eval('(' + data + ')');
	$("#concept1").val(data.concept1);
	$("#concept1").animate({ color:'#444444' }, 400);

	$("#concept2").val(data.concept2);
	$("#concept2").animate({ color:'#444444' }, 400);
}

function toAddMashup() {
	$("#to-add-mashup").click(function(e){
		var concept1 = $("#concept1").val();
		var concept2 = $("#concept2").val();
		var mashup = $("#mashup").val();
		if (concept1.trim()=='' || concept2.trim()=='' || mashup.trim()=='') {
			alert("You've left any of the fields empty. Please fill all of them.");
			e.preventDefault();
			return false;
		}
	});
}

$(document).ready(function() {
	toLoadNewConcepts();
	toAddMashup();
});