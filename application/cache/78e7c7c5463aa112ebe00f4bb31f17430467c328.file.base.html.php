<?php /* Smarty version Smarty-3.1.8, created on 2014-05-12 15:41:19
         compiled from "../application/views\base\base.html" */ ?>
<?php /*%%SmartyHeaderCode:114675370e73ef31192-62595875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78e7c7c5463aa112ebe00f4bb31f17430467c328' => 
    array (
      0 => '../application/views\\base\\base.html',
      1 => 1399909278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114675370e73ef31192-62595875',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5370e73f09f4a5_50357047',
  'variables' => 
  array (
    'page' => 0,
    'js_file' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5370e73f09f4a5_50357047')) {function content_5370e73f09f4a5_50357047($_smarty_tpl) {?><!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>2048</title>
	<link rel="stylesheet" type="text/css" href="<?php echo css_url('2048.css');?>
" />
	<?php echo load_js('lib/jquery.js');?>

	<?php echo load_js('lib/jquery.UI.js');?>

</head>
<body>
	<?php echo $_smarty_tpl->getSubTemplate ('base/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['page']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ('base/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <?php  $_smarty_tpl->tpl_vars['js_file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js_file']->_loop = false;
 $_from = load_js(true); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js_file']->key => $_smarty_tpl->tpl_vars['js_file']->value){
$_smarty_tpl->tpl_vars['js_file']->_loop = true;
?>
    <script type="text/javascript" src="<?php echo js_url($_smarty_tpl->tpl_vars['js_file']->value);?>
"></script>
    <?php } ?>
</body>
</html><?php }} ?>