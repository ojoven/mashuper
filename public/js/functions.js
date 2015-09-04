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
		$(".form_concept").addClass('to-white');

		var url = urlBase + '/concepts/load';
		$.get(url, {}, function(data) {
			responseLoadNewConcepts(data);
		});
		return false;
	});
}

function responseLoadNewConcepts(data) {
	$("#concept_1").val(data.concept_1);
	$("#concept_2").val(data.concept_2);
	$(".form_concept").removeClass('to-white');
}

function toAddMashup() {
	$("#to-add-mashup").click(function(e){
		var concept_1 = $("#concept_1").val();
		var concept_2 = $("#concept_2").val();
		var mashup = $("#mashup").val();
		if (concept_1.trim()=='' || concept_2.trim()=='' || mashup.trim()=='') {
			alert("You've left any of the fields empty. Please fill all of them.");
			e.preventDefault();
			return false;
		}
	});
}

function toFavMashup() {
	$("#to-fav-mashup").click(function(e){
		var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
		var url = urlBase + '/mashups/fav';
		$.post(url, {
			fav: $(this).data('fav'),
			mashup_id: $(this).data('mashup'),
			_token: CSRF_TOKEN
		}, function(response) {
			console.log(response);
		});
	});
}

$(document).ready(function() {
	toLoadNewConcepts();
	toAddMashup();
	toFavMashup();
	toAddConcept();
});