<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'name',
        'color',
        'order',
        'is_completed'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
