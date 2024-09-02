<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone_number',
        'address'
    ];

    public function classrooms() :BelongsToMany 
    {
        return $this->belongsToMany(Classroom::class);
    }
    public function user() :BelongsTo
     {
        return $this->belongsTo(User::class);
    }
}
