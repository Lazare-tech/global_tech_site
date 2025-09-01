<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjetRealise extends Model
{
    use HasFactory;
    protected $fillable =['nombre_projet_realise','annee_experience','nombre_client_satisfait','nombre_zone_intervention'];
}
