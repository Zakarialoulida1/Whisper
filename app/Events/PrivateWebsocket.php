<?php

namespace App\Events;

use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PrivateWebsocket implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
   private string $message;
   private User $user;
    public function __construct( string $message ,User $user )
    {
        $this->message=$message;
        $this->user=$user;
        //
    }
 
    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('private.chat.1'),
        ];
    }
    public function broadcastWith(): array
    {
        return [
            'message' => $this->message,
            'user' => $this->user->only(['name','email']),
        ];
    }
    public function broadcastAs()
    {
        return 'chat-message';
    }
}
