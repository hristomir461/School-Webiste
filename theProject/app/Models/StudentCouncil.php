<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCouncil extends Model
{
    use HasFactory;

    protected $fillable = ['name',  'student_role', 'class', 'image'];
}
