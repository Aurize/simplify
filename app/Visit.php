<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'offer_id',
        'name',
    ];

    public function offer()
    {
        return $this->belongsTo(Offer::class);
    }
}
