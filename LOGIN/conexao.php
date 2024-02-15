<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registe";


$conn = new mysqli($servername, $username, $password, $dbname);



if ($conn->query($sql) === TRUE) {
    echo "Resposta registrada com sucesso!";
} else {
    echo "Erro ao registrar a resposta: " . $conn->error;
}


?>