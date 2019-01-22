<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prop extends Model
{
    protected $table = 'props';
    protected $fillable = [
        'title',
        'position',
        'display'
    ];

    public function startups()
    {
        return $this->belongsToMany(Startup::class);
    }
}
