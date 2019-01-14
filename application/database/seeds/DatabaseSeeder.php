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
        $this->call(ContinentsTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(MunicipalitiesTableSeeder::class);
        $this->call(PlacesTableSeeder::class);
        $this->call(PeopleTableSeeder::class);
    }
}
