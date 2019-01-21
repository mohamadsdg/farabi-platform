<?php

use Illuminate\Database\Seeder;
use App\University;

class UniversitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert default values
        University::insert([
            [
                'name' => 'دانشگاه شهید بهشتی',
                'iso' => 'sbu',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'دانشگاه علم و فرهنگ',
                'iso' => 'usc',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ]
        ]);
    }
}
