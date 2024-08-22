<footer id="footer">
    <div class="footer_container">
        <div class="footer_cat">
            <div class="site_logo footer_site_logo">
                <a href="<?php echo esc_url(home_url()); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="ロゴ画像">
                </a>
            </div>
            <div class="footer_content">
                <P>WEB Entertainment Design Inc.</P>
                <p>West Building 3F</p>
                <p>9-99 Sakuragaokacho Shibuya-ku</p>
                <p>Tokyo, Japan 150-0031</p>
                <p>T/99-9999-9999</p>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; Web Entertainment Design Inc.</p>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/footerFixed.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/tabSwitch.js"></script>



<?php wp_footer(); ?>