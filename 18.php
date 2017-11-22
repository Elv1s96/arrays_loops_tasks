<h2 style="text-align:center">18 задача </h2>
<?php
$day=array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday',);
foreach($day as $value)
{
    if($value!=='Saturday' & $value!=='Sunday')
    {
        echo $value. '<br/>';
    }
    else
    {
        echo "<b>".$value."</b>". '<br/>';
    }
}
?>