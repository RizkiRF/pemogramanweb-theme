<?php 
    $author = get_user_by( 'slug', get_query_var( 'author_name' ) );
    $userID = $author->ID;
    $the_query = new WP_Query( 'author=' . $userID );
    if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();              ?>
       
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