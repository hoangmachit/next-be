<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OrderStatus;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $orderStatus = [
            [
                'name' => 'News',
                'sort' => 1
            ],
            [
                'name' => 'Cancel',
                'sort' => 2
            ],
            [
                'name' => 'Progresbar',
                'sort' => 3
            ],
            [
                'name' => 'Sended',
                'sort' => 4
            ],
            [
                'name' => 'Complete',
                'sort' => 5
            ]
        ];
        foreach ($orderStatus as $key => $item) {
            OrderStatus::create($item);
        }
    }
}
