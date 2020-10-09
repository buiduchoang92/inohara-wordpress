<?php
/**
 * Template Name: Privacypolicy
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
	<div class="page_title_privacypolicy">
                <h2>
                    <img src="../wp-content/themes/inohara-bui2/img/privacypolicy/pic_page_ttl_privacypolicy.png" alt="">
                </h2>
            </div>
            <div class="breadcrumb">
                <div class="inner">
                    <ul>
                        <li><a href="../">トップ</a></li>
                        <li><a href="../privacypolicy">個人情報保護方針</a></li>
                    </ul>
                </div>
            </div>
            <section class="privacypolicy_sec01">
                <div class="inner">
                    <h3 class="ttl_common_section mb-32">個人情報保護方針</h3>
                    <p class="pb-4">株式会社猪原商会（以下「当社」）は、以下の通り個人情報を定めます。この個人情報保護方針は、当社のウェブサイトを利用している時に適用されます。また、当ウェブサイトにおいてお預かりした個人情報は、この個人情報保護方針に従って管理されます。</p>
                    <ol>
                        <li class="panel">
                            <h4>お預かりした個人情報の収集・利用について</h4>
                            <p>当社は、サービスの提供のために必要な個人情報以外は収集致しません。
                               <br> 個人情報を利用する際には、目的を逸脱して利用することはありません。
                               <br> また、必要な個人情報の収集の際には、事前に同意を得ます。</p>
                        </li>
                        <li class="panel padding_bottom">
                            <h4>お預かりした個人情報の共有・開示について</h4>
                            <p>当社は、以下の場合を除いて、お預かりした個人情報をご本人の許可なく第三者と共有することはありません。</p>
                            <div class="panel_in">
                                <ol>
                                    <li>お客様の同意がある場合</li>
                                    <li>収集当初の目的を達成するために、必要な業務を委託する場合</li>
                                    <li>法令に基づき情報開示の依頼があった場合</li>
                                </ol>
                            </div>
                        </li>
                        <li class="panel">
                            <h4>お預かりした個人情報の修正・利用停止について</h4>
                            <p>お預かりした個人情報の修正・利用停止を必要とする場合には、その旨をご連絡ください。
                               <br> ご本人である確認をとらせて頂いた上で対応させて頂きます。</p>
                        </li>
                        <li class="panel">
                            <h4>セキュリティについて</h4>
                            <p>お預かりした個人情報は社内での使用に限定されており、お問い合わせ担当者など、
                               <br> 特別な業務を果たす為に個人情報を必要とするスタッフだけがアクセスすることを許されます。</p>
                        </li>
                        <li class="panel">
                            <h4>個人情報保護方針の更新</h4>
                            <p>当社は、個人情報保護方針を一部改訂することがあります。
                               <br> その際は、当ウェブサイト上にてお知らせ致します。</p>
                        </li>
                    </ol>
                </div>
            </section>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
