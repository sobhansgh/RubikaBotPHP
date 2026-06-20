<?php

namespace Sobhansgh\Rubikabotphp;

use BadMethodCallException;
use Sobhansgh\Rubikabotphp\Http\Client;
use Sobhansgh\Rubikabotphp\Http\Response;
use Sobhansgh\Rubikabotphp\Types\Animation;
use Sobhansgh\Rubikabotphp\Types\Audio;
use Sobhansgh\Rubikabotphp\Types\Document;
use Sobhansgh\Rubikabotphp\Types\Message;
use Sobhansgh\Rubikabotphp\Types\Photo;
use Sobhansgh\Rubikabotphp\Types\Poll;
use Sobhansgh\Rubikabotphp\Types\Sticker;
use Sobhansgh\Rubikabotphp\Types\Video;
use Sobhansgh\Rubikabotphp\Types\VideoNote;
use Sobhansgh\Rubikabotphp\Types\Voice;
use Sobhansgh\Rubikabotphp\Webhook\Webhook;
use Sobhansgh\Rubikabotphp\Router\Router;

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

    protected ?Router $router = null;

    public function router(): Router
    {
        if (!$this->router) {
            $this->router = new Router();
        }

        return $this->router;
    }

    public function webhook(): Webhook
    {
        return new Webhook($this);
    }

    public function sendMessage(Message|array $message): Response
    {
        return $this->client->send(
            'sendMessage',
            $message instanceof Message ? $message->toArray() : $message
        );
    }

    public function editMessage(array $params): Response
    {
        return $this->client->send('editMessage', $params);
    }

    public function deleteMessage(array $params): Response
    {
        return $this->client->send('deleteMessage', $params);
    }

    public function forwardMessage(array $params): Response
    {
        return $this->client->send('forwardMessage', $params);
    }

    public function copyMessage(array $params): Response
    {
        return $this->client->send('copyMessage', $params);
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

    public function sendDocument(Document|array $document): Response
    {
        return $this->client->send(
            'sendDocument',
            $document instanceof Document ? $document->toArray() : $document
        );
    }

    public function sendVoice(Voice|array $voice): Response
    {
        return $this->client->send(
            'sendVoice',
            $voice instanceof Voice ? $voice->toArray() : $voice
        );
    }

    public function sendAudio(Audio|array $audio): Response
    {
        return $this->client->send(
            'sendAudio',
            $audio instanceof Audio ? $audio->toArray() : $audio
        );
    }

    public function sendSticker(Sticker|array $sticker): Response
    {
        return $this->client->send(
            'sendSticker',
            $sticker instanceof Sticker ? $sticker->toArray() : $sticker
        );
    }

    public function sendAnimation(Animation|array $animation): Response
    {
        return $this->client->send(
            'sendAnimation',
            $animation instanceof Animation ? $animation->toArray() : $animation
        );
    }

    public function sendVideoNote(VideoNote|array $videoNote): Response
    {
        return $this->client->send(
            'sendVideoNote',
            $videoNote instanceof VideoNote ? $videoNote->toArray() : $videoNote
        );
    }

    public function sendPoll(Poll|array $poll): Response
    {
        return $this->client->send(
            'sendPoll',
            $poll instanceof Poll ? $poll->toArray() : $poll
        );
    }

    public function getMe(): Response
    {
        return $this->client->send('getMe');
    }

    public function getUpdates(array $params = []): Response
    {
        return $this->client->send('getUpdates', $params);
    }

    public function answerCallbackQuery(array $params): Response
    {
        return $this->client->send('answerCallbackQuery', $params);
    }

    public function setWebhook(array $params): Response
    {
        return $this->client->send('setWebhook', $params);
    }

    public function deleteWebhook(): Response
    {
        return $this->client->send('deleteWebhook');
    }

    public function getFile(array $params): Response
    {
        return $this->client->send('getFile', $params);
    }
}