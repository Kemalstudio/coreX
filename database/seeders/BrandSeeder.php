<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $brands = [
            [
                'name' => 'Apple',
                'image' => null, // Example of a brand with no image
            ],
            [
                'name' => 'Samsung',
                'image' => null, // Example of a brand with no image
            ],
            [
                'name' => 'Sony',
                'image' => null, // Example of a brand with no image
            ],
            [
                'name' => 'Google',
                'image' => null, // Example of a brand with no image
            ],
            [
                'name' => 'Microsoft',
                'image' => null, // Example of a brand with no image
            ],
        ];

        foreach ($brands as $brandData) {
            Brand::create($brandData);
        }
    }
}
