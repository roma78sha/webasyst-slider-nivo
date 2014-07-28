webasyst-slider-nivo
====================

Nivo Slider for Webasyst   Author: Shulyak Roman

Бесплатная Open source "оболочка" для слайдера Nivo, предназначенная для облегчения установки его на webasyst 
сам слайдер http://dev7studios.com/plugins/nivo-slider/

Установка:
1. сделать БЭКАП файлов и базы данных!!!
2. скопировать содержимое папки [copy] в корень движка.
3. загружаем изображения через Админка-Магазин-Дизайн-Загрузка изображений
  (published\publicdata\---YOU---\attachments\SC\images)

I. объявляем в шаблоне, например в \published\publicdata\---YOU---\attachments\SC\themes\---you theme---\home.html 
вот так: {if !$CPT_CONSTRUCTOR_MODE}{slidernivo photo="slide_1.jpg,slide_2.jpg,slide_3.jpg" link="/category/pc/,/category/test1/,/category/test2/"}{/if}

где photo= перечисление слайдов через запятую (только имя)
    link = перечисление ссылок через запятую 
	
можно и так, в шаблоне {if !$CPT_CONSTRUCTOR_MODE}{slidernivo slider_info=$slider_info}{/if}

тогда переменная slider_info должна быть вида 
'slider_info' =>
  array(2) {
    [0] =>
    array(3) {
      'link' =>
      string(0) "/category/test1/"
      'photo' =>
      string(11) "slide_1.jpg"
    }
    [1] =>
    array(3) {
      'link' =>
      string(0) "/category/pc/"
      'photo' =>
      string(11) "slide_2.jpg"
    }
    ...
  }
  ...

II.обязательно почистить кэш- www.my_syte/installer
	(/kernel/includes/smarty/compiled/)

Модуль не затирает, не заменяет ни каких файлов движка.

Nivo-Slider:
http://dev7studios.com/plugins/nivo-slider/