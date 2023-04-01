        <!-- フッターここから -->
        <section id="footer">
          <div class="footer_wrapper">
            <div class="footer_contact">
              <p>
                お問い合わせは公式LINEにて受け付けております。<br />体験や入会、活動についてのご質問など、お気軽にお問い合わせください。
              </p>
              <a
                href="<?php echo get_post_meta( 1, 'official_line_link', true ); ?>"
                class="contact-btn"
                target="_blank"
              >
                <p>Contact</p>
              </a>
            </div>
            <div class="footer_link">
              <nav>
                <ul>
                  <li>
                    <a
                      href="https://www.instagram.com/<?php echo get_post_meta( 1, 'instagram_id', true ); ?>"
                      target="_blank"
                    >
                      <img src="<?php echo get_theme_file_uri('src/instagram-logo.svg'); ?>" alt="" />
                      Instagram
                    </a>
                  </li>
                  <li>
                    <a href="https://twitter.com/<?php echo get_post_meta( 1, 'twitter_id', true ); ?>" target="_blank">
                      <img src="<?php echo get_theme_file_uri('src/twitter-logo.svg'); ?>" alt="" />Twitter
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo get_post_meta( 1, 'official_line_link', true); ?>" target="_blank"
                      >公式LINE</a
                    >
                  </li>
                  <li><a href="<?php echo home_url( '?p=' . get_page_by_path('list')->ID ); ?>">ブログ</a></li>
                </ul>

                <a href="<?php echo home_url('./'); ?>" id="footer_logo">CINEMAX<br />SIDEVARG</a>
              </nav>

              <div class="footer_copyright">
                <p>
                  @
                  <script type="text/javascript">
                    myDate = new Date();
                    myYear = myDate.getFullYear();
                    document.write(myYear);
                  </script>
                  Copyright: CINEMAX SIDEVARG
                </p>
              </div>
            </div>
          </div>
      </section>
        <!-- フッターここまで -->
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js"></script>
    <script type="text/javascript" src="<?php echo get_theme_file_uri('assets/js/main.js'); ?>"></script>
</body>
</html>