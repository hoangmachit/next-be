<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Language;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages = [
            [
                'name' => 'Tiếng Việt',
                'code' => 'vi'
            ],
            [
                'name' => 'Tiếng Anh',
                'code' => 'en'
            ],
        ];
        foreach ($languages as $key => $item) {
            Language::create($item);
        }
    }
}
