<?php get_header(); ?>

<!--メイン-->
<main>
    <section class="page_visual">
        <img src="<?php echo get_template_directory_uri(); ?>/img/page-kv.jpg">
    </section>

    <div class="content_container article_container">
        <div class="articles wrapper">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'blog',
                'posts_per_page' => 12,
                'paged' => $paged,
            );
            $blog_query = new WP_Query($args);
            if ($blog_query->have_posts()) :
                while ($blog_query->have_posts()) : $blog_query->the_post();
            ?>
                    <div class="article">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail(
                                array(
                                    'class' => 'thumbnail_img', /* 任意のクラス名 */
                                )
                            ); ?>
                            <div class="article_day english_letters"><?php the_time(get_option('date_format')); ?></div>
                            <div class="article_excerpt"><?php the_excerpt(); ?></div>
                        </a>
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

        <!-- ページネーション -->
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