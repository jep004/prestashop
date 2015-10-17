<?php /* Smarty version Smarty-3.1.14, created on 2015-10-17 12:37:07
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/prestashop/admin6493/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:673609350562224d3dcf081-47101963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec429534588c74ee0dca82caa16c0c5f6109e23a' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/prestashop/admin6493/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1438162728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '673609350562224d3dcf081-47101963',
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
  'unifunc' => 'content_562224d3ddc799_55987318',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562224d3ddc799_55987318')) {function content_562224d3ddc799_55987318($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<img src="../img/admin/details.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>