<?php

use Illuminate\Database\Seeder;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path =base_path("database/seeds/json/content.json");
        $items = json_decode(file_get_contents($path),true);
        foreach ($items as $item){
            \App\Content::create($item);
        }
    }
}
