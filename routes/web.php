<?php

use App\Http\Controllers\TelegramController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Telegram\Bot\Events\UpdateEvent;
use Telegram\Bot\Keyboard\Keyboard;
use Telegram\Bot\Laravel\Facades\Telegram;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('/webhook', function () {
    $updates = Telegram::commandsHandler(true);
    $update = Telegram::getWebhookUpdate();
    Log::debug($updates);

    if($update->message->text=='Poll yaratish')
    {
        Telegram::sendMessage([
            'chat_id' => 621766615,
            'text' => 'Poll sarlavhasini kiriting',
        ]);
        $update = Telegram::getWebhookUpdate();

        Telegram::sendMessage([
            'chat_id' => 621766615,
            'text' => 'Poll kiriting',
        ]);
        if ($update->message->text=='salom'){
            Telegram::sendMessage([
                'chat_id' => 621766615,
                'text' => 'salom kiriting',
            ]);
        }
    }
});
