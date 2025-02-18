<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('homes')->insert([
            'greeting' => 'Hi! Iam Rosyihan',
            'about_me' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        ]);
    }
}
