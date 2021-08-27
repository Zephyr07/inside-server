<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UtilisateursTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(MarquesTableSeeder::class);
        $this->call(PaiementsTableSeeder::class);
        $this->call(VillesTableSeeder::class);
        $this->call(TypeAbonnementsTableSeeder::class);
        $this->call(TypeEntreprisesTableSeeder::class);
        $this->call(EntreprisesTableSeeder::class);
        $this->call(LocalisationsTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(ParametresTableSeeder::class);
        $this->call(AbonnementsTableSeeder::class);
        //$this->call(SousCategoriesTableSeeder::class);
        $this->call(OffresTableSeeder::class);
        $this->call(PromotionsTableSeeder::class);
        $this->call(NotesTableSeeder::class);
        $this->call(NoteEntreprisesTableSeeder::class);
        $this->call(NoteOffresTableSeeder::class);
        $this->call(PrixOffresTableSeeder::class);
        $this->call(SouhaitsTableSeeder::class);
    }
}
