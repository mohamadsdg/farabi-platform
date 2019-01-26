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
