<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package construction
 */
?>

 <footer>
  <div class="footer_top_fon" style="background-image: url('img/footer-fon.jpg');
">
   <div class="container">
    <div class="row">
     <div class="footer_top">
      <div class="footer_top_one">
       <h3>о компании</h3>
        <?php $header_logotype = get_field('header_logotype', 'option');
        if($header_logotype) :
          ?>
       <div class="bottom_logo">
        <img src="<?php echo esc_url($header_logotype[url]); ?>" alt="<?php echo esc_html($header_logotype[alt]); ?>">
       </div>
       <?php endif; ?>
       <div class="footer_bottom_text">
        Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Щеке если приставка страну, большого.
       </div>
       <ul class="footer_bottom_social">
	        <?php while( has_sub_field('header_social_networks', 'option') ):
          $header_social_networks_icon = get_sub_field('header_social_networks_icon', 'option');
          $header_social_networks_link = get_sub_field('header_social_networks_link', 'option');
          ?>

        <li> <a href="<?php echo esc_html($header_social_networks_link); ?>" target="_blank">
          <i class="<?php echo esc_html($header_social_networks_icon); ?>" aria-hidden="true"></i></a>
        </li>
     <?php endwhile; ?>
       </ul>
      </div>
      <div class="footer_top_two">
       <h3>страницы</h3>
       <ul class="footer_pages_links">
        <li> <a href="#">Наши услуги</a> </li>
        <li> <a href="#">Наша команда</a> </li>
        <li> <a href="#">Тех поддержка</a> </li>
        <li> <a href="#">Политика приватности</a> </li>
        <li> <a href="#">Карта сайта</a> </li>
       </ul>
      </div>
      <div class="footer_top_three">
       <h3>новые посты</h3>
       <ul class="footer_latest_post">
        <li class="clearfix">
         <span class="footer_post_wrap">
          <span class="footer_post_date">20 </span>
          <span class="footer_post_month"> авг</span>
         </span>
         <a href="#">Далеко-далеко за словесными горами в стране</a>
        </li>
        <li class="clearfix">
         <span class="footer_post_wrap">
          <span class="footer_post_date">20 </span>
          <span class="footer_post_month"> авг</span>
         </span>
         <a href="#"> Далеко-далеко за словесными горами в</a>
        </li>
        <li class="clearfix">
         <span class="footer_post_wrap">
          <span class="footer_post_date">20 </span>
          <span class="footer_post_month"> авг</span>
         </span>
         <a href="#"> Далеко-далеко за </a>
        </li>
       </ul>
      </div>
      <div class="footer_top_foure">
       <h3>наши контакты</h3>
       <ul class="footer_contacts">
        <li> <span> 123 Новая линия, Москва, Россия</span> </li>
        <li> <a href="mailto:joe@example.com">hello@exsemple.com</a></li>
        <li>
         <a href="tell:+3433434344">+3433434344</a>
         <a href="tell:+3433434344">+3433434344</a>
        </li>
       </ul>
      </div>
     </div>
    </div>
   </div>
  </div>
  <div class="footer_bottom">
   <ul>
    <li> Copyright 2019</li>
    <li> Верстка и посадка <a href="#"> Василенко Олег </a></li>
   </ul>
  </div>
 </footer>
<!--  <script src="js/scripts.min.js"></script> -->

 <?php wp_footer(); ?>
</body>

</html>
