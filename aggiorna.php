<?php
    include 'connessione.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aggiorna</title>
</head>
<body>
    <?php
        
    $id_recensione = $_POST['id_recensione'];
    $nuovo_voto = $_POST['nuovo_voto'];

    // Validazione del voto
    if ($nuovo_voto < 1 || $nuovo_voto > 10) {
        $esito = "Voto non valido. Deve essere compreso tra 1 e 10.";
    } else {
        // SQL per aggiornare la recensione
        $sql = "UPDATE recensioni SET voto = '$nuovo_voto' WHERE id = '$id_recensione'";

        if ($conn->query($sql) == TRUE) {
            $esito = "Recensione aggiornata correttamente";
        } else {
            $esito = "Errore durante l'aggiornamento: " . $conn->error;
        }
    }

    $conn->close();

?>
    
</body>
</html>