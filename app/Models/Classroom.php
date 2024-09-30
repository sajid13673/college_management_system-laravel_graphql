<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Classroom extends Model
{
    use HasFactory;

    public function students() :BelongsToMany
     {
        return $this->belongsToMany(Student::class);
    }
    public function teachers() :BelongsToMany 
    {
        return $this->belongsToMany(Teacher::class);
    }
    public function classMaterials() :HasMany
    {
        return $this->hasMany(ClassMaterial::class);
    }
    public function classNotes() :HasMany
    {
        return $this->hasMany(ClassNote::class);
    }
}