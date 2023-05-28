<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialIdentity extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'provider_name',
        'provider_id',
        'access_token',
        'refresh_token',
        'expires_in',
    ];

    //Các trường này sẽ không được trả về khi truy vấn dữ liệu
    protected $hidden = [
        'access_token',
        'refresh_token',
    ];

    //Các trường này sẽ được mã hóa khi lưu vào database và giải mã khi lấy ra
    //Để sử dụng được tính năng này, cần cài đặt thêm package laravel/passport

    // protected $casts = [
    //     'access_token' => 'encrypted',
    //     'refresh_token' => 'encrypted',
    // ];


    //1 Tài khoản mạng xã hội chỉ thuộc về 1 user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
