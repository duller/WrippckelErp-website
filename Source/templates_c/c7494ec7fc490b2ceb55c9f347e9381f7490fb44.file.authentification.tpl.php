<?php /* Smarty version Smarty-3.1.7, created on 2012-11-09 09:45:57
         compiled from "templates/authentification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88149344509cbecfccef84-40933328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7494ec7fc490b2ceb55c9f347e9381f7490fb44' => 
    array (
      0 => 'templates/authentification.tpl',
      1 => 1352450580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88149344509cbecfccef84-40933328',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_509cbecfd1f32',
  'variables' => 
  array (
    'connexion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509cbecfd1f32')) {function content_509cbecfd1f32($_smarty_tpl) {?><!-- David WINCKEL & François Ripp-->
<?php if ($_smarty_tpl->tpl_vars['connexion']->value=="connexionreussi"){?>
<p>Connexion en cours...</p>


<script language="javascript">

setTimeout ("redirection()", 1000 ); 

function redirection()
{
    document.location.href="?Page=accueil"
}
</script>

<?php }elseif($_smarty_tpl->tpl_vars['connexion']->value=="deconnexionreussi"){?>
<p>Déconnexion en cours...</p>


<script language="javascript">

setTimeout ("redirection()", 1000 ); 

function redirection()
{
    document.location.href="?Page=accueil"
}
</script>

<?php }else{ ?>
<p>La combinaison login/mot de passe est incorrecte</p>

<script language="javascript">

setTimeout ("redirection()", 3000 ); 


function redirection()
{
    document.location.href="?Page=accueil"
}
</script>

<?php }?>
<?php }} ?>