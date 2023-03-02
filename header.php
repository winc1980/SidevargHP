<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Waseda Cinema Circle</title>
        <link rel="shortcut icon" href="<?php echo get_theme_file_uri('src/favicon.ico'); ?>">
        <!-- font-family: 'Economica', Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Economica&display=swap" rel="stylesheet">
        <!-- font-family: 'Noto Serif JP', Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">
        <!-- Swiper.js 4.3.3 -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" media="all">
        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <?php wp_head(); ?>
    </head>
    <body>

    <main>
        <!-- ヘッダー　ここから -->
        <section id="header">
            <header>
                <div class="header_wrapper">
                    <img class="header-logo" src="<?php echo get_theme_file_uri('src/logo.svg'); ?>" alt="" >
                    <h1 class="header-title">Waseda Cinema Circle</h1>
                    <nav class="header-nav">
                        <ul class="header-menu">
                            <li class="header-menu-item"><a href="#">Twitter</a></li>
                            <li class="header-menu-item"><a href="#">Instagram</a></li>
                            <li class="header-menu-item"><a href="#">Blog</a></li>
                            <li class="header-menu-item"><a href="#" id="contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="hamburger-menu">
                    <input type="checkbox" id="menu-btn-check">
                    <label for="menu-btn-check" class="menu-btn"><span></span></label>
                    <!-- ここからメニュー-->
                    <div class="menu-content">
                        <ul>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    <!--ここまでメニュー-->
                    </div>
                </div>
            </header>
        </section>
        <!-- ヘッダー　ここまで -->