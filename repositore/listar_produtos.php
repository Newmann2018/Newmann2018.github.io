<?php
include '../data/conexao.php';

$sql = "SELECT id, nome, quantidade, preco FROM produtos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nome: " . $row["nome"]. " - Quantidade: " . $row["quantidade"]. " - Preço: " . $row["preco"]. "<br>";
    }
} else {
    echo "0 resultados";
}
$conn->close();
?>
