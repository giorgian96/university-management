<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['name', 'address'];

    public function specializations()
    {
        return $this->hasMany(Specialization::class);
    }

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }
}
