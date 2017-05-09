<?php

class SmsService
{
    /**
     * @var string
     */
    private $token = '9ac4597839b85a96026bedcf93c983d5';

    /**
     * Método para trazer o relátorio com histórico de sms relacionado ao token do usuário
     *
     * @param $dataInicio
     * @param $dataFim
     * @return mixed
     * @throws SmsServiceException
     */
    public function get_relatorio_sms($dataInicio, $dataFim)
    {
        if(empty($dataInicio) || empty($dataFim)) {
            throw new SmsServiceException('Sem datas para pesquisa.');
        }

        $dataInicio = implode("-",array_reverse(explode("/",$dataInicio)));
        $dataFim = implode("-",array_reverse(explode("/",$dataFim)));
        $url = "https://api.totalvoice.com.br/sms/relatorio";
        $url = $url . '?data_inicio=' . $dataInicio . '&data_fim=' . $dataFim;

        $options = array(
            'http' => array(
                'header' => "Content-type: application/json\r\n" .
                    "Access-Token: {$this->token}\r\n",
                'method' => 'GET'
            )
        );
        $context = stream_context_create($options);
        return json_decode(file_get_contents($url, false, $context), TRUE);
    }

}