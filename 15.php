<h2 style="text-align:center">15 задача </h2>
<?php
function counter($test)
{
    $i=0;
    foreach ($test as $value)
    {
        $i++;
    }
    echo $i . '<br/>';
}
$arr=array(1,2,3,4,5,6);

counter($arr);
$arr1=array(111,22321,43543,6546,765,534534,5435,5345,34534,3214234);
counter($arr1);

?>