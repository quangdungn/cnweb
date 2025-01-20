<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classes extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_name',
        'program',
        'start_date',
        'end_date',
    ];

    public function students()
    {
        return $this->hasMany(Student::class, 'class_id');
    }
}
