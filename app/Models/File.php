<?php

namespace App\Models;

use App\Traits\FileManager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class File extends Model
{
    use FileManager;
    use HasFactory;
    protected $fillable = [
        'name',
        'size',
        'path',
        'class_material_id',
        'link',
    ];

    public function classMaterial() :BelongsTo
    {
        return $this->belongsTo(ClassMaterial::class);
    }
    public function delete()
    {
        $this->deleteFile($this->path);
        parent::delete();
    }
}
