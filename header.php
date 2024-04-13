<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1">
<title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>

<!-- OGP -->
<meta property="og:title" content="<?php wp_title( '|', true, 'right' ); bloginfo('name'); ?>">
<meta property="og:description" content="ネクスト赤坂は、赤坂駅より徒歩2分のフィットネスジム（トレーニングジム・スポーツクラブ）です。仲間とともに、楽しみながら、強く、美しくなる新しいカタチのコミュニティ・ジムです。">
<meta property="og:url" content="https://next-akasaka.com/">
<meta property="og:image" content="">
<meta property="og:site_name" content="NEXT Akasaka-Base｜赤坂スポーツ フィットネスジム">

<!-- css -->
<link rel="stylesheet" href="https://use.typekit.net/jiq7qon.css">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:300,400,500,700" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/common.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/layout.css?<?php date_default_timezone_set('Asia/Tokyo'); echo date('YmdHi'); ?>">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/swiper.min.css">

<!-- js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/footerFixed.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/swiper.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/next.js"></script>


<?php if ( is_home() || is_front_page() ) : ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/colorbox.css">
<script src="<?php bloginfo('template_url'); ?>/js/jquery.colorbox.js"></script>
<script>
$(function() {
	$(".inline_box").colorbox({
	    inline:true,
	    maxWidth:"90%",
	    maxHeight:"80%",
	    closeButton: false,
	});

	$(".youtube_box").colorbox({
	    iframe:true,
	    width:600,
	    height:377,
	    maxWidth:"90%",
	    maxHeight:"80%",
	    closeButton: false,
	});
});
</script>

<?php elseif ( is_page('2898') ) : ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/colorbox_instructors.css">
<script src="<?php bloginfo('template_url'); ?>/js/jquery.colorbox.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.matchHeight.js"></script>
<script>
$(function() {
$(".iframe_box").colorbox({
    iframe:true,
    innerWidth: 600,//ColorBoxの幅
    innerHeight: 1000,//ColorBoxの高さ
    maxWidth:"90%",
    maxHeight:"100%",
    closeButton: false,
});
});

$(function(){
　　$('.instructors_wrap li').matchHeight();
});
</script>
<?php endif; ?>

<?php wp_head(); ?>

</head>
<?php if ( is_home() || is_front_page() ) : ?>
<body id="top">
<?php elseif( is_page( array('6') ) ) : ?>
<body id="membership" class="sub">
<?php elseif (is_category('information') || cat_is_ancestor_of(16, $cat)) : ?>
<body id="information" class="sub">
<?php elseif( is_single() ) : ?>
<body id="information" class="sub">
<?php elseif( is_page('2898') ) : ?>
<body id="instructors" class="sub">
<?php elseif( is_page('2901') ) : ?>
<body id="gallery" class="sub">
<?php elseif( is_page('2903') ) : ?>
<body id="membership" class="sub">
<?php elseif( is_page('2906') ) : ?>
<body id="schedule" class="sub">
<?php elseif( is_page('588') ) : ?>
<body id="kickboxing" class="sub">
<?php else: ?>
<body id="static" class="sub">
<?php endif; ?>
<div class="container">

	<header>
		<div class="inner">
			<a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('template_url'); ?>/img/common/header_logo.png" width="220" height="126" alt="NEXT" class="logo"></a>
		
			<div id="menu_toggle" class="sp_menu"></div>
			<ul class="gnavi">
				<li><a href="<?php the_permalink('2898'); ?>">INSTRUCTORS<span>インストラクター</span></a></li>
				<li><a href="<?php echo get_option('home'); ?>/#programs">PROGRAMS<span>プログラム</span></a></li>
				<li><a href="<?php the_permalink('2906'); ?>">SCHEDULE<span>スケジュール</span></a></li>
				<li><a href="<?php the_permalink('2903'); ?>">MEMBERSHIP<span>会員種別&#47;料金</span></a></li>
				<li><a href="<?php the_permalink('2901'); ?>">GALLERY<span>施設案内</span></a></li>
				<li><a href="<?php the_permalink('2901'); ?>#access">ACCESS<span>アクセス</span></a></li>
				<li class="join"><a href="<?php the_permalink('2903'); ?>#join">JOIN<span class="eng bold">入会案内</span></a></li>
			</ul>
		</div>
	</header>