<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateStatuses extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'template_name',
        'statuses'
    ];

    protected $casts = [
        'statuses' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
