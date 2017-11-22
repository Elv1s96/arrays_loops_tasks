<h2 style="text-align:center">27 задача </h2>
<?php
$stroki = rand(2, 10);
$stolbiki = rand(2, 10);
$colors = ['red','yellow','blue','gray','maroon','brown','green'];

echo '<table>';
for ($i = 0; $i < $stroki; $i++) {
    echo '<tr>';
    for ($j = 0; $j < $stolbiki; $j++) {
        $color = $colors[array_rand($colors)];
        $number = rand();
        echo "<td style='background-color:{$color}'>$number</td>";
    }
    echo '</tr>';
}
echo '</table>';
?>