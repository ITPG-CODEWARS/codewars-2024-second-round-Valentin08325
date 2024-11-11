<?php

$Sql = new SQLite3('dburl.sqlite3');
$query = 'Select * from Url';
$result = $Sql->query($query);
//print_r($result->numColumns());
$html = null;
$html .= '<table>';

while ($row = $result->fetchArray(SQLITE3_ASSOC)):
    $html .= '<tr>';
    $html .= '<td>' . $row['id'] . '</td>';
    $html .= '<td>'. Button('Edit', $row['id']).'</td>';
    $html .= '<td>'. Button('Del', $row['id']).'</td>';
    $html .= '<td>' . $row['code'] . '</td>';
    $html .= '<td>' . $row['url'] . '</td>';
    $html .= '</tr>';
endwhile;
$html .= '</table>';
echo $html;
//echo '<pre>';
//print_r($row);
//echo '</pre>';

$Sql->close();

function Button($text, $link) {
    $html = null;
    $html .= '<a href="' . $link . '">';
    $html .= '<button>' . $text . '</button>';
    $html .= '</a>';
    return $html;
}

?>