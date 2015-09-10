<?php 
get_header();
$author = get_user_by( 'slug', get_query_var( 'author_name' ) );
$userID = $author->ID;
?>
	<section id="profile" style="background-image:url('<?php echo get_the_author_meta( 'main_photo',$userID); ?>');">
        <div class="bio">
            <h1><?php the_author_meta('display_name',$userID); ?></h1>
            <h2>Web Developer</h2>
            <p><?php the_author_meta('description',$userID); ?></p>
            <div class="social-color">
               <?php if(!empty(get_the_author_meta( 'facebook_profile',$userID))) : ?>
               	<a target="_new" href="http://www.facebook.com/<?php echo get_the_author_meta( 'facebook_profile,$userID'); ?>" class="facebook"><i class="fa fa-facebook"></i></a>
           	<?php endif; ?>
			<?php if(!empty(get_the_author_meta( 'twitter_profile',$userID))) : ?>
               	<a target="_new" href="http://www.twitter.com/<?php echo get_the_author_meta( 'twitter_profile,$userID') ?>" class="twitter"><i class="fa fa-twitter"></i></a>
               <?php endif; ?>
               <?php if(!empty(get_the_author_meta( 'linkendin_profile',$userID))) : ?>
               	<a target="_new" href="<?php echo get_the_author_meta( 'linkendin_profile,$userID'); ?>" class="linkedin"><i class="fa fa-linkedin"></i></a>
               <?php endif; ?>
               <?php if(!empty(get_the_author_meta( 'github_profile',$userID))) : ?>
               	<a target="_new" href="http://github.com/<?php echo get_the_author_meta( 'github_profile,$userID'); ?>"><i class="fa fa-github"></i></a>
               <?php endif; ?>
               <?php if (get_the_author_meta('url',$userID)): ?>
               	<a target="_new" href="<?php echo get_the_author_meta( 'url,$userID' ); ?>" class="linkedin"><i class="fa fa-link"></i></i></a>    
               <?php endif ?>
            </div>
        </div>
    </section>
    <section id="blog" class="section blog pd-btm">
        <div class="container">
            <div class="row pd-btm">
                <div class="col-md-12 text-center">
                    <h2 class="title-link"><a href="#">TULISAN</a></h2>
                </div>
            </div>
            <div class="row">
               <?php get_template_part('loop','author-blog'); ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>