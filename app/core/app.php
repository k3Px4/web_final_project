<?php
    class App{
        protected $controller = "Home";
        protected $action = "SayHi";
        protected $paramas =[];


        function __construct()
        {
           $arr = $this->URL();
            //print_r($arr);
            if(count($arr) > 0)
            {
                 // xử lý controller:
                if(file_exists("./app/controllers/".$arr[0].".php")) //"http://localhost/MVC/Home/a" arr -> [Home, a] => arr[0] = Home
                {
                    //echo "ok";
                    $this->controller = $arr[0];
                    unset($arr[0]);
        
                }
            
                require_once "./app/controllers/". $this->controller.".php";
           
                //xu ly action
                if(isset($arr[1]))
                {
                    if(method_exists($this->controller, $arr[1])) // check method exits in controller
                    {   
                        $this->action = $arr[1];
                    }
                    // else
                    // {
                    //     header("Location: ./mvc/views/notfound.html");
                    //     exit();
                    // }
                    unset($arr[1]);
    
                }
                // xu ly params
                $this->paramas = $arr ? array_values($arr) : [];
            }
            else // neu khonh nhap gi tren url
            {
                require_once "./app/controllers/Home.php";
            }
          

           $control = new $this->controller; // create new object controller

           call_user_func_array(array($control, $this->action), array($this->paramas));// call function in controller:(callback, array aguments)
           //https://www.php.net/manual/en/function.call-user-func-array.php



        //    echo $this->controller . "<br/>";
        //    echo $this->action . "<br/>";
        //    print_r($this->paramas) . "<br/>";

        }

        function URL()
        {
            if(isset($_GET["url"]))
            {
                return explode("/", filter_var(trim($url = $_GET["url"], "/")));
            }
            else{
                return array();
            }
           // echo $_GET["url"];
        }
    }
?>