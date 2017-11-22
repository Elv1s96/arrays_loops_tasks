<h2 style="text-align:center">8 задача </h2>
<?php
$arr =array(1,2,3,4,5,6,7,8,9);
$str='';
foreach($arr as $value)
{
    $str=''.$value;
}

for($i=0;$i<=8;$i++)
{

    $str[$i]=$arr[$i];
}
print_r($str);
?>