<?php

// 
//  Encapsulation restric the direct access to some properties,metods ,array or other details and 
//  also limit the permision to who can read or who can update 
//
//  encapsulationက classထဲမှာရှိတဲ့ properties တွေ methodsစတာတွေရဲ့ direct အသုံးပြုခွင့်,ရပိုင် ခွင့်တွေကို ကာကွယ်ထားလို့ရပါတယ်။
//  Access modiefier or visiblity keywords တွေဖြစ်တဲ့  public ,private,protected စတဲ့keywords တွေကိုအသုံးပြုပြီ accessတွေကိုcontrolနိုင်ပါတယ်
//  အဲ့ဒီ ကောင်တွေကို   setter methods တွေ  gettermethodsတွေနဲ့ read or update access တွေပေးလို့ရပါသေးတယ်။ 
class Car
{
    private $brand;
    private $model;
    private $year;
    private $owner;

    public function __construct($brand, $model, $year,$owner)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->owner = $owner;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setOwner($newOwner)
    {
        return $this->owner= $newOwner;
    }
    public function displayInfo()
    {
        return "This car is a " . $this->year . " " . $this->brand . " " . $this->model ." owned by ". $this->owner.".";
    }
}

$myCar = new Car("Toyota", "Camry", 2023,'John Doe');

// You can access the properties using the methods
echo "Brand: " . $myCar->getBrand() . "<br>";
echo "Model: " . $myCar->getModel() . "<br>";
echo "Year: " . $myCar->getYear() . "<br>";

// You can display information using the encapsulated method
echo $myCar->displayInfo();

$myCar->setOwner('Rosy');

// Set new owner that was privated of the car 
echo $myCar->displayInfo();