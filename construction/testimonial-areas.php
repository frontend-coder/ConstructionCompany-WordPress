<?php
/**
Template Name: testimonial-page-tamplate
Template Post Type: post, page
**/

get_header(); ?>

 <main>
  <section class="block ">
   <div class="container">
    <div class="row">
     <div class="category_wrap clearfix">
      <div class="category_content">
       <div class="post_box">
    <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array(
    'post_type'=>'testimonial', // Your post type name
    // 'posts_per_page' => 2,
    'paged' => $paged,
);
      $loop = new WP_Query( $args );
      if ( $loop->have_posts() ) {
        while ( $loop->have_posts() ) : $loop->the_post();
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

<?php
endwhile;
?>

       </div> <!-- end post_box  -->
       <!-- Pagination -->
<div class="pn_wrapper">
  <div class="pn_center">
<?php
$total_pages = $loop->max_num_pages;
if ($total_pages > 1){
  $current_page = max(1, get_query_var('paged'));
  echo paginate_links(array(
    'base' => get_pagenum_link(1) . '%_%',
       'format' => '/page/%#%',
  'current' => max( 1, get_query_var('paged') ),
  'total' => $total_pages,
    'total' => $total_pages,
    'type'         => 'list',
    'prev_text'    => __('« '),
    'next_text'    => __(' »'),
  ));
}

}
wp_reset_postdata(); ?>
</div>
</div>



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