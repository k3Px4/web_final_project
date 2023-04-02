<?php 
    require_once "./app/core/controllers.php";

    class Home{
        function Sayhi($arr_para)
        {
            // if(!empty($arr_para) > 0)
            // {
            //     foreach($arr_para as $a)
            //     {
            //         echo $a . " + ";

            //     }
            // }

            $student = model("Student"); // call in controller of core

            print_r($student->GetSV());
            
            echo "<br/> say hi in Home" . "<br/>";
        }
        function Show($arr_para)
        {
            // if(!empty($arr_para) > 0)
            // {
            //     foreach($arr_para as $a)
            //     {
            //         echo $a . " + ";

            //     }
            // }
            $student = model("Student"); // call in controller of core

            print_r($student->Get_values_test());

            echo "<br/> show in Home" . "<br/>";
        }
    }
?>