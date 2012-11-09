<?php
// David WINCKEL

session_start();

if (isset($_SESSION["Connected"]) && $_SESSION["Connected"] == true && isset($_POST["name"]))
{
    if ($_POST["name"] != "")
    {
        //$json = json_encode();
        echo $json;
    }
    else
    {
        echo "ok";
    }
}
else
{   
    echo "";
}

?>
