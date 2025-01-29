<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Electronics'],
            ['name' => 'Clothing'],
            ['name' => 'Home & Kitchen'],
            ['name' => 'Books'],
            ['name' => 'Beauty & Personal Care'],
            ['name' => 'Toys & Games'],
            ['name' => 'Sports & Outdoors'],
            ['name' => 'Food & Beverages'],
            ['name' => 'Health & Wellness'],
            ['name' => 'Automotive'],
        ];

        foreach ($categories as $categoryData) {
            Category::create($categoryData);
    }
    }
}
