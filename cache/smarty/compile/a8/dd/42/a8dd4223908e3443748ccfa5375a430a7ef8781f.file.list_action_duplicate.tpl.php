<?php /* Smarty version Smarty-3.1.14, created on 2015-10-17 12:37:14
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/prestashop/admin6493/themes/default/template/helpers/list/list_action_duplicate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:430452568562224da859698-08309853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8dd4223908e3443748ccfa5375a430a7ef8781f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/prestashop/admin6493/themes/default/template/helpers/list/list_action_duplicate.tpl',
      1 => 1438162728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '430452568562224da859698-08309853',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'confirm' => 0,
    'location_ok' => 0,
    'location_ko' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_562224da8657d4_67967286',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562224da8657d4_67967286')) {function content_562224da8657d4_67967286($_smarty_tpl) {?>
<a class="pointer" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')) document.location = '<?php echo $_smarty_tpl->tpl_vars['location_ok']->value;?>
'; else document.location = '<?php echo $_smarty_tpl->tpl_vars['location_ko']->value;?>
';">
	<img src="../img/admin/duplicate.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>