<?php

require_once 'connectionconfig.php';
$result = mysql_query("SELECT description, SUM( CASE WHEN TYPE =  'joma' THEN money ELSE money * -1 END ) totals 
    FROM jabeda 
    GROUP BY description");



while ($row = mysql_fetch_array($result)) {

    echo "<tr><td class='desc'>".$row{'description'}."</td><td>".$row{'totals'}."</td></tr>";
}
?>
