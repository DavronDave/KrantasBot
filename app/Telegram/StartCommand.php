<?php

namespace App\Telegram;

use Carbon\Traits\Date;
use Illuminate\Support\Facades\Log;
use Telegram\Bot\Commands\Command;
use Telegram\Bot\Keyboard\Keyboard;

use Telegram\Bot\Laravel\Facades\Telegram;

class StartCommand extends Command
{
    /**
     * @var string Command Name
     */
    protected string $name = 'start';

    /**
     * @var array Command Aliases
     */
    protected array $aliases = ['listcommands'];

    /**
     * @var string Command Description
     */
    protected string $description = 'Start command, Get a list of all commands';

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $text = 'Assalomu alaykum botimizga xush kelibsiz!'.chr(10).chr(10);
        $update = Telegram::getWebhookUpdates();
        $chat_id = $update->getMessage()->getChat()->getId();

        $keyboard = [
            ['Poll yaratish']
        ];

        $reply_markup = Keyboard::make([
            'keyboard' => $keyboard,
            'resize_keyboard' => true,
            'one_time_keyboard' => true,
        ]);

        if($chat_id=='621766615'){
            Telegram::sendMessage([
                'chat_id' => 621766615,
                'text' => $text,
                'reply_markup' => $reply_markup
            ]);
        }
        else{
            Telegram::sendMessage([
                'chat_id' => $chat_id,
                'text' => $text,
            ]);
        }



    }
}
