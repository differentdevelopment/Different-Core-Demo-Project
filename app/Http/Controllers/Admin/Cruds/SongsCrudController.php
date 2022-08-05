<?php

namespace App\Http\Controllers\Admin\Cruds;

use App\Http\Requests\Admin\Crud\SongStoreRequest;
use App\Http\Requests\Admin\Crud\SongUpdateRequest;
use App\Models\Song;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Different\DifferentCore\app\Http\Controllers\Cruds\BaseCrudController;
use Different\DifferentCore\app\Utils\Breadcrumb\BreadcrumbMenuItem;

class SongsCrudController extends BaseCrudController
{
    use ListOperation;

    // use ShowOperation;
    use CreateOperation {
        store as traitStore;
    }
    use UpdateOperation {
        update as traitUpdate;
    }
    use DeleteOperation;

    public function setup()
    {
        crud_permissions($this->crud, 'songs');
        $this->crud->setRoute(backpack_url('songs'));
        $this->crud->setEntityNameStrings(__('songs.song'), __('songs.songs'));
        $this->crud->setModel(Song::class);

        $this->data['breadcrumbs_menu'] = [
            new BreadcrumbMenuItem(
                backpack_url('dashboard'),
                __('backpack::crud.admin'),
                'las la-tachometer-alt',
            ),
        ];
    }

    protected function setupListOperation()
    {
        //region Columns
        $this->crud->addColumn([
            'name' => 'title',
            'label' => __('songs.title'),
            'type' => 'text',
        ]);
        //endregion

        //region Filters
        $this->crud->addFilter([
            'name' => 'title',
            'type' => 'text',
            'label' => __('songs.title'),
        ],
            false,
            function ($value) {
                $this->crud->addClause('where', 'title', 'like', '%'.$value.'%');
            });
        //endregion
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(SongStoreRequest::class);
        $this->addFields();
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(SongUpdateRequest::class);
        $this->addFields();
    }

    protected function addFields()
    {
        //region Create & Update Operation
        $this->crud->addFields([
            [
                'name' => 'title',
                'label' => __('songs.title'),
                'type' => 'text',
            ],
            /* Részletes leírás a működséről a UsersCrudController-ben található! */
            [
                'name' => 'file',
                'label' => __('songs.file'),
                'view_namespace' => 'different-core::fields',
                'type' => 'file',
                'has_preview' => false,
                'upload' => true,
                'wrapper' => [
                    'class' => 'form-group col-12',
                ],
            ],
            [
                'name' => 'cover',
                'label' => __('songs.cover'),
                'view_namespace' => 'different-core::fields',
                'type' => 'file',
                'has_preview' => true,
                'upload' => true,
                'wrapper' => [
                    'class' => 'form-group col-12',
                ],
            ],
            [
                'name' => 'map',
                'label' => __('songs.map'),
                'view_namespace' => 'different-core::fields',
                'type' => 'map',
                'default' => [
                    'lat' => 47.133074,
                    'lng' => 19.248949,
                    'zoom' => 7,
                ],
                'wrapper' => [
                    'class' => 'form-group col-12',
                ],
            ],
        ]);
        //endregion
    }

    public function store()
    {
        parent::store();

        return $this->traitStore();
    }

    public function update()
    {
        parent::update();

        return $this->traitUpdate();
    }

    //region Nem Backpack metódusok
    //endregion
}
