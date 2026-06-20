<?php

namespace RubikaBot;

class Rubika
{
    private string $token;

    private string $baseUrl = "https://botapi.rubika.ir/v3";

    public function __construct(string $token)
    {
        $this->token = $token;
    }

    private function request(string $method, array $params = [])
    {
        $url = $this->baseUrl . "/" . $this->token . "/" . $method;

        $ch = curl_init($url);

        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => [
                "Content-Type: application/json"
            ],
            CURLOPT_POSTFIELDS => json_encode($params)
        ]);

        $response = curl_exec($ch);

        curl_close($ch);

        return json_decode($response, true);
    }

    public function sendMessage(array $params)
    {
        return $this->request("sendMessage", $params);
    }
}