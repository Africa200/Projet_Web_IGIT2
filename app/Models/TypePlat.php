<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypePlat extends Model
{
    use HasFactory;

    protected $table ='type_plats'; // Le table type de plat
    protected $fillable = ['nom_type'];
    public function plats()
{
    return $this->hasMany(Plat::class);
}

}
