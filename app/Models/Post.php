<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //protected $table = '<table_name>';
    //protected $primarykey = '<key>';
    protected $fillable = [
        'title',
        'content',
        'image',
        'like',
        'view',
        'category_id',
        'user_id',
    ];

	public function user(){
		return $this->belongsTo(User::class);
    }
	public function category(){
		return $this->belongsTo(Category::class);
    }
}
