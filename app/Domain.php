<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    protected $table = 'domains';
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
