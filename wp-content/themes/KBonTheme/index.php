<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
		<div class="jumbotron main-hero">
			<nav class="navbar fixed-top navbar-dark main-nav">
				<a class="navbar-brand" href="#">Cruz's Portfolio</a>
				<a class="btn" id="menubtn">Menu</a>
				<?php 
					wp_nav_menu( 
						array( 
						'container' => 'ul',
						'theme_location' => 'header-menu', 
						'menu_class' => '',
						'menu_id' => '', ) 
					); 
				?>
			</nav>
		</div>
		<div class="modal" id="myModal">
			<div class="modal-content">
				<span id="close">&times;</span><br>
				<?php 
					wp_nav_menu( 
						array( 
						'container' => 'ul',
						'theme_location' => 'header-menu', 
						'menu_class' => '',
						'menu_id' => '', ) 
					); 
				?>
			</div>
		</div>
		<div class="row intro-row">
			<div class="col-12">
				<h1 class="text-center font-weight-bold">Lorem Ipsum</h1>
				<h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora enim recusandae placeat nam provident aliquam est veniam consectetur eum, quia voluptatibus harum, reprehenderit ut debitis optio similique commodi molestias veritatis.</h4>
			</div>
			<div class="col">one</div>
			<div class="col">two</div>
			<div class="col">three</div>
		</div>
		<div class="row parrallax">
			Hello World
		</div>
		<div class="row looprow">
			<?php get_template_part('loop'); ?>
		</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
