<?php
if ( function_exists( 'ot_get_option' ) ) {
  $blog_page = get_page_link(ot_get_option( 'blog_page' ));
}
 get_header(); ?>
    <div class="slider">
        <div class="container content">
            <div class="row pd-top pd-btm">
                <div class="col-md-12 text-center">
                    <h1>Pemograman web membuat <strong>imajinasi</strong> menjadi nyata</h1>
                    <h4>
                        Kamu akan mempelajari berbagai macam ilmu untuk membuat halaman depan website
                    </h4>
                    <h4>
                        Pemograman web adalah jalan menjadi seorang <strong>frontend developer</strong>
                    </h4>
                    <div class="pd-top"></div>
                    <a href="http://pw2.if-unpas.org/dokumentasi-php/" target="_new" class="btn btn-lg btn-default">Dokumentasi PHP</a>
                    <a href="#download" class="btn btn-lg btn-default">Download Materi</a>
                </div>
            </div>
        </div>
    </div>
    <section id="apa" class="section grey">
        <div class="container">
            <div class="row pd-btm">
                <div class="col-md-12">
                    <h1 class="text-center">Kuliahnya belajar apa aja sih?</h1>
                    <p class="lead text-center">
                        Disini kalian akan belajar banyak hal yang berhubungan dengan pengembangan web, mulai dari sejarah perkembangan website, teknologi yang dipake, cara bikinnya, sampai gimana caranya supaya website keren kalian bisa dilihat sama semua orang di dunia.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="feature-box-icon">
                            <i class="fa fa-globe"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="mb-sm">Internet &amp; Web Design</h4>
                            <p class="mb-lg">Web design dan internet sangat erat kaitannya, karena website yang kalian buat nanti harus tersimpan di internet agar semua orang bisa mengaksesnya. Nanti kalian akan belajar mengenai protokol yang digunakan, konfigurasi server dan hal terkait lainnya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="feature-box-icon">
                            <i class="fa fa-css3"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="mb-sm">CSS &amp; CSS3</h4>
                            <p class="mb-lg">Apa sih yang membuat sebuah web menjadi menarik dan enak dilihat? CSS lah jawabanya. Tanpa CSS, sebuah web akan terlihat menjadi sangat membosankan. Teknologi CSS3 yang ada sekarang memungkinkan kita untuk membuat website yang sangat interaktif dengan menambahkan animasi dan transisi didalamnya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="feature-box-icon">
                            <i class="fa fa-building-o"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="mb-sm">CSS Frameworks</h4>
                            <p class="mb-lg">Setelah kalian paham materi-materi yang diajarkan, kalian akan diajak untuk berkenalan dengan sebuah Frameork CSS yang bernama Bootstrap yang akan membuat website yang kalian bangun menjadi lebih keren lagi.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mg-top">
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="feature-box-icon">
                            <i class="fa fa-html5"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="mb-sm">HTML &amp; HTML5</h4>
                            <p class="mb-lg">HTML (Hypertext Markup Language) adalah bahasa markup yang digunakan untuk membuat struktur dasar sebuah website, semua website yang kalian liat di internet saat ini pasti menggunakan HTML di dalamnya. Sampai saat ini versi HTML yang ada sudah menggunakan versi HTML5, dan versi tersebutlah yang akan kita gunakan di kuliah ini.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box reverse">
                        <div class="feature-box-icon">
                            <i class="fa fa-code"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="mb-sm">Javascript &amp; JQuery</h4>
                            <p class="mb-lg">Kedua teknologi ini merupakan teknologi yang membuat sebuah website menjadi cerdas. Nyaris semua website yang kalian akses setiap hari menggunakan teknologi ini.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="feature-box-icon">
                            <i class="fa fa-smile-o"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="mb-sm">Dan Hal Seru Lainnya</h4>
                            <p class="mb-lg">Persiapkan diri kalian untuk belajar hal-hal yang seru dan menyenangkan di kuliah ini.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="dosen" class="section campus">
        <div class="container">
            <div class="row pd-btm">
                <div class="col-md-12 text-center section-title">
                    <h2>TIM  <strong><i class="fa fa-shield"></i></strong> DOSEN</h2>
                </div>
            </div>
            <div class="pd-top person-wrap">
                <?php get_template_part('loop','dosen'); ?>
            </div>
        </div>
    </section>
    <section id="asisten" class="section asisten">
        <div class="container">
            <div class="row pd-btm">
                <div class="col-md-12 text-center">
                    <h2>TIM  <strong><i class="fa fa-shield"></i></strong> ASISTEN</h2>
                </div>
            </div>
            <?php get_template_part('loop','asisten'); ?>
        </div>
    </section>
    <section id="blog" class="section blog pd-btm">
        <div class="container">
            <div class="row pd-btm">
                <div class="col-md-12 text-center">
                    <h2 class="title-link"><a href="<?php echo $blog_page; ?>">BLOG / <i class="fa fa-arrow-right"></i></a></h2>
                </div>
            </div>
            <div class="row">
                <?php get_template_part( 'loop', 'blog' ); ?> 
            </div>
        </div>
    </section>
    <section id="download" class="section">
        <div class="container">
            <div class="row">
                <div class="row pd-btm">
                    <div class="col-md-12 text-center">
                        <h2>DOWNLOAD <i class="fa fa-cloud-download"></i> RESOURCE</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php get_template_part('loop','download'); ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>