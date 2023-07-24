<?php
/* Smarty version 3.1.47, created on 2023-07-24 17:29:45
  from 'C:\OSPanel\domains\localhost\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_64be8ad9d2d6a4_97121952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '523ce47758def6c618418ba7caa02c04344bb971' => 
    array (
      0 => 'C:\\OSPanel\\domains\\localhost\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1689348954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64be8ad9d2d6a4_97121952 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\OSPanel\\domains\\localhost\\var\\cache\\dev\\smarty\\compile\\classiclayouts_layout_left_column_tpl\\52\\3c\\e4\\523ce47758def6c618418ba7caa02c04344bb971_2.file.helpers.tpl.php',
    'uid' => '523ce47758def6c618418ba7caa02c04344bb971',
    'call_name' => 'smarty_template_function_renderLogo_8833899164be8ad9d25607_69509343',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_8833899164be8ad9d25607_69509343 */
if (!function_exists('smarty_template_function_renderLogo_8833899164be8ad9d25607_69509343')) {
function smarty_template_function_renderLogo_8833899164be8ad9d25607_69509343(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_8833899164be8ad9d25607_69509343 */
}
