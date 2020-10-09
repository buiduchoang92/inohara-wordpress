<?php
/**
 * Template Name: Recruit
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
	<div class="page_title_recruit">
                <h2>
                    <img src="../wp-content/themes/inohara-bui2/img/recruit/pic_page_ttl_recruit.png" alt="">
                </h2>
            </div>
            <div class="breadcrumb">
                <div class="inner">
                    <ul>
                        <li><a href="../">トップ</a></li>
                        <li><a href="../recruit">採用情報</a></li>
                    </ul>
                </div>
            </div>
            <section class="recruit_sec01">
                <div class="inner">
                    <h3 class="ttl_common_section mb-28">募集要項</h3>
                    <div class="box_common_infor">
                        <p class="box_text">挨拶、返事、声掛けの三原則を念頭に働きやすい職場を目指しています。未経験者でもご安心ください。
                           <br> 活躍できるように丁寧に親身になりお教えいたします。</p>
                    </div>
                    <table class="table01">
                        <tbody>
                            <tr>
                                <th>業務内容</th>
                                <td>営業</td>
                            </tr>
                            <tr>
                                <th>雇用形態</th>
                                <td>正社員（中途）未経験可</td>
                            </tr>
                            <tr>
                                <th>資格</th>
                                <td>普通免許</td>
                            </tr>
                            <tr>
                                <th>給与</th>
                                <td>月給180.00円以上（経験、能力を考慮します）</td>
                            </tr>
                            <tr>
                                <th>勤務時間</th>
                                <td>8：30~17：30</td>
                            </tr>
                            <tr>
                                <th>休日・休暇</th>
                                <td>隔週土曜日（7月、8月は毎週土曜日休み）日曜日、祝日、GW、夏季休暇、年末年始休暇</td>
                            </tr>
                            <tr>
                                <th>待遇</th>
                                <td>昇給年1回、賞与年2回、各種社会保険完備、忘年会、通勤手当、皆勤手当
                                   <br> 試用期間3ヶ月あり</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="box_common_infor" id="recruit_box">
                        <h5 class="add_icon">応募方法</h5>
                        <p>電話またはメールフォームでご連絡の上、履歴書（写真貼付）を郵送してください。
                           <br> ご応募の秘密は厳守いたします。</p>
                        <div class="box_in_infor">
                            <a href=""><img src="../wp-content/themes/inohara-bui2/img/contact/pic_contact_tell.png" alt=""></a>
                            <p>担当&nbsp;&nbsp;／&nbsp;&nbsp;採用係&nbsp;&nbsp;&nbsp;&nbsp;履歴書送付先&nbsp;&nbsp;／&nbsp;&nbsp;〒340-0808&nbsp;&nbsp;&nbsp;埼玉県八潮市緑町2丁目17番地1</p>
                        </div>
                    </div>
                </div>
            <!--End recruit_sec01--></section>
            <div class="common_sec01 inner">
                <a href="../contact">
                    <img src="../wp-content/themes/inohara-bui2/img/common/btn_common_contact.jpg" alt="">
                </a>
            </div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
