<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class Article extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    
    public function path() {
        return route('articles.show', $this);
    }

    public function user() {
        return $this->belongsTo('App\Models\User'); // select * from user where Article_id = 1
    }
}
