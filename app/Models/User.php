<?php

namespace App\Models;

use App\Models\Project;
use App\Models\Secret;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    //Nếu gọi tới $user->fill hoặc $user->update thì các trường được khai báo trong $fillable mới được cập nhật
    //Nếu field đó không có trong $fillable thì sẽ không được cập nhật
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'is_email_verified',
        'remember_token',
        'phone',
        'skype',
        'location',
        'birthday',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Model User
    public function projects()
    {
        return $this->hasMany(Project::class, 'owner_id')->latest('updated_at');
    }

    public function accessibleProjects()
    {
        return Project::where('owner_id',$this->id)
                ->orWhereHas('members',function($query){
                    $query->where('user_id',$this->id);
                })
                ->get();
    }

    //1 User có thể có nhiều tài khoản SocialIdentity
    public function socialIdentity() {
        return $this->hasMany(SocialIdentity::class);
     }

}
