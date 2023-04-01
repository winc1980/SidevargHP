<!DOCTYPE html>
<html lang="ja">
    <head>
        <!-- * * * * * * * * * * * * * * * * * * * * *
            This website was designed by SHUMA MIYAZAKI 
                 and coded by waseda winc HP team
         * * * * * * * * * * * * * * * * * * * * * * * * -->

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="<?php echo get_theme_file_uri('src/favicon.ico'); ?>">

        <title><?php echo get_option('blogname', true); ?></title>
        <meta name="description" content="<?php echo get_option('blogdescription', true) ?>">
        
        <!-- font-family: 'Economica', Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Economica&display=swap" rel="stylesheet">
        
        <!-- font-family: 'Economica ital'-->
        <link href="https://fonts.googleapis.com/css2?family=Economica:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        
        <!-- font-family: 'Noto Serif JP', Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">
    
        <!-- Swiper.js 4.3.3 -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css" />

        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" media="all">
        
        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <!-- OGP 設定 -->
        <meta property="og:url" content="https://sidevarg.wp.xdomain.jp/" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="SIDEVARG" />
        <meta property="og:description" content="早稲田大学公認映画サークルCHINEMAX SIDEVARDの公式サイトです。" />
        <meta property="og:site_name" content="SIDEVARG" />
        <meta property="og:image" content="<?php echo get_theme_file_uri('src/sidevarg_ogp_img.png'); ?>" />
        <!-- twitter OGP -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@cinemaxsidevarg" />

        <?php wp_head(); ?>
    </head>

    
    <NOSCRIPT><body></NOSCRIPT>

    <main>
        <!-- ヘッダー　ここから -->
        <section id="header">
            <header>
                <div class="header_wrapper">
                    <img class="header-logo" src="<?php echo get_theme_file_uri('src/logo.svg'); ?>" alt="" onclick="location.href='./'">
                    <h1 class="header-title" onclick="location.href='./'">CINEMAX SIDEVARG</h1>
                    <nav class="header-nav">
                        <ul class="header-menu">
                            <li class="header-menu-item">
                                <a href="https://twitter.com/<?php echo get_post_meta( 1, 'twitter_id', true ); ?>"
                                 id="twitter" target="_blank" rel="noopener noreferrer">Twitter</a>
                            </li>
                            <li class="header-menu-item">
                                <a href="https://www.instagram.com/<?php echo get_post_meta( 1, 'instagram_id', true ); ?>"
                                 target="_blank" rel="noopener noreferrer">Instagram</a>
                            </li>
                            <li class="header-menu-item">
                                <a href="<?php echo home_url( '?p=' . get_page_by_path('list')->ID ); ?>">Blog</a>
                            </li>
                            <li class="header-menu-item">
                                <a id="contact" target="_blank" href="<?php echo get_post_meta( 1, 'official_line_link', true ); ?>">
                                    <span>Contact</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="hamburger-menu">
                    <input type="checkbox" id="menu-btn-check">
                    <label for="menu-btn-check" class="menu-btn"><span></span></label>
                    <!-- ここからメニュー-->
                    <div class="menu-content">
                        <ul>
                            <li><a target="_blank" href="https://twitter.com/<?php echo get_post_meta( 1, 'twitter_id', true ); ?>">Twitter</a></li>
                            <li><a target="_blank" href="https://www.instagram.com/<?php echo get_post_meta( 1, 'instagram_id', true ); ?>">Instagram</a></li>
                            <li><a href="<?php echo home_url( '?p=' . get_page_by_path('list')->ID ); ?>">Blog</a></li>
                            <li><a target="_blank" href="<?php echo get_post_meta( 1, 'official_line_link', true ); ?>">Contact</a></li>
                        </ul>
                    <!--ここまでメニュー-->
                    </div>
                </div>
            </header>
        </section>
        <!-- ヘッダー　ここまで -->