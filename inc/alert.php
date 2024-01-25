<?php 
    if(isset($_GET['msg']) && $_GET['msg']!="") {
        echo '<div class="alert alert-'.$_GET['type'].' alert-dismissible fade show" role="alert">
        '.$_GET['msg'].'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
?>