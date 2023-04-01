<?php
/* Template Name: ブログ一覧ページ */
get_header();
?>

    <div class="bloglist_div">
        <h1>Blog</h1>
        <!-- <div class="blogichiran_txt1">Blog</div>
        <div class="blogichiran_txt2">ブログ</div> -->
    </div>

  <div class="bloglist_cards container">

    <?php
    $args = array(
        'posts_per_page' => 10,
        'orderby'        => 'date',
        'paged'          => max( 1, get_query_var('paged') ),
    );
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ):
    while ( $the_query->have_posts() ):
    $the_query->the_post();
    ?>
    <div class="blogichiran_box1" onclick="location.href='<?php the_permalink(); ?>'" >
        <div class="blogichiran_div1"><?php echo get_the_date( 'Y.m.d', get_the_ID() ); ?></div>
            <div class="blogichiran_div2"><?php the_title(); ?></div>
            <div class="blogichiran_div3">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" />
            </div>
            <div class="blogichiran_div4">
                <p><?php echo get_the_excerpt(); ?></p>
            </div>
    </div>
    <?php
    endwhile;
    endif;
    ?>

    </div>

    <!-- サンプル -->
    <!-- Font Awesome 5  -->
    <div class="pagination">
        
        <?php
        $pagination = paginate_links(
            array(
                'base'    => '%_%',
                'format'  => home_url('?paged=%#%'),
                'type'    => 'list',
                'current' => max( 1, get_query_var('paged') ),
                'total'   => $the_query->max_num_pages,
                'prev_text' => __('<i class="fa-solid fa-angles-left"></i>'),
                'next_text' => __('<i class="fa-solid fa-angle-right"></i>'),
            )
        );
        echo $pagination;
        ?>
        
    </div>

    <!-- icons -->
    <script
      src="https://kit.fontawesome.com/b7dea1885e.js"
      crossorigin="anonymous"
    ></script>

<?php get_footer(); ?>