<!-- David Winckel -->

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
        <title>{$nom}</title>
    </head>

    <body>
        <div id="topmenu">{include file="topmenu.tpl"}</div>
        <div id="menu">{include file="menu.tpl"}</div>
        <div id="content">{include file=$page}</div>
    </body>
</html>

