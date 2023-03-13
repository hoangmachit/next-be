<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Payment;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payments = [
            [
                'name' => 'Online Payment',
                'description' => 'Online Payment Description',
                // 'status_id' => 1,
            ],
            [
                'name' => 'ATM Payment',
                'description' => 'ATM Payment Description',
                // 'status_id' => 2,
            ],
            [
                'name' => 'COD Payment',
                'description' => 'COD Payment Description',
                // 'status_id' => 2,
            ]
        ];
        foreach ($payments as $key => $item) {
            Payment::create($item);
        }
    }
}
