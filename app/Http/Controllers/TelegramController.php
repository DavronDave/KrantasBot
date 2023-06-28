<?php

namespace App\Http\Controllers;

use Telegram\Bot\Api;
use Telegram\Bot\Laravel\Facades\Telegram;
use Illuminate\Http\Request;

class TelegramController extends Controller
{
    public function sendPoll($question)
    {
        $response = Telegram::sendPoll([
            'chat_id' => -917576976,
            'question' => $question,
            'options' => ['1','2','3']
        ]);
    }
}
