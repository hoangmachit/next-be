<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Device;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $devices = [
            [
                'name' => 'SP',
                'sort' => 1
            ],
            [
                'name' => 'PC',
                'sort' => 2
            ]
        ];
        foreach ($devices as $key => $item) {
            Device::create($item);
        }    
    }
}
