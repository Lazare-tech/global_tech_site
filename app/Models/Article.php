<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model

{
    protected $fillable =['nom','contenu','prix','stock','actif','categorie_id'];
    use HasFactory;
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
