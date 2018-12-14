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
			<?php 
				wp_nav_menu( 
					array( 
					'container' => 'nav',
					'theme_location' => 'header-menu', 
					'menu_class' => 'custom-menu-class',
					'menu_id' => '',
					'items_wrap' => '<nav><ul>%3$s</ul></nav>', ) 
				); 
			?>
		</div>
		<div class="row intro-row">
			<div class="col">
				<h1 class="text-center font-weight-bold">Lorem Ipsum</h1>
				<h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora enim recusandae placeat nam provident aliquam est veniam consectetur eum, quia voluptatibus harum, reprehenderit ut debitis optio similique commodi molestias veritatis.</h4>
			</div>
			
		</div>
		<main role="main">
			<!-- section -->
			<section>

				<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>

			</section>
			<!-- /section -->
		</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
