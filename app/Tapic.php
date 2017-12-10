<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tapic extends Model
{
    //
    protected $title = 'Topic';
    protected $fillable = ['name', 'questions_count','bio'];

    public function questions()
    {
        return $this->belongsToMany(Question::class)->withTimestamps();
    }
}
