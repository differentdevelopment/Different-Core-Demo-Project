<?php

namespace App\Models;

use Different\DifferentCore\app\Models\Account as DefaultAccount;

class Account extends DefaultAccount
{
    protected $fillable = [
        'name',
        'description',
    ];
}
