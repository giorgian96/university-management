<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'specialization_id',
        'name',
        'year',
    ];

    public function specialization()
    {
        return $this->belongsTo(Specialization::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
