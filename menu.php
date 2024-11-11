<?php

$menu = ['home', 'create', 'list'];
$html = '<nav>';
foreach ($menu as $value):
    $html .= '<a href="index.php?p=' . $value . '"> ';
    $html .= '<button>';
    $html .= $value;
    $html .= '</button>';
    $html .= ' </a>';
endforeach;
$html .= '<nav>';
echo $html;
?>