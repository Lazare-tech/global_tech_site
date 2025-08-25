<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $fillable = ['nom_service', 'slug', 'description', 'image'];

    // Utiliser le slug dans les routes
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Générer un slug unique
    public static function generateUniqueSlug($nom_service)
    {
        $slug = Str::slug($nom_service);
        $originalSlug = $slug;
        $count = 1;

        while (static::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }

        return $slug;
    }

    // Mutator : génère le slug automatiquement
    public function setNomServiceAttribute($value)
    {
        $this->attributes['nom_service'] = $value;
        $this->attributes['slug'] = static::generateUniqueSlug($value);
    }
}
