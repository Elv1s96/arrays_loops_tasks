<h2 style="text-align:center">5 задача </h2>
<?php
$arr= array('Коля'=>'200','Вася'=>'300', 'Петя'=>'400' );
foreach($arr as $key=>$value)
{
    echo $key . ' - зарплата '  . $value . ' долларов;' . '<br/>';
}
?>