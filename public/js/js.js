$('input[name="nacimiento"]').daterangepicker({
	singleDatePicker: true,
	showDropdowns: true,
	format: 'YYYY-MM-DD'
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
	if($('input[name="password"]').val() != $('input[name="repassword"]').val()){
		alert('El password no coincide');
		return false;
	}
	var postData = new FormData();
	var files = $('input[name="foto"]').prop('files')[0];
    postData.append( 'image',files);

    $('input[type="email"],input[type="text"],input[type="password"]').each(function(index, el) {
    	postData.append(el.name,el.value);
    });

    $.ajax({
	    url : $('#register').attr('action'),
	    type: "POST",
	    data : postData,
	    processData: false,
	    contentType: false,
	    success:function(data, textStatus, jqXHR){
	        console.log(data);
	    },
	    error: function(jqXHR, textStatus, errorThrown){
				//if fails     
		}
	});
	/*$.post(,{contenttype:false, processdata:false,data : data}, function(data, textStatus, xhr) {
		console.log(data);
	});*/
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