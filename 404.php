<?php get_header(); ?>

<!--メイン-->
<main>
    <section class="page_visual">
        <img src="<?php echo get_template_directory_uri(); ?>/img/404page-kv.jpg">
    </section>

    <div class="single_page_container">
        <div class="content_inner wrapper">
            <div class="content">
                <p>申し訳ございませんが、お探しのページは見つかりませんでした。<br>
                    お探しのページは削除されたか、URLが変更された可能性があります。</p>
            </div>
            <a href="<?php echo esc_url(home_url()); ?>" class="more_btn btn_black english_letter">TOP</a>

        </div>
    </div>
</main>

<!--footer-->

<?php get_footer(); ?>

</body>

</html>