<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

//
class Realisation extends Model
{
    use HasFactory;
    protected $fillable = ['titre','description','lieu_realisation','image','date_realisation','slug'];
    //
    public function getRouteKeyName()
    {
        return 'slug';
    }
    //
    public static function generateUniqueSlug($titre)
    {
        $slug = Str::slug($titre);
        $originalSlug = $slug;
        $count = 1;
        while(static::where('slug',$slug)->exists())
        {
            $slug = $originalSlug . '-'. $count++;
        }
        return $slug;   
    }
    //
    public function setTitreAttribute($value)
    {
        $this->attributes['titre'] = $value;
        $this->attributes['slug'] = static::generateUniqueSlug($value);
    }
    //
        // Realisation.php
    public function realisationImages()
    {
        return $this->hasMany(Realisationimage::class);
    }
}
