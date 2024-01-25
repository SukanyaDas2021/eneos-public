<?php 

include "DbConfig.php";

// create table
$sql = "";

$ret = $db->exec($sql);

if(!$ret){
    echo $db->lastErrorMsg();
} else {
    echo "Table created successfully\n";
}

   $db->close();

?>