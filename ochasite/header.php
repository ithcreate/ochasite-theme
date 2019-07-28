<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package ochasite
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>
<?php wp_head(); ?>
</head>






<?php /*
<head>
  <title>日本茶紅茶中国茶-トップ</title>
  <meta charset="UTF-8">
  <meta name="author" content="全日本お茶組合">
  <meta name="description" content="お茶の歴史と種類を紹介するサイト">
  <!--■↓head内終端部に追記-->
  <link rel="icon" href="favicon.ico">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif+TC&amp;subset=japanese" rel="stylesheet">
</head>
*/?>






<body <?php body_class($post->post_name); ?>>
<div class="wrapper">
    <header style="background-image: url(<?php header_image(); ?>);">
        <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_attr(bloginfo( 'name' )); ?></a></h1>
        <p>
            日本茶・紅茶・中国茶などのお茶や珈琲に関する豆知識。<br> 
            種類、道具、歴史、効用、入れ方などの側面からご紹介します。
        </p>
    </header>
 
    <nav class="global">
      <?php wp_nav_menu(array('theme_location' => 'primary','link_before' => '<span>','link_after' => '</span>')); ?>
    </nav><!-- site-nav -->
  
  
