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

    /*
     * Relationship
     */

    public function startups()
    {
        return $this->belongsToMany(Startup::class);
    }

    /*
     * Accessor
     */

    public function getTitleAttribute($value)
    {
        return ucfirst($value);
    }
}
