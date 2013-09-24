<?php




require_once 'connectionconfig.php';
$result = mysql_query("SELECT DISTINCT description FROM jabeda WHERE 1 ORDER BY description");


echo "<option></option>";
while ($row = mysql_fetch_array($result)) {

    echo "<option>" . $row{'description'};
}





?>
