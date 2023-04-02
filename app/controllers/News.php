<?php 
    class News{
        function Sayhi($arr_para)
        {
            if(!empty($arr_para) > 0)
            {
                foreach($arr_para as $a)
                {
                    echo $a . " + ";

                }
            }
            //print_r($arr_para);
            echo "<br/> say hi in news" . "<br/>";
        }
        function Show($arr_para)
        {
            if(!empty($arr_para) > 0)
            {
                foreach($arr_para as $a)
                {
                    echo $a . " + ";

                }
            }
            echo "<br/> show in new" . "<br/>";
        }
        function check($arr_para)
        {
            if(!empty($arr_para) > 0)
            {
                foreach($arr_para as $a)
                {
                    echo $a . " + ";

                }
            }
            echo "<br/> check in new" . "<br/>";
        }
    }
?>