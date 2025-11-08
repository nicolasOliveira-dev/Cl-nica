<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../Paciente.php';

$idPagamento = $_POST['id'];

$paciente = new Paciente(null, null, null, null, null);

try {
    $paciente->excluir($idPagamento);
    echo 'Pagamento excluído com sucesso.';

} catch (Exception $e) {
    echo 'Erro ao excluir pagamento: ' . $e->getMessage();
}
?>