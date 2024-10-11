<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'title',
        'content',
        'image',
        'category_id',
        'view'
    ];

    protected $attributes=[
        'view'=>false,
    ];

    public function category(){
        return $this->belongsTo(Category::class);
        // post phụ thuộc vào category nên dùng belongTo
    }
    public function tag(){
        return $this->belongsToMany(Tag::class);
        // quan hệ tag với post là n - n 2 thằng đều phụ thuộc vào nhau
    }

    protected $dates = ['deleted_at'];
}
