<?php
/*
Template Name: 会員種別料金
*/
 get_header(); ?>
<!-- page-membership.php -->

<h1 class="eng">MEMBERSHIP<span class="jpn">会員種別</span></h1>
<section class="genre">
    <div class="inner clearfix">
        <ul>
            <li class="gold">
                <h2 class="eng">GOLD<span class="jpn">ゴールド会員</span></h2>
                <p class="price"><img src="<?php echo get_template_directory_uri(); ?>/img/membership/price_27500.png" alt="27500円（月）" width="356" height="54" /></p>

                <ul class="merit">
                    <li>営業時間内いつでも利用可能</li>
                    <li>すべてのプログラム受講可能</li>
                    <li>駐車場無料（※1）</li>
                    <li>個別ロッカー無料</li>
                </ul>
            </li>
            <li class="reguler">
                <h2 class="eng">REGULAR<span class="jpn">レギュラー会員</span></h2>
                <p class="price"><img src="<?php echo get_template_directory_uri(); ?>/img/membership/price_19800.png" alt="19800円（月/税別）" width="348" height="54" /></p>

                <ul class="merit">
                    <li>営業時間内いつでも利用可能</li>
                    <li>すべてのプログラム受講可能</li>
                    <li class="disp_pc">-</li>
                    <li class="disp_pc">-</li>
                </ul>
            </li>
            <li class="night">
                <h2 class="eng">NIGHT<span class="jpn">ナイト会員</span></h2>
                <p class="price"><img src="<?php echo get_template_directory_uri(); ?>/img/membership/price_12100.png" alt="12100円（月/税別）" width="348" height="54" /></p>

                <ul class="merit">
                    <li>18:00〜CLOSEまで利用可能</li>
                    <li>時間内のプログラム受講可能</li>
                    <li class="disp_pc">-</li>
                    <li class="disp_pc">-</li>
                </ul>
            </li>
            <li class="day">
                <h2 class="eng">DAY<span class="jpn">デイ会員</span></h2>
                <p class="price"><img src="<?php echo get_template_directory_uri(); ?>/img/membership/price_14300.png" alt="14300円（月/税別）" /></p>

                <ul class="merit">
                    <li>OPEN〜16:00まで利用可能</li>
                    <li>時間内のプログラム受講可能</li>
                    <li class="disp_pc">-</li>
                    <li class="disp_pc">-</li>
                </ul>
            </li>
        </ul>
        <p class="notice_text">（※1）駐車場の無料利用は、施設利用時間内に限ります</p>
        <!-- PCのみ -->
        <table class="disp_pc">
            <tbody>
                <tr>
                    <th class="eng">TYPE</th>
                    <th class="eng">PRICE</th>
                    <th class="eng">CLASS</th>
                </tr>
                <tr>
                    <td class="type">MARTIAL ARTS<span class="jpn">マーシャルアーツ会員</span></td>
                    <td class="price"><img src="<?php echo get_template_directory_uri(); ?>/img/membership/price_16500_blk.png" height="35" /></td>
                    <td class="class">Kick Boxing, Karate, Kick Out</td>
                </tr>

                <tr>
                    <td class="type">ZUMBA<span class="jpn">ズンバ会員</span></td>
                    <td class="price"><img src="<?php echo get_template_directory_uri(); ?>/img/membership/price_16500_blk.png" height="35" /></td>
                    <td>Zumba, Mixed Fit</td>
                </tr>
                <tr>
                    <td class="type" rowspan="2">KEIRIN<span class="jpn">競輪予備校</span></td>
                    <td class="price"><img src="<?php echo get_template_directory_uri(); ?>/img/membership/price_33000.png" height="35" /></td>
                    <td class="class">パーソナルトレーニング</td>
                </tr>
                <tr>
                    <td class="price"><img src="<?php echo get_template_directory_uri(); ?>/img/membership/price_11000_blk.png" height="35" /></td>
                    <td class="class">自主トレーニング</td>
                </tr>
            </tbody>
        </table>
        <!-- SP -->
        <ul class="classlist disp_sp">
            <li>
                <p class="type eng">MARTUAL ARTS<span class="jpn">マーシャルアーツ会員</span></p>
                <p class="price"><img src="<?php echo get_template_directory_uri(); ?>/img/membership/price_16500_blk.png" width="284" height="42" /></p>
                <p class="class eng">Kick Boxing, Karate, Kick Out</p>
            </li>
            <li>
                <p class="type eng">ZUMBA<span class="jpn">ズンバ会員</span></p>
                <p class="price"><img src="<?php echo get_template_directory_uri(); ?>/img/membership/price_16500_blk.png" width="284" height="42" /></p>
                <p class="class eng">Zumba, Mixxed Fit</p>
            </li>
            <li>
                <p class="type eng">KEIRIN<span class="jpn">競輪予備校</span></p>
                <p class="price"><img src="<?php echo get_template_directory_uri(); ?>/img/membership/price_33000.png" width="284" height="42" /></p>
                <p class="class eng">パーソナルトレーニング</p>
                &nbsp;
                <p class="price"><img src="<?php echo get_template_directory_uri(); ?>/img/membership/price_11000_blk.png" width="284" height="42" /></p>
                <p class="class eng">自主トレーニング</p>
            </li>
        </ul>


        <div class="notice">

            <p>
                親子会員／法人会員もございます。詳しくはスタッフまでお尋ね下さい。<br>
                <span class="eng">We also have Family/Corporate membership plans. Please ask our staff for details.</span>
            </p>

            <p>
                プライベートロッカー（￥550〜￥2,200／月（税込））もご用意しております。<br>
                <span class="eng">Private lockers are ￥550〜￥2,200/monthly.</span>
            </p>

            <p>
                荷物用ロッカー、シャワーは無料でご利用可能です。<br>
                <span class="eng">You can use free lockers and shower room.</span>
            </p>

            <p>
                マシーンエリアは会員種別の時間帯であれば、いつでもご利用可能です。<br>
                <span class="eng">You can use the facilities on the machine area depends on your membership type.</span>
            </p>

            <p>
                駐車場もございます（ゴールド会員のみ無料）<br>
                <span class="eng">We have parking lots that Gold members can use for free. Other members need to pay.</span>
            </p>

            <p>
                クラスの体験は１回のみご予約制となっております<br>
                <span class="eng">The class experience is once per person and is by appointment.</span>
            </p>

        </div>
    </div>
</section>

<section id="join" class="join">
    <div class="inner">
        <h2 class="eng">HOW TO JOIN<span class="jpn">入会手続について</span></h2>
        <p class="lead">入会までの流れや手続きについて必要な手順をご案内いたします。<br>
        NEXTでは、体力向上やストレス解消、ダイエットなど、皆様が目標を達成できますようスタッフ一同心を込めてお手伝いさせて頂きます。</p>

        <div class="steps">
            <div class="clearfix">
                <h3 class="eng">STEP1</h3>
                <div class="wrap">
                    ご希望の会員種別をお決めください
                </div>
            </div>
            <div class="clearfix">
                <h3 class="eng">STEP2</h3>
                <div class="wrap">
                    <p class="mb20">
                        会員種別によって利用時間、参加可能プログラム、会費が異なります。<br>
                        あなたのライフスタイルに一番合った会員種別をお選びください。<br>
                        どの会員種別が良いか迷っている場合は、当ジムスタッフがお客様のライフスタイルやご要望に合わせた最適な会員種別をご提案させて頂きます。<br>
                    またその他、何かご不明な点がございましたらお気軽にご相談ください。</p>
                    <p class="tel mb10"><span class="inline">お電話でのお問い合わせ</span><span class="small">TEL.</span><span class="large">03-6277-7416</span></p>
                    <p class="tel"><span class="inline">メールでのお問い合わせ</span><a href="/contact/">お問い合わせフォームへ</a></p>
                </div>
            </div>

        	<?php if (have_posts()) : ?>
        		<?php while (have_posts()) : the_post(); ?>
        			
        			<?php remove_filter ('the_content', 'wpautop'); ?>
        			<?php the_content(); ?>

        		<?php endwhile; ?>

        		<?php else : ?>

        			<h2>Not Found</h2>
        			<p>Sorry, but you are looking for something that isn't here.</p>

        	<?php endif; ?>

	        </div>
	        <div class="notice">

	            以下の項目に該当する方のご入会をお断りする事があります。
	            <ul>
	                <li>1. 暴力団関係者</li>
	                <li>2. 当ジムの諸規制を遵守しない方</li>
	                <li>3. 医師等により運動を禁じられている方</li>
	                <li>4. 妊娠中の方</li>
	                <li>5. 他人に伝染または感染する疫病を有する方</li>
	                <li>6. 酒気を帯びている方</li>
	                <li>7. 当ジムが不適当と認めた方</li>
	            </ul>
	        </div>
	    </div>
	</section>

	<?php if ( is_page(array(2898,2903,2906)) ) : ?>
	<?php get_template_part('location'); ?>
	<?php endif; ?>

<?php get_footer(); ?>