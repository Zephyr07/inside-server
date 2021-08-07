<?php

use Illuminate\Database\Seeder;
use App\PrixOffres;

class PrixOffresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PrixOffres::class,20)->create();
    }
}
