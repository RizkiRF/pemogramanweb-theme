<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pemograman Web</title>
    <!-- Bootstrap -->
    <?php wp_head(); ?>
    <link rel='shortcut icon' type='image/x-icon' href='<?php echo get_template_directory_uri(); ?>/favicon.ico' />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <?php if(is_author()) : echo '<header class="transparent">'; else: echo "<header>"; endif; ?>
        <div class="container">
            <div class="row">
                <div class="col-md-2 logo">
                    <a href="<?php bloginfo('url'); ?>">
                        <img src="<?php bloginfo('template_url') ?>/images/logo.png" alt="logo">
                    </a>
                </div>
                <div class="col-md-10">
                    <nav class="navbar navbar-pw">
                        <div class="collapse navbar-collapse" id="main-navbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="<?php bloginfo('url'); ?>">Beranda</a></li>
                                <li><a href="#apa">Belajar Apa</a></li>
                                <li><a href="#dosen">Dosen</a></li>
                                <li><a href="#asisten">Asisten</a></li>
                                <li><a href="#blog">Blog</a></li>
                                <li><a href="#download">Download</a></li>
                                <li><a href="#"><i class="fa fa-search search-overlay-trigger"></i></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="search-overlay animated bounceIn">
        <form action="<?php bloginfo('url'); ?>" class="search-form">
            <input type="search" name="s" placeholder="Input Keyword">
            <button type="submit"><i class="fa fa-arrow-right"></i></button>
        </form>
        <span class="close">
            <i class="fa fa-times"></i>
        </span>
    </div>