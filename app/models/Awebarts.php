<?php

/*
 * Description of Awebarts
 *  main class will include the main fuctions 
 * @author Ali7amdi
 */
class Awebarts {
    
    
    private $cxn;
    
    function connectToDb()
    {
        require_once 'models/Database.php';
        $vars = "include/vars.php";
        $this->cxn = new Database($vars);
    }
    
    function close()
    {
        $this->cxn->close();
    }
    
}

?>
