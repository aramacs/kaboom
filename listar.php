<h1>Listar Usuarios</h1>

<?php

$sql = "SELECT * FROM `usuarios`";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {
    echo "<table class='table table-hover table-striped table-bordered'>";
    echo "<tr>";
    echo "<th>#</th>";
    echo "<th>Nome</th>";
    echo "<th>E-mail</th>";
    echo "<th>Endereço</th>";
    echo "</tr>";
    while ($row = $res->fetch_object()) {
        echo "<tr>";
        echo "<td>" . $row->id . "</td>";
        echo "<td>" . $row->nome . "</td>";
        echo "<td>" . $row->email . "</td>";
        echo "<td>" . $row->endereco . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p class='alert alert-danger'>Não encontrou resultados!</p>";
}

?>
