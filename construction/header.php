<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package construction
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
 <meta charset="<?php bloginfo( 'charset' ); ?>" />
 <!-- <base href="/"> -->
<!--  <title>Главная страница</title>
 <meta name="description" content="" /> -->
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<!--  <link rel="stylesheet" href="css/libs.min.css" /> -->
      <?php $header_favicon = get_field('header_favicon', 'option');
        if($header_favicon) :
          ?>

 <link rel="shortcut icon" href="<?php echo esc_url($header_favicon[url]); ?>" />
      <?php endif; ?>
	<?php wp_head(); ?>
</head>
<body>
    	<span class="toggle-button">
 		<div class="menu-bar menu-bar-top"></div>
 		<div class="menu-bar menu-bar-middle"></div>
 		<div class="menu-bar menu-bar-bottom"></div>
 	</span>

 	<div class="menu-wrap">

	<?php
			wp_nav_menu( array(
				// [ 'items_wrap' => '%3$s' ],
				//  [ 'container' => '' ],
				'container' => 'div',
				'container_id' => '',
				'container_class' => 'menu-sidebar',
				'theme_location' => 'menu-1',
				'menu_id'        => '',
				'menu_class'          =>  '',

			) );
			?>
 	</div>

 <!-- Custom HTML -->
 <header id="header">
  <div class="top_line_header">
   <div class="container">
    <div class="row_person">
     <ul class="top_contacts">

        <?php $header_phone = get_field('header_phone', 'option');
        if($header_phone) :
          ?>
      <li class="top_contacts_items"> <i class="fa fa-mobile" aria-hidden="true"></i>
 <a href="tel:<?php echo str_replace(array( " ", "(", ")", "-"), "", $header_phone); ?>">
 	<?php echo esc_html($header_phone); ?></a>

   </li>
     <?php endif; ?>

     <?php $header_email = get_field('header_email', 'option');
        if($header_email) :
          ?>
      <li class="top_contacts_items">
      	<i class="fa fa-envelope" aria-hidden="true"></i>
      	<a href="mailto:<?php echo sanitize_email($header_email); ?>"><?php echo sanitize_email($header_email); ?></a>
      </li>
     <?php endif; ?>
	        <?php $header_daywork = get_field('header_daywork', 'option');
        if($header_daywork) :
          ?>
      <li class="top_contacts_items"> <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo esc_html($header_daywork); ?></li>
  <?php endif; ?>
     </ul>

     <ul class="top_socials">
	        <?php while( has_sub_field('header_social_networks', 'option') ):
          $header_social_networks_icon = get_sub_field('header_social_networks_icon', 'option');
          $header_social_networks_link = get_sub_field('header_social_networks_link', 'option');
          ?>
      <li> <a href="<?php echo esc_url($header_social_networks_link); ?>" target="_blank">
        <i class="<?php echo esc_html($header_social_networks_icon); ?>" aria-hidden="true"></i></a>
      </li>
     <?php endwhile; ?>
     </ul>
    </div>
   </div>
  </div>
  <div class="top_line_menu">
   <div class="container">
    <div class="row_person row_line_menu">
        <?php $header_logotype = get_field('header_logotype', 'option');
        if($header_logotype) :
          ?>
     <div class="top_logo">
      <img src="<?php echo esc_html($header_logotype[url]); ?>" alt="<?php echo esc_html($header_logotype[alt]); ?>">
     </div>
       <?php endif; ?>

	<?php
			wp_nav_menu( array(
				// [ 'items_wrap' => '%3$s' ],
				//  [ 'container' => '' ],
				'container' => 'div',
				'container_id' => '',
				'container_class' => 'top_menu',
				'theme_location' => 'menu-1',
				'menu_id'        => '',
				'menu_class'          =>  '',

			) );
			?>

     <div class='be-search'>
      <div class="searchbutton">
      </div>
      <div class="search-form">
       <form role="search" id="searchform" action="<?php echo home_url( '/' ); ?>" class="searchform" method="get">
        <input id="s" class="searchbar" name="s" placeholder="Введите запрос" type="search" x-webkit-speech="true">
        <input class="searchsubmit" name="submit" type="submit" value="Найти">
       </form>
      </div>
     </div>
    </div>
   </div>

  </div>
 </header><!-- /header -->