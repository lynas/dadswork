<?php
$callid = $_REQUEST['callid'];
if ($callid === "formatTaka") {
    echo custom_format_taka($_REQUEST['myTaka'], 3);
}

function custom_format_taka($n, $d = 0) {
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
