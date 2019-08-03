<?php
/*
 Template Name: services
  */

get_header(); ?>

 <main>
  <section class="block ">
   <div class="container">
    <div class="row">
     <div class="category_wrap clearfix">
      <div class="category_content">
       <div class="post_box">
<!-- // начало  -->
<?php
$args=array(
'post_type' => 'services',
'showposts'=>15
);

$acsessuar = get_posts($args);
foreach ($acsessuar as $post) :
setup_postdata($post);
?>
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


<?php endforeach; ?>
<!-- // конец  -->

       </div> <!-- end post_box  -->
       <!-- Pagination -->
<!--        <nav class="pagination">
       	<?php pagination(); // пагинация, функция нах-ся в function.php ?>
       </nav> -->

      </div> <!-- category_content  -->

<aside class="category_sidebar widgets">
<?php get_sidebar(); ?>
</aside>

     </div>
    </div>
   </div>
  </section>
 </main>

<?php get_footer(); ?>