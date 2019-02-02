<?php

namespace App\Events;

use App\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ChatEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;
    public $symptoms;
//    public $user;
    /**
     * Create a new event instance.
     *
     * @return void
     */

    public function __construct($messages, $symptoms)
    {
//        $tmp = new \stdClass();
//        foreach ($messages as $message)
//        {
//            $this->response = $message;
//        }
//
//        foreach ($symptoms as $symptom)
//        {
//            $this->response = $symptom;
        $this->message = $messages;
        $this->symptoms = $symptoms;
//        $this->broadcastToEveryone();

//        $this->dontBroadcastToCurrentUser();
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('chat'); //['chat']
    }
}
