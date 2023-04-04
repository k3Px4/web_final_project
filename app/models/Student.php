<?php 
    class Student{
        public function GetSV()
        {
            return "Sinh Vien A";
        }
        public function Get_values_test()
        {
            $arr = array(
                'Name' =>'Nguyen Van A',
                'Age' => 19,
                'Gender' => 'male'
            );
            
            return $arr;
        }
    }
?>