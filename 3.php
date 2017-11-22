<h2 style="text-align:center">3 задача </h2>
<?php
$summ=0;
$c = array(26,17,136,12,79,15);
foreach($c as $value )
{
    $summ=$summ+$value*$value;
}
echo $summ;
?>