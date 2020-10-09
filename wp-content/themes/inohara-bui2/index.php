<?php
/**
 * Template Name: Home Page
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

	<main id="main" class="mt-40">

	<div class="bnr_top_page">
                <img src="./wp-content/themes/inohara-bui2/img/top/bnr_top_page01.jpg" alt="">
            <!--End banner--></div>
            <section class="top_sec01 inner">
                <h2>お知らせ
                <span class="icon_top_news">NEWS</span>
                </h2>
                <p class="top_sec01_txt">
                    <span class="date">2020.03.01</span>
                    &nbsp;&nbsp;&nbsp;ホームページオープンしました。
                </p>
            <!--End top_sec01--></section>
            <section class="top_sec02">
                    <div class="inner">
                        <h3 class="ttl_top_section">会社案内
                            <span class="icon_ttl_top_section">COMPANY</span>
                            <span class="txt_ttl_top_section">テキストが入ります。テキストが入ります。テキストが入ります。<br> テキストが入ります。テキストが入ります。</span>
                        </h3>
                        <div class="btn_top_more">
                            <a href="./company">
                                <img class="btn_img_top_more" src="./wp-content/themes/inohara-bui2/img/top/btn_top_more.png" alt="">
                            </a>
                        </div>
                    </div>
            <!--End top_sec02--></section>
            <section class="top_sec03">
                <div class="wrapper_recruit inner">
                    <h3 class="ttl_top_section">採用情報
                        <span class="icon_ttl_top_section">RECRUIT</span>
                        <span class="txt_ttl_top_section">テキストが入ります。テキストが入ります。テキストが入ります。<br> テキストが入ります。テキストが入ります。</span>
                    </h3>
                    <div class="btn_top_more">
                        <a href="./recruit">
                            <img class="btn_img_top_more" src="./wp-content/themes/inohara-bui2/img/top/btn_top_more.png" alt="">
                        </a>
                    </div>
                </div>
            <!--End top_sec03--></section>
            <section class="top_sec04">
                <div class="wrapper_product inner">
                    <h3 class="ttl_top_section">取扱製品
                        <span class="icon_ttl_top_section">PRODUCT</span>
                        <span class="txt_ttl_top_section">テキストが入ります。テキストが入ります。テキストが入ります。<br> テキストが入ります。テキストが入ります。</span>
                    </h3>
                    <div class="btn_top_more">
                        <a href="./product">
                            <img class="btn_img_top_more" src="./wp-content/themes/inohara-bui2/img/top/btn_top_more.png" alt="">
                        </a>
                    </div>
                </div>
            <!--End top_sec04--></section>
            <div class="common_sec inner">
                <a href="./contact">
                    <img id="btn_common_contact_img" src="./wp-content/themes/inohara-bui2/img/common/btn_common_contact.jpg" alt="">
                </a>
            </div>

	</main><!-- #main -->

<?php
get_footer();
