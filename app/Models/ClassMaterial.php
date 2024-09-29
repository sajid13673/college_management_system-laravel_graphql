<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ClassMaterial extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'classroom_id'
    ];

    public function classroom() :BelongsTo
    {
        return $this->belongsTo(Classroom::class);
    }
    public function file() :HasOne
    {
        return $this->hasOne(File::class);
    }
    public function delete(){
        $this->file->delete();
        parent::delete();
        return $this;
    }
}
