<?php /*%%SmartyHeaderCode:203138073256212139b86146-81606525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '067a7116bde01a59c6e35835ac1d40480bf3722f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/prestashop/modules/blockpermanentlinks/blockpermanentlinks-header.tpl',
      1 => 1438162730,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203138073256212139b86146-81606525',
  'variables' => 
  array (
    'link' => 0,
    'come_from' => 0,
    'meta_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56212139bb7e05_25586380',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56212139bb7e05_25586380')) {function content_56212139bb7e05_25586380($_smarty_tpl) {?>
<!-- Block permanent links module HEADER -->
<ul id="header_links">
	<li id="header_link_contact"><a href="http://localhost/prestashop/index.php?controller=contact" title="contacto">contacto</a></li>
	<li id="header_link_sitemap"><a href="http://localhost/prestashop/index.php?controller=sitemap" title="mapa sitio">mapa sitio</a></li>
	<li id="header_link_bookmark">
		<script type="text/javascript">writeBookmarkLink('http://localhost/prestashop/index.php', 'Tenda', 'Favoritos');</script>
	</li>
</ul>
<!-- /Block permanent links module HEADER -->
<?php }} ?>