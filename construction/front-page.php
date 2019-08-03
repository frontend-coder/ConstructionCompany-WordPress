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
   <div class="block_title">наши услуги</div>
   <div class="container">
    <div class="row_person">
     <div class="services_items">
      <div class="services_img">
       <img src="img/services_1.jpg" class="img-responsive" alt="это первый пост">
      </div>
      <div class="services_title"> Управление проектом
      </div>
      <div class="services_text"> Далеко-далеко за словесными горами в нашей стране, tggf гласных и согласных живут рыбные тексты. Которое коварный продолжил силуэт, великий которой парадигматическая себя деревни она! Управление проектом
      </div>
      <a href="#" class="wellcome_link">узнать более</a>
     </div>
     <div class="services_items">
      <div class="services_img">
       <img src="img/services_2.jpg" class="img-responsive" alt="это первый пост">
      </div>
      <div class="services_title"> Управление проектом
      </div>
      <div class="services_text"> Далеко-далеко за словесными горами в нашей стране, tggf гласных и согласных живут рыбные тексты. Которое коварный продолжил силуэт, великий которой парадигматическая себя деревни она! Управление проектом
      </div>
      <a href="#" class="wellcome_link">узнать более</a>
     </div>
     <div class="services_items">
      <div class="services_img">
       <img src="img/services_3.jpg" class="img-responsive" alt="это первый пост">
      </div>
      <div class="services_title"> Управление проектом
      </div>
      <div class="services_text"> Далеко-далеко за словесными горами в нашей стране, tggf гласных и согласных живут рыбные тексты. Которое коварный продолжил силуэт, великий которой парадигматическая себя деревни она! Управление проектом
      </div>
      <a href="#" class="wellcome_link">узнать более</a>
     </div>
    </div>
   </div>
  </section>
  <section class="reviews_fon" style="background-image: url('img/reviews-fon.jpg');">
   <div class="container">
    <div class="row">
     <div class="block_title">отзывы клиентом</div>
     <div class="block_descr"> Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Которой на берегу даже несколько, гор пор собрал себя предложения родного! Рукописи пунктуация это дал повстречался подпоясал, одна текст правилами рукопись инициал текста до продолжил взобравшись использовало, сих, но оксмокс свой.
     </div>
     <div class="reviews_block">
      <div class="reviews_block_items">
       <div class="reviews_block_content">
        Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Щеке если приставка страну, большого, образ подзаголовок. Своего безопасную жизни прямо, строчка сбить она проектах запятых силуэт от всех, даже, семь?
       </div>
       <div class="reviews_block_info">
        <img src="img/rewuer_1.jpg" alt="отзыв одного человека">
        <div class="reviews_block_name">олег крисбо</div>
       </div>
      </div>
      <div class="reviews_block_items">
       <div class="reviews_block_content reviews_block_content_main">
        Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Щеке если приставка страну, большого, образ подзаголовок. Своего безопасную жизни прямо, строчка сбить она проектах запятых силуэт от всех, даже, семь?
       </div>
       <div class="reviews_block_info">
        <img src="img/rewuer_2.jpg" alt="отзыв одного человека">
        <div class="reviews_block_name">олег крисбо</div>
       </div>
      </div>
      <div class="reviews_block_items">
       <div class="reviews_block_content">
        Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Щеке если приставка страну, большого, образ подзаголовок. Своего безопасную жизни прямо, строчка сбить она проектах запятых силуэт от всех, даже, семь?
       </div>
       <div class="reviews_block_info">
        <img src="img/rewuer_1.jpg" alt="отзыв одного человека">
        <div class="reviews_block_name">олег крисбо</div>
       </div>
      </div>
     </div>
    </div>
    <div class="all_adwice">
     <a href="#" class="wellcome_link">все отзывы</a>
    </div>
   </div>
  </section>
  <section class="form_block">
   <div class="container">
    <div class="row_person">
     <div class="form_block_items">
      <h3>Возникли вопросы?
       <span>напишите нам сейчас!</span>
      </h3>
     </div>
     <div class="form_block_items">
      <form class="contact_form_bottom">
       <div class="contact_form_item">
        <input class="contact_form_input" type="text" name="name" placeholder="Имя" required="required">
       </div>
       <div class="contact_form_item">
        <input class="contact_form_input" type="text" name="email" placeholder="Email" required="required">
       </div>
       <div class="contact_form_item">
        <textarea class="contact_form_textarea" name="textarea" placeholder="Сообщение" required="required"></textarea>
       </div>
       <div class="contact_form_item">
        <input class="get-buttons" name="submit" type="submit" id="submits" value="Отправить">
       </div>
      </form>
     </div>
    </div>
   </div>
  </section>
 </main>



<?php
get_footer();
?>