<h2 style="text-align:center">17 задача </h2>
<?php
$month=array('January','February','March','April','May','June','July','August','September ','October','November','December',);
$today = getdate();
$currentmonth= date("F");

foreach($month as $value)
{
    if($value==$currentmonth)
    {

        echo "<b>".$value."</b>". '<br/>';
    }
    else
    {
        echo $value. '<br/>';
    }
}

?>