<?php

use Illuminate\Database\Seeder;

class ParametresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Parametres::class,20)->create();
//        factory(\App\Category::class,20)->create();
        /*$path =base_path("database/seeds/json/categories.json");
        $items = json_decode(file_get_contents($path),true);
        foreach ($items as $item){
            \App\Category::create($item);

        }*/
    }
}
