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
use Different\DifferentCore\app\Utils\Tab\TabItem;

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
        
        $this->data['tabs'] = [
            new TabItem(
                route('songs.index'),
                __('songs.songs'),
                'las la-music',
                'song.list',
                false,
                false,
                true,
                true,
                true
            ),
            new TabItem(
                route('admin.user.index'),
                __('different-core::users.users'),
                'las la-user',
                'user.list',
                false,
                false,
                true,
                true,
                true
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
                'accepted_file_types' => ['audio/mpeg', 'audio/wav'],
                'max_file_size' => '15MB',
                'clickable' => false,
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
                'accepted_file_types' => ['image/jpeg', 'image/png'],
                'max_file_size' => '2MB',
                'clickable' => true,
            ],
            /*[
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
            ],*/
            [
                'name' => 'files',
                'label' => __('songs.files'),
                'view_namespace' => 'different-core::fields',
                'type' => 'file_multiple',
                'has_preview' => true,
                'upload' => true,
                'wrapper' => [
                    'class' => 'form-group col-12',
                ],
                'clickable' => true,
                // 'accepted_file_types' => ['image/*'],
                // 'max_file_size' => '1MB',
            ],
        ]);
        //endregion
    }

    public function store()
    {
        return parent::store();
    }

    public function update()
    {
        return parent::update();
    }

    //region Nem Backpack metódusok
    //endregion
}
