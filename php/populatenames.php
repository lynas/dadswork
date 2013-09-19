<?php




require_once 'connectionconfig.php';
$result = mysql_query("SELECT DISTINCT description FROM jabeda WHERE 1");



while ($row = mysql_fetch_array($result)) {

    echo "<option>" . $row{'description'};
}





?>
