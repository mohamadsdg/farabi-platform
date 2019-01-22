<?php

use Illuminate\Database\Seeder;
use App\Prop;

class PropsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert default values
        Prop::insert([
            [
                'title' => 'Augmented Reality',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'title' => 'Machine Learning',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'title' => 'Mobile app',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'title' => 'SaaS',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'title' => 'Telecom',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'title' => 'Cloud',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'title' => 'Robotics',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'title' => 'Data Science',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'title' => 'Block Chain',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'title' => 'Big Data',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'title' => 'Virtual Reality',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'title' => 'New Technologies',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'title' => 'IoT',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'title' => 'Artificial Intelligent',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ]
        ]);
    }
}
