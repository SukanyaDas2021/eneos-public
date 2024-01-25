<?php 

include "DbConfig.php";

if(isset($_GET['id'])) {
    
    $id = $_GET['id'];
    $sql = "DELETE FROM startupdb WHERE id = $id";

    $result = $db->exec($sql);

    if($result) {
        header("Location: statupdb.php?type=success&msg=Record Deleted Succesfully");
    } else {
        header("Location: statupdb.php?type=danger&msg=Record Not Deleted");
    }

}

?>