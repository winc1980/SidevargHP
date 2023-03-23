<?php get_header(); ?>

        <!-- メインビジュアル　ここから -->
        <section id="mv">
            <div class="mv_wrapper_1 fade">
                <img src="<?php echo get_theme_file_uri('src/mv_cover1.png'); ?>" alt="" class="mv_cv_img1" />
                <div class="mv_contents_wrapper_1">
                    <h1>人生にエイガを。</h1>
                    <h2>CINEMAX<br />SIDEVARG</h2>
                </div>
            </div>
            <div class="mv_wrapper_2">
                <div class="mv_contents_wrapper_2 fade">
                    <h1>観る人も、撮る人も、<br />みんなが夢中になれる場所</h1>
                    <p><?php echo get_post_meta( 1, 'mv_text', true ); ?></p>
                </div>
            </div>
        </section>
        <!-- メインビジュアル　ここまで -->

        <!-- サークル情報　ここから -->
        <section id="info">
            <div class="info_container">
                <div class="info_contents fade">
                    <div class="info_title">
                        <h2 class="info_h2">Information</h2>
                        <p>サークル情報</p>
                    </div>
                    <div class="info_message">
                        <table>
                            <tr>
                              <th>サークル名</th>
                              <td><?php echo get_post_meta( 1, 'circle_name', true ); ?></td>
                              </tr>
                            <tr>
                              <th>人数</th>
                              <td><?php echo get_post_meta( 1, 'members', true ); ?></td>
                            </tr>
                            <tr>
                              <th>代表</th>
                              <td><?php echo get_post_meta( 1, 'representative_name', true ); ?></td>
                            </tr>
                            <tr>
                              <th>設立</th>
                              <td><?php echo get_post_meta( 1, 'establish_year', true ); ?></td>
                            </tr>
                            <tr>
                              <th>新歓情報</th>
                              <td><?php echo nl2br( get_post_meta( 1, 'welcom_party_info', true ) ); ?></td>
                            </tr>
                            <tr>
                              <th>入金方法</th>
                              <td><?php echo nl2br( get_post_meta( 1, 'whoto_payment', true ) ); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="info_images fade">
                    <img class="mv_cv_img" alt="info_images" width="100%" height="100%" src="<?php echo get_theme_file_uri('src/sidevarg5 1.png'); ?>">
                </div>
            </div>
        </section>
        <!-- サークル情報　ここまで -->

        <!-- ブログ一覧　ここから -->
        <section id="bloglist">
            <div class="blog_container fade">
            <div class="blogichiran_txt1">Blog</div>
            <div class="blogichiran_txt2">ブログ</div>

            <div class="bloglist_cards container">
                    <?php
                    $args = array( 
                        'posts_per_page'=>4, 
                        'order'=>'ASC' );

                    $myposts = get_posts( $args );

                    foreach ( $myposts as $post ) {
                        setup_postdata( $post );
                        $postTitle = get_the_title();
                        $postBody = get_the_excerpt();
                        $postDate = get_the_date( 'Y.m.d', get_the_ID() );
                        $permalink = get_the_permalink();
                        $thumbnailUri = get_the_post_thumbnail_url();
                        blog_card( $postTitle, $postBody, $postDate, $permalink, $thumbnailUri );
                    }
                    ?>

            </div>
            <button class="bloglist_btn" onclick="location.href='<?php echo home_url( '?p=' . get_page_by_path('list')->ID ); ?>'" target="_blank">
                ブログ一覧
                <i class="fas fa-angle-right fa-position-right"></i>
            </button>
            </div>
        </section>

        <?php
        /* ブログカード生成 */
        function blog_card( $postTitle, $postBody, $postDate, $permalink, $thumbnailUri ) { ?>

            <div class="blogichiran_box1" onclick="location.href='<?php echo $permalink ?>'" >
                <div class="blogichiran_div1"><?php echo $postDate; ?></div>
                    <div class="blogichiran_div2"><?php echo $postTitle ?></div>
                    <div class="blogichiran_div3">
                        <img src="<?php echo $thumbnailUri ?>" />
                    </div>
                    <div class="blogichiran_div4">
                        <p><?php echo $postBody; ?></p>
                    </div>
            </div>
        <?php
        }
        ?>
        <!-- ブログ一覧　ここまで -->

        <!-- 各ブログここから -->
        <section id="eachblog">

        </section>
        <!-- 各ブログここまで -->

        <!-- ギャラリーここから -->
        <section id="gallery">
          <div class="gallery_container fade">
            <div class="gallery_title">
              <h1>Gallery</h1>
            </div>

            <div class="gallery_text">
              <h2>活動風景</h2>
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
            <div class="sidevarg-schedule fade">
                <div class="schedule-container">
                    <div class="schedule-contents">
                        <h1>Schedule</h1>
                        <h2>活動日程</h2>
                        <p>
                        隔週月曜18:20〜ミーティングで行い、月一の土日どちらかで上映会を開いています。
                        カレンダーに反映されていない活動詳細についてはTwitterやInstagramをご覧ください。
                        </p>
                    </div>
                    <div class="g-calendar">
                        <iframe
                        src="<?php echo get_post_meta( 1, 'googlecalendar_share', true); ?>"
                        style="border-width: 0"
                        width="100%"
                        height="100%"
                        frameborder="0"
                        scrolling="no"
                        ></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!-- 活動日程ここまで -->

        <!-- 活動場所ここから -->
        <section id="place">
            <div>
            <div class="place_contents fade">
                <div class="place_title">
                <h2 class="place_h2">Place</h2>
                <p>活動場所</p>
                </div>
                <div class="place_message">
                <p>
                    主な活動場所は早稲田大学戸山キャンパス学生会館E910です。活動の詳細についてはTwitterやInstagramをご覧ください。
                </p>
                </div>
                <div id="button">
                <button
                    class="place_btn"
                    id="btn1"
                    onclick="window.open('https://www.waseda.jp/inst/student/facility/studentcenter')"
                    target="_blank"
                >
                    学生会館について
                    <i class="fas fa-angle-right fa-position-right"></i>
                </button>
                <button
                    class="place_btn"
                    id="btn2"
                    onclick="window.open('https://waseda.app.box.com/s/lwwbo30xn58b1mjoahvthnmbrad5xqrm')"
                    target="_blank"
                >
                    学生会館アクセス方法
                    <i class="fas fa-angle-right fa-position-right"></i>
                </button>

                <!-- <input type="button" value="ボタン" id="button" onclick="#" /> -->
                </div>
            </div>
            <div class="place_map fade">
                <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.8379706399737!2d139.71545151525945!3d35.70560468018863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d1dc627dc3b%3A0xb8cb5ac09b074b5d!2z5pep56iy55Sw5aSn5a2mIOaIuOWxseOCreODo-ODs-ODkeOCuQ!5e0!3m2!1sja!2sjp!4v1677062772945!5m2!1sja!2sjp"
                width="100%"
                height="450"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
            </div>
            </div>
        </section>
        <!-- 活動場所ここまで -->

<?php get_footer(); ?>