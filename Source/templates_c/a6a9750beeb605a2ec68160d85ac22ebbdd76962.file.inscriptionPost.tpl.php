<?php /* Smarty version Smarty-3.1.7, created on 2012-11-09 09:32:25
         compiled from "templates/inscriptionPost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:983115380509cbf99cead08-64191477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6a9750beeb605a2ec68160d85ac22ebbdd76962' => 
    array (
      0 => 'templates/inscriptionPost.tpl',
      1 => 1352364965,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '983115380509cbf99cead08-64191477',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'inscription' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_509cbf99d3101',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509cbf99d3101')) {function content_509cbf99d3101($_smarty_tpl) {?>﻿<!-- David Winckel & François Ripp-->
<h1>Retour d'inscription</h1>

<?php if ($_smarty_tpl->tpl_vars['inscription']->value=="reussi"){?>
<p>Inscription réussie. Vous pouvez maintenant vous connecter</p>
<?php }else{ ?>
<p>Échec de l'inscription.</p>
<?php }?><?php }} ?>