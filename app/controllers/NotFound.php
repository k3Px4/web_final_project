<?php 
    require_once "./app/core/controllers.php";
   
    class NotFound extends controllers{
        function Show($arr)
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
            // // $this->view("home", $arr_para);
            // $model = $this->model("Student");

            // $arr = $model->Get_values_test();
            
            $this->view("views",array(), $arr);

            // echo "<br/> show in Home" . "<br/>";
        }
    }
?>