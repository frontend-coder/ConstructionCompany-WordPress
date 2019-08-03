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

    <p class="nocomments">Эта запись защищена. Введите пароль, чтобы видеть комментарии </p>

<div id="comments">
 <div class="comment-number">
    <h4>5 комментариев <!-- Нет комментариев Один комментарий 3 комментариев -->
    </h4>
   <span><a href="#respond" title="<?php _e('Оставить комментарий', 'punchcut'); ?>">Оставить комментарий</a></span>
  </div><!--end comment-number-->
  <ol class="commentlist">
   <li class="comment even thread-even depth-1" id="comment-1">
    <div class="comment-box">
      <div class="c-head"> <a href="#" class="url"> Автор комментария</a> <span> / апрель 18 2018</span> </div>
      <div class="comment-content-box">
        <div class="c-grav">
          <img src="http://1.gravatar.com/avatar/d7a973c7dab26985da5f961be7b74480?s=50&d=mm&r=g" srcset="http://1.gravatar.com/avatar/d7a973c7dab26985da5f961be7b74480?s=64&d=mm&r=g 2x" class="avatar avatar-32 photo" alt="">
        </div>
        <div class="c-body">
          <p>Привет! Это комментарий.<br>
            Чтобы начать модерировать, редактировать и удалять комментарии, перейдите на экран «Комментарии» в консоли.<br>
          Аватары авторов комментариев загружаются с сервиса Gravatar.</p>
          <div class="reply">
            <a href="#" class="comment-reply-link">ответить</a> / <a href="#" class="comment-edit-link">редактировать</a>
          </div>
        </div><!--end c-body-->
      </div>
    </div><!--end comment-box-->
  </li>
  <li class="comment even thread-even depth-1" id="comment-1">
    <div class="comment-box">
      <div class="c-head"> <a href="#" class="url"> Автор комментария</a> <span> / апрель 18 2018</span> </div>
      <div class="comment-content-box">
        <div class="c-grav">
          <img src="http://1.gravatar.com/avatar/d7a973c7dab26985da5f961be7b74480?s=50&d=mm&r=g" srcset="http://1.gravatar.com/avatar/d7a973c7dab26985da5f961be7b74480?s=64&d=mm&r=g 2x" class="avatar avatar-32 photo" alt="">
        </div>
        <div class="c-body">
          <p>Привет! Это комментарий.<br>
            Чтобы начать модерировать, редактировать и удалять комментарии, перейдите на экран «Комментарии» в консоли.<br>
          Аватары авторов комментариев загружаются с сервиса Gravatar.</p>
          <div class="reply">
            <a href="#" class="comment-reply-link">ответить</a> / <a href="#" class="comment-edit-link">редактировать</a>
          </div>
        </div><!--end c-body-->
      </div>
    </div><!--end comment-box-->
  </li>
  <li class="comment even thread-even depth-1" id="comment-1">
    <div class="comment-box">
      <div class="c-head"> <a href="#" class="url"> Автор комментария</a> <span> / апрель 18 2018</span> </div>
      <div class="comment-content-box">
        <div class="c-grav">
          <img src="http://1.gravatar.com/avatar/d7a973c7dab26985da5f961be7b74480?s=50&d=mm&r=g" srcset="http://1.gravatar.com/avatar/d7a973c7dab26985da5f961be7b74480?s=64&d=mm&r=g 2x" class="avatar avatar-32 photo" alt="">
        </div>
        <div class="c-body">
          <p>Привет! Это комментарий.<br>
            Чтобы начать модерировать, редактировать и удалять комментарии, перейдите на экран «Комментарии» в консоли.<br>
          Аватары авторов комментариев загружаются с сервиса Gravatar.</p>
          <div class="reply">
            <a href="#" class="comment-reply-link">ответить</a> / <a href="#" class="comment-edit-link">редактировать</a>
          </div>
        </div><!--end c-body-->
      </div>
    </div><!--end comment-box-->
    <ul class="children">
     <li class="comment even thread-even depth-1" id="comment-1">
      <div class="comment-box">
        <div class="c-head"> <a href="#" class="url"> Автор комментария</a> <span> / апрель 18 2018</span> </div>
        <div class="comment-content-box">
          <div class="c-grav">
            <img src="http://1.gravatar.com/avatar/d7a973c7dab26985da5f961be7b74480?s=50&d=mm&r=g" srcset="http://1.gravatar.com/avatar/d7a973c7dab26985da5f961be7b74480?s=64&d=mm&r=g 2x" class="avatar avatar-32 photo" alt="">
          </div>
          <div class="c-body">
            <p>Привет! Это комментарий.<br>
              Чтобы начать модерировать, редактировать и удалять комментарии, перейдите на экран «Комментарии» в консоли.<br>
            Аватары авторов комментариев загружаются с сервиса Gravatar.</p>
            <div class="reply">
              <a href="#" class="comment-reply-link">ответить</a> / <a href="#" class="comment-edit-link">редактировать</a>
            </div>
          </div><!--end c-body-->
        </div>
      </div><!--end comment-box-->
    </li>
  </ul>
</li>
 <li class="comment even thread-even depth-1" id="comment-1">
    <div class="comment-box">
      <div class="c-head"> <a href="#" class="url"> Автор комментария</a> <span> / апрель 18 2018</span> </div>
      <div class="comment-content-box">
        <div class="c-grav">
          <img src="http://1.gravatar.com/avatar/d7a973c7dab26985da5f961be7b74480?s=50&d=mm&r=g" srcset="http://1.gravatar.com/avatar/d7a973c7dab26985da5f961be7b74480?s=64&d=mm&r=g 2x" class="avatar avatar-32 photo" alt="">
        </div>
        <div class="c-body">
          <p>Привет! Это комментарий.<br>
            Чтобы начать модерировать, редактировать и удалять комментарии, перейдите на экран «Комментарии» в консоли.<br>
          Аватары авторов комментариев загружаются с сервиса Gravatar.</p>
          <div class="reply">
            <a href="#" class="comment-reply-link">ответить</a> / <a href="#" class="comment-edit-link">редактировать</a>
          </div>
        </div><!--end c-body-->
      </div>
    </div><!--end comment-box-->
  </li>
</ol>
 <div class="navigation">
    <div class="header_button">Старые комментарии</div>
    <div class="header_button">Новые комментарии</div>
  </div>
<p class="note"><?php _e('Комментарии закрыты.', 'punchcut') ?></p>
</div><!--end #comments-->
  <div id="respond">
    <div class="cancel-comment-reply">
      <small><a href="#" id="cancel-comment-reply-link" style="display:none;">Нажмите, чтобы отменить ответ.</a></small>
    </div>
    <h5 id="postcomment">Оставить комментарий</h5>
      <p class="logged-in">Вы должны быть <a href="#">войти под своим именем</a> чтобы оставить комментарий.</p>
 <form action="#" method="post" id="commentform">
      <p class="bloged-in">Вошли как <a href="#">Имя</a>. <a href="#" title="Log out of this account">Выйти</a></p>


        <div>
          <label for="author" class="comment-field">Имя<span>*</span></label>
          <input class="commenting_input" type="text" name="author" id="author" value="">
        </div>
        <div>
          <label for="email" class="comment-field">E-mail <span>*</span></label>
          <input class="commenting_input" type="text" name="email" id="email" value="">
        </div>
        <div>
          <label for="url" class="comment-field">Адрес Вашего сайта</label>
          <input class="commenting_input" type="text" name="url" id="url" value="">
        </div>
       <div>
        <label for="comment" class="comment-field">Комментарий</label>
        <textarea class="commenting_textarea" name="comment" id="comment" cols="50" rows="10" tabindex="4"></textarea>
      </div>
      <div>
        <input class="wellcome_link" name="submit" type="submit" id="submit" value="Добавить комментарий">
        <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>">
      </div>
    </form><!--end commentform-->
   </div>         <!-- end respond -->


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