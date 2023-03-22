<?php
/* Template Name: ブログ一覧ページ */
get_header();
?>

  <div class="eachblog_div">
      <h1>Blog</h1>
      <!-- <div class="blogichiran_txt1">Blog</div>
      <div class="blogichiran_txt2">ブログ</div> -->
  </div>

  <div class="bloglist_cards container">

    <?php
    $args = array(
        'posts_per_page' => 10,
        'order'          => 'ASC',
    );

    $myposts = get_posts( $args );

    foreach ( $myposts as $post ):
        setup_postdata( $post );
    ?>
    <div class="blogichiran_box1" onclick="location.href='<?php the_permalink(); ?>'" >
        <div class="blogichiran_div1"><?php echo get_the_date( 'Y.m.d', get_the_ID() ); ?></div>
            <div class="blogichiran_div2"><?php the_title(); ?></div>
            <div class="blogichiran_div3">
                <img src="<?php echo get_theme_file_uri('src/Rectangle 297.png'); ?>" />
            </div>
            <div class="blogichiran_div4">
                <p><?php echo get_the_excerpt(); ?></p>
            </div>
    </div>
    <?php endforeach; ?>

  </div>

  <?php
  $args = array();

  paginate_links( $args );
  wp_reset_postdata();
  ?>

    <!-- サンプル -->
    <!-- Font Awesome 5  -->
    <div class="pageNation">
      <div>
        <i class="fa-solid fa-angles-left"></i>
        <i class="fa-solid fa-angle-left"></i>
      </div>
      <div>
        <p>123</p>
      </div>
      <div>
        <i class="fa-solid fa-angle-right"></i>
        <i class="fa-solid fa-angles-right"></i>
      </div>
    </div>

    <!-- icons -->
    <script
      src="https://kit.fontawesome.com/b7dea1885e.js"
      crossorigin="anonymous"
    ></script>

<?php get_footer(); ?>