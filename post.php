<?php

require_once("./conexao.php");
$nome = $_POST["nome_profissional"];
$email = $_POST["email_profissional"];
$sql = ("insert into tbprofissional (nome_profissional, login) values (upper(:nome), :email)");

$stmt = Db::_conexao()->prepare($sql);
$stmt->bindValue(":nome", $nome);
$stmt->bindValue(":email", $email);
$stmt->execute();

$retorno = $stmt;
if ($retorno) {
    echo "true";
} else {
    echo "false";
}
return $retorno;
echo json_encode($retorno);
