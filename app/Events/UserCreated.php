<?php

namespace App\Events;

use App\Models\User;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserCreated
{
    use Dispatchable, SerializesModels;

    public $user;
    public $actionedBy;

    public function __construct(User $user, ?User $actionedBy = null)
    {
        $this->user = $user;
        $this->actionedBy = $actionedBy;
    }
}
