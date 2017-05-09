<?php
require_once('service/sms_service.php');

class SmsController
{
    /**
     * Método da controller para mostrar na tela o relatório de sms
     */
    public function get_relatorio_sms()
    {
        $smsService = new SmsService();
        try {
            $resultado = $smsService->get_relatorio_sms($_POST['dataInicio'], $_POST['dataFim']);
            $msg = $resultado['mensagem'];
            $status = $resultado['sucesso'] ? 'success' : 'danger';
            $dados = $resultado['dados']['relatorio'];
            require_once('views/sms/mostra_relatorio.php');
        } catch (Exception $exception) {
            $this->error();
        }
    }

    /**
     * Página inicial
     */
    public function relatorio_sms()
    {
        require_once('views/sms/relatorio_sms.php');
    }

    /**
     * Página de erro
     */
    public function error()
    {
        require_once('views/sms/error.php');

    }
}

