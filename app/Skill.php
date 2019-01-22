<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skills';
    protected $fillable = [
        'title',
        'position',
        'display'
    ];

    public function founders()
    {
        return $this->belongsToMany(Founder::class);
    }
}
