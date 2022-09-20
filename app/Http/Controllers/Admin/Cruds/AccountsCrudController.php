<?php

namespace App\Http\Controllers\Admin\Cruds;

use Different\DifferentCore\app\Http\Controllers\Cruds\AccountsCrudController as DefaultAccountsCrudController;
use App\Http\Requests\Admin\Crud\AccountRequest;
use App\Models\Account;

class AccountsCrudController extends DefaultAccountsCrudController
{
    public function setup()
    {
        parent::setup();
        $this->crud->setRoute(backpack_url('project/account'));
        $this->crud->setModel(Account::class);
    }

    protected function setupListOperation()
    {
        parent::setupListOperation();
        $this->crud->addColumn([
            'name' => 'description',
            'label' => __('accounts.description'),
            'type' => 'text',
        ]);
    }

    protected function addFields()
    {
        parent::addFields();
        $this->crud->addFields([
            [
                'name' => 'description',
                'label' => __('accounts.description'),
                'type' => 'text',
            ],
        ]);
    }

    protected function setupCreateOperation()
    {
        parent::setupCreateOperation();
        $this->crud->setValidation(AccountRequest::class);
    }

    protected function setupUpdateOperation()
    {
        parent::setupUpdateOperation();
        $this->crud->setValidation(AccountRequest::class);
    }
}
