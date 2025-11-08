<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../Receita.php';

$idReceita = $_POST['id'];

$receita = new Receita(null, null, null, null, null, null, null);

try {
    $receita->excluir($idReceita);
    echo 'Receita excluída com sucesso.';

} catch (Exception $e) {
    echo 'Erro ao excluir receita: ' . $e->getMessage();
}
?>