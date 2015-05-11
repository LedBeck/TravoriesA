$('input[name="nacimiento"]').daterangepicker({
	singleDatePicker: true,
	showDropdowns: true
});

var substringMatcher = function(strs) {
	return function findMatches(q, cb) {
		var matches, substringRegex;

		// an array that will be populated with substring matches
		matches = [];

		// regex used to determine if a string contains the substring `q`
		substrRegex = new RegExp(q, 'i');

		// iterate through the pool of strings and for any string that
		// contains the substring `q`, add it to the `matches` array
		$.each(strs, function(i, str) {
			if (substrRegex.test(str)) {
				matches.push(str);
			}
		});

		cb(matches);
	};
};
$.getJSON("getNacionalidades", function(nacionalidades) {
	$('input[name="nacionalidad"]').typeahead({
		hint: true,
		highlight: true,
		minLength: 1
	}, {
		name: 'nacionalidades',
		source: substringMatcher(nacionalidades)
	});
});
$('#register').on('submit',function(evt){
	evt.preventDefault();
	data = new FormData();
    data.append( 'file', $( 'input[name="foto"]' )[0].files[0] );
    // data.append('form',$('#register').serialize());
	$.post($('#register').attr('action'),data, function(data, textStatus, xhr) {
		console.log(data);
	});
	return false;
})
$('input[name="foto"]').fileinput({
	showUpload: false,
	// showCaption: true,
	browseClass: "btn btn-primary",
	language: 'es',
	allowedFileExtensions : ['jpg', 'png','gif'],
	previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
});