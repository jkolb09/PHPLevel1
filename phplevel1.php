<?php
$array[0] = "One";
$array[1] = "Two";
$array[2] = "Three";
$array[3] = "Four";

foreach ($array as $loopdata) {
    echo "Day ".$loopdata. "<br>";
}
function dayofWeek($dweek, $day) {
    echo "$dweek, $day  <br>";
}

dayofWeek("$array[0]","Monday");
dayofWeek("$array[1]","Tuesday");
dayofWeek("$array[2]","Wensneday");
dayofWeek("$array[3]","Thursday");




?>
