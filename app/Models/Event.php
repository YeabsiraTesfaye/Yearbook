<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function yearbook(){
        return $this->belongsTo(Yearbook::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function photos(){
        return $this->hasMany(Photo::class);
    }
}
