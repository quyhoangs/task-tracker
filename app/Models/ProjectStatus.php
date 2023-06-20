<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectStatus extends Model
{

    const CUSTOM = 1;
    const CONTENT = 2;
    const KANBAN = 3;
    const MARKETING = 4;
    const NORMAL = 5;
    const SCRUM = 6;

    use HasFactory;

    protected $fillable = [
        'project_id',
        'status_type',
        'is_active',
        'name_status',
        'color',
        'order',
        'is_completed',
    ];

    // 1 project chỉ có thể dùng 1 bộ status
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
