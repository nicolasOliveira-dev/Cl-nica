<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'Receita.php';

$id = $_POST['idReceita'];
$idPaciente = $_POST['idPaciente'];
$idConsulta = $_POST['idConsulta'];
$medicamento = $_POST['medicamento'];
$quantidade = $_POST['quantidade'];
$posologia = $_POST['posologia'];
$dataEmissao = $_POST['dataEmissao'];
$dataValidade = $_POST['dataValidade'];

$receita = new Receita($idPaciente, $idConsulta, $medicamento, $quantidade, $posologia, $dataEmissao, $dataValidade);

try {
    $receita->atualizar($id);
    echo "Receita atualizada com sucesso.";

} catch (Exception $e) {
    echo "Erro ao atualizar receita: " . $e->getMessage();
}
?>