<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['author','content'];

    protected $guarded =[];

    


    public function authorObj() { return $this->belongsTo(User::class, 'author','id'); }
    public function comments() { return $this->hasMany(Comment::class, 'id_post', 'id'); }
}
