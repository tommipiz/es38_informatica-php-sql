<?php
    include 'connessione.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
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
    
</body>
</html>
   