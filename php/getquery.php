<?php
require_once 'connectionconfig.php';


$myQuery =  $_REQUEST['query'];

$query1 = "SELECT SUM(CASE WHEN type = 'joma' THEN money ELSE money * -1 END) result FROM jabeda WHERE date = (SELECT SUBDATE( current_date, 1 ))";



$query = "";
if($myQuery === "bf"){
    $query = $query1;
}


        
$result = mysql_query($query);



while ($row = mysql_fetch_array($result)) {
    
    echo $row{'result'};
}

?>
