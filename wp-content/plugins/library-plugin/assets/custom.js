var ajax_url = ajax_data.ajax_url
jQuery(document).ready(function(){
	jQuery('.search-btn').on('click',function(){
		var form_data = jQuery(this).parents('form.book-filter').serialize();
		book_ajax(form_data);
	});
	book_ajax();
});


function book_ajax(form_data = null) {
	jQuery.ajax({
		url: ajax_url,
		type: "POST",
		dataType: "JSON",
		data: {
			'action': 'book_search',
			'form_data': form_data
		},
		success: function(data) {
			jQuery('.book-listing').find('tbody').html(data.html);
			// alert(jQuery('.book-filter').find('tbody').length);
		},
		error: function() {
			alert('something went wrong');
		},
		complete: function() {}
	});
}
