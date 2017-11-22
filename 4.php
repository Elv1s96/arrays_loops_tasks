<h2 style="text-align:center">4 задача </h2>
<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach($arr as $value)
{
    echo $value .'<br/>';
}
foreach($arr as $key=>$value)
{
    echo $key . '<br/>';
}
?>