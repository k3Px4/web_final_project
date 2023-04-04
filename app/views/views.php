<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel= "stylesheet" href="./public/css/css.css" type="text/css">
    <!-- <style>
        div.notfound{
    color: red;
    }
    div.a{
        background-color: pink;
        margin: 10px;
        text-align: center;
        padding: 10px;
    }
    </style> -->
</head>
<body>
    <h1>This is view for home</h1>
    <table>
    <?php
    
        foreach(array_keys($array_info) as $a)
        {
    ?>
            <tr>
                <td><?=$a?>:</td>
                <td><?=$array_info[$a]?></td>
            </tr>

    <?php 
        }

        
    ?>

    </table>
    <div class="a header">header</div>
    <!-- <div class="a content">content</div> -->
    <div class="a content">
        <?php require_once $detail ?>
    </div>
    <div class="a footer">footer</div>
</body>
</html>