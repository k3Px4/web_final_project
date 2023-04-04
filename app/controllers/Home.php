<?php 
    // require_once __DIR__ . "./app/core/controllers.php";
    require_once "./app/core/controllers.php";
    class Home extends controllers{
        // default method call in class home 
        function Sayhi($arr_para)
        { 
            // if(!empty($arr_para) > 0)
            // {
            //     foreach($arr_para as $a)
            //     {
            //         echo $a . " + ";

            //     }
            // }

            $model_student = $this->model("Student"); // call in controller of core

            print_r($model_student->GetSV());
            
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
            // $model_student = $this->model("Student"); // call in controller of core

            // print_r($model_student->Get_values_test());
            // $this->view("home");
            // $this->view("home", $arr_para);
            $model = $this->model("Student");

            $arr = $model->Get_values_test();
            $para = $arr_para;
            if(count($arr_para) < 1)
            {
                $para = array(0=> 'home');
            }
            $this->view("views", $arr, $para);

            // echo "<br/> show in Home" . "<br/>";
        }
    }
?>