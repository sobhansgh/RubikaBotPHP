<?php

namespace Sobhansgh\Rubikabotphp\Http;

use Sobhansgh\Rubikabotphp\Exceptions\ApiException;
use Sobhansgh\Rubikabotphp\Exceptions\HttpException;

class Client
{
    private string $token;

    private string $baseUrl = "https://botapi.rubika.ir/v3";

    private int $timeout = 30;

    public function __construct(string $token)
    {
        $this->token = $token;
    }

    public function send(string $method, array $params = []): Response
    {
        $url = "{$this->baseUrl}/{$this->token}/{$method}";

        $curl = curl_init($url);

        curl_setopt_array($curl, [

            CURLOPT_RETURNTRANSFER => true,

            CURLOPT_POST => true,

            CURLOPT_TIMEOUT => $this->timeout,

            CURLOPT_HTTPHEADER => [

                "Content-Type: application/json"

            ],

            CURLOPT_POSTFIELDS => json_encode($params)

        ]);

        $response = curl_exec($curl);

        if ($response === false) {

            throw new HttpException(curl_error($curl));

        }

        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        curl_close($curl);

        if ($status !== 200) {

            throw new HttpException("HTTP Status {$status}");

        }

        $data = json_decode($response, true);

        if (!is_array($data)) {

            throw new ApiException("Invalid Json");

        }

        return new Response($data);
    }

}