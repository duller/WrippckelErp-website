<?php /* Smarty version Smarty-3.1.7, created on 2012-11-09 09:46:22
         compiled from "templates/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:727336071509cbd21b89b85-46860985%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6da4162c469d98c5e879f8e0b21e18d44108090' => 
    array (
      0 => 'templates/menu.tpl',
      1 => 1352450780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '727336071509cbd21b89b85-46860985',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_509cbd21b8ea7',
  'variables' => 
  array (
    'Connected' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509cbd21b8ea7')) {function content_509cbd21b8ea7($_smarty_tpl) {?><!-- David Winckel -->
<p>
<?php if ($_smarty_tpl->tpl_vars['Connected']->value){?>
<span class="menuParent">Fonctions</span>
<a href="?Page=comptes"><span class="menuElement">Comptes</span></a>

<span class="menuParent">Associations</span>
<?php }else{ ?>

<a href="?Page=accueil"><span class="menuElement">Accueil</span></a>

<?php }?>

</p>   <?php }} ?>