<?php



require_once 'connectionconfig.php';


$type =  $_REQUEST['type'];
$usr =  $_REQUEST['user'];
$debit_query = "SELECT * FROM jabeda where type='joma' AND description='".$usr."';";
$credit_query = "SELECT * FROM jabeda where type='khoroch' AND description='".$usr."';";
$query = "";
if($type === "debit"){
    $query = $debit_query;
}else if($type === "credit"){
    $query = $credit_query;
}


        
$result = mysql_query($query);



while ($row = mysql_fetch_array($result)) {
    
    echo "<tr><td class='rid'>".$row{'id'}."</td><td>".$row{'voucherno'}."/".$row{'date'}."</td><td class='desc'>".$row{'description'}."</td><td class='cv'>".$row{'money'}."</td></tr>";
}


?>