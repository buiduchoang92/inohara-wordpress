<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package inohara-bui2
 */

?>

        <footer id="footer">
            <div class="pagetop">
                    <img class="pagetop_img" src="<?php echo get_template_directory_uri(); ?>/img/common/ft_to_top.png" alt="">
            </div>
            <div class="inner">
                <div class="ft_content">
                    <div class="ft_info">
                        <a href="../">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/common/ft_logo.png" alt="">
                        </a>
                        <p class="company_dct font-weight-bold">株式会社猪原商会</p>
                        <p class="font-weight-normal">〒340-0808 &nbsp; 埼玉県八潮市緑町2丁目17番地1
                           <br> Tel 048-996-4431(代) &nbsp;&nbsp;  Fax 048-996-1874</p>
                    <!--footer-info--></div>
                    <div class="ft_menu">
                        <a href="<?php echo home_url() ?>">トップ</a>
                        <a href="<?php echo home_url() ?>/company">会社案内</a>
                        <a href="<?php echo home_url() ?>/product">取扱製品</a>
                        <a href="<?php echo home_url() ?>/recruit">採用情報</a>
                        <a href="<?php echo home_url() ?>/contact">お問い合わせ</a>
                        <a href="<?php echo home_url() ?>/privacypolicy">個人情報保護方針</a>
                        <a href="<?php echo home_url() ?>/sitemap">サイトマップ</a>
                    <!--footer-menu--></div>
                </div>
            </div>
            <div class="ft_copyright pb-20">
                <p>Copyright (C) 2020 株式会社猪原商会. All Rights Reserved.</p>
            </div>
        <!--End footer--></footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
