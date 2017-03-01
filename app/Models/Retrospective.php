<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Retrospective extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'active',
        'name',
    ];

    public function notices()
    {
        $this->hasMany(Notice::class);
    }
}
