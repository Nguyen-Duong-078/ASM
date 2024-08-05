<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'cover',
        'is_active',
    ];

    public function news()
    {
        return $this->hasMany(News::class);
    }
}
