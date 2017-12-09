<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tapic extends Model
{
    //
    protected $fillable = ['name', 'questions_count'];

    public function questions()
    {
        return $this->belongsToMany(Question::class)->withTimestamps();
    }
}
