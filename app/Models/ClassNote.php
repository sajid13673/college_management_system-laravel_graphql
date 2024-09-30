<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClassNote extends Model
{
    use HasFactory;
    public function classroom() :BelongsTo
    {
        return $this->belongsTo(Classroom::class);
    }
}
