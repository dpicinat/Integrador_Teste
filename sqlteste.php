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
    $marcas = [ ['1','1','Tablets'], 
    ['2','2','Celulares'], 
    ['3','3','Blueray'], 
    ['4','4','Aparelho de Som'], 
    ['5','5','Televisores'], 
    ['6','6','Relógios'], 
    ['7','7','Pulseiras'], 
    ['8','8','Bermudas'], 
    ['9','9','Bolsas'], 
    ['10','10','Calças'], 
    ['11','11','Camisas'], 
    ['12','12','Camisetas e Blusas'], 
    ['13','13','Casacos'], 
    ['14','14','Conjuntos Infantis'], 
    ['15','15','Lotes de Roupa'], 
    ['16','16','Macacão'], 
    ['17','17','Malas e Carteiras'], 
    ['18','18','Mochilas'], 
    ['19','19','Moda Fitness'], 
    ['20','20','Moda Íntima e Lingerie'], 
    ['21','21','Moda Praia'], 
    ['22','22','Óculos'], 
    ['23','23','Roupas para Bebês'], 
    ['24','24','Saias'], 
    ['25','25','Sapatos'], 
    ['26','26','Shorts'], 
    ['27','27','Tênis'], 
    ['28','28','Ternos'], 
    ['29','29','Vestidos'], 
    ['30','30','Alarmes e Segurança'], 
    ['31','31','Aspiradores'], 
    ['32','32','Cadeiras para Bebês'], 
    ['33','33','Câmbio'], 
    ['34','34','Câmera Veicular'], 
    ['35','35','Capas de Volante'], 
    ['36','36','Chaveiros'], 
    ['37','37','Extintores'], 
    ['38','38','Pedaleiras'], 
    ['39','39','Porta-malas'], 
    ['40','40','Outros'], 
    ['41','41','Adesivos'], 
    ['42','42','Anti Furto'], 
    ['43','43','Bate Rodas'], 
    ['44','44','Calhas'], 
    ['45','45','Calotas'], 
    ['46','46','Calotas Miolo'], 
    ['47','47','Capas de Estepe'], 
    ['48','48','Capas de Porca'], 
    ['49','49','Capas para Pastilhas de Freios'], 
    ['50','50','Capas Protetoras'], 
    ['51','51','Capotas'], 
    ['52','52','Cavaletes'], 
    ['53','53','Engate'], 
    ['54','54','Estribos'], 
    ['55','55','Frisos'], 
    ['56','56','Insulfilms'], 
    ['57','57','Munhecas para Reboque'], 
    ['58','58','Racks e Bagageiros'], 
    ['59','59','Sensores de Estacionamento'], 
    ['60','60','Triângulos de Segurança'], 
    ['61','61','Outros'], 
    
];

    foreach ($marcas as $key => $value) {
        $inserir = $db->prepare("INSERT INTO produtos (idCategoria, idMarca, Nome_Produtos) VALUES ('$value[0]', '$value[1]', '$value[2])");
        $query = $db->prepare(
            "SELECT a.idCategoria
             FROM produtos AS a
             WHERE idCategoria=:a
            ");
        $query -> execute([
            ":a" => $value[0]
        ]);
        if ($query->rowCount() >= 1){
            echo "Já em Bco Dados";
        }else{
           $inserir -> execute();
            
        }
        
    }

        // $query -> execute([
        //     ":a" => $value
        // ]);

        $result = $query -> fetchAll(PDO::FETCH_ASSOC);
    
        $db = null; 

}
?>

<form method = "post" action="sqlteste.php">
    <input type="text" name="produtos">
    <button type="submit">Cadastrar Filme</button>
</form>