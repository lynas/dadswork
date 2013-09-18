<?php



require_once 'connectionconfig.php';


$type =  $_REQUEST['type'];
$debit_query = "SELECT * FROM jabeda where type='joma'";
$credit_query = "SELECT * FROM jabeda where type='khoroch'";
$query = "";
if($type === "debit"){
    $query = $debit_query;
}else if($type === "credit"){
    $query = $credit_query;
}


        
$result = mysql_query($query);



while ($row = mysql_fetch_array($result)) {
    //echo '<tr><td>'.$row{'id'}.'</td></tr>';
    echo "<tr><td>".$row{'id'}."</td><td>".$row{'voucherno'}."</td><td>".$row{'description'}."</td><td class='cv'>".$row{'money'}."</td></tr>";
}


//echo "<tr><td></td><td></td><td></td><td class='cv'></td></tr>";

/*
$result2 = mysql_query("SELECT SUM(money) AS tataljoma FROM jabeda where type='joma';");

while ($row2 = mysql_fetch_array($result2)) {
    
    echo '<tr><td>'.$row{'id'}.'</td><td>'.$row{'voucherno'}.'</td><td>'.$row{'description'}.'</td><td>'.$row{'money'}.'</td></tr>';
}
*/
?>