//Load jQuery
jQuery(document).ready(function($){

//Load
	var mediaUploader;

	$( '#upload-button' ).on('click',function(e) {
		e.preventDefault();
		if( mediaUploader ){
			mediaUploader.open();
			return;
		}
		
		mediaUploader = wp.media.frames.file_frame = wp.media({
			title: ' Choose a Profile Picture',
			button: {
				text: 'Choose Picture'
			},
			multiple: false
		});

		mediaUploader.on('select', function(){
			attachment = mediaUploader.state().get('selection').first().toJSON();
			$('#profile-picture').val(attachment.url);
			$('#profile-picture-preview').css('background-image', 'url(' + attachment.url + ')');
		});

		mediaUploader.open();

	});
	$('#remove-picture').on('click',function(e){
		e.preventDefault();
		//pre build popup from javascript if true; remove the profile picture
		var answer = confirm("Are you sure you want to remove your Profile Picture?");
		if( answer == true ){
			$('#profile-picture').val('');
				$('.test-general-form').submit();
		} else {
			console.log('no, omg please don/t!'); // Need don/t! to make it popup
		}
		return; //prevent to continue to run
	});
});