<?php
/**
Template Name: main-page-tamplate
**/
get_header();
?>

<main>
  <?php $main_header_fon = get_field('main_header_fon');
  if($main_header_fon) :
    ?>

    <section class="header_buner" style="background-image: url('<?php echo esc_url($main_header_fon[url]); ?>');">
     <div class="container">
      <div class="row">
       <div class="header_buner_inn">
        <div class="header_buner_container">
          <?php $main_header_pred = get_field('main_header_pred');
          if($main_header_pred) :
            ?>
            <h2> <?php echo esc_html($main_header_pred); ?> </h2>
          <?php endif; ?>
          <?php $main_header_utp = get_field('main_header_utp');
          if($main_header_utp) :
            ?>
            <h1> <?php echo $main_header_utp; ?> </h1>
          <?php endif; ?>

          <?php $main_header_desc = get_field('main_header_desc');
          if($main_header_desc) :
            ?>
            <h3> <?php echo esc_html($main_header_desc); ?> </h3>
          <?php endif; ?>

          <div class="header_buner_buttons">
           <?php $main_header_button_one = get_field('main_header_button_one');
           if($main_header_button_one) :
            ?>
            <a href="<?php echo $main_header_button_one[url]; ?>" title="<?php echo $main_header_button_one[title]; ?>" class="wellcome_link">узнать более</a>
          <?php endif; ?>

          <?php $main_header_button_two = get_field('main_header_button_two');
          if($main_header_button_two) :
            ?>
            <a href="<?php echo $main_header_button_two[url]; ?>" title="<?php echo $main_header_button_two[title]; ?>"class="wellcome_link">больше о проекте</a>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </div>
</div>
</section>
<?php endif; ?>

<section cass="block_well">
 <div class="container">
  <div class="row_wellcome">
   <div class="wellcome_left">
     <?php $wellcom_title = get_field('wellcom_title');
     if($wellcom_title) :
      ?>
      <div class="wellcome_title"><?php echo esc_html($wellcom_title); ?></div>
    <?php endif; ?>
    <?php $wellcom_descr = get_field('wellcom_descr');
    if($wellcom_descr) :
      ?>
      <div class="wellcome_descr"> <?php echo esc_html($wellcom_descr); ?> </div>
    <?php endif; ?>
    <?php $wellcom_text = get_field('wellcom_text');
    if($wellcom_text) :
      ?>
      <div class="wellcome_text">
       <?php echo ($wellcom_text); ?>
     </div>
   <?php endif; ?>
   <?php $wellcom_button = get_field('wellcom_button');
   if($wellcom_button) :
    ?>
    <a href="<?php echo esc_url($wellcom_button[url]); ?>" title="<?php echo esc_html($wellcom_button[alt]); ?>" class="wellcome_link">узнать более</a>
  <?php endif; ?>
</div>
<div class="wellcome_right">
 <?php $wellcome_under = get_field('wellcome-under');
 if($wellcome_under) :
  ?>
  <div class="wellcome_right_img" style="background-image: url('<?php echo esc_url($wellcome_under[url]); ?>');">
  <?php endif; ?>
  <?php $wellcome_top = get_field('wellcome_top');
  if($wellcome_top) :
    ?>
    <div class="wellcome_right_imgman" style=" background-image: url('<?php echo esc_url($wellcome_top[url]); ?>');"></div>
  <?php endif; ?>
</div>
</div>
</div>
</div>
</section>
<section class="block_choose">
 <div class="container">
   <?php $choose_title = get_field('choose_title');
   if($choose_title) :
    ?>
    <div class="block_title"><?php echo esc_html($choose_title); ?></div>
  <?php endif; ?>
  <?php $choose_descr = get_field('choose_descr');
  if($choose_descr) :
    ?>
    <div class="block_descr"> <?php echo esc_html($choose_descr); ?> </div>
  <?php endif; ?>
  <div class="row_person">
    <?php while( has_sub_field('choose_dovods') ):
      $choose_dovods_icons = get_sub_field('choose_dovods_icons');
      $choose_dovods_name = get_sub_field('choose_dovods_name');
      $choose_dovods_text = get_sub_field('choose_dovods_text');
      ?>
      <div class="choose_item">
        <div class="choose_item_icon">
         <i class="<?php echo esc_html($choose_dovods_icons); ?>" aria-hidden="true"></i>
       </div>
       <div class="choose_item_title">
         <?php echo esc_html($choose_dovods_name); ?>
       </div>
       <div class="choose_item_text">
         <?php echo esc_html($choose_dovods_text); ?>
       </div>
     </div><!-- /choose_item -->
   <?php endwhile; ?>
 </div>

</div>

</section>
<section class="block">
 <?php $service_title = get_field('service_title');
 if($service_title) :
  ?>
  <div class="block_title"><?php echo esc_html($service_title); ?></div>
<?php endif; ?>
<div class="container">
  <div class="row_person">


    <!-- // начало  -->
    <?php
    $args = array(
      'numberposts' => 3,
      'post_type'   => 'services',
  'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
);
    $posts = get_posts( $args );
    foreach($posts as $post){ setup_postdata($post);
    // вставить разметку поста
      ?>
      <div class="services_items">
        <div class="services_img">
         <?php $thumbnail_id = get_post_thumbnail_id( $post->ID );
         $image_title = get_the_title($thumbnail_id);
         $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
         the_post_thumbnail('services-thamb',
          array( 'alt' => $alt,
           'class'=>'img-responsive',
           'title'   => $image_title
         )); ?>
       </div>
       <div class="services_title"> <?php the_title(); ?>
     </div>
     <div class="services_text">          <?php
$content = get_the_excerpt();// или get_the_content()
$trimmed_content = wp_trim_words( $content, 15, '' );
echo $trimmed_content;
?>
</div>
<a href="<?php the_permalink(); ?>" class="wellcome_link">узнать более</a>
</div>
<?php
}
wp_reset_postdata(); // сброс
?>
<!-- // конец  -->


</div>
</div>
</section>
<?php $reviews_fon = get_field('reviews_fon');
if($reviews_fon) :
  ?>
  <section class="reviews_fon" style="background-image: url('<?php echo esc_url($reviews_fon[url]); ?>');">
   <div class="container">
    <div class="row">
     <?php $adwice_title = get_field('adwice_title');
     if($adwice_title) :
      ?>
      <div class="block_title"><?php echo esc_html($adwice_title); ?></div>
    <?php endif; ?>
    <?php $adwice_descr = get_field('adwice_descr');
    if($adwice_descr) :
      ?>
      <div class="block_descr"><?php echo esc_html($adwice_descr); ?>
    </div>
  <?php endif; ?>
  <div class="reviews_block">


    <!-- // начало  -->
    <?php
    $args = array(
      'numberposts' => 3,
      'post_type'   => 'testimonial',
  'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
);
    $posts = get_posts( $args );
    foreach($posts as $post){ setup_postdata($post);
    // вставить разметку поста
      ?>
      <div class="reviews_block_items">
       <div class="reviews_block_content">
        <?php
$content = get_the_excerpt();// или get_the_content()
$trimmed_content = wp_trim_words( $content, 30, '' );
echo $trimmed_content;
?>
</div>
<div class="reviews_block_info">

 <?php $thumbnail_id = get_post_thumbnail_id( $post->ID );
 $image_title = get_the_title($thumbnail_id);
 $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
 the_post_thumbnail('review-thamb',
  array( 'alt' => $alt,
    'title'   => $image_title
  )); ?>

  <div class="reviews_block_name"><?php the_title(); ?></div>
</div>
</div>

<?php
}
wp_reset_postdata(); // сброс
?>
<!-- // конец  -->
</div>
</div>
<div class="all_adwice">

  <?php $adwice_links = get_field('adwice_links');
  if($adwice_links) :
    ?>
    <div class="about_us_descr">

     <a href="<?php echo esc_url($adwice_links[url]); ?>" title="<?php echo esc_html($adwice_links[alt]); ?>" class="wellcome_link">все отзывы</a>
   <?php endif; ?>
 </div>
</div>
</section>
<?php endif; ?>
<section class="form_block">
 <div class="container">
  <div class="row_person">
   <div class="form_block_items">
     <?php $have_q = get_field('have_q');
     if($have_q) :
      ?>
      <h3><?php echo ($have_q); ?>
    </h3>
  <?php endif; ?>
</div>
<div class="form_block_items">
  <?
  if(get_field('front_page_contact_form')) :
    $shotcode_fos = get_field('front_page_contact_form');
    echo do_shortcode($shotcode_fos);
  endif; ?>
</div>
</div>
</div>
</section>
</main>
<?php
get_footer();
?>