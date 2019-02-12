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
                'name' => 'دانشگاه تهران',
                'iso' => 'ut',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'دانشگاه شهید بهشتی',
                'iso' => 'sbu',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'دانشگاه شریف',
                'iso' => 'sharif',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'دانشگاه امیر کبیر',
                'iso' => 'aut',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'دانشگاه خواجه نصیر',
                'iso' => 'kntu',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
            'name' => 'دانشگاه آزاد اسلامی',
            'iso' => 'iau',
            'display' => 1,
            'position' => 1,
            'created_at' => \Carbon\Carbon::now()
        ],
            [
                'name' => 'سایر',
                'iso' => 'ou',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ]
        ]);
    }
}
