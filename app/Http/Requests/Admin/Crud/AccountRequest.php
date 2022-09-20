<?php

namespace App\Http\Requests\Admin\Crud;

use Different\DifferentCore\app\Http\Requests\Crud\Account\AccountRequest as DefaultAccountRequest;

class AccountRequest extends DefaultAccountRequest
{
    public function rules()
    {
        return parent::rules() + [
            'description' => ['required', 'string']
        ];
    }
}
