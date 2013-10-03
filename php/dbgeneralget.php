<?php



require_once 'connectionconfig.php';


$type =  $_REQUEST['type'];
$edate =  $_REQUEST['edate'];
$debit_query = "SELECT * FROM jabeda where type='joma' AND date = '".$edate."'";
$credit_query = "SELECT * FROM jabeda where type='khoroch' AND date = '".$edate."'";
$query = "";
if($type === "debit"){
    $query = $debit_query;
}else if($type === "credit"){
    $query = $credit_query;
}



        
$result = mysql_query($query);



while ($row = mysql_fetch_array($result)) {
    
    echo "<tr><td class='rid'>".$row{'id'}."</td><td>".$row{'voucherno'}."</td><td class='desc'>".$row{'description'}."</td><td class='cv'>".$row{'money'}."</td></tr>";
}


?>