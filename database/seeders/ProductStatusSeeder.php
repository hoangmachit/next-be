<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductStatus;

class ProductStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $status = [
            [
                'name' => 'Privated',
                'sort' => 1
            ],
            [
                'name' => 'Published',
                'sort' => 2
            ],
            [
                'name' => 'Pendding',
                'sort' => 3
            ]
        ];
        foreach ($status as $key => $item) {
            ProductStatus::create($item);
        }
    }
}
