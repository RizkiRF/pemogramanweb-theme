<?php 
    $terms = get_terms( 'types' , array(
        'orderby'    => 'name',
        'hide_empty' => 0,
    ));
    if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
        foreach ( $terms as $term ) :
            $the_query = new WP_Query("taxonomy=types&term=$term->slug&posts_per_page=-1");
?>
            <div class="col-md-4">
                <div class="download-wrap">
                    <div class="download-header">
                        <p class="download-title"><?php echo $term->name; ?></p>
                        <p class="download-icon"><i class="fa fa-slideshare"></i></p>
                        <select class="cs-select cs-skin-overlay">
                            <option value="" disabled selected>Pilih Berkas</option>
                            <optgroup label="Daftar Download">
                                <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                <option value="<?php echo get_post_meta( get_the_ID(), 'file', TRUE ); ?>"><?php the_title(); ?></option>
                                <?php endwhile;endif; ?>
                            </optgroup>
                        </select>
                    </div>
                    <div class="download-content">
                        <p><?php echo $term->description; ?></p>
                    </div>
                </div>
            </div>
<?php
    endforeach;endif;
?>