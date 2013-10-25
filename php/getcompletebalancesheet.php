<?php

require_once 'connectionconfig.php';
$result = mysql_query("SELECT description, SUM( CASE WHEN TYPE =  'joma' THEN money ELSE money * -1 END ) totals 
    FROM jabeda 
    GROUP BY description");



while ($row = mysql_fetch_array($result)) {
    if ($row{'totals'} < 0) {
        $row{'totals'} = $row{'totals'} * (-1);
        if (strpos($row{'totals'}, '.') > 0) {
            $customMoney = custom_format($row{'totals'}, 3);
        } else {
            $customMoney = custom_format($row{'totals'});
        }

        echo "<tr><td class='desc'>" . $row{'description'} . "</td><td></td><td class='balanceSheetTotalKhorochInividualCell'>" . $customMoney . "</td></tr>";
    } else {
        if (strpos($row{'totals'}, '.') > 0) {
            $customMoney = custom_format($row{'totals'}, 3);
        } else {
            $customMoney = custom_format($row{'totals'});
        }
        echo "<tr><td class='desc'>" . $row{'description'} . "</td><td class='balanceSheetTotalJomaInividualCell'>" . $customMoney . "</td><td></td></tr>";
    }
}
?>
