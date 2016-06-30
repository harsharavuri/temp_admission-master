/*$(function() {
	$('#signup-upload').click(function(e) {
		
		e.preventDefault();
		$.AjaxFileUpload({
			url	 			:'./registration/upload_file/', 
			secureuri		:false,
			fileElementId	:'Image',
			dataType		: 'JSON',
			
			success	: function (data, status)
			{
				console.log('yo');
		
				if(data.status != 'error')
				{
					$('#files').html('<p>Reloading files...</p>');
					
					//refresh_files();
					$('#title').val('');
				}else{
					
				}
				alert(data.msg);
			}
		});
		return false;
	});
});*/