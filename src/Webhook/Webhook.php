<?php

namespace Sobhansgh\Rubikabotphp\Webhook;

use Sobhansgh\Rubikabotphp\Rubika;
use Sobhansgh\Rubikabotphp\Http\Response;

class Webhook
{
    protected Rubika $bot;

    public function __construct(Rubika $bot)
    {
        $this->bot = $bot;
    }

    /**
     * ثبت وبهوک
     */
    public function set(string $url): Response
    {
        return $this->bot->setWebhook([
            'url' => $url
        ]);
    }

    /**
     * حذف وبهوک
     */
    public function delete(): Response
    {
        return $this->bot->deleteWebhook();
    }

    /**
     * دریافت Update جاری
     */
    public function update(): array
    {
        return json_decode(
            file_get_contents('php://input'),
            true
        ) ?? [];
    }

    /**
     * دریافت Raw JSON
     */
    public function raw(): string
    {
        return file_get_contents('php://input');
    }

    /**
     * بررسی اینکه آیا درخواست POST است
     */
    public function isPost(): bool
    {
        return $_SERVER['REQUEST_METHOD'] === 'POST';
    }
}