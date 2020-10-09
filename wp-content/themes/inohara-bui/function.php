<?php

define( 'THEME_URL', get_stylesheet_directory());
define( 'CORE', THEME_URL . './core');


require_once( CORE . '/init.php');


if ( !isset($content_width)) {
    $content_width = 620;
}



if ( !function_exists('inohara_theme_setup')) {
    function inohara_theme_setup() {
        /* thiet lap textdomain */
        $languages_foder = THEME_URL . '/languages';
        load_theme_textdomain( 'inohara',$languages_foder );
        /* Tu dong them link RSS len <head> */
        add_theme_support( 'automatic-feed-links' );
        /* Them post thumbnail */
        add_theme_support( 'post-thumbnails' );
        /* Them post fomat */
        add_theme_support(
            'post-formats',
            array(
                'aside',
                'image',
                'video',
                'quote',
                'link',
                'gallery',
                'audio',
            )
        );
        /* Them title-tag*/
        add_theme_support( 'title-tag');

        /*
        * Thêm chức năng custom background
        */
        $default_background = array(
            'default-color' => '#e8e8e8',
        );
        add_theme_support( 'custom-background', $default_background );

        /* Them menu */
        register_nav_menu( 'primary-menu', __('Primary Menu','inohara'));
        /*
        * Tạo sidebar cho theme
        */
        $sidebar = array(
            'name' => __('Main Sidebar', 'inohara'),
            'id' => 'main-sidebar',
            'description' => 'Main sidebar for Thachpham theme',
            'class' => 'main-sidebar',
            'before_title' => '<h3 class="widgettitle">',
            'after_title' => '</h3>'
        );
        register_sidebar( $sidebar );
    }
    add_action( 'init', 'inohara_theme_setup');

}

/**

**/
if ( ! function_exists( 'inohara_logo' ) ) {
    function inohara_logo() {?>
      <div class="logo">
   
        <div class="site-name">
          <?php if ( is_home() ) {
            printf(
              '<h1><a href="%1$s" title="%2$s">%3$s</a></h1>',
              get_bloginfo( 'url' ),
              get_bloginfo( 'description' ),
              get_bloginfo( 'sitename' )
            );
          } else {
            printf(
              '<p><a href="%1$s" title="%2$s">%3$s</a></p>',
              get_bloginfo( 'url' ),
              get_bloginfo( 'description' ),
              get_bloginfo( 'sitename' )
            );
          } // endif ?>
        </div>
        <div class="site-description"><?php bloginfo( 'description' ); ?></div>
   
      </div>
    <?php }
  }
/**

**/
if ( ! function_exists( 'inohara_menu' ) ) {
    function inohara_menu( $slug ) {
      $menu = array(
        'theme_location' => $slug,
        'container' => 'nav',
        'container_class' => $slug,
      );
      wp_nav_menu( $menu );
    }
  }
