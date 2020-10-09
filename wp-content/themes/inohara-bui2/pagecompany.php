<?php
/**
 * Template Name: Company
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
	<div class="page_title_company">
                <h2>
                    <img src="../wp-content/themes/inohara-bui2/img/company/pic_page_ttl_company.png" alt="">
                </h2>
            </div>
            <div class="breadcrumb">
                <div class="inner">
                    <ul>
                        <li><a href="../">トップ</a></li>
                        <li><a href="../company">会社案内</a></li>
                    </ul>
                </div>
            </div>
            <section class="company_sec01">
                <div class="inner">
                    <h3 class="ttl_common_section">ご挨拶</h3>
                    <div class="box_common_infor mt-40" id="box_common_company">
                        <div class="box_company">
                            <p>猪原商会のホームページにお越し頂きありがとうございます。</p>
                            <p class="pt-15">弊社は昭和40年の創業時以来、地域密着で機械・器具・工具の販売をしています。
                            <br> 変化に即応・活きた情報・経験・知識・現場力でお客様のニーズに合う商品をご提案・ご提供できるように目指しております。</p>
                            <p class="pt-15">この機械・器具・工具販売を通じて日本の産業・ものづくりの発展のお手伝いがしたい。
                            <br> そして、社員一人ひとりの生活をより豊かなものに、お客様の信頼・ご満足がいただけるように、このものづくりの国日本のために、日々精進してまいります。</p>
                        </div>
                    </div>
                </div>
            <!--End contact_sec01--></section>
            <section class="company_sec02">
                <div class="inner">
                    <h3 class="ttl_common_section">会社概要</h3>
                    <table class="table01">
                        <tbody>
                            <tr>
                                <th>創業</th>
                                <td>1965年</td>
                            </tr>
                            <tr>
                                <th>設立</th>
                                <td>1978年7月</td>
                            </tr>
                            <tr>
                                <th>代表者</th>
                                <td>代表取締役　猪原 薫</td>
                            </tr>
                            <tr>
                                <th>所在地</th>
                                <td>〒340-0808&nbsp;&nbsp;埼玉県八潮市緑町2丁目17番地1
                                    <br> Tel 048-996-4331(代)　Fax 048-996-1874</td>
                            </tr>
                            <tr>
                                <th>資本金</th>
                                <td>1,000万円</td>
                            </tr>
                            <tr>
                                <th>社員数</th>
                                <td>13名</td>
                            </tr>
                            <tr>
                                <th>取引銀行</th>
                                <td>みずほ銀行
                                    <br> 埼玉県信用金庫
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="company_image_introduce">
                        <img class="img_introduce01" src="../wp-content/themes/inohara-bui2/img/company/pic_company_img_introduce01.jpg" alt="">
                        <img class="img_introduce02" src="../wp-content/themes/inohara-bui2/img/company/pic_company_img_introduce02.jpg" alt="">
                    </div>
                    <div class="company_map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3234.999624279327!2d139.8305628148233!3d35.82448492971031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601890f517692de1%3A0x6a4380248852cb90!2z5pel5pys44CB44CSMzQwLTA4MDgg5Z-8546J55yM5YWr5r2u5biC57eR55S677yS5LiB55uu77yR77yX4oiS77yR!5e0!3m2!1sja!2s!4v1597898527109!5m2!1sja!2s"></iframe>
                        <dl>
                            <dt>東武スカイツリーライン草加駅からバスの場合</dt>
                            <dd>緑町一丁目から徒歩2分</dd>  
                            <dt>八潮駅からバスの場合</dt>
                            <dd>小作田児童公園入口から徒歩1分</dd>
                        </dl>
                    </div>
                </div>
            <!--End contact_sec02--></section>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
