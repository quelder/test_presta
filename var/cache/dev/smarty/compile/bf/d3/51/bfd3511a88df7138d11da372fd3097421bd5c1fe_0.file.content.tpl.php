<?php
/* Smarty version 3.1.47, created on 2023-07-24 17:39:42
  from 'C:\OSPanel\domains\localhost\admin923iptioh\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_64be8d2e526dd3_66157406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfd3511a88df7138d11da372fd3097421bd5c1fe' => 
    array (
      0 => 'C:\\OSPanel\\domains\\localhost\\admin923iptioh\\themes\\default\\template\\content.tpl',
      1 => 1689348953,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64be8d2e526dd3_66157406 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
