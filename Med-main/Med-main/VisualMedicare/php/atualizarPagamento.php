<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'Pagamento.php';

$id = $_POST['idPagamento'];
$idConsulta = $_POST['idConsulta'];
$valor = $_POST['valor'];
$dataPagamento = $_POST['dataPagamento'];
$metodo = $_POST['metodo'];
$status = $_POST['status'];



$pagamento = new Pagamento($idConsulta, $valor, $dataPagamento, $metodo, $status);
try {
    $pagamento->atualizar($id);
    echo "Pagamento atualizado com sucesso.";

} catch (Exception $e) {
    echo "Erro ao atualizar pagamento: " . $e->getMessage();
}
?>