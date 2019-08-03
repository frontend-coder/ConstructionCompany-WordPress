<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package construction
 */
?>




<?php if ( !is_active_sidebar( 'sidebar-1' ) )
                    { echo "Активируйте виджеты"; }
                    else {
                      dynamic_sidebar( 'sidebar-1' );
                    }
                     ?>

<div class="widget widget_search">

		<form id="searchform" class="searchform" action="/" method="get">
			<input id="s" class="submit_input" type="text" name="s" placeholder="Введите запрос" >
			<input id="searchsubmit" class="submit" type="submit" value="найти">
		</form>
</div>

	<!-- <div class="widget">
		<h3 class="widget-title">название122</h3>
		<ul>
			<li><a href="#">первая ссылка</a></li>
			<li><a href="#">эта ссылка которая занимает две строки</a></li>
			<li><a href="#">первая ссылка</a></li>
			<li><a href="#">первая ссылка</a>
				<ul class="children ">
					<li><a href="#">первая ссылка</a></li>
					<li><a href="#">эта ссылка которая занимает две строки</a></li>
					<li><a href="#">первая ссылка</a></li>
				</ul>
			</li>
			<li><a href="#">первая ссылка</a></li>
			<li><a href="#">первая ссылка</a></li>
			<li><a href="#">первая ссылка</a></li>
		</ul>
	</div> -->
<!-- 	<div class="widget">
		<h3 class="widget-title">название</h3>
		<ul>
			<li><a href="#">первая ссылка</a></li>
			<li><a href="#">эта ссылка которая занимает две строки</a></li>
			<li><a href="#">первая ссылка</a></li>
			<li><a href="#">первая ссылка</a></li>
			<li><a href="#">первая ссылка</a></li>
			<li><a href="#">первая ссылка</a></li>
			<li><a href="#">первая ссылка</a></li>
		</ul>
	</div> -->
<!-- 	<div class="widget">
		<h3 class="widget-title">название</h3>
		<ul>
			<li><a href="#">первая ссылка</a></li>
			<li><a href="#">эта ссылка которая занимает две строки</a></li>
			<li><a href="#">первая ссылка</a></li>
			<li><a href="#">первая ссылка</a></li>
			<li><a href="#">первая ссылка</a></li>
			<li><a href="#">первая ссылка</a></li>
			<li><a href="#">первая ссылка</a></li>
		</ul>
	</div> -->

