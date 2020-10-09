<?php
/**
 * Template Name: Product
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
    <div class="page_title_product">
                <h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/product/pic_page_ttl_product.png" alt="">
                </h2>
            </div>
            <div class="breadcrumb">
                <div class="inner">
                    <ul>
                        <li><a href="../">トップ</a></li>
                        <li><a href="../product">取扱製品</a></li>
                    </ul>
                </div>
            </div>
            <section class="product_sec01">
                <div class="inner">
                    <h3 class="ttl_common_section mb-42">業務内容</h3>
                    <div class="ctn_product">
                        <div class="ctn_product_left">
                            <h4 class="product_detail">機械工具</h4>
                            <p>産業用全般機械 ／ 切削工具 ／ 作業工具 ／ 工作補助工具</p>
                            <h4 class="product_detail">伝導用品</h4>
                            <p>モーター ／ ベアリング ／ 駆動機器 ／ 減速機 ／ ゴム ／ ベルト類 ／コンベアー</p>
                            <h4 class="product_detail">空・油圧機器</h4>
                            <p>コンプレッサー ／ エアー駆動機器 ／ シリンダーポンプ ／油圧駆動機器</p>
                            <h4 class="product_detail">物流機器</h4>
                            <p>台車 ／ パレット ／ コンテナ ／ 棚 ／ 作業台</p>
                            <h4 class="product_detail">NC・MC機械 ／ 鍛圧機械 ／ 板金機械</h4>
                            <h4 class="product_detail margin_30">冷暖機器 ／ 住宅機器</h4>
                            <h4 class="product_detail margin_30">菅工機材</h4>
                            <p>配管（エアー） ／ 油圧機材 ／ パイプ ／ 継手 ／ バルブ</p>
                            <h4 class="product_detail">環境商品</h4>
                            <p>省エネルギー機器 ／ HACCP（食品）機具</p>
                            <h4 class="product_detail">その他</h4>
                            <p>省力機械 ／ 生産機械 ／ 作業台の設計・製作</p>
                        </div>
                        <div class="ctn_product_right">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/product/pic_product_detail01.jpg" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/product/pic_product_detail02.jpg" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/product/pic_product_detail03.jpg" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/product/pic_product_detail04.jpg" alt="">
                        </div>
                    </div>
                    <div class="box_common_infor">
                        <h5 class="ttl_product_box">
                            特注商品
                            <span class="dash01">ー</span><span class="dash02">&nbsp;&nbsp;設計&nbsp;／&nbsp;製作</span>
                        </h5>
                        <p>鋼材・ステンレスなどの加工。既成ではない台車・棚・各種装置などお客様のニーズに合った特注品の製作をお受けします。
                           <br> お気軽にお問い合わせ下さい。</p>
                    </div>
                </div>
            <!--End product_sec01--></section>
            <section class="product_sec02">
                <div class="inner">
                    <h3 class="ttl_common_section mb-32">取扱いメーカー</h3>
                    <table class="table02">
                        <tbody>
                            <tr>
                                <td>BIG DAISHOWA株式会社</td>
                                <td>ユニオンツール株式会社</td>
                                <td>株式会社をくだ屋技研</td>
                            </tr>
                            <tr>
                                <td>株式会社日立産機システム</td>
                                <td>育良精機株式会社</td>
                                <td>象印チェンブロック株式会社</td>
                            </tr>
                            <tr>
                                <td>NOK株式会社</td>
                                <td>京セラ株式会社</td>
                                <td>CKD株式会社</td>
                            </tr>
                            <tr>
                                <td>NTN株式会社</td>
                                <td>京都機械工具株式会社</td>
                                <td>ダイキンHVAC ソリューション東京株式会社</td>
                            </tr>
                            <tr>
                                <td>SMC株式会社</td>
                                <td>三甲株式会社</td>
                                <td>日東工器株式会社</td>
                            </tr>
                            <tr>
                                <td>株式会社アイゼン</td>
                                <td>株式会社MOLDINO</td>
                                <td>株式会社鶴見製作所</td>
                            </tr>
                            <tr>
                                <td>イスカルジャパン株式会社</td>
                                <td>小原歯車工業株式会社</td>
                                <td>株式会社ベッセル</td>
                            </tr>
                            <tr>
                                <td>株式会社エー・アンド・デイ</td>
                                <td>日本精工株式会社</td>
                                <td>三井精機工業株式会社</td>
                            </tr>
                            <tr>
                                <td>エフ・ピー・ツール株式会社</td>
                                <td>日本電産シンポ株式会社</td>
                                <td>株式会社前田シェルサービス</td>
                            </tr>
                            <tr>
                                <td>株式会社エンジニア</td>
                                <td>株式会社不二越</td>
                                <td>柳瀬株式会社</td>
                            </tr>
                            <tr>
                                <td>オークラ輸送機株式会社</td>
                                <td>片山チェン株式会社</td>
                                <td>株式会社ハタヤリミテッド</td>
                            </tr>
                            <tr>
                                <td>オイレス工業株式会社</td>
                                <td>有光工業株式会社</td>
                                <td>三木プーリ株式会社</td>
                            </tr>
                            <tr>
                                <td>オヂヤセイキ株式会社</td>
                                <td>静岡精機株式会社</td>
                                <td>株式会社アマダマシンツール</td>
                            </tr>
                            <tr>
                                <td>オリエンタルモーター株式会社</td>
                                <td>株式会社スイデン</td>
                                <td>DMG 森精機株式会社</td>
                            </tr>
                            <tr>
                                <td>オリオン機械株式会社</td>
                                <td>株式会社レジトン</td>
                                <td>オークマ株式会社</td>
                            </tr>
                            <tr>
                                <td>株式会社キトー</td>
                                <td>株式会社ロブテックス</td>
                                <td>株式会社ソディック</td>
                            </tr>
                            <tr>
                                <td>ケルヒャージャパン株式会社</td>
                                <td>三菱マテリアル株式会社</td>
                                <td>ヤマザキマザック株式会社</td>
                            </tr>
                            <tr>
                                <td>株式会社タンガロイ</td>
                                <td>住友電気工業株式会社</td>
                                <td>ファナック株式会社</td>
                            </tr>
                            <tr>
                                <td>株式会社ナンシン</td>
                                <td>オーエスジー株式会社</td>
                                <td class="product_orange_book">
                                    <a href="">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/product/pic_orange_book.jpg" alt="">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>株式会社マキタ</td>
                                <td>日本ホイスト株式会社</td>
                            </tr>
                            <tr>
                                <td>株式会社ミツトヨ</td>
                                <td>THK株式会社</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
	</main><!-- #main -->

<?php
get_footer();
