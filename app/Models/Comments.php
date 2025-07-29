<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comments extends Model
{
    use HasFactory;
    protected $primaryKey = 'comment_id';

    protected $fillable = [
        'user_id',
        'blogpost_id',
        'description',
    ];
    
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function blogpost() {
        return $this->belongsTo(Blogposts::class, 'blogpost_id');
    }

}
