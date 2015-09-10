<?php 
if ( function_exists( 'ot_get_option' ) ) {
  $youtube_url = ot_get_option( 'youtube_url' );
  $github_url = ot_get_option( 'github_url' );
  $dev_team = ot_get_option( 'developer_team' );
}
?>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="powered">
                        <img src="<?php bloginfo('template_url') ?>/images/footer-logo.png" alt="logo">
                        <h5>Web ini dikembangkan oleh  <br />  tim pemograman web</h5>
                        <p>anggotanya adalah <?php 
                            foreach ($dev_team as $person) {
                                echo "<a href='" . $person['person_url'] . "'> " . $person['title'] . " </a>&nbsp;";
                            }
                         ?></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-right social">
                        <span>Temukan Kami di :</span>
                        <div class="social-color">
                            <a href="<?php echo $youtube_url; ?>" target="_new" class="youtube"><i class="fa fa-youtube-play"></i></a>
                            <a href="<?php echo $github_url; ?>" target="_new"><i class="fa fa-github"></i></a>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>
