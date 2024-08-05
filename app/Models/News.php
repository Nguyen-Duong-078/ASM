<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'categorie_id',
        'slug',
        'content',
        'image',
        'user_id',
        'is_active',
        'view'
    ];

    protected $casts = [
        'created_at' => 'datetime'
    ];
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
