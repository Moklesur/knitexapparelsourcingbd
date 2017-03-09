<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ThemeTim_WordPress_Framework
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="preloader animsition">
	<header class="header">
		<!--------------- Header Top ---------------->
		<section class="header-top padding-top-10 padding-bottom-10 text-center-xs">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<?php do_action('themetim_header_social'); ?>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<ul class="list-inline header-info text-right">
							<?php do_action('themetim_header_account'); ?>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--------------- Header Middle ---------------->
		<section class="header-middle position-relative">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 logo">
						<?php
						if (get_theme_mod('site_logo') != '') : ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_theme_mod('site_logo'); ?>" class="img-responsive" alt="" /></a>
						<?php else : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'description' ); ?></a></p>
						<?php endif ?>
					</div>
				</div>
			</div>
		</section>
		<!--------------- Header Bottom ---------------->
		<section class="header-bottom">
			<div class="container">
				<div class="row">
					<!--------------- Primary Menu ---------------->
					<nav class="navbar navbar-default text-uppercase primary-menu">
						<div class="navbar-header">
							<button type="button" data-toggle="collapse" data-target="#navbar-collapse" class="navbar-toggle">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div id="navbar-collapse" class="navbar-collapse collapse">
							<?php
							if ( has_nav_menu( 'primary' ) ) :
								wp_nav_menu( array('menu' => 'primary', 'theme_location' => 'primary', 'depth' => 5, 'container' => '', 'menu_id' => 'primary-menu', 'container_class' => 'collapse navbar-collapse', 'container_id' => 'bs-example-navbar-collapse-1', 'menu_class' => 'nav navbar-nav', 'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 'walker' => new wp_bootstrap_navwalker()));
							else: echo '<p class="margin-top-10 pull-left text-capitalize">Please select <a href="/wp-admin/nav-menus.php" class="text-muted">Primary Menu</a> </p>';
							endif;
							?>
							<?php if (get_theme_mod('bottom_header_search','1')) : ?>
								<!--------------- Search ---------------->
								<form role="search" method="get" class="navbar-form navbar-right" action="<?php echo home_url( '/' ); ?>">
									<div class="form-group">
										<input type="search" class="search-field form-control" placeholder="<?php esc_html_e( 'Search', 'themetim' ) ?>" value="<?php echo get_search_query() ?>" name="s" />
									</div>
									<button type="submit" class="btn btn-default">Submit</button>
								</form>
							<?php endif ?>
						</div>
					</nav>
				</div>
			</div>
		</section>
	</header>
	<?php if ( !is_front_page() ) { ?>
	<!--------------- Breadcrumb ---------------->
	<section class="breadcrumb-wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<?php themetim_breadcrumbs(); ?>
				</div>
			</div>
		</div>
	</section>
<?php } ?>