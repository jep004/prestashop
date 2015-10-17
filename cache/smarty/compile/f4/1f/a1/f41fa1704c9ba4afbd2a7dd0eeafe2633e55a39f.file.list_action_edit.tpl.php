<?php /* Smarty version Smarty-3.1.14, created on 2015-10-17 12:37:07
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/prestashop/admin6493/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1848570243562224d3dc0868-27387335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f41fa1704c9ba4afbd2a7dd0eeafe2633e55a39f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/prestashop/admin6493/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1438162728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1848570243562224d3dc0868-27387335',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_562224d3dcb7d1_28629140',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562224d3dcb7d1_28629140')) {function content_562224d3dcb7d1_28629140($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>