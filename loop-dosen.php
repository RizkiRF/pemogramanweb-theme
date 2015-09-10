<?php 
    $users = get_users( 'nicename&role=editor' );
    if($users) : foreach ( $users as $user ) :
?>
    <div class="col-md-4 person">
        <div class="frame">
            <a href="<?php echo get_author_posts_url( $user->ID ); ?>">
                <img src="<?php echo get_the_author_meta( 'profile_photo',$user->ID); ?>" alt="Person">
            </a>
            <div class="caption">
                <div class="bubble-center animated bounceIn">
                    <span>Hai, Nama Saya <strong><?php echo $user->display_name; ?></strong> Kalian bisa temukan saya di</span>
                    <div class="social-color" style="display:inline-block;">
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
    </div>
<?php endforeach; endif; ?>