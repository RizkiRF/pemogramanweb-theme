<?php 
    $users = get_users( 'nicename&role=author' );
    foreach ( $users as $user ) :
?>
<div class="col-md-3 person">
    <div class="frame">
        <a href="<?php echo get_author_posts_url( $user->ID ); ?>">
            <div class="display-picture" style="background-image:url('<?php echo wp_get_attachment_image_src( get_the_author_meta('profile_photo_id',$user->ID), 'medium')[0]; ?>');">
            </div>
        </a>
        <div class="caption">
            <a href="<?php echo get_author_posts_url( $user->ID ); ?>"><?php echo $user->display_name; ?></a>
            <div class="social-color">
                &nbsp;
                <?php if(get_the_author_meta( 'facebook_profile',$user->ID)) : ?>
                  <a target="_new" href="http://www.facebook.com/<?php echo get_the_author_meta( 'facebook_profile',$user->ID); ?>" class="facebook"><i class="fa fa-facebook"></i></a>
                  &nbsp;
              <?php endif; ?>
              <?php if(get_the_author_meta( 'twitter_profile',$user->ID)) : ?>
                  <a target="_new" href="http://www.twitter.com/<?php echo get_the_author_meta( 'twitter_profile',$user->ID) ?>" class="twitter"><i class="fa fa-twitter"></i></a>
                  &nbsp;
                 <?php endif; ?>
                 <?php if(get_the_author_meta( 'linkendin_profile',$user->ID)) : ?>
                  <a target="_new" href="<?php echo get_the_author_meta( 'linkendin_profile',$user->ID); ?>" class="linkedin"><i class="fa fa-linkedin"></i></a>
                  &nbsp;
                 <?php endif; ?>
                 <?php if(get_the_author_meta( 'github_profile',$user->ID)) : ?>
                  <a target="_new" href="http://github.com/<?php echo get_the_author_meta( 'github_profile',$user->ID); ?>"><i class="fa fa-github"></i></a>
                  &nbsp;
                 <?php endif; ?>
                 <?php if (get_the_author_meta('url',$user->ID)): ?>
                  <a target="_new" href="<?php echo get_the_author_meta( 'url' ,$user->ID); ?>" class="linkedin"><i class="fa fa-link"></i></i></a> 
                  &nbsp;   
                 <?php endif ?>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>