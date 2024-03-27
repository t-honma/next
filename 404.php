<!-- 404.php -->
<?php get_header(); ?>
<!-- page-company.php -->

	<h1 class="eng">NOT FOUND<span class="jpn">指定されたページは存在しませんでした。</span></h1>

	<section id="notfound">
		<div class="inner">
			<p>ご指定のページは存在しませんでした。</p>
			<a href="<?php echo get_option('home'); ?>/">トップへ</a>
		</div>
	</section>

<?php get_footer(); ?>