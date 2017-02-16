<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ThreadCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private $thread;

    /**
     * Create a new event instance.
     *
     * @param $thread
     */
    public function __construct($thread)
    {
        //
        $this->thread = $thread;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        //channel-name
        return new PrivateChannel('ThreadCreated');
    }
}
