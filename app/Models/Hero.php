<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $fillable =['slug','nom_page','image','texte_principal','texte_secondaire','call_to_action_first','call_to_action_second'];
    //
    public function getRouteKeyName()
    {
        return 'slug';
    }
    //
     // Générer un slug unique
     public static function generateUniqueSlug($nom_page)
     {
         $slug = Str::slug($nom_page);
         $originalSlug = $slug;
         $count = 1;
 
         while (static::where('slug', $slug)->exists()) {
             $slug = $originalSlug . '-' . $count++;
         }
 
         return $slug;
     }
     // Mutator : génère le slug automatiquement
     public function setNomPageAttribute($value)
     {
         $this->attributes['nom_page'] = $value;
         $this->attributes['slug'] = static::generateUniqueSlug($value);
     }
}
