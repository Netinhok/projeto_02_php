<?php
$codigo = $_GET['cod'];

echo "
    Tem certeza que deseja apagar item Nº $codigo? <br> <br>
    <a href='deletar.php?cod=$codigo'>Sim</a>
    <br><br>
    <a href='gerenciar.php'>Não</a>
    "
?>