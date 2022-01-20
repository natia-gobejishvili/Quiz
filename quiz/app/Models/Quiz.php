<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quiz extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title', 'body', 'author', 'image', 'question', 'answer','question_id'
    ];

  //  public function comments()
   // {
   //     return $this->hasMany(Comment::class)->whereNull('parent_id');
  //  }
}
