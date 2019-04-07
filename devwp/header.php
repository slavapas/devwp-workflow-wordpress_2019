<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DevWP
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site container">
        <!-- Top Bar -->
        <div class="top-bar">
            <div class="tel">
                <a href="/" class="icons"><i class="fa fa-phone" aria-hidden="true"></i></a>
                00-00-000
            </div>
            <div class="socials">
                <a href="/" class="icons"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="/" class="icons"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="/" class="icons"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
            </div>
        </div>
        <header id="masthead" class="site-header">

            <nav id="menu" class="navbar navbar-expand-md navbar-light" role="navigation">
                <div class="site-branding navbar-brand">
                    <h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img
                                src="<?php echo esc_url( home_url( '/' ) );?>/wp-content/uploads/2019/03/logo.png"></a>
                    </h1>


                </div><!-- .site-branding -->

                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>




                <?php
                wp_nav_menu([
                    'menu'           => 'main_menu',
                    'theme_location' => 'primary',
                    'container'      => 'div',
                    'container_id'   => 'bs4navbar',
                    'container_class'=> 'collapse navbar-collapse',
                    'menu_id'        => 'main-menu',
                    'menu_class'     => 'navbar-nav ml-auto',
                    'depth'          => 2,
                    'fallback_cb'    => 'bs4navwalker::fallback',
                    'walker'         => new bs4navwalker()
                ]);
            ?>

            </nav>
        </header><!-- #masthead -->

    </div>