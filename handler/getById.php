<?php

if (isset($_POST['submit']) && $_POST['submit'] == "Vrati" && isset($_POST['id_predmeta'])) {
    $status = Prijava::getById($_POST['id_predmeta'], $conn);
    
    if ($status) {
        echo $status;
    } else {
        echo "neuspesno";
               
    }
    
    
}
?>