<?php

$username = "root";
$password = "";
$hostname = "localhost";

$dbhandle = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
$selected = mysql_select_db("ledgerbook", $dbhandle) or die("Could not select examples");

function custom_format($n, $d = 0) {
    $n = number_format($n, $d, '.', '');
    $n = strrev($n);

    if ($d)
        $d++;
    $d += 3;

    if (strlen($n) > $d)
        $n = substr($n, 0, $d) . ','
                . implode(',', str_split(substr($n, $d), 2));

    return strrev($n);
}

?>
