<?php get_header(); ?>

<!--メイン-->
<main>
    <section class="page_visual">
        <img src="<?php echo get_template_directory_uri(); ?>/img/shoplist-page-kv.jpg">
    </section>

    <div class="single_page_container">
        <div class="content_inner">
            <?php if (have_posts()): ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php the_post_thumbnail(); ?>
                    <p class="shop_name"><?php the_title(); ?></p>
                    <p class="shop_content"><?php the_excerpt(); ?></p>
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