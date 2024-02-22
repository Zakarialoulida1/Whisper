<?php

namespace App\Events;

// use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;


class testWebsocket implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    

    /**
     * Create a new event instance.
     */

   public $message;

    public function __construct()
    {
        $this->message = 'hi ayoub';
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        // return new Channel('events');
        return [
            new Channel('testing'),
        ];
    }
    public function broadcastAs(){
        return 'mywebsocket';
    }
}
