<?php
    include 'connessione.php';

    $id_recensione = $_POST['id_recensione'];

    // SQL per eliminare la recensione
    $sql = "DELETE FROM recensioni WHERE id = '$id_recensione'";

    if ($conn->query($sql) === TRUE) {
        $esito = "Recensione eliminata correttamente";
    } else {
        $esito = "Errore durante l'eliminazione: " . $conn->error;
    }

    echo "$esito";

    $conn->close();


?>