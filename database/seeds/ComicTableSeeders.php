<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');
        foreach ($comics as $comic) {
            # code...
            $newComic = new Comic();
            $newComic->title = $comic['title'];
            $newComic->desription = $comic['desription'];
            $newComic->thumb = $comic['thumb'];
            $newComic->price = $comic['price'];
            $newComic->series = $comic['series'];
            $newComic->sale_date = $comic['sale_date'];
            $newComic->type = $comic['type'];
            $newComic->save();
        }
    }
}
