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
    if (strpos($row{'money'}, '.') > 0) {
        $customMoney = custom_format($row{'money'}, 3);
    } else {
        $customMoney = custom_format($row{'money'});
    }
    echo "<tr><td class='rid'>".$row{'id'}."</td><td><span class='voucherno'>".$row{'voucherno'}."</span>/".$row{'date'}."</td><td class='desc'>".$row{'biboron'}."</td><td class='cv'>".$customMoney."</td></tr>";
}


?>