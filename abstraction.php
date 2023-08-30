<?php

// 
//      "When a class extends an abstract class, 
//      the extending class must implement the abstract methods declared in the abstract class. 
//      Abstract methods are functions defined in the abstract class but without an implementation."
//
//       =====>Abstraction process want to give the client to results.
//            Client do no need to know how they work to get result.
//----------------------------------------------------------------------------------------------
//      class တစ်ခုက abstract classကို extendsလုပ်ထားမယ်ဆိုရင် abstract class ထဲက 
//       abstract methods(ဒီmethod တွေက ကိုယ်တိုင်တော့ abstract ထဲမှာ implement လုပ်ထားမှာမဟုတ်ပါဘူး) တွေကိုသေချာပေါက် implements လုပ်ပေးဖိုလိုပါမယ်။
//     ======။ Abstraction က client ကို result ပြဖို့ပဲ။ 
//            resultကိုရဖိုဘာတွေလုပ်ခဲ့လဲဆိုတာ client က သိစရာမလိုဘူး ။
//



abstract class studentInfo
{
    // Force Extending class to define this method
    abstract protected function name();
    abstract protected function age();
    abstract protected function majorSubject();
    // Common method
    public function printStudentInfo() {
        print $this->name() . "\n";
        print $this->age() . "\n";
        print $this->majorSubject() . "\n\n";
    }
}

class computerScienceStudent extends studentInfo
{
    protected function name() {
        return "Johne Doe";
    }

    public function age() {
        return "18";
    }
    public function majorSubject(){
        return "ComputerScience";
    }
    
}

class medicalStudent extends studentInfo
{
    protected function name() {
        return "Rose";
    }

    public function age() {
        return "18";
    }
    public function majorSubject(){
        return "Medical";
    }
}

$class1 = new computerScienceStudent;
$class1->printStudentInfo();

$class2 = new medicalStudent;
$class2->printStudentInfo();
