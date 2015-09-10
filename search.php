<?php 
get_header(); ?>
    <section id="blog" class="section blog pd-btm">
        <div class="container">
            <div class="row pd-btm">
                <div class="col-md-12 text-center">
                    <h2 class="title-link">Hasil Pencarian Dari : <?php echo get_search_query(); ?></h2>
                </div>
            </div>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="col-md-4">
                    <div class="posts">
                        <?php 
                            if ( has_post_thumbnail() ) :
                                // the_post_thumbnail('pw-blog'); 
                                $post_thumbnail_id = get_post_thumbnail_id();
                                $post_thumbnail_url = wp_get_attachment_image_src($post_thumbnail_id,'pw-blog', true);
                        ?>
                            <div class="frame" style="background-image:url('<?php echo $post_thumbnail_url[0]; ?>');"></div>
                        <?php else :?>
                            <div class="frame" style="background-image:url('https://placeholdit.imgix.net/~text?txtsize=33&txt=Thumbs&w=300&h=200');"></div>
                        <?php endif; ?>
                        <div class="meta">
                            <span class="date"><?php the_date('j M y'); ?></span>
                            <a href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                            </a>
                        </div>    
                    </div>
                </div>
            <?php endwhile; ?>
            <?php else: ?>
                <div class="row">
                    <div class="col-md-6 col-md-push-3">
                        <div class="text-center">
                            Belum Ada Tulisan
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php get_footer(); ?>