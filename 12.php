
<h2 style="text-align:center">12 задача </h2>
<?php
$n = 1000;
$num=0;
$a=0;

while($n>50)
{
    $a= $n / 2;
    $n=$a;
    echo $n. '<br/>';
    $num++;

}

echo $num. '<br/>';
for($i=1000;$i>50;$i=$i/2)
{
    echo $i. '<br/>';
}
?>