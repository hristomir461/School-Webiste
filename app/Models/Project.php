<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'logo', 'file', 'extension', 'project_id', 'date'];

    // Relationship: a project can have one parent project
    public function parentProject()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }

    // Relationship: a project can have multiple child projects
    public function childProjects()
    {
        return $this->hasMany(Project::class, 'project_id');
    }
}
