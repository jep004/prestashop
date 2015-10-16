<?php /* Smarty version Smarty-3.1.14, created on 2015-10-02 19:53:09
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/prestashop/admin/themes/default/template/controllers/modules/tab_module_line.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2111328302560ec485ef6082-24316095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e4158433c14843e146b4e1040db920e36087af8' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/prestashop/admin/themes/default/template/controllers/modules/tab_module_line.tpl',
      1 => 1438162728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2111328302560ec485ef6082-24316095',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'class_row' => 0,
    'module' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_560ec48604a9a1_54516120',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560ec48604a9a1_54516120')) {function content_560ec48604a9a1_54516120($_smarty_tpl) {?>

<tr class="<?php echo $_smarty_tpl->tpl_vars['class_row']->value;?>
">
	<td>
		<table border="0" cellpadding="0" cellspacing="5">
			<tr>
				<td valign="top" width="32" align="center">
					<img class="imgm" alt="" src="<?php if (isset($_smarty_tpl->tpl_vars['module']->value->image)){?><?php echo $_smarty_tpl->tpl_vars['module']->value->image;?>
<?php }else{ ?>../modules/<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
/<?php echo $_smarty_tpl->tpl_vars['module']->value->logo;?>
<?php }?>">
				</td>
				<td valign="top">
					<div class="moduleDesc" id="anchor<?php echo ucfirst($_smarty_tpl->tpl_vars['module']->value->name);?>
">
						<h3>
							<span style="display:none"><?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
</span> 
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['module']->value->displayName,36,'…');?>
 <?php echo $_smarty_tpl->tpl_vars['module']->value->version;?>

							<?php if (isset($_smarty_tpl->tpl_vars['module']->value->id)&&$_smarty_tpl->tpl_vars['module']->value->id>0){?>
								<?php if ($_smarty_tpl->tpl_vars['module']->value->active){?>
									<span class="setup"><?php echo smartyTranslate(array('s'=>'Enabled'),$_smarty_tpl);?>
</span>
								<?php }else{ ?>
									<span class="setup off"><?php echo smartyTranslate(array('s'=>'Disabled'),$_smarty_tpl);?>
</span>
								<?php }?>
							<?php }else{ ?>
								<?php if (isset($_smarty_tpl->tpl_vars['module']->value->type)&&$_smarty_tpl->tpl_vars['module']->value->type=='addonsMustHave'){?>
									<span class="setup must-have"><?php echo smartyTranslate(array('s'=>'Must Have'),$_smarty_tpl);?>
</span>
								<?php }else{ ?>
									<span class="setup off"><?php echo smartyTranslate(array('s'=>'Not installed'),$_smarty_tpl);?>
</span>
								<?php }?>
								
							<?php }?>
						</h3>
						<p class="desc">
							<?php if (isset($_smarty_tpl->tpl_vars['module']->value->description)&&$_smarty_tpl->tpl_vars['module']->value->description!=''){?>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['module']->value->description,86,'…');?>

							<?php }else{ ?>
								&nbsp;
							<?php }?>
						</p>
					</div>
				</td>
				<td border="0" valign="middle" align="right">
					<?php if (isset($_smarty_tpl->tpl_vars['module']->value->type)&&$_smarty_tpl->tpl_vars['module']->value->type=='addonsMustHave'){?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['module']->value->addons_buy_url;?>
" target="_blank" class="button updated">
						<span><img src="../img/admin/cart_addons.png">&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['module']->value->price,'currency'=>$_smarty_tpl->tpl_vars['module']->value->id_currency),$_smarty_tpl);?>
</span></a>
					<?php }elseif(!isset($_smarty_tpl->tpl_vars['module']->value->not_on_disk)){?>
						<?php echo $_smarty_tpl->tpl_vars['module']->value->optionsHtml;?>

						<div class="clear">&nbsp;</div>
						<a href="#" class="button action_tab_module" data-option="select_<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" class="button"><?php echo smartyTranslate(array('s'=>'Submit'),$_smarty_tpl);?>
</a>
					<?php }else{ ?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['module']->value->options['install_url'];?>
" class="button"><?php echo smartyTranslate(array('s'=>'Install'),$_smarty_tpl);?>
</a>
					<?php }?>
				</td>
			</tr>
		</table>
	</td>
</tr><?php }} ?>