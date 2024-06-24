<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;


class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            ['name' => 'Front-end'],
            ['name' => 'Back-end'],
            ['name' => 'Full-Stack'],
        ];

        foreach ($types as $type) {
            Type::create($type);
        }
    }
}
