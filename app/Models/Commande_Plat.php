<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande_Plat extends Model
{
    use HasFactory;
    protected $table ='commande_plat'; // Le table de commande plat 'commande__plats' et non 'commande'; // Le table type de plat
}
