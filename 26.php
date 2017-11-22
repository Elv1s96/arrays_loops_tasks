<h2 style="text-align:center">26 задача </h2>
<?php
$arr = [];
for ($i = 0; $i < 10; $i++)
{
    $arr[] = rand(1, 100);
}
echo print_r($arr).'<br>';
$chetn = $arr[0];

for ($i = 2; $i < count($arr); $i += 2) {
    if ($arr[$i] > 0) {
        $chetn *= $arr[$i];
    }
}
echo "<p>Умноженые четные индексы: {$chetn}</p>";


echo '<p>Элементы с нечетными индексами</p>';

foreach ($arr as $key => $value) {
    if ($value > 0 AND $key % 2) {
        echo $value.'<br>';
    }
}
?>