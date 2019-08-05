<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package construction
 */

get_header();
?>

 <?php $eror_header_fon = get_field('404_header_fon', 'option');
  if($eror_header_fon) :
    ?>

    <section class="header_buner" style="background-image: url('<?php echo esc_url($eror_header_fon[url]); ?>');">
     <div class="container">
      <div class="row">
       <div class="header_buner_inn">
        <div class="header_buner_container">
          <?php $eror_header_pred = get_field('404_header_pred', 'option');
          if($eror_header_pred) :
            ?>
            <h2> <?php echo esc_html($eror_header_pred); ?> </h2>
          <?php endif; ?>
          <?php $eror_header_utp = get_field('404_header_utp', 'option');
          if($eror_header_utp) :
            ?>
            <h1> <?php echo $eror_header_utp; ?> </h1>
          <?php endif; ?>

          <?php $eror_header_desc = get_field('404_header_desc', 'option');
          if($eror_header_desc) :
            ?>
            <h3> <?php echo esc_html($eror_header_desc); ?> </h3>
          <?php endif; ?>

          <div class="header_buner_buttons">
           <?php $eror_header_button_one = get_field('404_header_button_one', 'option');
           if($eror_header_button_one) :
            ?>
            <a href="<?php echo $eror_header_button_one[url]; ?>" title="<?php echo $eror_header_button_one[title]; ?>" class="wellcome_link">узнать более</a>
          <?php endif; ?>

          <?php $eror_header_button_two = get_field('404_header_button_two', 'option');
          if($eror_header_button_two) :
            ?>
            <a href="<?php echo $eror_header_button_two[url]; ?>" title="<?php echo $eror_header_button_two[title]; ?>"class="wellcome_link">больше о проекте</a>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </div>
</div>
</section>
<?php endif; ?>

<?php
get_footer();
