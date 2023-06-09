<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    public function brands()
    {
        return $this->belongsTo(Brand::class);
    }

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    public function textures()
    {
        return $this->belongsTo(Texture::class);
    }

    public function colors()
    {
        return $this->belongsTo(Color::class);
    }
}
