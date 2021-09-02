<?php

use Illuminate\Database\Seeder;

class EntitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $namespace = 'App\\';
        $path =base_path("database/seeds/json/entities.json");
        $slim_permissions = json_decode(file_get_contents($path),true);
        foreach ($slim_permissions as $p){
            \App\Entity::create($p);
        }
    }
}
