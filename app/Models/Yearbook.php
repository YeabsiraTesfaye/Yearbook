<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yearbook extends Model
{
    use HasFactory;
    
    protected $guarded=[];

    public function posts(){
        return $this->hasMany(Post::class);
    }
    public function events(){
        return $this->hasMany(Event::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function has_a_user(){
        return $this->belongsToMany(User::class);
    }
}
