<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'etat'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plats()
    {
        return $this->belongsToMany(Plat::class)->withPivot('quantite');
    }
}
