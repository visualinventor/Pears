<!DOCTYPE html><html><head><title>Pairs <?php wp_title('/', true, 'left'); ?></title>
    <meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

<!-- hide css from IE6 but load for everyone else -->
<!--[if gte IE 7]><!-->
<link rel="stylesheet/less" media="screen, projection" href="<?php echo get_template_directory_uri(); ?>/css/screen.less" />
<!-- <![endif]-->

<link rel="shortcut icon" href="/favicon.png" />

<?php wp_enqueue_script('lessjs', get_template_directory_uri() . '/js/less.js'); ?>

<!-- enable HTML5 elements in IE7+8 -->
<!--[if lt IE 9]>
<?php wp_enqueue_script('html5shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js' ); ?>
<![endif]-->


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header role="banner" class="group">
	<a href="<?php echo home_url(); ?>/" id="logo">
		Pairs <em>are common patterns of markup &amp; style</em>
	</a>
</header>

<div class="wrap group">
	<div class="main" role="main">
