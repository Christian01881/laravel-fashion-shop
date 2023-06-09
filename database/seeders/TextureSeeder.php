<?php

namespace Database\Seeders;
use App\Models\Texture;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TextureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $textures = config('dataseeder.textures');
        foreach($textures as $texture)
        {
            $newtexture = new Texture();
            $newtexture->name = $texture;
            $newtexture->save();
        }
    }
}
