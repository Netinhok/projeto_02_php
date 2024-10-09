<head>
    <link rel="stylesheet" href="estilo.css">
</head>
<?php
    include "verificar_logado.php";
?>
<h1>
    Gerenciamento de Inventários
</h1>

<?php
    include "conexao.php";
    //1º Passo - Comando SQL
    $sql = "SELECT * FROM tb_inventarios";

    //2º Passo - Preparar a conexão
    $consultar = $pdo->prepare($sql);

    //3º Passo - Tentar executar e mostrar resultados
    try{
        $consultar->execute();
        $resultados = $consultar->fetchAll(PDO::FETCH_ASSOC);
        echo "<div id='materiais'>";
        foreach($resultados as $item){
            $codigo = $item['codigo'];
            $descricao = $item['descricao'];
            $setor = $item['setor'];
            $categoria = $item['categoria'];

            echo "
                <div class='cartoes'
                    <h3>Nº $codigo</h3>
                    <p>$descricao</p>
                    <p>Setor: $setor</p>
                    <p>Categoria: $categoria</p>
                    <a href='formulario_editar.php?cod=$codigo'>
                    <button>✏Editar</button>
                    </a>

                    <a href='confirmar_deletar.php?cod=$codigo'>
                        <button>🗑Deletar</button>
                    </a>
                </div>
            ";
        }
        echo "<div>";

    }catch(PDOException $erro){
        echo "Falha ao consultar resultados!".$erro->getMessage();
    }
?>