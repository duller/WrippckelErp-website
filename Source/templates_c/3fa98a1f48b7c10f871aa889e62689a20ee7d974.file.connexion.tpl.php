<?php /* Smarty version Smarty-3.1.7, created on 2012-11-09 09:37:34
         compiled from "templates/connexion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1090870679509cbecc07d820-02483456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fa98a1f48b7c10f871aa889e62689a20ee7d974' => 
    array (
      0 => 'templates/connexion.tpl',
      1 => 1352450247,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1090870679509cbecc07d820-02483456',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_509cbecc098cc',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509cbecc098cc')) {function content_509cbecc098cc($_smarty_tpl) {?>﻿<!-- David Winckel et François Ripp -->


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


<h1>Connexion</h1>

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
</form><?php }} ?>