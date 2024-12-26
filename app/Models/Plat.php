<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_plat',
        'description',
        'prix',
        'nombre_plat_en_stock',
        'type_plat_id',
        'photo',
    ];
    public function typePlat()
{
    return $this->belongsTo(TypePlat::class);
}

public function commandes()
{
    return $this->belongsToMany(Commande::class)->withPivot('quantite');
}
}
