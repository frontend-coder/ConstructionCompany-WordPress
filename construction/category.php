<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package construction
 */

get_header(); ?>

 <main>
  <section class="block ">
   <div class="container">
    <div class="row">
     <div class="category_wrap clearfix">
      <div class="category_content">
       <div class="post_box">
  <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
        <article class="post_item clearfix">
         <div class="post-thumb">
          <a href="<?php the_permalink(); ?>">
          	<?php echo get_the_post_thumbnail( $post->ID, 'category-thamb'); ?>
          </a>
         </div>

         <div class="post_text">
          <h2> <?php the_title(); ?></h2>
          <?php
$content = get_the_excerpt();// или get_the_content()
$trimmed_content = wp_trim_words( $content, 26, '' );
echo $trimmed_content;
?>
          <a class="read_more" href="<?php the_permalink(); ?>">прочесть</a>
         </div>
        </article>

<?php endwhile; // end while ?>

       </div> <!-- end post_box  -->
       <!-- Pagination -->
       <nav class="pagination">
       	<?php pagination(); // пагинация, функция нах-ся в function.php ?>
       </nav>
    <?php else: // иначе вывести то что после оператора вставишь
?>

<p><?php _e('Извините. но постов нет в этой рубрике.'); ?></p>
<?php endif; // end if
?>
      </div> <!-- category_content  -->

<?php get_sidebar(); ?>

     </div>
    </div>
   </div>
  </section>
 </main>

<?php get_footer(); ?>