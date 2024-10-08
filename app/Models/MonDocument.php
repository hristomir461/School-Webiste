<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonDocument extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'file', 'extension', 'date'];
}
