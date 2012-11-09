<?php
// David WINCKEL

class HyperController implements IController
{
    public function execute(Smarty $environnement) 
    {
        if (isset($_SESSION["Connected"]) && $_SESSION["Connected"] == true )
        {
            $environnement->assign("Connected", $_SESSION["Connected"]);
            $environnement->assign("Login", $_SESSION["Login"]);
                
        }
        else
        {
            $environnement->assign("Connected", false);
            $environnement->assign("Login", "");
        
        }

    }
}

?>
