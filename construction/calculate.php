<?php
/**
Template Name: calculater-page-tamplate
**/
get_header();
?>
  <?php $calc_header_fon = get_field('calc_header_fon');
  if($calc_header_fon) :
    ?>
  <section class="header_buner" style="background-image: url('<?php echo esc_url($calc_header_fon[url]); ?>');">
   <div class="container">
    <div class="row">
     <div class="header_buner_inn">
      <div class="header_buner_container">
          <?php $calc_header_pred = get_field('calc_header_pred');
          if($calc_header_pred) :
            ?>
       <h2> <?php echo esc_html($calc_header_pred); ?> </h2>
<?php endif; ?>
          <?php $calc_header_utp = get_field('calc_header_utp');
          if($calc_header_utp) :
            ?>
       <h1> <?php echo $calc_header_utp; ?> </h1>
 <?php endif; ?>
          <?php $calc_header_desc = get_field('calc_header_desc');
          if($calc_header_desc) :
            ?>
       <h3> <?php echo esc_html($calc_header_desc); ?> </h3>
          <?php endif; ?>
       <div class="header_buner_buttons">
           <?php $calc_header_button_one = get_field('calc_header_button_one');
           if($calc_header_button_one) :
            ?>
        <a href="<?php echo $calc_header_button_one[url]; ?>" class="wellcome_link" title="<?php echo $calc_header_button_one[title]; ?>">узнать более</a>
          <?php endif; ?>

          <?php $calc_header_button_two = get_field('calc_header_button_two');
          if($calc_header_button_two) :
            ?>
        <a href="<?php echo $calc_button_two[url]; ?>" title="<?php echo $calc_header_button_two[title]; ?>" class="wellcome_link">больше о проекте</a>
          <?php endif; ?>

       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
  <?php endif; ?>
  <section class="block">
   <div class="container">
    <h2 class="calculate_title">основные показатели</h2>
    <div class="row">
     <form id="calculate_forms">
      <div class="calculate_form">
       <div class="calculate_form_input">
        <h3 class="calculate_form_title">размер бассейна, м</h3>
        <div class="calculate_size">
         <div class="calculate_size_item">
          <label  for="dlina_pool">
           <span class="field_title">длина</span>
           <input type="text" id="dlina_pool" class="dlina_pools" placeholder="1.0">
          </label>
         </div>
         <div class="calculate_size_item">
          <label for="shirina_pool">
           <span class="field_title">ширина</span>
           <input type="text" id="shirina_pool" class="dlina_pools" placeholder="1.0">
          </label>
         </div>
         <div class="calculate_size_item">
          <label for="glubmin_pool">
           <span class="field_title">глубина мин</span>
           <input type="text" id="glubmin_pool" class="dlina_pools" placeholder="1.0">
          </label>
         </div>
         <div class="calculate_size_item">
          <label for="glubmax_pool">
           <span class="field_title">глубина макс</span>
           <input type="text" id="glubmax_pool" class="dlina_pools" placeholder="1.0">
          </label>
         </div>
        </div>
        <h3 class="calculate_form_title">переход глубины бассейна</h3>
        <div class="calculate_size">
         <div class="calculate_size_item">
         	 <label for="pluvbus" class="buss_inputin_label checkbox-transform">
          <input type="radio" name="perehodglubiny" value="плавный" id="pluvbus" class="buss_inputin_input checkbox__input">
         <span class="checkbox__label">плавный</span></label>
         </div>
         <div class="calculate_size_item">
          <label for="rezkybus" class="buss_inputin_label checkbox-transform">
          	<input type="radio" name="perehodglubiny" value="резкий" id="rezkybus" class="buss_inputin_input checkbox__input">
          <span class="checkbox__label">резкий</span></label>
         </div>
         <div class="calculate_size_item">
          <label for="notbus" class="buss_inputin_label checkbox-transform">
           <input type="radio" name="perehodglubiny" value="нет" id="notbus" class="buss_inputin_input checkbox__input" checked>
         <span class="checkbox__label">нет</span></label>
         </div>
        </div>
       </div>
       <div class="calculate_form_input">
        <h3 class="calculate_form_title">тип бассейна</h3>
        <div class="calculate_size">
         <div class="calculate_size_item ">
         	 <label for="perelivbus" class="buss_inputin_label checkbox-transform">
          <input type="radio" name="typebusseyna" value="переливной" id="perelivbus" class="buss_inputin_input checkbox__input">
         <span class="checkbox__label">Переливной</span></label>
         </div>

         <div class="calculate_size_item">
         	<label for="skimernbus" class="buss_inputin_label checkbox-transform">
          <input type="radio" name="typebusseyna" value="скимерный" id="skimernbus" class="buss_inputin_input checkbox__input" checked>
          <span class="checkbox__label">скимерный</span></label>
         </div>
        </div>
        <h3 class="calculate_form_title">форма бассейна</h3>
        <div class="calculate_size">
         <div class="calculate_size_item">

          <label for="mainbus" class="buss_inputin_label checkbox-transform">
          	<input type="radio" name="formabusseyna" value="сложная" id="mainbus" class="buss_inputin_input checkbox__input">
          <span class="checkbox__label">сложная</span></label>
         </div>
         <div class="calculate_size_item">
         <label for="prymougbus" class="buss_inputin_label checkbox-transform">
          <input type="radio" name="formabusseyna" value="прямоугольная" id="prymougbus" class="buss_inputin_input checkbox__input">
          <span class="checkbox__label">прямоугольная</span></label>
         </div>
         <div class="calculate_size_item">
            <label for="wreelbus" class="buss_inputin_label checkbox-transform">
            	<input type="radio" name="formabusseyna" value="круглая" id="wreelbus" class="buss_inputin_input checkbox__input" checked>
        <span class="checkbox__label">круглая</span></label>
         </div>
        </div>
        <h3 class="calculate_form_title">лесница</h3>
        <div class="calculate_size">
         <div class="calculate_size_item">
         	  <label for="nergaveka" class="buss_inputin_label checkbox-transform">
          <input type="checkbox" name="betlesnichi" value="Нержавеющая" id="nergaveka" class="buss_inputin_input checkbox__input">
        <span class="checkbox__label">Нержавеющая</span></label>
         </div>
         <div class="calculate_size_item">
         	<label for="betonnastep" class="checkbox-transform buss_inputin_label">
          <input type="checkbox" name="betlesnichi" value="Бетонная" id="betonnastep" class="checkbox__input buss_inputin_input">
          <span class="checkbox__label">Бетонная</span></label>
         </div>
        </div>
       </div>
      </div>
      <div class="container">
       <h2 class="calculate_title">дополнительные показатели</h2>
       <div class="row">
        <div class="calculate_size">
         <div class="calculate_size_item ">
         <label for="filtation" class="buss_inputin_label checkbox-transform">
          <input type="checkbox" name="dopolnitelnafiltr" value="автоматической обработкой воды" id="filtation" class="buss_inputin_input checkbox__input" checked disabled>
          <span class="checkbox__label">фильтрация</span></label>
         </div>

         <div class="calculate_size_item">
         	<label for="podsvetka" class="buss_inputin_label checkbox-transform">
          <input type="checkbox" name="dopolnitelnapodsv" value="подсветка" id="podsvetka" class="buss_inputin_input checkbox__input">
          <span class="checkbox__label">подсветка</span>
	      </label>
         </div>

         <div class="calculate_size_item">
         <label for="podogravpool" class="buss_inputin_label checkbox-transform">
          <input type="checkbox" name="dopolnitelnapodsv" value="подогрев" id="podogravpool" class="buss_inputin_input checkbox__input">
          <span class="checkbox__label">подогрев</span></label>
         </div>
         <div class="calculate_size_item">
         	 <label for="obrabotkawather" class="buss_inputin_label checkbox-transform">
          <input type="checkbox" name="dopolnitelnapodsv" value="обработка" id="obrabotkawather" class="buss_inputin_input checkbox__input">
         <span class="checkbox__label">обработка</span></label>
         </div>

         <div class="calculate_size_item">
         	<label for="protivotok" class="buss_inputin_label checkbox-transform">
          <input type="checkbox" name="dopolnitelnapodsv" value="противоток" id="protivotok" class="buss_inputin_input checkbox__input">
          <span class="checkbox__label">противоток</span></label>
         </div>

         <div class="calculate_size_item">
           <label for="vodopad" class="buss_inputin_label checkbox-transform">
           	<input type="checkbox" name="dopolnitelnapodsv" value="водопад" id="vodopad" class="buss_inputin_input checkbox__input">
         <span class="checkbox__label">водопад</span></label>
         </div>

         <div class="calculate_size_item">
           <label for="gidromassage" class="buss_inputin_label checkbox-transform">
           	<input type="checkbox" name="dopolnitelnapodsv" value="гидромассаж" id="gidromassage" class="buss_inputin_input checkbox__input">
         <span class="checkbox__label">гидромассаж</span></label>
         </div>
         <div class="calculate_size_item">
          <label for="aeromasage" class="buss_inputin_label checkbox-transform">
          	<input type="checkbox" name="dopolnitelnapodsv" value="аэромассаж" id="aeromasage" class="buss_inputin_input checkbox__input">
          <span class="checkbox__label">аэромассаж</span></label>
         </div>
        </div>
       </div>
      </div>
      <div class="container">
       <h2 class="calculate_title">отделка бассейна</h2>
       <div class="row">
        <div class="calculate_size">
         <div class="calculate_size_item">
           <label for="plitkainput" class="buss_inputin_label checkbox-transform">
           	<input type="radio" name="typecalc" value="плитка" id="plitkainput" class="buss_inputin_input checkbox__input" checked>
         <span  class="checkbox__label">плитка</span></label>
         </div>
         <div class="calculate_size_item">
         <label for="mozaikainput" class="buss_inputin_label checkbox-transform">
          <input type="radio" name="typecalc" value="мозайка" id="mozaikainput" class="buss_inputin_input checkbox__input">
          <span  class="checkbox__label">мозайка</span></label>
         </div>
         <div class="calculate_size_item">
          <label for="poliproinput" class="buss_inputin_label checkbox-transform">
          	<input type="radio" name="typecalc" value="полипропилен" id="poliproinput" class="buss_inputin_input checkbox__input">
          <span class="checkbox__label">полипропилен</span></label>
         </div>
        </div>
       </div>
      </div>
     </form>
<? echo do_shortcode('[contact-form-7 id="192" title="Форма калькулятора"]');  ?>
<!--      <form>
      <h2 class="rezult_block_title">ваш результат готов</h2>
      <div class="rezult_block_descr">Вы выбрали:</div>
       <ul class="rezult_list">
        <li>длина бассейна <span id="dlina_out">1</span> м</li>
        <li> ширина бассейна <span id="shirina_out">1</span> м,
        <li>минимальная глубина бассейна <span id="shirinamin_out">1</span> м,</li>
        <li>максимальная глубина бассейна <span id="shirinamax_out">1</span> м,</li>
        <li>бассейн <span id="typebus_out">скимерный</span></li>
        <li>форма бассейна <span id="formbus_out">круглая</span></li>
        <li>переход глубины:<span id="perbusbass_out">нет</span></li>



        <li>бассейн должен быть  <span id="auto_obrwater">автоматической фильтрацией воды</span></li>
        <li> бассейн должен быть <span id="betonlesnicha_out">бетонной лесницей</span></li>
        <li> бассейн должен быть <span id="nerglesnicha_out">без лесницы из нержавейки</span></li>
        <li> бассейн должен быть <span id="filtrasia_out">системой фильтрацией</span></li>
        <li> бассейн должен быть <span id="podogrevvody_out">подогревом воды</span></li>
        <li>бассейн должен быть <span id="protivotokvody_out">противотоком</span></li>
        <li>бассейн должен быть <span id="gidro_out">гидромассажем</span></li>
        <li> бассейн должен быть <span id="podvpodsvetka_out">подводным освещением</span></li>
        <li>бассейн должен быть <span id="ozonobrabotka_out">озоновой обработкой воды</span></li>
        <li>бассейн должен быть <span id="vodopad_out">водопадом</span></li>
        <li>бассейн должен быть <span id="aero_out">аэромассажем</span></li>
        <li> бассейн должен быть <span id="oblichovka_out">плиткой</span></li>
       </ul>

      <div class="rezult_block_green" id="final_caundoun">
       <div class="rezult_block_green_title">Предварительная стоимость вашего бассейна</div>
       <div class="rezult_block_green_cost">
        <!-- 		 <span id="costing_proect" > 100 000</span> руб -->
        <!-- 	<span id="costing_proect2" > 100 000</span> -->
       <!--   <span id="costing_proect3"> 100 000</span> руб
       </div>
       <input id="costing_peredat" type="hidden" name="costing_peredat" value="">
       <div class="rezult_block_green_text">Внимание! Данная цена может изменится при выезде инжерена и уточнения всех нюансов</div>
      </div>
      <div class="result_calcul_wraper">
       <input id="author_popup" class="calcul_order" type="text" name="author" value="" placeholder="Ваше имя" required="required" />
       <input id="phone_calcul" class="calcul_order calcul_order_ziro" type="email" name="phone" value="" placeholder="Ваш email" required="required" />



       <input class="calcul_button" type="submit" value="Оставить заявку на бесплатную консультацию" disabled >
      </div>
      <div class="checkbox_box">

        <label for="phone_headeroption" class="css-label checkbox-transform">
        	<input id="phone_headeroption" class="css-checkbox checkbox__input" type="checkbox" />
       <span class="checkbox__label"> Я даю согласие на обработку своих персональных данных и ознакомлен с <a href="#">политикой конфиденциальности</a></span>
        </label>
<div class="our_spech">Наш специалист бесплатно ответит на все ваши вопросы
       или же совершит выезд на объект для проведения всех необходимых замеров и уточнений. </div>
      </div>
     </form> -->


    </div>
   </div>
  </section>
 </main>

<?php
get_footer('calculate');
?>
