<?php

require_once 'connectionconfig.php';
mysql_query("DELETE FROM `jabeda` WHERE id = " . $_REQUEST['deleterownum']);
echo 'Delete success !! id=' . $_REQUEST['deleterownum'];
//echo "delete FROM `jabeda` WHERE id = " . $_REQUEST['deleterownum'];
?>
