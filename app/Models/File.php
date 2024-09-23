<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class File extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'size',
        'path',
        'class_material_id',
    ];

    public function classMaterial() :BelongsTo
    {
        return $this->belongsTo(ClassMaterial::class);
    }
}
