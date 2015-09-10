jQuery(document).ready(function($) {

    var mediaUploader_main_photo;

    $('#upload-button-main-photo').click(function(e) {
        e.preventDefault();
        // If the uploader object has already been created, reopen the dialog
        if (mediaUploader_main_photo) {
            mediaUploader_main_photo.open();
            return;
        }
        // Extend the wp.media object
        mediaUploader_main_photo = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });

        // When a file is selected, grab the URL and set it as the text field's value
        mediaUploader_main_photo.on('select', function() {
            attachment = mediaUploader_main_photo.state().get('selection').first().toJSON();
            $('#image-url-main-photo').val(attachment.url);
        });
        // Open the uploader dialog
        mediaUploader_main_photo.open();
    });

    var mediaUploader_profile_photo;

    $('#upload-button-profile-photo').click(function(e) {
        e.preventDefault();
        // If the uploader object has already been created, reopen the dialog
        if (mediaUploader_profile_photo) {
            mediaUploader_profile_photo.open();
            return;
        }
        // Extend the wp.media object
        mediaUploader_profile_photo = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });

        // When a file is selected, grab the URL and set it as the text field's value
        mediaUploader_profile_photo.on('select', function() {
            attachment = mediaUploader_profile_photo.state().get('selection').first().toJSON();
            $('#image-url-profile-photo').val(attachment.url);
        });
        // Open the uploader dialog
        mediaUploader_profile_photo.open();
    });


});
