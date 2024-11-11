<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Url Shortener</title>
        <style>
            html, body {
                background-color: #000;
                color: #ccc;
            }
            a {
                color: #9999ff;
            }
            table {
                border: 1px solid white;
                width: 90%;
                margin: 10px auto;
            }
        </style>
    </head>
    <body>
        <h1>url Shortener   </h1>
        <hr>
        <?php
        include 'menu.php';
        echo '<hr>';
        $pages = isset($_GET['p']) ? $_GET['p'] : null;
        switch ($pages):
            case 'create':
                include 'create.php';
                break;
            case 'list':
                include 'list.php';
                break;
            default:
                break;
        endswitch;
        // put your code here
        ?>
    </body>
</html>
