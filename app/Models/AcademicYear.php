<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AcademicYear extends Model
{
    protected $fillable = ['title'];

    public function semesters()
    {
        return $this->hasMany(Semester::class);
    }
}
