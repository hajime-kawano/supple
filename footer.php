<footer id="footer">
    <!--インスタグラム-->
    <section class="instagram_wrapper">
        <div class="content_container">
            <h1 class="english_letters">INSTAGRAM</h1>
            <ul class="instagram_img">
                <li class="instagram_article">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/pic-instagram-post.jpg">
                </li>
                <li class="instagram_article">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/pic-instagram-post02.jpg">
                </li>
                <li class="instagram_article">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/pic-instagram-post03.jpg">
                </li>
                <li class="instagram_article">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/pic-instagram-post04.jpg">
                </li>
                <li class="instagram_article">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/pic-instagram-post05.jpg">
                </li>
                <li class="instagram_article">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/pic-instagram-post06.jpg">
                </li>
            </ul>
        <a href="#" class="more_btn btn_black english_letters">INSTAGRAM</a>
    </section>


    <div class="footer_bottom">
        <div class="site_logo footer_site_logo">
            <a href="<?php echo esc_url(home_url()); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-white.svg" alt="ロゴ画像">
            </a>
        </div>
        <div class="footer_content">
            <div class="footer_shop_lists">
                <div class="footer_shop_list">北千住店</div>
                <span>/</span>
                <div class="footer_shop_list">代官山店</div>
                <span>/</span>
                <div class="footer_shop_list">新宿店</div>
                <span>/</span>
                <div class="footer_shop_list">八王子店</div>
                <span>/</span>
                <div class="footer_shop_list">銀座店</div>
                <span>/</span>
                <div class="footer_shop_list">渋谷店</div>
            </div>
            <div class="company_content">
                <div class="company_name">株式会社 SUPPLE</p>
                    <div class="company_address">〒123-4567</p>
                    </div>
                </div>
                <div class="copyright">
                    <p>&copy; © 2021 SUPPLE</p>
                </div>

            </div>
        </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/footerFixed.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/tabSwitch.js"></script>



<?php wp_footer(); ?>