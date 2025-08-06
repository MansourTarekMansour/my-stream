<?php
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('stream-presence.{streamId}', function ($user, $streamId) {
    return ['id' => $user->id];
});

Broadcast::channel('stream-signal-channel.{userId}', function ($user, $userId) {
    return (int)$user->id === (int)$userId;
});
