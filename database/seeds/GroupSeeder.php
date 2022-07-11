<?php

use Illuminate\Database\Seeder;
use App\Group;
class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_seeds = [
            ['id' => '1', 'name' => 'M3CS2511A', 'part' => '1A'],
            ['id' => '2', 'name' => 'M3CS2511B', 'part' => '1B'],
            ['id' => '3', 'name' => 'M3CS2512A', 'part' => '2A'],
            ['id' => '4', 'name' => 'M3CS2512B', 'part' => '2B'],
            ['id' => '5', 'name' => 'M3CS2512C', 'part' => '2C'],
        ];

        foreach($data_seeds as $seed) {
            Group::firstOrCreate($seed);
        }
    }
}
