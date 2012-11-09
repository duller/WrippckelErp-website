<?php /* Smarty version Smarty-3.1.7, created on 2012-11-09 09:53:29
         compiled from "templates/topmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1077294824509cbd21b7cb94-80007888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6a3ddba090bba57155e0be688e27df453321ff3' => 
    array (
      0 => 'templates/topmenu.tpl',
      1 => 1352451206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1077294824509cbd21b7cb94-80007888',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_509cbd21b819b',
  'variables' => 
  array (
    'Connected' => 0,
    'Login' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509cbd21b819b')) {function content_509cbd21b819b($_smarty_tpl) {?><!-- David Winckel -->
<p>
Bonjour 
<?php if ($_smarty_tpl->tpl_vars['Connected']->value){?>
<?php echo $_smarty_tpl->tpl_vars['Login']->value;?>
 <a href="?Page=authentification">(Déconnexion)</a>
<?php }?> 

</p><?php }} ?>