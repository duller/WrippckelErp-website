<?php /* Smarty version Smarty-3.1.7, created on 2012-11-09 09:43:25
         compiled from "templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:342506591509cbd21a8bfc2-62526355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90093ad09988b466f409a1871733c5589014713e' => 
    array (
      0 => 'templates/index.tpl',
      1 => 1352450600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '342506591509cbd21a8bfc2-62526355',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_509cbd21b5ba0',
  'variables' => 
  array (
    'nom' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509cbd21b5ba0')) {function content_509cbd21b5ba0($_smarty_tpl) {?><!-- David Winckel -->

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
   <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="Content-Language" content="fr">

        <link href="style.css" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="style/layout.css">
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="style/formulaire.css">
        <script type="text/javascript" src="js/Jquery.js"></script>
        <title><?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
</title>
    </head>

    <body>
        <div id="topmenu"><?php echo $_smarty_tpl->getSubTemplate ("topmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
        <div id="menu"><?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
        <div id="content"><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['page']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
    </body>
</html>

<?php }} ?>