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
            <div class="mv_wrapper_2 fade">
                <div class="mv_contents_wrapper_2">
                    <h1>観る人も、撮る人も、<br />みんなが夢中になれる場所</h1>
                    <p><?php echo get_post_meta( 1, 'mv_text', true ); ?></p>
                </div>
            </div>
        </section>
        <!-- メインビジュアル　ここまで -->

        <!-- サークル情報　ここから -->
        <section id="info">
            <div class="info_container">
                <div class="info_contents">
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
                <div class="info_images">
                    <img src="<?php echo get_theme_file_uri('src/sidevarg5 1.png'); ?>" class="mv_cv_img" alt="" width="100%" height="100%" />
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
            <div class="sidevarg-schedule">
                <h1>Schedule</h1>
                <h2>活動日程</h2>
                <p>隔週月曜18:20〜ミーティングで行い、月一の土日どちらかで上映会を開いています。
                    カレンダーに反映されていない活動詳細についてはTwitterやInstagramをご覧ください。
                </p>
            </div>
        </section>
        <!-- 活動日程ここまで -->

        <!-- 活動場所ここから -->
        <section id="place">
            <div class="container">
              <div class="place_contents">
                <div class="title">
                  <h2 style="margin: 0">Place</h2>
                  <p>活動場所</p>
                </div>
                <div class="message">
                  <p>
                    主な活動場所は早稲田大学戸山キャンパス学生会館E910です。活動の詳細についてはTwitterやInstagramをご覧ください。※早稲田大学のHPにリンクが飛びます。
                  </p>
                </div>
                <div id="button">
                  <button class="place_btn" id="btn1">
                    学生会館について<i
                      class="fas fa-angle-right fa-position-right"
                    ></i>
                  </button>
                  <button class="place_btn" id="btn2">
                    学生会館アクセス方法<i
                      class="fas fa-angle-right fa-position-right"
                    ></i>
                  </button>
    
                  <!-- <input type="button" value="ボタン" id="button" onclick="#" /> -->
                </div>
              </div>
              <div class="place_map fade">
                <div>
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.5351292127925!2d130.412726115203!3d33.59141728073386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354191bf5f712adf%3A0x375bd70fbfdc83a0!2z56aP5bKh5biCIOWNmuWkmuWMuuW9ueaJgA!5e0!3m2!1sja!2sjp!4v1676770108891!5m2!1sja!2sjp"
                    width="100%"
                    height="450"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                  ></iframe>
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