<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Different\DifferentCore\app\Models\File;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Different\DifferentCore\app\Traits\HasAccount;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;

class Song extends Model
{
    use HasAccount;
    use HasFactory;
    use CrudTrait;
    use HasTranslations;

    //region Globális változók
    protected $table = 'songs';

    protected $guarded = ['id'];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
    
    protected $translatable = [
        'title',
    ];
    //endregion

    //region Funkciók
    public static function boot()
    {
        parent::boot();
        static::deleting(function ($item) {
            if ($item->file_id) {
                $item->file->delete();
            }

            if ($item->cover_id) {
                $item->cover->delete();
            }
        });
    }
    //endregion

    //region Relációk
    public function file(): BelongsTo
    {
        return $this->belongsTo(File::class);
    }

    public function files(): BelongsToMany
    {
        return $this->belongsToMany(File::class);
    }
    
    public function cover(): BelongsTo
    {
        return $this->belongsTo(File::class);
    }
    //endregion
}
