<?php

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            [
                'type'         => 'prime',
                'name'         => 'Personal, Social and Emotional Development',
                'abbreviation' => 'PSED'
            ],
            [
                'type'         => 'prime',
                'name'         => 'Physical Development',
                'abbreviation' => 'PD'
            ],
            [
                'type'         => 'prime',
                'name'         => 'Communication and Language',
                'abbreviation' => 'CL'
            ],
            [
                'type'         => 'specific',
                'name'         => 'Literacy',
                'abbreviation' => 'L'
            ],
            [
                'type'         => 'specific',
                'name'         => 'Mathematics',
                'abbreviation' => 'M'
            ],
            [
                'type'         => 'specific',
                'name'         => 'Understanding the World',
                'abbreviation' => 'UW'
            ],
            [
                'type'         => 'specific',
                'name'         => 'Expressive Arts and Design',
                'abbreviation' => 'AD'
            ],
        ]);
    }
}