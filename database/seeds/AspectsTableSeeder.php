<?php

use Illuminate\Database\Seeder;

class AspectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aspects')->insert([
            ['area_id' => '1', 'name' => 'Making relationships'],
            ['area_id' => '1', 'name' => 'Self confidence and self-awareness'],
            ['area_id' => '1', 'name' => 'Managing feelings and behaviours'],
            ['area_id' => '2', 'name' => 'Moving and handling'],
            ['area_id' => '2', 'name' => 'Health and self-care'],
            ['area_id' => '3', 'name' => 'Listening and attention'],
            ['area_id' => '3', 'name' => 'Understanding'],
            ['area_id' => '3', 'name' => 'Speaking'],
            ['area_id' => '4', 'name' => 'Reading'],
            ['area_id' => '4', 'name' => 'Writing'],
            ['area_id' => '5', 'name' => 'Numbers'],
            ['area_id' => '5', 'name' => 'Shape, space and measure'],
            ['area_id' => '6', 'name' => 'People and communities'],
            ['area_id' => '6', 'name' => 'The world'],
            ['area_id' => '6', 'name' => 'Technology'],
            ['area_id' => '7', 'name' => 'Exploring and using media and materials'],
            ['area_id' => '7', 'name' => 'Being imaginative'],
        ]);
    }
}