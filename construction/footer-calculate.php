<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package construction
 */
?>

 <footer>
        <?php $fotter_fon = get_field('fotter_fon', 'option');
        if($fotter_fon) :
          ?>
  <div class="footer_top_fon" style="background-image: url('<?php echo esc_url($fotter_fon[url]); ?>');
">
   <div class="container">
    <div class="row">
     <div class="footer_top">
      <div class="footer_top_one">

       <h3 class="footer_title">о компании</h3>
        <?php $header_logotype = get_field('header_logotype', 'option');
        if($header_logotype) :
          ?>
       <div class="bottom_logo">
        <img src="<?php echo esc_url($header_logotype[url]); ?>" alt="<?php echo esc_html($header_logotype[alt]); ?>">
       </div>
       <?php endif; ?>
       <div class="footer_bottom_text">
        Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Щеке если приставка страну, большого.
       </div>

<?php if ( !is_active_sidebar( 'footer-1' ) )
   { echo "Активируйте виджеты"; }
   else {
   dynamic_sidebar( 'footer-1' );
   }
?>

       <ul class="footer_bottom_social">
	        <?php while( has_sub_field('header_social_networks', 'option') ):
          $header_social_networks_icon = get_sub_field('header_social_networks_icon', 'option');
          $header_social_networks_link = get_sub_field('header_social_networks_link', 'option');
          ?>

        <li> <a href="<?php echo esc_html($header_social_networks_link); ?>" target="_blank">
          <i class="<?php echo esc_html($header_social_networks_icon); ?>" aria-hidden="true"></i></a>
        </li>
     <?php endwhile; ?>
       </ul>






      </div>
      <div class="footer_top_two">

     <?php if ( !is_active_sidebar( 'footer-2' ) )
                    { echo "Активируйте виджеты"; }
                    else {
                      dynamic_sidebar( 'footer-2' );
                    }
                     ?>
<!--         <div class="footer_widget widget">
       <h3 class="footer_title">страницы</h3>
       <ul>
        <li> <a href="#">Наши услуги</a> </li>
        <li> <a href="#">Наша команда</a> </li>
        <li> <a href="#">Тех поддержка</a> </li>
        <li> <a href="#">Политика приватности</a> </li>
        <li> <a href="#">Карта сайта</a> </li>
       </ul>
       </div> -->
      </div>
      <div class="footer_top_three">

<?php if ( !is_active_sidebar( 'footer-3' ) )
                    { echo "Активируйте виджеты"; }
                    else {
                      dynamic_sidebar( 'footer-3' );
                    }
                     ?>

       <!-- <h3>новые посты</h3>
       <ul class="footer_latest_post">
        <li class="clearfix">
         <span class="footer_post_wrap">
          <span class="footer_post_date">20 </span>
          <span class="footer_post_month"> авг</span>
         </span>
         <a href="#">Далеко-далеко за словесными горами в стране</a>
        </li>
        <li class="clearfix">
         <span class="footer_post_wrap">
          <span class="footer_post_date">20 </span>
          <span class="footer_post_month"> авг</span>
         </span>
         <a href="#"> Далеко-далеко за словесными горами в</a>
        </li>
        <li class="clearfix">
         <span class="footer_post_wrap">
          <span class="footer_post_date">20 </span>
          <span class="footer_post_month"> авг</span>
         </span>
         <a href="#"> Далеко-далеко за </a>
        </li>
       </ul> -->




      </div>
      <div class="footer_top_foure">
<?php if ( !is_active_sidebar( 'footer-4' ) )
                    { echo "Активируйте виджеты"; }
                    else {
                      dynamic_sidebar( 'footer-4' );
                    }
                     ?>

   <!--     <h3>наши контакты</h3>
       <ul class="footer_contacts">
        <li> <span> 123 Новая линия, Москва, Россия</span> </li>
        <li> <a href="mailto:joe@example.com">hello@exsemple.com</a></li>
        <li>
         <a href="tell:+3433434344">+3433434344</a>
         <a href="tell:+3433434344">+3433434344</a>
        </li>
       </ul> -->


      </div>
     </div>
    </div>
   </div>
  </div>
    <?php endif; ?>
  <div class="footer_bottom">
   <ul>
    <li> Copyright 2019</li>
    <li> Верстка и посадка <a href="#"> Василенко Олег </a></li>
   </ul>
  </div>
 </footer>
<!--  <script src="js/scripts.min.js"></script> -->

 <?php wp_footer(); ?>


<?php
    $price_plika       = get_field('price_plika');
    $price_mozaika     = get_field('price_mozaika');
    $price_poliprop    = get_field('price_poliprop');
    $price_metalstairs = get_field('price_metalstairs');
    $price_betonstairs = get_field('price_betonstairs');
    $price_filtration  = get_field('price_filtration');
    $price_podogrev    = get_field('price_podogrev');
    $price_protivotok  = get_field('price_protivotok');
    $price_gidromasage = get_field('price_gidromasage');
    $price_podsvetky   = get_field('price_podsvetky');
    $price_ozonset     = get_field('price_ozonset');
    $price_vodopad     = get_field('price_vodopad');
    $price_aeromassage = get_field('price_aeromassage');
 ?>

 <script type="text/javascript">

var costPlitka       = "<?php echo $price_plika; ?>";
var costMozaila      = "<?php echo $price_mozaika; ?>";
var costPolipr       = "<?php echo $price_poliprop; ?>";
var costMetalStairs  = Number("<?php echo $price_metalstairs; ?>");
var costBetonStairs  = Number("<?php echo $price_betonstairs; ?>");
var priceFiltration  = Number("<?php echo $price_filtration; ?>");
var pricePodogrev    = Number("<?php echo $price_podogrev; ?>");
var priceProtivotok  = Number("<?php echo $price_protivotok; ?>");
var priceGidroMasage = Number("<?php echo $price_gidromasage; ?>");
var pricePodsvetky   = Number("<?php echo $price_podsvetky; ?>");
var priceOzonset     = Number("<?php echo $price_ozonset; ?>");
var priceVodopad     = Number("<?php echo $price_vodopad; ?>");
var priceAeroMassage = Number("<?php echo $price_aeromassage; ?>");


 $('html').on('change', function() {

  var dlinaPool = document.getElementById("dlina_pool").value;

  if (dlinaPool == "") {
   dlinaPool = 1;
  }
  document.getElementById("dlina_out").innerHTML = dlinaPool;
$("#dlina_out_cf").val(dlinaPool);

  var shirinaPool = document.getElementById("shirina_pool").value;
  if (shirinaPool == "") {
   shirinaPool = 1;
  }
  document.getElementById("shirina_out").innerHTML = shirinaPool;
  $("#shirina_out_cf").val(shirinaPool);

  var glubMinPool = document.getElementById("glubmin_pool").value;
  if (glubMinPool == "") {
   glubMinPool = 1;
  }
  document.getElementById("glubmin_out").innerHTML = glubMinPool;
  $("#glubmin_out_cf").val(glubMinPool);
  var glubMaxPool = document.getElementById("glubmax_pool").value;
  if (glubMaxPool == "") {
   glubMaxPool = 1;
  }
  document.getElementById("shirinamax_out").innerHTML = glubMaxPool;
  $("#shirinamax_out_cf").val(glubMaxPool);

  let radios = 'нет';
  radios = document.getElementsByName("perehodglubiny");
  for (let i = 0; i < radios.length; i++) {
   if (radios[i].checked) {
    let PerGlub = (radios[i].value);
    document.getElementById("perbusbass_out").innerHTML = PerGlub;
  $("#perbusbass_out_cf").val(PerGlub);
   }
  }

  let radiostype = 'скимерный';
  var skimernyIndex;
  radiostype = document.getElementsByName("typebusseyna");
  for (let it = 0; it < radiostype.length; it++) {
   if (radiostype[it].checked) {
    var typePool = (radiostype[it].value);
    document.getElementById("typebus_out").innerHTML = typePool;
    $("#typebus_out_cf").val(typePool);

    if (typePool === 'скимерный') {
     skimernyIndex = 1;
    } else if (typePool == 'переливной') {
     skimernyIndex = 1.3;
    }
   }
  }

  let radiosperexod = 'круглая';
  var formaBaseins;
  radiosperexod = document.getElementsByName("formabusseyna");
  for (let ip = 0; ip < radiosperexod.length; ip++) {
   if (radiosperexod[ip].checked) {
    let perex = (radiosperexod[ip].value);
    document.getElementById("formbus_out").innerHTML = perex;
    $("#formbus_out_cf").val(perex);

    if (perex === 'круглая') {
     formaBaseins = 1.4;
    } else if (perex == 'прямоугольная') {
     formaBaseins = 1.0;
    } else if (perex == 'сложная') {
     formaBaseins = 1.7;
    }
   }
  }

  let otdelkaPool = 'плиткой';
  var otdelkaPoolCost;
  otdelkaPool = document.getElementsByName("typecalc");
  for (let imat = 0; imat < otdelkaPool.length; imat++) {
   if (otdelkaPool[imat].checked) {
    let oblichovka = (otdelkaPool[imat].value);
    document.getElementById("oblichovka_out").innerHTML = oblichovka;
    $("#oblichovka_out_cf").val(oblichovka);

   if (oblichovka === 'плитка') {
     otdelkaPoolCost = costPlitka;
    } else if (oblichovka === 'мозайка') {
     otdelkaPoolCost = costMozaila;
    } else if (oblichovka === 'полипропилен') {
     otdelkaPoolCost = costPolipr;
    }
   }
  }
  // вывод текста с бетонной и нержавеющей лесниц

 let nergaveikaLwsnichaInput;
  let nergaveikaLwsnichaOutput;
  var nergaveikaLwsnichaPrice ;

nergaveikaLwsnichaInput = document.getElementById('nergaveka');

  if (nergaveikaLwsnichaInput.checked) {
   nergaveikaLwsnichaOutput = 'c нержавеющей лесницей';
   document.getElementById("nerglesnicha_out").innerHTML = nergaveikaLwsnichaOutput;
    $("#nerglesnicha_out_cf").val(nergaveikaLwsnichaOutput);
   var nergaveikaLwsnichaPrice = costMetalStairs;

  } else {
   nergaveikaLwsnichaOutput = 'без нержавеющей лесницы';
   document.getElementById("nerglesnicha_out").innerHTML = nergaveikaLwsnichaOutput;
    $("#nerglesnicha_out_cf").val(nergaveikaLwsnichaOutput);
   nergaveikaLwsnichaPrice = 0;
  }

  let betonLwsnichaInput;
  let betonLwsnichaOutput;
  var betonLwsnichaPrice;

  betonLwsnichaInput = document.getElementById('betonnastep');
  if (betonLwsnichaInput.checked) {
   betonLwsnichaOutput = 'c бетонной лесницей';
   document.getElementById("betonlesnicha_out").innerHTML = betonLwsnichaOutput;
     $("#betonlesnicha_out_cf").val(betonLwsnichaOutput);
   var betonLwsnichaPrice = costBetonStairs;
  } else {
   betonLwsnichaOutput = 'без бетонной лесницы';
   document.getElementById("betonlesnicha_out").innerHTML = betonLwsnichaOutput;
    $("#betonlesnicha_out_cf").val(betonLwsnichaOutput);
   betonLwsnichaPrice = 0;
  }

  // вывод текста ФИЛЬТРАЦИЕЙ
  let filtrasiaVodyPool;
  let filtrasiaVodyPoolOutput;
  var filtrasiaPoolCost;
  filtrasiaVodyPool = document.getElementById('filtation');
  if (filtrasiaVodyPool.checked) {
   filtrasiaVodyPoolOutput = 'c фильтрацией воды бассейна';
   filtrasiaPoolCost = priceFiltration;
  } else {
   filtrasiaVodyPoolOutput = 'без фильтрации воды бассейна';
   filtrasiaPoolCost = 0;
  };
  document.getElementById("filtrasia_out").innerHTML = filtrasiaVodyPoolOutput;
     $("#filtrasia_out_cf").val(filtrasiaVodyPoolOutput);

  // вывод текста ПОДОГРЕВ
  let podogrevVodyPool;
  let podogrevVodyPoolOutput;
  var PodogrevPoolCost;
  podogrevVodyPool = document.getElementById('podogravpool');
  if (podogrevVodyPool.checked) {
   podogrevVodyPoolOutput = 'подогрев воды бассейна';
   PodogrevPoolCost = pricePodogrev;
  } else {
   podogrevVodyPoolOutput = 'без подогрева воды бассейна';
   PodogrevPoolCost = 0;
  };
  document.getElementById("podogrevvody_out").innerHTML = podogrevVodyPoolOutput;
  $("#podogrevvody_out_cf").val(podogrevVodyPoolOutput);

  // вывод текста ПРОТИВОТОК
  let protivotokVodyPool;
  let protivotokVodyPoolOutput;
  var protivotokVodyPoolCost;
  protivotokVodyPool = document.getElementById('protivotok');
  if (protivotokVodyPool.checked) {
   protivotokVodyPoolOutput = 'противотоком воды бассейна';
   protivotokVodyPoolCost = priceProtivotok;
  } else {
   protivotokVodyPoolOutput = 'без противотока воды бассейна';
   protivotokVodyPoolCost = 0;
  };
  document.getElementById("protivotokvody_out").innerHTML = protivotokVodyPoolOutput;
   $("#protivotokvody_out_cf").val(protivotokVodyPoolOutput);

  // вывод текста ГИДРОМАСАЖ
  let gidromasagePool;
  let gidromasagePoolOutput;
  var gidromasagePoolCost;
  gidromasagePool = document.getElementById('gidromassage');
  if (gidromasagePool.checked) {
   gidromasagePoolOutput = 'гидромассажем';
   gidromasagePoolCost = priceGidroMasage;
  } else {
   gidromasagePoolOutput = 'без гидромассажа';
   gidromasagePoolCost = 0;
  };
  document.getElementById("gidro_out").innerHTML = gidromasagePoolOutput;
  $("#gidro_out_cf").val(gidromasagePoolOutput);

  // вывод текста ПОДСВЕТКА
  let podvpodsvetkaPool;
  let podvpodsvetkaPoolOutput;
  var podvpodsvetkaPoolCost;
  podvpodsvetkaPool = document.getElementById('podsvetka');
  if (podvpodsvetkaPool.checked) {
   podvpodsvetkaPoolOutput = 'подводной подсветкой воды';
   podvpodsvetkaPoolCost = pricePodsvetky;
  } else {
   podvpodsvetkaPoolOutput = 'без подводной подсветкой воды';
   podvpodsvetkaPoolCost = 0;
  };
  document.getElementById("podvpodsvetka_out").innerHTML = podvpodsvetkaPoolOutput;
  $("#podvpodsvetka_out_cf").val(podvpodsvetkaPoolOutput);

  // вывод текста ОЗОНОВОЙ ОБРАБОТКОЙ ВОДЫ
  let ozonovaObrabotkaPool;
  let ozonovaObrabotkaPoolOutput;
  var ozonovaObrabotkaPoolCost;
  ozonovaObrabotkaPool = document.getElementById('obrabotkawather');
  if (ozonovaObrabotkaPool.checked) {
   ozonovaObrabotkaPoolOutput = 'озоновой обработкой воды';
   ozonovaObrabotkaPoolCost = priceOzonset;
  } else {
   ozonovaObrabotkaPoolOutput = 'без озоновой обработкой воды';
   ozonovaObrabotkaPoolCost = 0;
  };
  document.getElementById("ozonobrabotka_out").innerHTML = ozonovaObrabotkaPoolOutput;
  $("#ozonobrabotka_out_cf").val(ozonovaObrabotkaPoolOutput);

  // вывод текста ВОДОПАДОМ
  let vodopadPool;
  let vodopadPoolOutput;
  var vodopadPoolCost;
  vodopadPool = document.getElementById('vodopad');
  if (vodopadPool.checked) {
   vodopadPoolOutput = 'водопадом бассейна';
   vodopadPoolCost = priceVodopad;
  } else {
   vodopadPoolOutput = 'без водопада бассейна';
   vodopadPoolCost = 0;
  };
  document.getElementById("vodopad_out").innerHTML = vodopadPoolOutput;
    $("#vodopad_out_cf").val(vodopadPoolOutput);

  // вывод текста ФЭРОМАССЖЕМ
  let aeromasagePool;
  let aeromasagePoolOutput;
  var aeromasagePoolCost;
  aeromasagePool = document.getElementById('aeromasage');
  if (aeromasagePool.checked) {
   aeromasagePoolOutput = 'аэромассажем';
   aeromasagePoolCost = priceAeroMassage;
  } else {
   aeromasagePoolOutput = 'без аэромассажа';
   aeromasagePoolCost = 0;
  };
  document.getElementById("aero_out").innerHTML = aeromasagePoolOutput;
   $("#aero_out_cf").val(aeromasagePoolOutput);

  let perimetrPoolCost = (otdelkaPoolCost * ((((2 * (glubMinPool * dlinaPool)) + (2 * (glubMinPool * shirinaPool)) + (dlinaPool * shirinaPool)) * skimernyIndex) * formaBaseins));





// вывод согласия на обработку данных
  let agreeObrabotka;
  let agreeObrabotkaAnswear;
  agreeObrabotka = document.getElementById('phone_headeroption');
  if (agreeObrabotka.checked) {
   agreeObrabotkaAnswear = 'согласен/а';
  } else {
 agreeObrabotkaAnswear = 'не согласен/а';
  };
 // document.getElementById("ozonobrabotka_out").innerHTML = ozonovaObrabotkaPoolOutput;
  $("#phone_headeroption_cf").val(agreeObrabotkaAnswear);



















 // let perimetrPoolCost = perimetrPool * otdelkaPoolCost;

  // let costDopolOborudovania = nergaveikaLwsnichaPrice + betonLwsnichaPrice + filtrasiaPoolCost + PodogrevPoolCost + protivotokVodyPoolCost + gidromasagePoolCost + podvpodsvetkaPoolCost + ozonovaObrabotkaPoolCost + vodopadPoolCost + aeromasagePoolCost;

let allResultPrice = perimetrPoolCost + (nergaveikaLwsnichaPrice + betonLwsnichaPrice + filtrasiaPoolCost + PodogrevPoolCost + protivotokVodyPoolCost + gidromasagePoolCost + podvpodsvetkaPoolCost + ozonovaObrabotkaPoolCost + vodopadPoolCost + aeromasagePoolCost );
  allResultPrice = Math.ceil(allResultPrice);
  allResultPrice = allResultPrice.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
  document.getElementById("costing_proect3").innerHTML = allResultPrice;
$("#costing_proect3_cf").val(allResultPrice);
 });
 </script>

<script>


const input = document.querySelector("#dlina_pool");
const pattern = /^\d+(\.?)\d*$/g;
const allowedCodes = [8, 9, 27, 35, 36, 37, 38, 39, 46, 110, 188];
input.addEventListener('input', onInput);
function onInput(e) {
  const value = this.value;
  if( !(value.match(pattern) || allowedCodes.some(code => code === e.keyCode)) ) {
    this.value = value.slice(0, -1);
  }
}

const input1 = document.querySelector('#shirina_pool');
const pattern1 = /^\d+(\.?)\d*$/g;
const allowedCodes1 = [8, 9, 27, 35, 36, 37, 38, 39, 46, 110, 188];
input1.addEventListener('input', onInput);
function onInput(et) {
  const value1 = this.value;
  if( !(value1.match(pattern1) || allowedCodes.some(code => code === et.keyCode)) ) {
    this.value = value1.slice(0, -1);
  }
}



const input21 = document.querySelector('#glubmin_pool');
const pattern21 = /^\d+(\.?)\d*$/g;
const allowedCodes21 = [8, 9, 27, 35, 36, 37, 38, 39, 46, 110, 188];
input21.addEventListener('input', onInput);
function onInput(ep) {
  const value21 = this.value;
  if( !(value21.match(pattern21) || allowedCodes.some(code => code === ep.keyCode)) ) {
    this.value = value21.slice(0, -1);
  }
}


const input31 = document.querySelector('#glubmax_pool');
const pattern31 = /^\d+(\.?)\d*$/g;
const allowedCodes31 = [8, 9, 27, 35, 36, 37, 38, 39, 46, 110, 188];
input31.addEventListener('input', onInput);
function onInput(ek) {
  const value31 = this.value;
  if( !(value31.match(pattern31) || allowedCodes.some(code => code === ek.keyCode)) ) {
    this.value = value31.slice(0, -1);
  }
}
</script>
</body>
</html>