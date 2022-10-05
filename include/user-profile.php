<?php 

add_action( 'show_user_profile', 'add_extra_pw_details' );
add_action( 'edit_user_profile', 'add_extra_pw_details' );

function add_extra_pw_details( $user ) {
	wp_enqueue_media();
    	wp_register_script( 'media-lib-uploader-js', get_template_directory_uri() . '/js/admin/mainadmin.js', array('jquery') );
    	wp_enqueue_script( 'media-lib-uploader-js' );
	?>
		<style>
			.frame-preview {
			    height: 200px;
			    width: 300px;
			    background-size: cover;
			    background-repeat: no-repeat;
			    margin: 5px 2px;
			}
		</style>
        <h3>Pemograman Web Team Details</h3>

        <table class="form-table">
		  <tr>
                <th><label for="main_photo">Main Photo</label></th>
                <td>
                	<div class="frame-preview" style="background-image:url('<?php echo esc_attr(get_the_author_meta( 'main_photo', $user->ID )); ?>');"></div>
                	<input id="image-url-main-photo" type="text" name="main_photo" value="<?php echo esc_attr(get_the_author_meta( 'main_photo', $user->ID )); ?>"  />
                    <input id="image-url-main-photo-id" type="hidden" name="main_photo_id" value="<?php echo esc_attr(get_the_author_meta( 'main_photo_id', $user->ID )); ?>"  />
  				<input id="upload-button-main-photo" type="button" class="button" value="Upload Image" />
           	</td>
            </tr>	
            <tr>
                <th><label for="profile">Profile Photo</label></th>
                <td>
                	<div class="frame-preview" style="background-image:url('<?php echo esc_attr(get_the_author_meta( 'profile_photo', $user->ID )); ?>');"></div>
                	<input id="image-url-profile-photo" type="text" name="profile_photo" value="<?php echo esc_attr(get_the_author_meta( 'profile_photo', $user->ID )); ?>" />
                    <input id="image-url-profile-photo-id" type="hidden" name="profile_photo_id" value="<?php echo esc_attr(get_the_author_meta( 'profile_photo_id', $user->ID )); ?>" />
  				    <input id="upload-button-profile-photo" type="button" class="button" value="Upload Image" />
                	<p class="description">For best experience, please using with background transparent</p>
           	</td>
            </tr>	
		  <tr>
                <th><label for="status_profile">Quote / Status</label></th>
                <td>
                	<input type="text" name="status_profile" value="<?php echo esc_attr(get_the_author_meta( 'status_profile', $user->ID )); ?>" class="regular-text" />
           	</td>
            </tr>

            <tr>
                <th><label for="facebook_profile">Facebook Username</label></th>
                <td>
                	<input type="text" name="facebook_profile" value="<?php echo esc_attr(get_the_author_meta( 'facebook_profile', $user->ID )); ?>" class="regular-text" />
                	<p class="description">Facebook Username like : "http://facebook.com/<b>username</b>"</p>
           	</td>
            </tr>

            <tr>
                <th><label for="twitter_profile">Twitter Username</label></th>
                <td>
                	<input type="text" name="twitter_profile" value="<?php echo esc_attr(get_the_author_meta( 'twitter_profile', $user->ID )); ?>" class="regular-text" />
                	<p class="description">Without "@"</p>
           	</td>
            </tr>
		<th><label for="instagram_profile">Instagram Username<label></th>
			<input type="text" name="instagram_profile" value="<?php echo esc_attr(get_the_author_meta( 'instagram_profile', $ure->ID )); ?>" class="regular-txt" />
			<p class="description">Without "@"</p>
		</td>
			
 
            <tr>
                <th><label for="linkendin_profile">Linked in</label></th>
                <td>
                	<input type="text" name="linkendin_profile" value="<?php echo esc_attr(get_the_author_meta( 'linkendin_profile', $user->ID )); ?>" class="regular-text" />
                	<p class="description">Put full public URL</p>
           	</td>
            </tr>
            <tr>
                <th><label for="github_profile">Github Username</label></th>
                <td>
                	<input type="text" name="github_profile" value="<?php echo esc_attr(get_the_author_meta( 'github_profile', $user->ID )); ?>" class="regular-text" />
                	<p class="description">Github Username like : "http://github.com/<b>username</b>"</p>
           	</td>
            </tr>
        </table>
    <?php
}

add_action( 'personal_options_update', 'save_extra_pw_details' );
add_action( 'edit_user_profile_update', 'save_extra_pw_details' );

	function save_extra_pw_details( $user_id ) {
		update_user_meta( $user_id,'status_profile', sanitize_text_field( $_POST['status_profile'] ) );
		update_user_meta( $user_id,'facebook_profile', sanitize_text_field( $_POST['facebook_profile'] ) );
		update_user_meta( $user_id,'twitter_profile', sanitize_text_field( $_POST['twitter_profile'] ) );
		update_user_meta( $user_id,'instagram_profile', sanitize_text_field($_POST['instagram_profile'] ) );
		update_user_meta( $user_id,'linkendin_profile', sanitize_text_field( $_POST['linkendin_profile'] ) );
		update_user_meta( $user_id,'github_profile', sanitize_text_field( $_POST['github_profile'] ) );
		update_user_meta( $user_id,'main_photo', sanitize_text_field( $_POST['main_photo'] ) );
        update_user_meta( $user_id,'main_photo_id', sanitize_text_field( $_POST['main_photo_id'] ) );
		update_user_meta( $user_id,'profile_photo', sanitize_text_field( $_POST['profile_photo'] ) );
        update_user_meta( $user_id,'profile_photo_id', sanitize_text_field( $_POST['profile_photo_id'] ) );
	}
?>
