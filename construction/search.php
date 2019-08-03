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


<article class="post_item clearfix">

  <h3 class="pagesearch_title">Сформируйте ваш поисковый запрос иначе</h3>

  <form role="search" method="get" id="searchform" class="error_fs" action="<?php echo home_url( '/' ); ?>" >
    <input class="text-search" type="search" value="" name="s" id="s" placeholder="Введите запрос..." onfocus="if (this.value == 'Введите запрос...') { this.value = 'Введите запрос..'; }" onblur="if(this.value == 'Введите запрос..') { this.value = 'Введите запрос...'; }" value="Введите запрос...">
    <button type="submit" id="searchsubmit" name="submit" class="submit-search" >поиск</button>
  </form>

 <h6 class="search_rezzult">

  <?php
    $allsearch = new WP_Query();
    $allsearch -> query(array( 's' => $s, 'showposts' => '-1', 'posts_per_page' => 3 ));
    $key = wp_specialchars($s, 1);
    $count = $allsearch->post_count;
    echo( 'Получен '.$count. ' ответ(а) по запросу: <span>'.$key.'</span>' );
    wp_reset_query();
  ?>
</h6>


</article>



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

<aside class="category_sidebar widgets">
<?php get_sidebar(); ?>
</aside>

     </div>
    </div>
   </div>
  </section>
 </main>

<?php get_footer(); ?>