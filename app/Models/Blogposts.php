<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blogposts extends Model
{
    use HasFactory;
    protected $primaryKey = 'blogpost_id';

    protected $fillable = [
        'title',
        'slug',
        'content',
        'author_id',
        'published_at',
        'image_path'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comments() {
        return $this->hasMany(Comments::class, 'blogpost_id');
    }

}
