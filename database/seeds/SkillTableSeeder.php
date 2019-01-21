<?php

use Illuminate\Database\Seeder;
use App\Skill;

class SkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert default values
        Skill::insert([
            [
                'title' => 'توسعه استارتاپ',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'title' => 'توسعه استارتاپ',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'title' => 'اجرای عملیات',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'title' => 'طراحی',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'title' => 'مدیریت محصول',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'title' => 'فنی',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'title' => 'فروش',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'title' => 'مالی',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'title' => 'استراتژی',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'title' => 'استراتژی',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'title' => 'سرمایه گذاری و جذب منابع',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'title' => 'ساخت تجربه کاربری',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'title' => 'مارکتینگ',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'title' => 'حقوقی',
                'display' => 1,
                'position' => 1,
                'created_at' => \Carbon\Carbon::now()
            ]
        ]);
    }
}
