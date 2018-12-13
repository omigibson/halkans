jQuery(function($){
	$('#filter').change(function(){
		var filter = $('#filter');
		$.ajax({
			url:filter.attr('action'),
			data:filter.serialize(), // form data
			type:filter.attr('method'), // POST
			beforeSend:function(xhr){
				filter.find('p').text('Processing...'); // changing the button label
			},
			success:function(data){
				filter.find('p').text('Apply filter'); // changing the button label back
				$('#main').html(data); // insert data
			}
		});
		return false;
	});
});
