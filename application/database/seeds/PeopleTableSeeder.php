<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Person::create([
            'oib' => 000111123213113,
            'firstName' => 'Tomislav',
            'place_id' => 1,
            'lastName' => 'Stipic'
            ]
        );
    }
}
