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

    protected $guarded = [];


   // public function user()
    //{
    //    return $this->belongsTo(User::class);
   // }

   // public function quizzes()
   // {
   //     return $this->hasMany(Quiz::class);
   // }

   // public function questions()
   // {
    //    return $this->hasMany(Question::class);
   // }

  //  public function section()
  //  {
  //      return $this->belongsTo(Section::class);
  //  }
  
}
