<?php get_header(); ?>
	<section id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-9 post">
                    <?php get_template_part( 'loop', 'post' ); ?>
                </div>
                <div class="col-md-3">
                    <div class="widget">
                        <div class="title">Tulisan Populer</div>
                        <ul>
                            <li><a href="#">No Posts</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>