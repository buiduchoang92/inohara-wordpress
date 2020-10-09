<?php
/**
 * Template Name: Contact
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
    
    <div class="page_title_contact">
                <h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/contact/pic_page_ttl_contact.png" alt="">
                </h2>
            </div>
            <div class="breadcrumb">
                <div class="inner">
                    <ul>
                        <li><a href="../">トップ</a></li>
                        <li><a href="../contact">お問い合わせ</a></li>
                    </ul>
                </div>
            </div>
            <section class="contact_sec01">
                <div class="inner">
                    <h3 class="ttl_common_section mb-42">お電話・FAXでのお問い合わせ</h3>
                    <div class="box_common_infor">
                            <a class="contact_tell" href=""><img src="<?php echo get_template_directory_uri(); ?>/img/contact/pic_contact_tell.png" alt=""></a>
                            <a class="contact_fax" href=""><img src="<?php echo get_template_directory_uri(); ?>/img/contact/pic_contact_fax.png" alt=""></a>
                    </div>
                </div>
            <!--End contact_sec01--></section>
            <section class="contact_sec02">
                <div class="inner">
                    <h3 class="ttl_common_section">メールフォームでのお問い合わせ</h3>
                    <div class="mailform_contact">
                        <p>お手数ですが、<span>＊</span> の付いた項目は必ずご入力ください。
                            <br> 半角カタカナ、外字（登録文字）での入力は文字化けの原因となりますのでお控えください。
                            <br><a href="./privacypolicy">個人情報保護方針</a>にご同意の上、送信ください。</p>
                    </div>
                    <form id="formContact" action="./lib/mail/mail.php" method="POST">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>会社名</th>
                                    <td><input type="text" name="会社名" ></td>
                                </tr>
                                <tr>
                                    <th>お名前<img src="<?php echo get_template_directory_uri(); ?>/img/contact/pic_contact_star.jpg" alt=""></th>
                                    <td><input type="text" name="お名前" required></td>
                                </tr>
                                <tr>
                                    <th>メールアドレス<img src="<?php echo get_template_directory_uri(); ?>/img/contact/pic_contact_star.jpg" alt=""></th>
                                    <td><input type="text" name="メールアドレス"></td>
                                </tr>
                                <tr>
                                    <th>お電話番号</th>
                                    <td><input type="text" name="お電話番号" ></td>
                                </tr>
                                <tr>
                                    <th>FAX番号</th>
                                    <td><input type="text" name="FAX番号"></td>
                                </tr>
                                <tr>
                                    <th>お問い合わせ内容<img src="<?php echo get_template_directory_uri(); ?>/img/contact/pic_contact_star.jpg" alt=""></th>
                                    <td><textarea type="text" name="お問い合わせ内容"></textarea></td>
                                </tr>
                            </tbody>
                        <!--End table--></table>
                        <div class="submit">
                            <input type="submit" value="送信">
                        </div>
                    <!--End form--></form>
                </div>
            <!--End contact_sec02--></section>

	</main><!-- #main -->

<?php
get_footer();
