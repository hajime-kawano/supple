<?php get_header(); ?>

<!--メイン-->
<main>
    <section class="page_visual">
        <img src="<?php echo get_template_directory_uri(); ?>/img/page-kv.jpg">
    </section>

    <div class="single_page_container">
        <div class="content_inner">
            <?php if (have_posts()): ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php the_post_thumbnail(); ?>
                    <div class="article_day english_letters"><?php the_time(get_option('date_format')); ?></div>
                    <div class="article_excerpt"><?php the_excerpt(); ?></div>
                    <div class="article_content"><?php echo the_content(); ?></div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</main>



<!--footer-->

<?php get_footer(); ?>

</div>

</body>

</html>