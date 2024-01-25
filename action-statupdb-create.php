<?php 

include "DbConfig.php";

print_r($_POST);

if(isset($_POST['save'])) {
    // echo "Hello";

    extract($_POST);

    $sql = "INSERT INTO startupdb (`name`, `industry`, `address`, `competitors`, `full_description`, `latest_round_data`, `short_description`, `tag`, `total_funding`, `founded_year`, `url`, `created_at`, `in_charge`, `source`, `final_progress`, `current_status`, `comments`, `updated_at`) 
    VALUES ('$name', '$industry', '$address', '$competitors', '$full_description', '$latest_round_data', '$short_description', '$tag', '$total_funding', '$founded_year', '$url', '$created_at', '$in_charge', '$source', '$final_progress', '$current_status', '$comments', '$updated_at')";

    $result = $db->exec($sql);

    if($result) {
        header("Location: statupdb.php?msg=success");
        // echo "success";
    } else {
        header("Location: statupdb.php?msg=error");
        // echo "error";
    }
    $db->close();
}

?>