<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h1 class="title"><?php the_title(); ?></h1>
     <div class="meta">
         <span class="author">Oleh <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></span>
         <span class="date"><i class="fa fa-calendar-o"></i> <?php the_date('j M y'); ?></span> 
         <div class="tags"><i class="fa fa-tags"></i> <?php the_tags( '', ', ', '<br />' ); ?> </div>

     </div>
     <?php the_content(); ?>
<?php endwhile;endif; ?>