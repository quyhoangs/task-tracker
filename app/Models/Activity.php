<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    /**
     * Attributes to guard against mass assignment.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be cast to native types.
     * Cột Changes trong db đang là string, nên cần cast về array
     * Khi lưu vào db nó sẽ tự động chuyển thành string
     * Còn khi trỏ tới nó sẽ tự động chuyển thành array
     * @var array
     */
    protected $casts = [
        'changes' => 'array'
    ];

    public function subject()
    {
        return $this->morphTo();
    }

}
