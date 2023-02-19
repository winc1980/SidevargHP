<?php get_header(); ?>

    <main>
        <!-- ヘッダー　ここから -->
        <section id="header">

        </section>
        <!-- ヘッダー　ここまで -->

        <!-- メインビジュアル　ここから -->
        <section id="mv">
            <div class="mv_wrapper_1">
                    <img src="<?php echo get_theme_file_uri('src/mv_cover1.png'); ?>" alt="" class="mv_cv_img1">

                <div class="mv_contents_wrapper_1">
                    <h1>
                        人生にエイガを。
                    </h1>
                    <h2>
                        CINEMAX<br>SIDEVARG
                    </h2>

                </div>

            </div>
            <div class="mv_wrapper_2">

                <img src="<?php echo get_theme_file_uri('src/mv_cover2.png'); ?>" class="mv_cv_img2" alt="">

                <div class="mv_contents_wrapper_2">
                    <h1>
                        観る人も、撮る人も、<br>みんなが夢中になれる場所
                    </h1>
                    <p>
                        映画製作を随時行っているほか、部員の見たい映画を持ち合って選んだ一本を鑑賞する上映会も毎月実施しています。
                        <br>撮りたい人も見たい人もただ語りたい人も、映画についてそれぞれ自分なりの関わり方を持った人たちがお互いを尊重しながら交流するサークルです。
                    </p>
                </div>

            </div>
        </section>
        <!-- メインビジュアル　ここまで -->

        <!-- サークル情報　ここから -->
        <section id="info">
            <div class="container">
                <div class="row fade">
                    <div class="contents">
                        <div class="title">
                            <h2 style="margin: 0">Information</h2>
                            <p>サークル情報</p>
                        </div>
                        <div class="message">
                            <table>
                                <tr>
                                    <th>サークル名</th><td>CINEMAX SIDEVARG</td>
                                </tr>
                                <tr>
                                    <th>人数</th><td>約20人</td>
                                </tr>
                                <tr>
                                    <th>代表</th><td>山田太郎</td>
                                </tr>
                                <tr>
                                    <th>設立</th><td>1975年</td>
                                </tr>
                                <tr>
                                    <th>新歓情報</th><td>入会年中受付中<br>大学・学年問わず募集しています</td>
                                </tr>
                                <tr>
                                    <th>入金方法</th><td>公式LINEから<br><a href="https://www.url">https://www.url</a></td>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="images fade">
                        <div><img src="<?php echo get_theme_file_uri('src/mv-cover1.png'); ?>" class="mv_cv_img" alt=""></div>
                    </div>
                </div>

            </div>

        </section>
        <!-- サークル情報　ここまで -->

        <!-- ブログ(ホーム) ここから -->
        <section id="bloghome">

        </section>
        <!-- ブログ(ホーム)　ここまで -->

        <!-- ブログ一覧　ここから -->
        <section id="bloglist">

        </section>
        <!-- ブログ一覧　ここまで -->

        <!-- ブログ（バックエンド）ここから -->
        <section id="blogback">

        </section>
        <!-- ブログ（バックエンド）ここまで -->

        <!-- 各ブログここから -->
        <section id="eachblog">

        </section>
        <!-- 各ブログここまで -->

        <!-- ギャラリーここから -->
        <section id="gallery">
            <div class="gallery_container fade">
                <div class="gallery_title">
                    <h2 style="margin: 0" class="gallery_title_h2">Gallery</h2>
                </div>

                <div class="gallery_text">
                    <p><span>活動風景</span></p>
                </div>
            </div>

            <div class="swiper-parent fade">
                <!-- Swiper START -->
                <div class="swiper-container">
                    <!-- メイン表示部分 -->
                    <div class="swiper-wrapper">
                        <!-- 各スライド -->
                        <?php
                        $get_galleries =  maybe_unserialize( get_post_meta( 1, 'galleries', true ) ) ?: [];

                        foreach ( $get_galleries as $attachmentId ):
                        ?>
                        <div class="swiper-slide"><img src="<?php echo wp_get_attachment_image_src( $attachmentId, 'full' )[0] ?>" alt="スライドショー"></div>
                        <?php endforeach; ?>
                    </div>

                    <div class="swiper-pagination"></div>

                    <div class="swiper-button-prev gallery_button_pc_only"></div>

                    <div class="swiper-button-next gallery_button_pc_only"></div>
                </div>
            </div>

            <!-- Swiper END -->
        </section>
        <!-- ギャラリーここまで -->

        <!-- 活動日程ここから -->
        <section id="schedule">


        </section>
        <!-- 活動日程ここまで -->

        <!-- 活動場所ここから -->
        <section id="place">
            <div class="container">
                <div class="row fade">
                    <div class="contents">
                        <div class="title">
                            <h2 style="margin: 0">Place</h2>
                            <p>活動場所</p>
                        </div>
                        <div class="message">
                            <p>主な活動場所は早稲田大学戸山キャンパス学生会館E910です。活動の詳細についてはTwitterやInstagramをご覧ください。※早稲田大学のHPにリンクが飛びます。</p>

                        </div>
                        <div id="button">
                            <!-- <div id="btn1">
                                <button class="btn" ">学生会館について<i class="fas fa-angle-right fa-position-right"></i></button>
                            </div>
                            <div id="btn2">
                                <button class="btn" id="btn2">学生会館アクセス方法<i class="fas fa-angle-right fa-position-right"></i></button>
                            </div> -->
                            <button class="btn" id="btn1">学生会館について<i class="fas fa-angle-right fa-position-right"></i></button>
                            <button class="btn" id="btn2">学生会館アクセス方法<i class="fas fa-angle-right fa-position-right"></i></button>

                            <!-- <input type="button" value="ボタン" id="button" onclick="#" /> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="map fade">
                        <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.5351292127925!2d130.412726115203!3d33.59141728073386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354191bf5f712adf%3A0x375bd70fbfdc83a0!2z56aP5bKh5biCIOWNmuWkmuWMuuW9ueaJgA!5e0!3m2!1sja!2sjp!4v1676770108891!5m2!1sja!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <!-- 活動場所ここまで -->

        <!-- フッターここから -->
        <section id="footer">

        </section>
        <!-- フッターここまで -->
    </main>

<?php get_footer(); ?>