<php
    $dbHost = 'Localhost'
    $dbUsername = 'root'
    $dbPassword = '326401'
    $dbName = 'cadastro_clientes'

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName)

    if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo "Conexão efetuada com sucesso"
    }
</php>


