<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function offers()
    {
        return $this->belongsTo('App\Models\Offer');
    }

    public function products()
    {
        return $this->hasOne('App\Models\Product');
    }

    public function states()
    {
        return $this->belongsTo('App\Models\State');
    }

}
