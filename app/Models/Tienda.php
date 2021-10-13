<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','direccion','telefono','email','mapa',];

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
