<h2 style="text-align:center">6 задача </h2>
<?php
$arr= array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = [];
$ru = [];

foreach($arr as $key=>$value)
{
    array_push($en,$key);
    array_push($ru,$value);
}
foreach($en as $value)
{
    echo $value .'<br/>';
}
foreach($ru as $value)
{
    echo $value .'<br/>';
}
print_r($en );
print_r($ru);
?>