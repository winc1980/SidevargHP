<?php get_header(); ?>

<div class="eachblog_div1">
    <h1>Blog</h1>
</div>

<div class="blog_container">
    <div class="blog_contents">
        <h2><?php echo get_the_title(); ?></h2>
        <p><?php echo get_the_date('Y.m.d', get_the_ID()); ?></p>
    </div>

    <div class="eachinfo_div2">
        <?php the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>