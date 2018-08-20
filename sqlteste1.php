<?php

$dsn = 'mysql:host=localhost;dbname=mydb;charset=utf8mb4';
$db_user = 'root';
$db_pass = '';


if($_POST){
    try{

        $db = new PDO($dsn, $db_user, $db_pass); 
        
    }
    catch( PDOException $Exception ) {
        echo $Exception->getMessage();
    }   

    //Insira no array abaixo 
    $marcas = ['Tablets e Acessórios',
    'Relógios de Pulso',
    'Calçados, Roupas e Bolsas',
    'Acessórios de Carros',
];

    foreach ($marcas as $key => $value) {
        $inserir = $db->prepare("INSERT INTO subcategoria_av1(nome_subcategoria_av1) VALUES ('$value')");
        $query = $db->prepare(
            "SELECT a.nome_subcategoria_av1
             FROM subcategoria_av1 AS a
             WHERE nome_subcategoria_av1=:a
            ");
        $query -> execute([
            ":a" => $value
        ]);
        if ($query->rowCount() >= 1){
            echo "Já em Bco Dados";
        }else{
            $inserir -> execute();
        }
        
    }

        $query -> execute([
            ":a" => $value
        ]);

        $result = $query -> fetchAll(PDO::FETCH_ASSOC);
    
        $db = null; 

}
?>

<form method = "post" action="sqlteste1.php">
    <input type="text" name="subcategoria_av1">
    <button type="submit">Cadastrar Filme</button>
</form>