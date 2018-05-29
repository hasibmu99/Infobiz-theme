<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package infobiz-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="<?php echo get_template_directory_uri();?>/images/fav-icon/icon.png">

	<?php wp_head(); ?>
</head>

<?php 

$disable_topbar = cs_get_option('disable_topbar') == NULL ? false : true ;
$welcome_text = cs_get_option('welcome_text');
$phone_number = cs_get_option('phone_number');

$icons = cs_get_option('topbar_social_icons');




?>

<body <?php body_class(); ?>>
	<div class="main-page-wrapper">

				
	<!-- <div id="loader-wrapper">
		<div id="loader"></div>
	</div> -->

	<header class="theme-menu-wrapper">
		<div class="container">

		<?php if($disable_topbar == true): ?>
			<div class="top-header">
				<div class="row">

				<?php if(!empty($welcome_text)) :?>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<p><?php echo esc_attr($welcome_text); ?></p>
					</div>
				<?php endif;?>
				
				<?php if(!empty($phone_number)) : ?>
					<div class="col-md-4 col-sm-3 col-xs-12">
						<div class="call"><a href="tel:<?php echo esc_attr($phone_number); ?>"><i class="flaticon-telephone"></i><?php echo esc_attr($phone_number); ?></a></div>
					</div>
				<?php endif; ?>

					<div class="col-md-4 col-sm-3 col-xs-12">
						<ul class="social-icon text-right">
							<?php foreach($icons as $icon) : ?>
								<li><a href="<?php echo esc_url($icon['social_links']); ?> " class="tran3s"><i class="<?php echo esc_attr($icon['social_icons']);?>" aria-hidden="true"></i></a></li>
							<?php endforeach;?>
						</ul>
					</div>
				</div> <!-- /.row -->
			</div> <!-- /.top-header -->
			<?php endif;?>

			<div class="header-wrapper clearfix">
				<!-- Logo -->
				<div class="logo float-left"><a href="index.html"><img src="<?php echo get_template_directory_uri();?>/images/logo/logo.png" alt="Logo"></a></div>

				<!-- ============================ Theme Menu ========================= -->
				<nav class="theme-main-menu navbar float-right" id="mega-menu-wrapper">
					<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-collapse-1">

							<!-- <li class="dropdown-holder active"><a href="index.html" class="tran3s">Home</a>
								<ul class="sub-menu">
									<li><a href="index.html">Home version one</a></li>
									<li><a href="index-2.html">Home version Two</a></li>
								</ul>
							</li>
							<li class="dropdown-holder"><a href="#" class="tran3s">Services</a>
								<ul class="sub-menu">
									<li><a href="service.html">Service</a></li>
									<li><a href="service-details.html">Service Details</a></li>
								</ul>
							</li>
							<li class="dropdown-holder"><a href="#" class="tran3s">Pages</a>
								<ul class="sub-menu">
									<li><a href="about-us.html">About us</a></li>
									<li><a href="team.html">Our Team</a></li>
									<li><a href="faq.html">Faq</a></li>
									<li><a href="404.html">Error Page</a></li>
									<li class="dropdown-holder"><a href="shop.html">Shop</a>
										<ul class="second-sub-menu">
											<li><a href="shop-single.html">Shop Details</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="dropdown-holder"><a href="#" class="tran3s">Portfolio</a>
								<ul class="sub-menu">
									<li><a href="project.html">Project</a></li>
									<li><a href="project-details.html">Project details</a></li>
								</ul>
							</li>
							<li class="dropdown-holder"><a href="#" class="tran3s">News</a>
								<ul class="sub-menu">
									<li><a href="blog-grid.html">Blog Grid</a></li>
									<li><a href="blog-list.html">Blog with sidebar</a></li>
									<li><a href="blog-details.html">Blog details</a></li>
								</ul>
							</li>
							<li><a href="contact.html" class="tran3s">Contact</a></li> -->

							<?php
								
								wp_nav_menu([
									'theme_location'	=> 'menu-1',
									'menu_class'		=> 'nav'
								]);		
								
								$button = cs_get_option('disable_navbar_button') == NULL ? false : true;
								if($button == true):
							?>
							<ul class="nav">
								<li class="quote"><a href="#" class="tran3s">Get Quote</a></li>
							</ul>

								<?php endif; ?>
				</div><!-- /.navbar-collapse -->
				</nav> <!-- /.theme-main-menu -->
			</div> <!-- /.header-wrapper -->
		</div> <!-- /.container -->
	</header> <!-- /.theme-menu-wrapper -->
