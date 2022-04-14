<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta name="google-site-verification" content="doR_WBYOA2Pk9RUcQApNpunbwH9V27FzukKp2r3p4vU" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1" />

<title><?php wp_title( '|', true, 'right' ); ?> Ripon College</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>

<?php if ( is_search() ) { ?><meta name="robots" content="noindex" /><?php } ?>
<link href="<?php bloginfo( "template_url" ) ?>/css/main.css?v=9" rel="stylesheet" type="text/css">

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '737054459766387'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=737054459766387&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

<meta name="google-site-verification" content="doR_WBYOA2Pk9RUcQApNpunbwH9V27FzukKp2r3p4vU" /> 

</head>
<body <?php body_class(); ?>>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VCS5HW7JEF"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'G-VCS5HW7JEF');
</script>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5LJ7X4B"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header>

	<div class="wrap">

		<div class="logo">
			<a href="/" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img src="<?php bloginfo( "template_url" ) ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?>">
			</a>
		</div>

		<button class="menu-toggle">show/hide menu</button>
		<div class="main-menus">
			<div class="aux-menu">
				<a href="/event-inquiries" class="button-booking">Book Now</a>
			<?php 	
			// grab the menu the user selected in the menus metabox.
			$menu_name = get_post_meta( get_the_ID(), CMB_PREFIX . "menu_footer", 1 );

			// verify that the menu exists by checking the menu name to see if it's empty
			if ( empty( $menu_name ) ) {
				$menu_name = 3;
			}

			// display the menu
			wp_nav_menu( array( 
				'menu' => 'main-menu', 
				'menu_class' => 'nav-menu' )
			);
			?>
			</div>
		</div>
	
	</div>

</header>

<section class="content">
