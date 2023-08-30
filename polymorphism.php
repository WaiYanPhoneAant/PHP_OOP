<?php

// Polymorphism: The ability of different classes to implement the same method signature, 
// as defined by an interface or a base class, but with their own specific implementations.
// This allows objects of these different classes to be treated interchangeably through a common interface.
//
// polymorphism : class  တစ်ခု က interface တစ်ခုပေါ် မူတည်ပြီးတော့ ပုံစံအမျိုးမျိူးနဲ့implementsလုပ်တယ်။
//



interface Shape
{
    public function area();
}

class Circle implements Shape
{
    public function area()
    {
        // Implementation specific to circles
    }
}

class Rectangle implements Shape
{
    public function area()
    {
        // Implementation specific to rectangles
    }
}