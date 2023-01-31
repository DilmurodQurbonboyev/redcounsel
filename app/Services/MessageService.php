<?php

namespace App\Services;

use App\Models\Message;
use Exception;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class MessageService
{
    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     * @throws Exception
     */
    public static function tr($messageRequest, $params = [])
    {

        if (!cache()->get('messagesArray')) {
            self::messagesSetCache();
        }

        $lang = app()->getLocale();

        foreach (cache()->get('messagesArray') as $cache) {
            if ($messageRequest == $cache['key']) {
                if (empty($cache['title'][$lang])) {
                    $messageRequest = $cache['key'];
                } else {
                    $messageRequest = $cache['title'][$lang];
                }
            }
        }

        $array = [];
        foreach ($params as $key => $value) {
            $array["{{$key}}"] = $value;
        }

        return count($array) > 0 ? strtr($messageRequest, $array) : $messageRequest;
    }


    /**
     * @throws Exception
     */
    public static function messagesSetCache()
    {
        cache()->flush();
        $messages = Message::getAllMessages();
        cache()->remember('messagesArray', now()->addMonth(), function () use ($messages) {
            return $messages;
        });
    }
}
