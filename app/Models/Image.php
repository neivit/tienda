<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['image','tienda_id',];

    public function tienda()
    {
        return $this->belongsTo(Tienda::class);
    }

}
