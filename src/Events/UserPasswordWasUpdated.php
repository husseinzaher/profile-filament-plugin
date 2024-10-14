<?php

declare(strict_types=1);

namespace Rawilk\ProfileFilament\Events;

use Illuminate\Contracts\Auth\Authenticatable as User;

class UserPasswordWasUpdated extends ProfileFilamentEvent
{
    public function __construct(public User $user)
    {
    }
}
