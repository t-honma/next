<?php
/*
Template Name: スケジュール
*/
?>
<?php get_header(); ?>
<!-- page-schedule.php -->

<h1 class="eng">SCHEDULE<span class="jpn">スケジュール</span></h1>
<section class="schedule_container">
	<div class="inner">

		<?php if( get_field('schedule_pdf_001',2906)): ?>
		<div class="pdf_wrap"><object data="<?php the_field('schedule_pdf_001',2906); ?>" type="application/pdf" width="100%" height="100%">スケジュールをダウンロード</object><a href="<?php the_field('schedule_pdf_001',2906); ?>" class="eng link_btn btn_red" target="_blank">&gt; DOWNLOAD(PDF)</a>
		</div>
		<?php endif; ?>

		<?php if( get_field('schedule_pdf_002',2906)): ?>
		<div class="pdf_wrap"><object data="<?php the_field('schedule_pdf_002',2906); ?>" type="application/pdf" width="100%" height="100%">スケジュールをダウンロード</object><a href="<?php the_field('schedule_pdf_002',2906); ?>" class="eng link_btn btn_red" target="_blank">&gt; DOWNLOAD(PDF)</a>
		</div>
		<?php endif; ?>

		<div class="notice">
			<ul>
				<li>完全予約制となっております。お電話でのご予約をお願いします。</li>
				<li>インストラクターのイベント等の都合でスケジュールが変更となる場合がございます。ご了承ください。</li>
				<li>Zumbaに参加するためにはインドアシューズが必要です。(レンタル有)</li>
				<li>Sparringに参加するためにはマウスピースとファウルカップが必要です。(販売有)</li>
			</ul>
			All classes are by appointment only. Please call us to make a reservation.
			TEL.03-6277-7416
		</div>
	</div>
</section>

<?php get_template_part('location'); ?>

<?php get_footer(); ?>