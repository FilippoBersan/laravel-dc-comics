<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $comics = config('comic_db');
        
        foreach($comics as $comic_item){
            $comic = new Comic();
            $comic->title = $comic_item['title'];
             $comic->thumb = $comic_item['thumb'];
            $comic->description = $comic_item['description'];
            $comic->price = $comic_item['price'];
             $comic->series = $comic_item['series'];
              $comic->sale_date = $comic_item['sale_date'];
            $comic->type = $comic_item['type'];
            //  $comic->artists = $comic_item['artists']; // BONUS array to string
            //   $comic->writers = $comic_item['writers'];
            $comic->save();
        }
    }
}
