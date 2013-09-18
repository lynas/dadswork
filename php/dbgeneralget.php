<?php



require_once 'connectionconfig.php';


$result = mysql_query("SELECT * FROM jabeda");


echo '<table border=1px solid black>';
while ($row = mysql_fetch_array($result)) {
    echo '<tr><td>'.$row{'id'}.'</td></tr>';
}
echo '<table>';


?>