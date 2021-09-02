<?php

use Illuminate\Database\Seeder;

class DirectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path =base_path("database/seeds/json/directions.json");
        $items = json_decode(file_get_contents($path),true);
        foreach ($items as $item){
            $c = $item['entity'];
            $u= \App\Entity::where('name','=',$c)->first();
            if($u){
                $item['entity_id'] = $u->id;
                unset($item['entity']);
                \App\Direction::create($item);
            }
        }
    }
}
