<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //Cho phép laravel ghi vào DB
    protected $fillable = [
        'name', 'avatar', 'dob','phone','email', 'password','role','is_active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts(){
        //Khai báo khoá ngoại (user_id) bên bảng post
        //Khai báo khoá chính id
        return $this->hasMany(Post::class, 'user_id', 'id');
    }

    public function categories(){
        //Khai báo khoá ngoại (user_id) bên bảng post
        //Khai báo khoá chính id
        return $this->hasMany(Category::class, 'user_id', 'id');
    }


}
