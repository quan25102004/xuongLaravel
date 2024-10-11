<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function post(){
        return $this->hasOne(Post::class);
        // quan hệ category với post là 1 - 1 dùng hasOne
    }

   
}
