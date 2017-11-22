<h2 style="text-align:center">16 задача </h2>
<?php
$arr =array(1,2,3,4,5,6,7,8,9);
$str='';
foreach($arr as $value)
{
    if($value % 3==0)
    {
        echo $value . '<br/>';
    }
    else{
        echo $value . ',';
    }
}
?>