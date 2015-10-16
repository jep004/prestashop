<?php /*%%SmartyHeaderCode:72793912056212139ea6c95-19869172%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2534b38ca2c6f6c9999d785af2fbf34e5304078' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/prestashop/themes/default/modules/blockcategories/blockcategories.tpl',
      1 => 1438162730,
      2 => 'file',
    ),
    '0e88aa1c0e2951876fd2f329226171ea0caa68b4' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/prestashop/themes/default/modules/blockcategories/category-tree-branch.tpl',
      1 => 1438162730,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72793912056212139ea6c95-19869172',
  'variables' => 
  array (
    'isDhtml' => 0,
    'blockCategTree' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56212139f3cf74_09380803',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56212139f3cf74_09380803')) {function content_56212139f3cf74_09380803($_smarty_tpl) {?>
<!-- Block categories module -->
<div id="categories_block_left" class="block">
	<p class="title_block">Categorías</p>
	<div class="block_content">
		<ul class="tree dhtml">
									
<li >
	<a href="http://localhost/prestashop/index.php?id_category=3&amp;controller=category&amp;id_lang=1" 		title="Es hora de que el mejor jugador de la m&uacute;sica, al escenario para hacer un bis. Con el nuevo iPod, el mundo es tu escenario.">iPods</a>
	</li>

												
<li >
	<a href="http://localhost/prestashop/index.php?id_category=4&amp;controller=category&amp;id_lang=1" 		title="Todos los accesorios de moda para tu iPod">Accesorios</a>
	</li>

												
<li class="last">
	<a href="http://localhost/prestashop/index.php?id_category=5&amp;controller=category&amp;id_lang=1" 		title="El &uacute;ltimo procesador Intel, un disco duro m&aacute;s grande, con profusi&oacute;n de memoria y otras novedades. Todo en s&oacute;lo 2,59 cm libres de cualquier obstrucci&oacute;n. Las nuevas port&aacute;tiles Mac cumplir rendimiento, potencia y conectividad de una computadora de escritorio. Sin la parte del escritorio.">Port&aacute;tiles</a>
	</li>

							</ul>
		
		<script type="text/javascript">
		// <![CDATA[
			// we hide the tree only if JavaScript is activated
			$('div#categories_block_left ul.dhtml').hide();
		// ]]>
		</script>
	</div>
</div>
<!-- /Block categories module -->
<?php }} ?>