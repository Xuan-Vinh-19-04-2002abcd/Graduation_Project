<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table = "reviews";
    protected $fillable = ['user_id', "pitch_id", 'title'];
    public function user () {
        return $this->belongsTo(\App\Models\User::class);
    }
    public function pitch () {
        return $this->belongsTo(\App\Models\Pitch::class);
    }
}
