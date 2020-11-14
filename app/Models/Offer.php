<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }
    // Chaque commande possède une offre mais chaque offres appartient à plusieurs forfaits
}
