<?php get_header(); ?>

<!--メイン-->
<main>
    <section class="page_visual">
        <img src="<?php echo get_template_directory_uri(); ?>/img/shoplist-page-kv.jpg">
    </section>

    <div class="content_container article_container">
        <div class="shops_articles">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'shoplist',
                'posts_per_page' => 12,
                'paged' => $paged,
            );
            $shoplist_query = new WP_Query($args);
            query_posts($shoplist_query_string . '&order=asc');
            if ($shoplist_query->have_posts()) :
                while ($shoplist_query->have_posts()) : $shoplist_query->the_post();
            ?>
                    <div class="shop_article">
                        <div class="shop_article_img">
                            <?php
                            if (has_post_thumbnail()):
                                the_post_thumbnail(); ?>
                            <?php else: ?>
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/thumb-post 13.jpg'); ?>">
                            <?php endif; ?>
                        </div>
                        <div class="shop_article_excerpt">
                            <a href="<?php the_permalink(); ?>">
                                <p class="shop_name"><?php the_title(); ?></p>
                                <p class="shop_content"><?php the_excerpt(); ?></p>
                            </a>
                        </div>
                    </div>
                <?php
                endwhile;
                ?>
            <?php
            else :
                echo 'No posts found';
            endif;
            wp_reset_postdata();
            ?>
        </div>
        <!--【修正】デザイン-->
        <!--ページネーション-->
        <div class="pagination">
            <div class="nav_links">
                <?php
                echo paginate_links(array(
                    'total' => $blog_query->max_num_pages,
                    'mid-size' => 1,
                    'prev_text' => '<',
                    'next_text' => '>',
                    'type' => 'list'
                ));
                ?>
            </div>
        </div>
    </div>
</main>


<!--footer-->

<?php get_footer(); ?>

</body>

</html>