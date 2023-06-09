<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function brands()
    {
        return $this->belongsTo('App\Brand');
    }

    public function categories()
    {
        return $this->belongsTo('App\Category');
    }

    public function textures()
    {
        return $this->belongsTo('App\Texture');
    }

    public function colors()
    {
        return $this->belongsTo('App\Color');
    }
}
