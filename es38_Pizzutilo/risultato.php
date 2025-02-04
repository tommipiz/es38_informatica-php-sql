<?php

include ('connessione.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultato</title>
</head>
<body>
    <?php
        $id_recensione = $_POST['id_recensione'];
        $operazione = $_POST['operazione'];
        $voto = $_POST['voto'];

        if($operazione == "aggiorna"){
           $sql = "UPDATE recensioni SET voto = '$nuovo_voto' WHERE id = '$id_recensione'"; 
        }else if($operazione == "elimina"){
            $sql = "DELETE FROM recensioni WHERE id_recensione = '$id_recensione'";
        }
        
        if ($operazione === "aggiorna" && $conn->query($sql) == TRUE){
            echo "recensione aggiornata correttamente";
        } else {
            echo "errore durante l'aggiornamento";
        }

        

        if ($operazione === "elimina" && $conn->query($sql) === TRUE) {
            echo "recensione eliminata correttamente";
        } else {
            echo "Errore durante l'eliminazione";
        }
    
    
    



?>
    
</body>
</html>