<?php

require_once('service/sms_service.php');
require_once('service/exception/SmsServiceException.php');
class SmsServiceTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var SmsService
     */
    private $smsService;

    /**
     * @before
     */
    public function setUp()
    {
        $this->smsService = new SmsService();
    }

    public function testeGetRelatorioSmsSemData()
    {
        $this->expectException(SmsServiceException::class);
        $this->expectExceptionMessage('Sem datas para pesquisa.');
        $this->smsService->get_relatorio_sms(null, null);
    }

    public function testeGetRelatorioSmsSemDados()
    {
        $resultado = $this->smsService->get_relatorio_sms('11/03/2017', '12/03/2017');
        $this->assertEquals('200', $resultado['status']);
        $this->assertEquals('dados retornados com sucesso', $resultado['mensagem']);
        $this->assertEmpty($resultado['dados']['relatorio']);
    }

    public function testeGetRelatorioSmsComDados()
    {
        $resultado = $this->smsService->get_relatorio_sms('11/03/2017', '12/05/2017');
        $this->assertEquals('dados retornados com sucesso', $resultado['mensagem']);
        $this->assertCount(2, $resultado['dados']['relatorio']);
        $this->assertEquals('entregue', $resultado['dados']['relatorio'][0]['status_envio']);
        $this->assertEquals('entregue', $resultado['dados']['relatorio'][1]['status_envio']);
    }

}
