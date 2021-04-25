<?php

    /*
    Simple code to make your browser go BOOM,
    it generates infinite amount of array values.
    Meant no harm by creating this, just a small contribution of my knowledge because i am bored.

    Code Made By Milan.

    And also not much information about how this code executes precisely, because it's late here. 
    But i assume that any PHP developer knows what this does right? ;)

    Just made the code something more advanced. I also changed some function names and variables.
    But again i just writed this because i am bored.

    No harm intended i am not responsible for any possible damage you will do or get by running the infinite loop.
    */

include 'Configuration/Config.php'; // Calls the Configuration File.
include 'Layout/ArrayLayout.php';
include 'Layout/ArrayMessages/LoopMessages.php';

class ArrayLoopInit 
{

    public $sendData = array("data", "crash", "data", "crash");
    public $firstLine = '[MSG ArrayLoop] => ';
    public $lastLine = ' - Data Just got send ONCE';

    public function arrayLoopMain() 
    {
        if (Configuration::enableArray == true) 
        {
            if (Configuration::enableInfinite == false) 
            {
            foreach ($this->sendData as $sendLoopPrint) 
            {
                while (Configuration::enableInfinite == false) 
                {
                echo $this->firstLine; var_dump($sendLoopPrint); echo $this->lastLine;
                exit;
                }
            }
        }
        else 
        {
            if (isset($_POST['arrayloop-sure'])) 
            {
            foreach ($this->sendData as $sendLoopPrint) 
            {
                while (Configuration::enableInfinite == true) 
                {
                var_dump($sendLoopPrint);
                }
            }
        } 
            else 
            {
                echo ArrayConfirmationMessages::confirmExecute;
                exit;
            }
        }
    }
        else 
        {
           echo Layout::ArrayLayout;
           exit; 
        }
    }
}

    $callFunction = new ArrayLoopInit();
    $callFunction->arrayLoopMain();