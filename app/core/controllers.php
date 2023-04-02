<?php 
    function model($model)
    {
        require_once "./app/models/". $model. ".php";

        return new $model; // call type model in folder model

    }
?>