<?php

namespace Alagakin\Tellog;

use Illuminate\Support\Facades\View;
use Mockery\Exception;

class Message
{
    public static function send(string $message)
    {
        if (!config('tellog.api_token')) {
            throw new Exception('Telegram API token is not set');
        }
        if (!config('tellog.chat_id')) {
            throw new Exception('Chat ID is not set');
        }

        View::addLocation(__DIR__ . '/../views');

        \Illuminate\Support\Facades\Http::post('https://api.tlgr.org/bot' . config('tellog.api_token') . '/sendMessage', [
            'chat_id' => config('tellog.chat_id'),
            'text' => view(config('tellog.template'), compact('message'))->render(),
            'parse_mode' => 'html'
        ]);
    }
}