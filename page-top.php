<?php
/* 
Template Name: TOPページ
*/
get_header();
?>
    <!--*****************************************-->
    <!--* main                                  *-->
    <!--*****************************************-->
    <main>
        <!-- ----------------------------------- -->
        <!-- mainvisual                          -->
        <!-- ----------------------------------- -->
        <div class="mainvisual">
            <div class="background-image">
                <div class="top-text">
                    <h1>
                        <span class="text1">家具家電1点からご家族引越しまで対応！<br></span>
                        <span class="text2">鹿児島県全域から全国、また離島へ<br></span>
                        <span class="text3">引越＆運搬全般</span>
                    </h1>
    
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/mainvisual4.png'); ?>" alt="えこぶ運送と代表の池野亮の写真">
                </div>

                <div class="line-btn">
                    <div class="speech-bubble">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/icons8-line-144.png'); ?>" alt="LINEのロゴ">
                        <p>で簡単！</p>
                    </div>
                    <div class="btn-wrap">
                        <a href="https://line.me/R/ti/p/@577lsphy?ts=07211632&oat_content=url" class="contact-btn">
                            <span>お見積もり・お問い合わせはコチラ</span><br>
                            <span>（LINEアプリに遷移します）</span>
                        </a>
                    </div>
                </div>
            </div>

            <ul class="banner">
                <li>
                    <p>家具1点から単身・ご家族のお引越しまで</p>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/mainvisual1.jpg'); ?>" alt="男性がダンボール荷物を荷台に乗せて運んでいる画像">
                </li>
                <li>
                    <p>鹿児島から全国へ、沖縄・離島のお引越しも対応</p>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/mainvisual2.jpg'); ?>" alt="船で荷物を運んでいる画像">
                </li>
                <li>
                    <p>お引越し以外の荷物運搬もお任せ（店舗・イベント対応可）</p>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/mainvisual3.jpg'); ?>" alt="荷台に荷物を乗せて運んでいる画像">
                </li>
            </ul>

        </div>

        <!-- ----------------------------------- -->
        <!-- cargo                               -->
        <!-- ----------------------------------- -->
        <section id="cargo" class="cargo">
            <div class="container">

                <div class="center-wrap">
                    <h2 class="section-title">えこぶが運べる荷物</h2>
                    <p class="explanation">
                        <span>えこぶにお任せいただける主な運搬物です。</span> <br>
                        <span>ここに記載のあるもの以外もお気軽にお問い合わせください！</span>
                    </p>
                </div>

                <div class="cargo__grid">
                    <div class="cargo__grid--item">
                        <div class="item-title">
                            <h3>単身からご家族でのお引越しのお荷物</h3>
                        </div>
                        <ul class="item-list">
                            <li>ダンボール、小型家電（電子レンジ・炊飯器など）ベッドや机・椅子、自転車</li>
                            <li>大型家電（冷蔵庫・洗濯機・テレビ）</li>
                            <li>衣類・日用品・本・子供用品・趣味用品（自転車・ピアノなど）</li>
                        </ul>
                    </div>
                    <div class="cargo__grid--item">
                        <div class="item-title">
                            <h3>フリマサイトやリサイクルショップで購入した日用品</h3>
                        </div>
                        <ul class="item-list">
                            <li>ベット、ソファ、テーブル、キャビネットなどの大型家具</li>
                            <li>洗濯機、冷蔵庫、掃除機、エアコン、扇風機などの家電</li>
                            <li>マットレスや布団、絨毯など運ぶのが大変なもの</li>
                        </ul>
                    </div>
                    <div class="cargo__grid--item">
                        <div class="item-title">
                            <h3>文化祭や野外イベントで使う機材</h3>
                        </div>
                        <ul class="item-list">
                            <li>ギター、ドラムセット、キーボード、アンプなどの楽器</li>
                            <li>テント、屋台用の鉄板、舞台用大道具、工作に使う機材など必要な道具</li>
                        </ul>
                    </div>
                    <div class="cargo__grid--item">
                        <div class="item-title">
                            <h3>その他ご自分で運ぶのが大変な物</h3>
                        </div>
                        <ul class="item-list">
                            <li>旅行で使ったサーフボードや浮き輪を空港まで</li>
                            <li>移動中に邪魔になる大型のキャリーケース</li>
                            <li>家庭で出た粗大ゴミをゴミ処理センターまで</li>
                            <li>ホームセンターで購入したDIY用品をご自宅まで</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="triangle-wrapper">
            <div class="triangle"></div>
        </div>

        <!-- ----------------------------------- -->
        <!-- read-text                           -->
        <!-- ----------------------------------- -->
        <div class="read-text">
            <div class="img-wrap">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/img/avatar.png'); ?>" alt="えこぶ運送 代表池野のアバター画像">
            </div>
            <p>
                <span>価格も！柔軟さも！地元力も！</span><br>
                <span>全部そろった</span>
                <span class="line">鹿児島えこぶ運送。</span><br class="sp-br">
                <span>大手にはできないサービスを！</span>
            </p>
            <img class="logo" src="<?php echo esc_url( get_template_directory_uri() . '/img/icon_logo.png'); ?>" alt="えこぶ運送のアイコンロゴ">
        </div>

        <!-- ----------------------------------- -->
        <!-- area                                -->
        <!-- ----------------------------------- -->
        <section id="area" class="area">
            <div class="container">

                <div class="center-wrap">
                    <h2 class="section-title">対応エリア</h2>
                    <p class="explanation">
                        <span>絶賛対応エリア拡大中です！</span>
                        <span>軽トラック〜3t車、離島は船で運搬します。</span>
                        <span>※種子島・屋久島・喜界島・奄美大島など（今後追加の可能性あり）</span>
                    </p>
                </div>
            </div>

            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/area1.png'); ?>" class="map" alt="日本地図で鹿児島から全国へ表した画像">
            <ul class="area__list">
                <li>
                    <h3>鹿児島県内</h3>
                    <p>県内どこでもお任せ！ <br>
                        ※一部宮崎エリア対応可能 <br>
                        （都城市、えびの市、小林市、高原町、三股町）
                    </p>
                </li>
                <li>
                    <h3>鹿児島→全国へ</h3>
                    <p>鹿児島から全国へお届け</p>
                </li>
                <li>
                    <h3>鹿児島↔︎沖縄・離島</h3>
                    <p>鹿児島から沖縄・離島へ／沖縄・離島から鹿児島へ</p>
                </li>
            </ul>

            <p class="area__text">
                <span>鹿児島県内から全国、沖縄・離島まで</span> <br>
                <span>幅広く対応いたします！</span>
            </p>
        </section>

        
        <!-- ----------------------------------- -->
        <!-- work-scene                          -->
        <!-- ----------------------------------- -->
        <section id="work-scene" class="work-scene">
            <div class="container">
                <div class="center-wrap">
                    <h2 class="section-title">作業風景</h2>
                    <p class="explanation">
                        <span>家具家電は 専用保護材で丁寧に養生・運搬しています。</span><br>
                        <span>高さ約3mの大容量トラックでお伺いするので、大きな荷物もお任せください！</span><br>
                        <span>※鹿児島軽貨物自動車運送事業提出済み。</span><br>
                        <span>作業員1〜3名で柔軟に対応いたします。</span><br>
                        <span>沖縄・神奈川エリアでも運搬代行実績多数いただいています。</span>
                    </p>
                </div>
            </div>
            
            <div class="bg-image"></div>


            <ul class="work-scene__slick">
                <?php
                $args = array(
                    'post_type'      => 'work_scene',
                    'posts_per_page' => 10,
                    'orderby'        => 'date',
                    'order'          => 'DESC'
                );
                $work_query = new WP_Query($args);
                if ($work_query->have_posts()) :
                    while ($work_query->have_posts()) : $work_query->the_post();
                ?>
                    <li>
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large', array('alt' => get_the_title())); ?>
                        <?php endif; ?>
                        <p><?php the_content(); ?></p>
                    </li>
                <?php endwhile; wp_reset_postdata(); endif; ?>
            </ul>
            

        </section>
        <!-- ----------------------------------- -->
        <!-- instagram                           -->
        <!-- ----------------------------------- -->
        <section id="instagram" class="instagram">
            <div class="container">
                <div class="center-wrap">
                    <h2 class="section-title">Instagram</h2>
                    <p class="explanation">
                        <span>インスタグラムでも作業風景を更新中！</span>
                        <span>お荷物、料金等の参考までに</span>
                        <span>※インスタDMでもお問い合わせ承ります。</span>
                    </p>
                </div>
                
                <?php echo do_shortcode('[instagram-feed]'); ?>

            </div>

        </section>
        <!-- ----------------------------------- -->
        <!-- contact                             -->
        <!-- ----------------------------------- -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="center-wrap">
                    <h2 class="section-title">お問い合わせ</h2>
                </div>

                <div class="contact__flex">
                    <div class="line-btn">
                        <div class="speech-bubble">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/icons8-line-144.png'); ?>" alt="LINEのロゴ">
                            <p>で簡単！</p>
                        </div>
                        <div class="btn-wrap">
                            <a href="https://line.me/R/ti/p/@577lsphy?ts=07211632&oat_content=url" class="contact-btn">
                                <span>お見積もり・お問い合わせはコチラ<br></span>
                                <span>（LINEアプリに遷移します）</span>
                            </a>
                        </div>
                    </div>
    
                    <div class="line-qr">
                        <p>上記で友達追加できない場合は、<br>
                            <span>「＠289boxwu」</span> <br>
                            をID検索　または右記のQRコードから「友達追加」をしてください。</p>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/QR.png'); ?>" alt="LINEのQRコード">
                    </div>
    
    
                    <div class="tel">
                        <p class="tel-text">電話をかける</p>
                        <a href="tel:+819024579422">
                            <span class="icon">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/img/icon_Phone.png'); ?>" class="black" alt="電話のロゴ">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/img/icon_Phone_white.png'); ?>" class="white" alt="電話のロゴ">
                            </span>
                            <div class="tel-num">
                                <p>090-2457-9422</p>
                                <p>9:00 ~ 19:00 / 担当者直通</p>
                            </div>
                        </a>
                        <p>作業中は電話にでられない場合もございます</p>
                    </div>
                </div>



            </div>
            


        </section>
        <!-- ----------------------------------- -->
        <!-- company                             -->
        <!-- ----------------------------------- -->
        <section id="company" class="company">
            <div class="container">

                <div class="center-wrap">
                    <h2 class="section-title">会社概要</h2>
                </div>

                <div class="company__flex">
                    <div class="company__flex--img">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/company.jpg'); ?>" alt="えこぶ運送の代表池野亮の画像">
                    </div>

                    <table class="company__flex--info">
                        <tbody>
                            <tr>
                                <td class="label">社名</td>
                                <td class="descriptor"><?php the_field('company_name'); ?></td>
                            </tr>
                            <tr>
                                <td class="label">本店</td>
                                <td class="descriptor"><?php echo nl2br(get_field('head_office')); ?></td>
                            </tr>
                            <tr>
                                <td class="label">鹿児島営業所</td>
                                <td class="descriptor"><?php echo nl2br(get_field('kagoshima_office')); ?></td>
                            </tr>
                            <tr>
                                <td class="label">電話</td>
                                <td class="descriptor"><a href="tel:<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a></td>
                            </tr>
                            <tr>
                                <td class="label">アドレス</td>
                                <td class="descriptor">
                                    <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="label">営業時間</td>
                                <td class="descriptor"><?php the_field('business_hours'); ?></td>
                            </tr>
                            <tr>
                                <td class="label">定休日</td>
                                <td class="descriptor"><?php the_field('holiday'); ?></td>
                            </tr>
                            <tr>
                                <td class="label">代表</td>
                                <td class="descriptor"><?php the_field('representative'); ?></td>
                            </tr>
                            <tr>
                                <td class="label">許可</td>
                                <td class="descriptor"><?php echo nl2br(get_field('license')); ?></td>
                            </tr>
                            <tr>
                                <td class="label">対応地域</td>
                                <td class="descriptor"><?php echo nl2br(get_field('service_area')); ?></td>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </div>



        </section>

    </main>
    <?php get_footer(); ?>