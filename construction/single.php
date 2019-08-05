<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package construction
 */

get_header();
?>
 <main>
  <section class="block ">
   <div class="container">
    <div class="row">
     <div class="category_wrap clearfix">
      <div class="category_content">
       <div class="post_box">
	<?php
		while ( have_posts() ) :
			the_post(); ?>

        <article class="post_item">
         <div class="single-thumb">
          	<?php echo get_the_post_thumbnail( $post->ID, 'single-thamb'); ?>
         </div>
         <div class="single_text">

<div class="date_publish"><?php the_time('j F Y'); ?></div>
 <h2> <?php the_title(); ?></h2>
<?php the_content(); ?>
         </div>
<?php endwhile; // End of the loop.
		?>
        </article>



       </div> <!-- end post_box  -->

<!-- begin comments form  -->
<?php comments_template(); ?>
<!-- end comments form  -->
      </div> <!-- category_content  -->

<aside class="category_sidebar widgets">
     <?php get_sidebar();
?>
</aside>
     </div>
    </div>
   </div>
  </section>
 </main>




<?php
get_footer();
?>