/** CONCEPTS **/
function toAddConcept() {
	$("#to-add-concept").click(function() {
		var concept = $("#concept").val();
		if (concept.trim()=='') {
			alert("Emptiness as a concept...mmmm, it's interesting. \But please, enter a word.");
		} else {
			addConcept(concept);
		}
	});
}

function addConcept(concept) {
	var url = urlBase + '/concepts/add';
	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

	$.post(url, {
		concept:concept,
		_token: CSRF_TOKEN
	}, function(data) {
		responseAddConcept(data);
	});
	return false;
}

function responseAddConcept(data) {

	if (data.valid) {
		$("#concept").val('');
		numConcepts++;
		$("#concept-table-body").prepend('<tr><td>'+numConcepts+'</td><td>'+data.concept+'</td></tr>');
	} else {
		alert('That concept was already added, please enter a new one.');
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
	toAddConcept();
});