<?php get_header(); ?>

	<div class="mainvisual main-swiper-container">

		<!--<p class="catch eng">LET’S PLAY<br>CLUB ACTIVITES<br>AGAIN!</p>-->

		<div class="swiper-wrapper">
	        <!-- 各スライド -->
	        <div class="swiper-slide slide_004">
	        	<p><img src="<?php echo get_template_directory_uri(); ?>/img/top/mainvisual_cp202104_txt.png"></p>
	        </div>
	        <div class="swiper-slide slide_001"></div>
	        <div class="swiper-slide slide_002"></div>
	        <div class="swiper-slide slide_003"></div>
	    </div>


	</div>

	<section class="info">
		<div class="inner clearfix">
			<h2 class="eng"><a href="<?php echo get_category_link('16');?>">INFORMATION</a></h2>
			<a href="<?php echo get_category_link('16');?>" class="eng">&gt;&nbsp;MORE</a>
			<ul>
				<?php
				// post_type= 投稿タイプ
				// posts_per_page= 表示件数
				// cat=表示するカテゴリーを指定
				$column_posts = get_posts('post_type=post&posts_per_page=3&cat=1,2,4,7,11,12,13,14,');
				?>
			    <?php
				foreach ( $column_posts as $post ):
				    setup_postdata($post); ?>
			    	<li><a href="<?php the_permalink(); ?>"><span><?php the_time('Y.m.d'); ?></span><?php the_title(); ?></a></li>
			    <?php endforeach;wp_reset_postdata(); ?>
			</ul>
		</div>
	</section>

	<div class="inner bnr">
		<!-- <a href="<?php echo get_template_directory_uri(); ?>/img/top/2023_springcampaign.pdf" style="display:block; margin-bottom: 10px;" target="_blank">
			<picture>
				<source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/top/banner/bnr_spring2023_sp.png 767w"/>
				<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/top/banner/bnr_spring2023_pc.png 768w"/>
				<img src="<?php echo get_template_directory_uri(); ?>/img/top/banner/bnr_spring2023_pc.png" alt="Spring Campaign - Admission fee and 1month mambership fee ¥0">
			</picture>
		</a> -->
		<a href="<?php echo get_template_directory_uri(); ?>/img/top/pdf/202309_campaign.pdf" style="display:block; margin-bottom: 10px;" target="_blank">
			<picture>
				<source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/top/banner/bnr_campaign202309_sp.png 767w"/>
				<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/top/banner/bnr_campaign202309_pc.png 768w"/>
				<img src="<?php echo get_template_directory_uri(); ?>/img/top/banner/bnr_campaign202309_pc.png" alt="1ヶ月分の会費が無料になる！家族/友達ご紹介キャンペーン開催中 - 再入会キャンペーンも同時開催中！">
			</picture>
		</a>
		<a href="https://next-akasaka.com/keirin/" style="display:block; margin-bottom: 10px;" target="_blank">
			<picture>
				<source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/top/banner/bnr_keirin_sp.jpg 767w"/>
				<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/top/banner/bnr_keirin.jpg 768w"/>
				<img src="<?php echo get_template_directory_uri(); ?>/img/top/banner/bnr_keirin.jpg" alt="2022年11月1日 競輪予備校開校！ 日本競輪選手養成所の入所試験合格を目指す生徒を募集します">
			</picture>
		</a>
		<a href="<?php the_permalink('3230'); ?>" style="display:block; margin-bottom: 10px;">
			<img src="<?php echo get_template_directory_uri(); ?>/img/top/bnr_cp_202003.jpg" width="950" height="150" alt="期間限定トライアル体験キャンペーン受付中 - 何度通っても1ヶ月10,000円！2020年5月9日まで">
		</a>
	</div>

	<section class="message">
		<div class="inner">
			<h1>大人の部活、はじまる</h1>
			<p>
				マシンと向き合い、黙々とトレーニングを積む。そんなスタイルもいいけれど、<br class="disp_pc">
				どうせ体を鍛えるなら、新しい世界で新しい仲間と、楽しみながら鍛える方法もあります。<br class="disp_pc">
				まるで、かつて心を熱くしたあの頃の“部活動”のように。<br>
				&nbsp;<br>
				私たちはそんな“部活”のような「誰かに会える楽しみ」も<br class="disp_pc">
				体と心を鍛えることに大切な要素だと考えています。<br class="disp_pc">
				「NEXT」は一流の講師陣による一流の指導で、<br class="disp_pc">
				仲間とともに、楽しみながら、強く、美しくなる<br class="disp_pc">
				新しいカタチのコミュニティ・ジムとして誕生しました。<br>
				&nbsp;<br>
				ジムの別名は「Akasaka Base」。<br>
				次のステージへと向かう大人たちにとって、会社や家庭以外の新しいベースをつくることが、<br class="disp_pc">
				他のベースにもきっといい影響を及ぼすと考えたからです。<br class="disp_pc">
				あなたと、あなたの体にとって、すばらしいベースとなるように。<br>
				そして、あなたの人生が、さらなる「NEXT」ステージへ飛躍することを願って。
			</p>
		</div>

		<div class="image_wrap">
				
		</div>
	</section>

	<!-- INTRODUCTION -->
	<section class="intro">
		<div class="inner">
			<h2 class="eng">INTRODUCTION</h2>
			<div class="youtube">
				<iframe id="ytplayer" type="text/html" width="680" height="382.5"
	src="https://www.youtube.com/embed/5AQe-JHzh5I"
	frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</section>

	<!-- 特徴 -->
	<section class="point">
		<ul>
			<li>
				<div class="photo">
					<a href="<?php the_permalink('2901'); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/top/point_photo_001.jpg" width="260" height="260" align="FACILITIES">
					</a>
				</div>
				<a href="<?php the_permalink('2901'); ?>">
					<h3 class="eng">FACILITIES<span class="jpn">ニーズにあわせた施設</span></h3>
				</a>
				<p>NEXTにはジムエリアとスタジオエリアの2つから構成されています。また常に心地よく、長く継続してトレーニングして頂けるよう様々な施設をご用意しています。</p>
			</li>
			<li>
				<div class="photo">
					<a href="<?php the_permalink('2898'); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/top/point_photo_002.jpg" width="260" height="260" align="INSTRUCTORS">
					</a>
				</div>
				<a href="<?php the_permalink('2898'); ?>">
					<h3 class="eng">INSTRUCTORS<span class="jpn">国際色豊かなインストラクター</span></h3>
				</a>
				<p>NEXTには外国人インストラクターが多数在籍しています。本場のトレーニングを体験できる他、外国語でコミュニケーションすることもできます。</p>
			</li>
			<li>
				<div class="photo">
					<a href="<?php the_permalink('2901'); ?>#access">
						<img src="<?php echo get_template_directory_uri(); ?>/img/top/point_photo_003.jpg" width="260" height="260" align="LOCATION">
					</a>
				</div>
				<a href="<?php the_permalink('2901'); ?>#access">
					<h3 class="eng">LOCATION<span class="jpn">赤坂駅から徒歩2分</span></h3>
				</a>
				<p>赤坂駅、溜池山王駅、赤坂見附駅の3駅からアクセス可能。オフィスも近いので、仕事の帰りに通っていただくのはもちろん、出勤前やお昼休みの利用も可能です。</p>
			</li>
		</ul>
	</section>

	<!-- PROGRAMS -->
	<section id="programs" class="programs">
		<div class="inner">
			<h2 class="eng">PROGRAMS</h2>
			<ul>
				<li class="clearfix">
					<img src="<?php echo get_template_directory_uri(); ?>/img/top/program_photo_kick.jpg" width="340" height="340" alt="KICK BOXING">
					<div class="text">
						<h3 class="eng">KICK BOXING<span>キックボクシング</span></h3>
						<p>ムエタイ、キックボクシングの元王者たちが教えるキックボクシングプログラム。優しく丁寧に、レベルに合った指導を行います。</p>
						<a href="#kick" class="eng inline_box disp_sp">&gt;&nbsp;MORE INFO</a>
						<a href="<?php the_permalink('588'); ?>" class="eng disp_pc">SPECIAL SITE</a>
					</div>
				</li>
				<li class="clearfix">
					<img src="<?php echo get_template_directory_uri(); ?>/img/top/program_photo_thai-kick.jpg" width="340" height="340" alt="THAI KICK RHYTHM">
					<div class="text">
						<h3 class="eng">THAI KICK RHYTHM<span>タイキックリズム</span></h3>
						<p>音楽に合わせてムエタイの動きをする、新しいエクササイズです。楽しくストレスを発散しながら脂肪を燃焼できます。</p>
						<a href="#thai-kick" class="eng inline_box disp_sp">&gt;&nbsp;MORE INFO</a>
						<a href="https://www.youtube.com/embed/tldDyq60fsg?autoplay=1" class="eng youtube_box disp_pc">MOVIE</a>
					</div>
				</li>
				<li class="clearfix">
					<img src="<?php echo get_template_directory_uri(); ?>/img/top/program_photo_zumba.jpg" width="340" height="340" alt="ZUMBA">
					<div class="text">
						<h3 class="eng">ZUMBA<span>ズンバ</span></h3>
						<p>世界中で大ヒットしているダンスフィットネスプログラムです。 様々な音楽に合わせて踊ります。ダンス未経験者でも楽しく参加できます。</p>
						<a href="http://next-akasaka.com/zumba/" target="_blank" class="eng disp_sp">&gt;&nbsp;SPECIAL SITE</a>
						<a href="http://next-akasaka.com/zumba/" target="_blank" class="eng disp_pc">SPECIAL SITE</a>
					</div>
				</li>
				<li class="clearfix">
					<img src="<?php echo get_template_directory_uri(); ?>/img/top/program_photo_yoga.jpg" width="340" height="340" alt="YOGA">
					<div class="text">
						<h3 class="eng">YOGA<span>ヨガ</span></h3>
						<p>ポーズ・呼吸法・精神などの要素を調和させ、理想的な心身のバランスを手に入れることを目指します。落ち着いた雰囲気で、リラックスすることができます。</p>
						<a href="#yoga" class="eng inline_box disp_sp">&gt;&nbsp;MORE INFO</a>
						<a href="https://www.youtube.com/embed/o04xYzLDODw?autoplay=1" class="eng youtube_box disp_pc">MOVIE</a>
					</div>
				</li>
				<li class="clearfix">
					<img src="<?php echo get_template_directory_uri(); ?>/img/top/program_photo_grapping.jpg" width="340" height="340" alt="GRAPPING">
					<div class="text">
						<h3 class="eng">MMA<span>MMA</span></h3>
						<p>日本でいう総合格闘技。NextのMMAはインストラクターが二人付き初心者から経験者まで満足するプログラムとなっております。</p>
						<a href="#grapping" class="eng inline_box disp_sp">&gt;&nbsp;MORE INFO</a>
					</div>
				</li>
				<li class="clearfix">
					<img src="<?php echo get_template_directory_uri(); ?>/img/top/program_photo_trx.jpg" width="340" height="340" alt="TRX">
					<div class="text">
						<h3 class="eng">TRX<span>TRX</span></h3>
						<p>吊り輪のような器具を用いた、自重によるトレーニングプログラムです。足の位置、体の角度などを変えることにより、個人の体力にあわせて負荷の強弱を調節できます。</p>
						<a href="#trx" class="eng inline_box disp_sp">&gt;&nbsp;MORE INFO</a>
						<a href="https://www.youtube.com/embed/Br9maQil1Uw?autoplay=1" class="eng youtube_box disp_pc">MOVIE</a>
					</div>
				</li>
				<li class="clearfix">
					<img src="<?php echo get_template_directory_uri(); ?>/img/top/program_photo_karate.jpg" width="340" height="340" alt="KARATE">
					<div class="text">
						<h3 class="eng">KARATE<span>空手</span></h3>
						<p>明るく楽しくをモットーに、世界空手道連盟士道館の師範が基本から丁寧に指導します。空手未経験でも全く問題ありません。</p>
						<a href="#karate" class="eng inline_box disp_sp">&gt;&nbsp;MORE INFO</a>
						<a href="https://www.youtube.com/embed/buxGmWL62o8?autoplay=1" class="eng youtube_box disp_pc">MOVIE</a>
					</div>
				</li>
				<li class="clearfix">
					<img src="<?php echo get_template_directory_uri(); ?>/img/top/program_photo_tbc.jpg" width="340" height="340" alt="CIRCUIT TRANING">
					<div class="text">
						<h3 class="eng">CIRCUIT TRANING<span>サーキット<br class="disp_sp">トレーニングプログラム</span></h3>
						<p>サーキット トレーニングプログラム。いくつかの異なるエクササイズをサーキット形式で行い、身体を総合的に鍛えます。</p>
						<a href="#tbc" class="eng inline_box disp_sp">&gt;&nbsp;MORE INFO</a>
						<a href="https://www.youtube.com/embed/VmGVpjSxBS8?autoplay=1" class="eng youtube_box disp_pc">MOVIE</a>
					</div>
				</li>
				<li class="clearfix">
					<img src="<?php echo get_template_directory_uri(); ?>/img/top/program_photo_keirin.jpg" width="340" height="340" alt="BICYCLE RACER TRAINING PREP SCHOOL">
					<div class="text">
						<h3 class="eng small">BICYCLE RACER TRAINING PREP SCHOOL<span>競輪予備校</span></h3>
						<p>選手候補生入所試験合格に向け、一次試験対策のトレーニングと、二次試験で使用する機材（wattbike）を使用して合格数値をクリアできるようプログラムの提供を行います。</p>
						<a href="https://next-akasaka.com/keirin/" target="_blank" class="eng disp_sp">&gt;&nbsp;SPECIAL SITE</a>
						<a href="https://next-akasaka.com/keirin/" target="_blank" class="eng disp_pc">SPECIAL SITE</a>
					</div>
				</li>

			</ul>

			<a href="<?php the_permalink('2906'); ?>" class="eng link_btn">SCHEDULE<span>スケジュール</span></a>
		</div>
	</section>

	<section class="gallery">
		<h2 class="eng">GALLERY</h2>

		<!-- Slider main container -->
		<div class="swiper-container">
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				<!-- Slides -->
				<div class="swiper-slide">
					<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/gallery_01.jpg" width="500" alt="施設内写真">
				</div>
				<div class="swiper-slide">
					<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/gallery_02.jpg" width="500" alt="施設内写真">
				</div>
				<div class="swiper-slide">
					<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/gallery_03.jpg" width="500" alt="施設内写真">
				</div>
				<div class="swiper-slide">
					<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/gallery_04.jpg" width="500" alt="施設内写真">
				</div>
				<div class="swiper-slide">
					<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/gallery_05.jpg" width="500" alt="施設内写真">
				</div>
				<div class="swiper-slide">
					<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/gallery_06.jpg" width="500" alt="施設内写真">
				</div>
				<div class="swiper-slide">
					<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/gallery_07.jpg" width="500" alt="施設内写真">
				</div>
				<div class="swiper-slide">
					<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/gallery_08.jpg" width="500" alt="施設内写真">
				</div>
				<div class="swiper-slide">
					<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/gallery_09.jpg" width="500" alt="施設内写真">
				</div>
			</div>
		</div>
	</section>

	<!-- modal -->
	<div style="display: none;">
		<div id="kick" class="modal">
			<h3 class="eng">KICK BOXING<span>キックボクシング</span></h3>
			<p>ムエタイ、キックボクシングの元王者たちが教えるキックボクシングプログラム。優しく丁寧に、レベルに合った指導を行います。</p>
			<a href="<?php the_permalink('588'); ?>" class="eng link_btn" target="_blank">SPACIAL SITE</a>
		</div>

		<div id="thai-kick" class="modal">
			<h3 class="eng">THAI KICK RHYTHM<span>タイキックリズム</span></h3>
			<p>音楽に合わせてムエタイの動きをする、新しいエクササイズです。楽しくストレスを発散しながら脂肪を燃焼できます。</p>
			<a href="https://www.youtube.com/watch?v=tldDyq60fsg" class="eng link_btn" target="_blank">MOVIE</a>
		</div>

		<div id="zumba" class="modal">
			<h3 class="eng">ZUMBA<span>ズンバ</span></h3>
			<p>世界中で大ヒットしているダンスフィットネスプログラムです。 様々な音楽に合わせて踊ります。ダンス未経験者でも楽しく参加できます。</p>
			<a href="http://next-akasaka.com/zumba/" class="eng link_btn" target="_blank">SPACIAL SITE</a>
		</div>

		<div id="yoga" class="modal">
			<h3 class="eng">YOGA<span>ヨガ</span></h3>
			<p>ポーズ・呼吸法・精神などの要素を調和させ、理想的な心身のバランスを手に入れることを目指します。落ち着いた雰囲気で、リラックスすることができます。</p>
			<a href="https://www.youtube.com/watch?v=o04xYzLDODw" class="eng link_btn" target="_blank">MOVIE</a>
		</div>

		<div id="grapping" class="modal">
			<h3 class="eng">GRAPPING<span>グラッピング</span></h3>
			<p>レスリングから寝技まで組技全般を学ぶプログラムです。関節技、絞め技、ディフェンスなどのテクニックを、初心者にも分かりやすく指導します。</p>
		</div>

		<div id="trx" class="modal">
			<h3 class="eng">TRX<span>TRX</span></h3>
			<p>吊り輪のような器具を用いた、自重によるトレーニングプログラムです。足の位置、体の角度などを変えることにより、個人の体力にあわせて負荷の強弱を調節できます。</p>
			<a href="https://www.youtube.com/watch?v=Br9maQil1Uw" class="eng link_btn" target="_blank">MOVIE</a>
		</div>

		<div id="karate" class="modal">
			<h3 class="eng">KARATE<span>空手</span></h3>
			<p>明るく楽しくをモットーに、世界空手道連盟士道館の師範が基本から丁寧に指導します。空手未経験でも全く問題ありません。</p>
			<a href="https://www.youtube.com/watch?v=buxGmWL62o8" class="eng link_btn" target="_blank">MOVIE</a>
		</div>

		<div id="tbc" class="modal">
			<h3 class="eng">CIRCUIT TRANING<span>サーキット<br class="disp_sp">トレーニングプログラム</span></h3>
			<p>サーキット トレーニングプログラム。いくつかの異なるエクササイズをサーキット形式で行い、身体を総合的に鍛えます。</p>
			<a href="https://www.youtube.com/watch?v=VmGVpjSxBS8" class="eng link_btn" target="_blank">MOVIE</a>
		</div>

		<div id="personal" class="modal">
			<h3 class="eng">PERSONAL TRANING<span>パーソナル トレーニング</span></h3>
			<p>筋肉をつけたい、痩せたい、運動不足を解消したい、などお客様一人一人の目的に合わせたトレーニング・食事の指導を行います。</p>
		</div>

	</div>

	<?php get_template_part('location'); ?>

<?php get_footer(); ?>
