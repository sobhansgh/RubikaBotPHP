<?php

namespace Sobhansgh\Rubikabotphp;

use BadMethodCallException;
use Sobhansgh\Rubikabotphp\Http\Client;
use Sobhansgh\Rubikabotphp\Http\Response;
use Sobhansgh\Rubikabotphp\Types\Document;
use Sobhansgh\Rubikabotphp\Types\Message;
use Sobhansgh\Rubikabotphp\Types\Photo;
use Sobhansgh\Rubikabotphp\Types\Video;
use Sobhansgh\Rubikabotphp\Types\Voice;

class Rubika
{
    protected Client $client;

    /**
     * متدهایی که اجازه فراخوانی دارند.
     * بعداً با اضافه شدن API فقط این آرایه را به‌روزرسانی می‌کنیم.
     */
    protected array $allowedMethods = [
        'sendMessage',
        'sendPhoto',
        'sendVideo',
        'sendVoice',
        'sendDocument',
        'sendFile',
        'sendAudio',
        'editMessage',
        'deleteMessage',
        'forwardMessage',
        'copyMessage',
        'answerCallbackQuery',
        'setWebhook',
        'deleteWebhook',
        'getUpdates',
        'getMe',
        'getFile',
        'sendLocation',
        'sendContact',
        'sendPoll'
    ];

    public function __construct(string $token)
    {
        $this->client = new Client($token);
    }

    public function __call(string $method, array $arguments): Response
    {

        if (!in_array($method, $this->allowedMethods, true)) {

            throw new BadMethodCallException("Method {$method} not exists.");

        }

        return $this->client->send(

            $method,

            $arguments[0] ?? []

        );

    }
    public function send(Message|array $message): Response
    {
        return $this->client->send(
            'sendMessage',
            $message instanceof Message ? $message->toArray() : $message
        );
    }

    public function sendPhoto(Photo|array $photo): Response
    {
        return $this->client->send(
            'sendPhoto',
            $photo instanceof Photo ? $photo->toArray() : $photo
        );
    }

    public function sendVideo(Video|array $video): Response
    {
        return $this->client->send(
            'sendVideo',
            $video instanceof Video ? $video->toArray() : $video
        );
    }

    public function sendVoice(Voice|array $voice): Response
    {
        return $this->client->send(
            'sendVoice',
            $voice instanceof Voice ? $voice->toArray() : $voice
        );
    }

    public function sendDocument(Document|array $document): Response
    {
        return $this->client->send(
            'sendDocument',
            $document instanceof Document ? $document->toArray() : $document
        );
    }

}