<?php



class keyboard{
   private $switch='blue';
   
   public function  getSwitch(){
        return $this->switch;
   }

    public function  setSwitch($newSwitch)
    {
        return $this->switch = $newSwitch;
    }
}

$keyboard=new keyboard();
$keyboard->getSwitch(); //output:blue

$keyboard->setSwitch('red');
$keyboard->getSwitch(); //output:red