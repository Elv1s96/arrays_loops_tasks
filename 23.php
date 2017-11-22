<h2 style="text-align:center">23 задача </h2>
<?php
$number = 4646;
$number=(str_split($number));
$result=0;
for ($i=0;$i<count($number);$i++){

    $result+=$number[$i];

}
echo $result;

?>