<?php get_header(); ?>
<!-- single.php -->

	<h1 class="eng">INFORMATION<span class="jpn">お知らせ</span></h1>

	<!--
	<div class="sp_category disp_sp">
		<select>
			<option value="<?php echo get_option('home'); ?>/information/">お知らせ一覧</option>
			<option value="<?php echo get_category_link('7');?>">イベント情報</option>
			<option value="<?php echo get_category_link('2');?>">新設クラス</option>
			<option value="<?php echo get_category_link('13');?>">キャンペーン情報</option>
			<option value="<?php echo get_category_link('11');?>">ピックアップクラス</option>
			<option value="<?php echo get_category_link('14');?>">スタッフ募集</option>
			<option value="<?php echo get_category_link('4');?>">その他のニュース</option>
		</select>
	</div>
	-->

	<section class="info_container">
		<div class="inner clearfix">

			<!-- お知らせ一覧 -->
			<div class="info_wrap">

				<?php 
				if (have_posts()) : // WordPress ループ
				while (have_posts()) : the_post(); // 繰り返し処理開始 ?>

					<div class="info_box clearfix">
						<!--<span class="tag">イベント情報</span>-->
						<span class="date eng"><?php the_time('Y.m.d'); ?></span>
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
					</div>

				<?php endwhile; ?>
					
				<?php else : ?>
					<div class="news_box clearfix">
						<p class="noentry">お知らせはありません</p>
					</div>

				<?php endif; ?>

				<!-- pager -->
				<div class="pager clearfix">
				    <div class="next_link"><?php next_post_link('%link','NEWER POSTS&nbsp;&gt;') ?></div>
				    <div class="prev_link"><?php previous_post_link('%link','&lt;&nbsp;OLDER POSTS') ?></div>
				</div>


			</div>
			<!-- /お知らせ一覧 -->

			<!-- PC:カテゴリ -->
			<div class="category_wrap">
				<ul class="sns_link">
					<li>
						<a href="<?php echo get_category_link('1');?>" class="announcement">
							<p class="eng">ANNOUNCEMENTS</p>
							<p>休講・代講のお知らせ</p>
						</a>
					</li>
					<li>
						<a href="https://www.facebook.com/NextAkasakaBase/" target="_blank" class="facebook">
							<p class="eng">facebook</p>
							<p>様々な情報、スタッフの雑感等、気軽にアップロードしています</p>
						</a>
					</li>
				</ul>

				<div class="disp_pc">
					<p class="title eng">CATEGORY</p>
					<ul class="categories">
						<li><a href="<?php echo get_option('home'); ?>/information/"><span class="eng red">&gt;&nbsp;</span>お知らせ一覧</a></li>
						<li><a href="<?php echo get_category_link('7');?>"><span class="eng red">&gt;&nbsp;</span>イベント情報</a></li>
						<li><a href="<?php echo get_category_link('2');?>"><span class="eng red">&gt;&nbsp;</span>新設クラス</a></li>
						<li><a href="<?php echo get_category_link('13');?>"><span class="eng red">&gt;&nbsp;</span>キャンペーン情報</a></li>
						<li><a href="<?php echo get_category_link('11');?>"><span class="eng red">&gt;&nbsp;</span>ピックアップクラス</a></li>
						<li><a href="<?php echo get_category_link('14');?>"><span class="eng red">&gt;&nbsp;</span>スタッフ募集</a></li>
						<li><a href="<?php echo get_category_link('4');?>"><span class="eng red">&gt;&nbsp;</span>その他のニュース</a></li>
					</ul>
				</div>
			</div>
			<!-- /PC:カテゴリ -->
			
		</div>
	</section>

<?php get_footer(); ?>