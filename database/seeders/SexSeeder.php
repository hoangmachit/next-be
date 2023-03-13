<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sex;

class SexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sexs = [
            [
                'name' => 'Male',
                'type' => 'male',
                'sort' => 1                
            ],
            [
                'name' => 'Female',
                'type' => 'famale',
                'sort' => 2               
            ],
            [
                'name' => 'Unknown',
                'type' => 'unknown',
                'sort' => 1                
            ]
        ];
        foreach ($sexs as $key => $item) {
            Sex::create($item);
        }
    }
}
