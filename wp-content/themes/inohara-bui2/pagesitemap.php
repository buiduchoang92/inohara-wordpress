<?php
/**
 * Template Name: Sitemap
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package inohara-bui2
 */

get_header();
?>

	<main id="main" class="mt-70">
	<div class="page_title_sitemap">
                <h2>
                    <img src="../wp-content/themes/inohara-bui2/img/common/pic_page_ttl_sitemap.png" alt="">
                </h2>
            </div>
            <div class="breadcrumb">
                <div class="inner">
                    <ul>
                        <li><a href="../">トップ</a></li>
                        <li><a href="../sitemap">サイトマップ</a></li>
                    </ul>
                </div>
            </div>
            <section class="sitemap_sec01 mb-100">
                <div class="inner">
                    <h3 class="ttl_common_section">サイトマップ</h3>
                    <div class="box_common_infor mt-13">
                        <ul>
                            <li><a href="../">トップ</a></li>
                            <li></li>
                            <li></li>
                            <li><a href="../company">会社案内</a></li>
                            <li><a href="../product">取扱製品</a></li>
                            <li><a href="../recruit">採用情報</a></li>
                            <li><a href="../contact">お問い合わせ</a></li>
                            <li><a href="../privacypolicy">個人情報保護方針</a></li>
                            <li><a href="../sitemap">サイトマップ</a></li>
                        </ul>
                    </div>
                </div>
            <!--End recruit_sec01--></section>  
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
