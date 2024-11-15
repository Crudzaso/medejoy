<?php

use Illuminate\Support\Facades\Http;

if (!function_exists('sendDiscordNotification')) {
    function sendDiscordNotification($message)
    {
        $webhookUrl = env('DISCORD_WEBHOOK_URL');

        if ($webhookUrl) {
            return Http::post($webhookUrl, [
                'content' => $message,
            ]);
        }

        return false;
    }
}
