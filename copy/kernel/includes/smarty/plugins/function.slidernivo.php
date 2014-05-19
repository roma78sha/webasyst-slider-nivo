<?php
/*
 * WebAsyst Plugin
 * -----------------------------------------------------------------------------
 * Type:     function
 * Name:     webasyst slider nivo 1.2 beta free 
 * Purpose:  for slider Nivo
 * Author:   Shulyak Roman
 * Description: бесплатная Open source "оболочка" для слайдера Nivo,
 *              предназначенная только для облегчения установки его на webasyst 
 *
 * сам слайдер http://dev7studios.com/plugins/nivo-slider/
 * ------------------------------------------------------------------------------
 */
function smarty_function_slidernivo ($params, &$smarty) { // var_dump($params);

	$disp='
	<div class="slider-wrapper">
		<div id="slider" class="nivoSlider">
	';

	if($params['slider_info']) {
	  $sld = array();
	  $link = array();
	  foreach ($params['slider_info'] as $slider_info){
		$sld[] = $slider_info['photo'];
		$link[] = $slider_info['link'];
	  }
	}else{
	  if(!$params['photo'] && !$params['link']) return;
	  $sld = explode(",", (str_replace("", " ", $params['photo'])));
	  $link = explode(",", (str_replace("", " ", $params['link'])));
	};

	foreach ($sld as $key => $sldrez) {
		$disp .= '<a class="nivo-imageLink" href="'. $link[$key] .'"><img src="' . URL_IMAGES . '/' . $sldrez . '" alt="" /></a>';
	}
		
	$disp.='
		</div>
	</div>
	<link rel="stylesheet" href="published/SC/html/scripts/css/nivo-slider.css" type="text/css" media="screen" />
	<script type="text/javascript" src="published/SC/html/scripts/js/jquery.nivo.slider.pack.js"></script>
	<script type="text/javascript">
	$(window).load(function() {
	    $("#slider").nivoSlider ({
	            effect: "fade", // "random, fold, sliceDown"
	            animSpeed: 500,
	            pauseTime: 3000,
	            startSlide: 0,
	            controlNavThumbs: false,
	            dNav: true,
	            captionOpacity: 0.8,
	            beforeChange: function (){},
	            afterChange: function (){}
	        });
	});
	</script>
';
	return $disp;
}
?>
