<h2 style="text-align:center">25 задача </h2>
<?php
$arr = [];
for ($i = 0; $i < 10; $i++)
{
    $arr[] = rand(1, 100);
}

echo print_r($arr).'<br>';
$maximum = array_search(max($arr), $arr);
$minimum = array_search(min($arr), $arr);
echo "<p>maximum: {$arr[$maximum]}</p>";
echo "<p>minimum: {$arr[$minimum]}</p>";
$arr[$maximum] = $arr[$maximum] + $arr[$minimum] - ($arr[$minimum] = $arr[$maximum]);
echo print_r($arr).'<br>';
?>