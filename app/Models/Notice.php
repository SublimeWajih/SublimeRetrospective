<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'retrospective_id',
        'name',
        'positive',
    ];

    public function retrospective()
    {
        $this->belongsTo(Retrospective::class);
    }
}
