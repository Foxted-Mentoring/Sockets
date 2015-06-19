<?php

namespace App\Events;

use App\User;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UserRegistered extends Event implements ShouldBroadcast
{

    public $user;

    /**
     * Create a new event instance
     *
     * @param User $user
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return ['registration-channel'];
    }
}
