<?php

require_once 'connectionconfig.php';

/*
$username = "root";
$password = "";
$hostname = "localhost";

$dbhandle = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
$selected = mysql_select_db("ledgerbook", $dbhandle) or die("Could not select examples");
*/


mysql_query("INSERT INTO jabeda VALUES (NULL, '".$_REQUEST['vn']."', '".$_REQUEST['bib']."', '".$_REQUEST['biboron']."', '".$_REQUEST['jork']."', '".$_REQUEST['taka']."', '".$_REQUEST['tarik']."');");


/*
  while ($row = mysql_fetch_array($result)) {
  echo "ID:" . $row{'id'} . " Name:" . $row{'model'} . "Year: " . //display the results
  $row{'year'} . "<br>";
  }
 */

echo 'Added Successfully !!!';

mysql_close($dbhandle);
?>