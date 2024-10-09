<?php get_header(); ?>

<!--メイン-->
<main>
    <section class="page_visual">
        <img src="<?php echo get_template_directory_uri(); ?>/img/pic-top-consept 2.jpg">
        <h1 class="english_letters"><?php echo the_title(); ?></h1>
    </section>

    <section id="#concept" class="concept">
        <div class="content_container concept_inner">
            <div class="concept_img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/pic-consept 3.png">
            </div>
            <div class="concept">
                <h3>一杯一杯まごころをこめて調製し、新鮮な香りと豊かな 風味のコーヒーを提供します。</h3>
                <p>親譲りの無鉄砲で小供の時から損ばかりしている。<br>
                    小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。<br>
                    なぜそんな無闇をしたと聞く人があるかも知れぬ。</p>

            </div>
            <div class="concept_img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/pic-consept02 2.png">
            </div>

        </div>
    </section>

</main>



<!--footer-->

<?php get_footer(); ?>

</div>

</body>

</html>