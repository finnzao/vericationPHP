<?php
try {
    $pdo = new PDO(
        "mysql:dbname=CRUD;host=localhost",
        "root",
        ""
    );
} catch (PDOException $e) {
    echo "Erro com banco de dados: " . $e->getMessage();
} catch (Exception $e) {
    echo "Erro";
}


//-----------INSERT-------------------------------//

//First way
//bindparam() =aceita apenas variavel \ bindvalues() aceita alem de variavel

// $para = $pdo->prepare("INSERT INTO pessoa(nome,telefone,email) values (:n,:t,:e)"); //modificar
// $para->bindvalue(":n", "Nome");
// $para->bindvalue(":t", "00000001");
// $para->bindvalue(":e", "teste@gmail.com");
// $para->execute();

//Second way
//$pdo->query("INSERT INTO pessoa(nome,telefone,email) values('Nome2','0000002','teste2@hotmail.com')"); //executar diretamente


//----------DELETE --------------//

// $cmd = $pdo->prepare("DELETE FROM pessoa where id=:id");
// $id = 4;
// $cmd->bindValue(":id", $id);
// $cmd->execute();

//or 

//$res = $pdo->query("DELETE FROM pessoa where id='5'");


//------------UPDATE-------//

// $cmd = $pdo->prepare("UPDATE pessoa SET email=:e where id=:id ");
// $cmd->bindValue(":e", "Novoemail@outlook.com");
// $cmd->bindValue(":id", "6");
// $cmd->execute();

//or

$res = $pdo->query("UPDATE pessoa SET email='novoemail@hotmail.com' where id=7");
