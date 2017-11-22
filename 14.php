<h2 style="text-align:center">14 задача </h2>
<?php
$arr=array(4,2,5,19,13,0,10);
$e=array(2,3,4);
foreach($arr  as $value) {

    if ($value == $e[0] OR $value == $e[1] OR $value == $e[2] ) {
        echo "Есть!";
    } else {
        echo "Нет!";
    }
}
?>