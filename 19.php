<h2 style="text-align:center">19 задача </h2>
<?php
$days=array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday',);
$day=date("l");;
foreach($days as $value)
{
    if($value!==$day)
    {
        echo $value. '<br/>';
    }
    else
    {
        echo "<em>".$value."</em>". '<br/>';
    }
}


?>