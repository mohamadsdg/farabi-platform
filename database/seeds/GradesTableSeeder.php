<?php

use Illuminate\Database\Seeder;
use App\Grade;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert default values
        Grade::insert([
            [
                'title' => 'دیپلم',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'title' => 'کارشناسی',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'title' => 'کارشناسی ارشد',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'title' => 'دکتری',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
        ]);
    }
}
