<?php 


    if (isset($_POST['submit']) && $_POST['submit'] == "izmeni" && isset($_POST['id_predmeta'])) {
        $prijava = new Prijava(null, $_POST['predmet'],$_POST['katedra'],$_POST['sala'],$_POST['datum']);
        Prijava::update($_POST['id_predmeta'], $prijava, $conn);
        
        
        
    }
?>
