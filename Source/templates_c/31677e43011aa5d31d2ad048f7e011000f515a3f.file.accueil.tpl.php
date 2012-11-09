<?php /* Smarty version Smarty-3.1.7, created on 2012-11-09 10:03:32
         compiled from "templates/accueil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1436148292509cbd21b960b4-38922114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31677e43011aa5d31d2ad048f7e011000f515a3f' => 
    array (
      0 => 'templates/accueil.tpl',
      1 => 1352451810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1436148292509cbd21b960b4-38922114',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_509cbd21b9b0b',
  'variables' => 
  array (
    'Connected' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509cbd21b9b0b')) {function content_509cbd21b9b0b($_smarty_tpl) {?>﻿<!-- David Winckel -->
<?php if ($_smarty_tpl->tpl_vars['Connected']->value){?>
Tableau de bord
<?php }else{ ?>

<script type="text/javascript">

        function formVerification()
        {
                var ok = true;

                // Login
                if (! /^[a-zA-Z0-9_-]{3,16}$/.test(document.getElementById("login").value))
                {
                    document.getElementById("erreurlogin").className = "erreurAffiche";
                    ok = false;
                }
                else
                {
                    document.getElementById("erreurlogin").className = "erreurMasque";
                }

                // Mot de passe
                if (! /^[a-zA-Z0-9_-]{6,18}$/.test(document.getElementById("motdepasse").value))
                {
                    document.getElementById("erreurmotdepasse").className = "erreurAffiche";
                    ok = false;
                }
                else
                {
                    document.getElementById("erreurmotdepasse").className = "erreurMasque";
                }
                    
                return ok;
        }

</script>

<form action="?Page=authentification" method="POST" onsubmit="return formVerification()">
    <table>
        <tr>
            <td>
                <label for="login">Login</label>
            </td>

            <td>
                <input name="login" id="login" type="text">
            </td>
            <td>
                <span class="erreurMasque" id="erreurlogin"> (3 à 16 caractères alphanumériques)</span>
            </td>
        </tr>
        <tr>
            <td>
                <label for="motdepasse">Mot de passe</label>
            </td>

            <td>
                <input name="motdepasse" id="motdepasse" type="password">
            </td>
            <td>
                <span class="erreurMasque" id="erreurmotdepasse"> (6 à 16 caractères alphanumériques)</span>
            </td>
        </tr>
        <tr>
            <td>
            </td>

            <td>
                <input id="envoi" value="Authentification" type="submit">
            </td>
            <td>
            </td>
        </tr>
        <tr>
            <td>
                Pas de compte
            </td>

            <td>
                <a href="?Page=inscription">Inscription</a>
            </td>
            <td>
            </td>
        </tr>
    </table>
</form>    
<?php }?><?php }} ?>