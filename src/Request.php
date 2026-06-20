<?php

namespace Sobhansgh\Rubikabotphp;

use Sobhansgh\Rubikabotphp\Exceptions\RubikaException;

class Request
{
    /**
     * آدرس پایه API
     */
    private string $baseUrl = 'https://botapi.rubika.ir/v3';

    /**
     * توکن ربات
     */
    private string $token;

    /**
     * مدت زمان Timeout
     */
    private int $timeout = 30;

    public function __construct(string $token)
    {
        $this->token = $token;
    }

    /**
     * تغییر Timeout
     */
    public function setTimeout(int $seconds): self
    {
        $this->timeout = $seconds;

        return $this;
    }

    /**
     * ارسال درخواست
     */
    public function send(string $method, array $params = []): array
    {
        $url = $this->baseUrl . '/' . $this->token . '/' . $method;

        $curl = curl_init();

        curl_setopt_array($curl, [

            CURLOPT_URL => $url,

            CURLOPT_RETURNTRANSFER => true,

            CURLOPT_POST => true,

            CURLOPT_TIMEOUT => $this->timeout,

            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json'
            ],

            CURLOPT_POSTFIELDS => json_encode($params)

        ]);

        $response = curl_exec($curl);

        if ($response === false) {

            throw new RubikaException(curl_error($curl));

        }

        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        curl_close($curl);

        if ($status != 200) {

            throw new RubikaException("HTTP Error : {$status}");

        }

        $result = json_decode($response, true);

        if ($result === null) {

            throw new RubikaException("Invalid JSON Response");

        }

        return $result;
    }

}