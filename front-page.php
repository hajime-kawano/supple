<?php get_header(); ?>

<!--メイン-->
<main>
    <section class="key_visual">
        <img src="<?php echo get_template_directory_uri(); ?>/img/bg-top-kv 1.png">
    </section>

    <section id="#concept" class="concept wrapper">
        <div class="content_container content_inner">
            <h2 class="english_letters">CONCEPT</h1>
                <div class="content_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/pic-top-consept 2.jpg">
                </div>
                <div class="content">
                    <h3>一杯一杯まごころをこめて調製し、新鮮な香りと豊かな 風味のコーヒーを提供します。
            </h2>
            <p>親譲りの無鉄砲で小供の時から損ばかりしている。<br>
                小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。<br>
                なぜそんな無闇をしたと聞く人があるかも知れぬ。</p>
            <a href="#" class="more_btn btn_black english_letter">MORE</a>
        </div>
        </div>
    </section>

    <section id="menu" class="menu">
        <div class="content_container">
            <h2 class="english_letters">MENU</h1>
                <div class="drink_menu">
                    <div class="drink_categories">
                        <h3 class="drink_category english_letters">DRIP
            </h2>
            <dl class="drink_item_wrapper">
                <div class="drink_item">
                    <dt>エントランスブレンド</dt>
                    <dd>¥800</dd>
                </div>
                <div class="drink_item">
                    <dt>エントランスブレンド</dt>
                    <dd>¥800</dd>
                </div>
                <div class="drink_item">
                    <dt>エチオピアナチュラル</dt>
                    <dd>¥800</dd>
                </div>
                <div class="drink_item">
                    <dt>グアテマラ</dt>
                    <dd>¥800</dd>
                </div>
                <div class="drink_item">
                    <dt>ブラジル</dt>
                    <dd>¥800</dd>
                </div>
                <div class="drink_item">
                    <dt>タンザニア</dt>
                    <dd>¥800</dd>
                </div>
                <div class="drink_item">
                    <dt>フスタブレンド</dt>
                    <dd>¥800</dd>
                </div>
            </dl>
        </div>
        <div class="drink_categories">
            <h3 class="drink_category english_letters">ESPRESSO</h2>
                <dl class="drink_item_wrapper">
                    <div class="drink_item">
                        <dt>エントランスブレンド</dt>
                        <dd>¥800</dd>
                    </div>
                    <div class="drink_item">
                        <dt>エントランスブレンド</dt>
                        <dd>¥800</dd>
                    </div>
                    <div class="drink_item">
                        <dt>エチオピアナチュラル</dt>
                        <dd>¥800</dd>
                    </div>
                    <div class="drink_item">
                        <dt>グアテマラ</dt>
                        <dd>¥800</dd>
                    </div>
                    <div class="drink_item">
                        <dt>ブラジル</dt>
                        <dd>¥800</dd>
                    </div>
                    <div class="drink_item">
                        <dt>タンザニア</dt>
                        <dd>¥800</dd>
                    </div>
                    <div class="drink_item">
                        <dt>フスタブレンド</dt>
                        <dd>¥800</dd>
                    </div>
                </dl>
        </div>
        </div>
        <a href="#" class="more_btn btn_white english_letters">MORE</a>
        </div>
    </section>

    <!--ショップリスト-->
    <section id="shoplist" class="shoplist wrapper">
        <div class="content_container content_inner">
            <h2 class="english_litter english_letters">SHOP LIST</h1>
                <P>首都圏を中心に6店舗展開しています。<br>
                    お近くの店舗でお待ちしています。</P>
                <ul class="shop_lists">
                    <li class="shop_list">北千住店</li>
                    <li class="shop_list">代官山店</li>
                    <li class="shop_list">新宿店</li>
                    <li class="shop_list">銀座店</li>
                    <li class="shop_list">渋谷店</li>
                    <li class="shop_list">八王子店</li>
                </ul>
        </div>
        <a href="#" class="more_btn btn_black english_letters">MORE</a>

    </section>

    <!--セパレート画像-->
    <section id="separate" class="separate">
        <img src="<?php echo get_template_directory_uri(); ?>/img/bg-top-separate 1.jpg">
    </section>

    <!--ブログ＆ニュース-->
    <section id="blog_news" class="blog&news wrapper">
        <div class="content_container content_inner">
            <h2 class="english_letters">BLOG & NEWS</h1>
                <div class="articles">
                    <?php
                    $args = array(
                        'post_type' => 'blog',
                        'posts_per_page' => 3,
                    );
                    $blog_query = new WP_Query($args);
                    if ($blog_query->have_posts()) :
                        while ($blog_query->have_posts()) : $blog_query->the_post();
                    ?>
                            <div class="article">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="article_thumbnail">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                    <div class="article_day english_letters"><?php the_time(get_option('date_format')); ?></div>
                                    <div class="article_excerpt">
                                        <?php the_excerpt(); ?>
                                    </div>
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
                <a href="<?php echo esc_url(home_url()); ?>/blog" class="more_btn btn_black english_letters">MORE</a>
    </section>

</main>

<!--footer-->

<?php get_footer(); ?>

</div>

</body>

</html>