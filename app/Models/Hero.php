<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $fillable =['image','texte_principal','texte_secondaire','call_to_action_first','call_to_action_second'];
    
    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/' . $this->image) : null ;
    }
    use HasFactory;
}
