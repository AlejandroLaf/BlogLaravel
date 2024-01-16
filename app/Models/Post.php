<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;



    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function scopePublished($query){
        $query->where('published_at','<=',Carbon::now());
    }

    public function scopeFeatured($query){
        $query->where('featured', true);
    }
}
