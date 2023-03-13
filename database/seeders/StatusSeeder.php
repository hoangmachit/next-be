<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $status = [
            [
                'name' => 'NoActive',
                'sort' => 1
            ],
            [
                'name' => 'Active',
                'sort' => 2
            ]
        ];
        foreach ($status as $key => $item) {
            Status::create($item);
        }
    }
}
