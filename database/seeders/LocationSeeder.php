<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            $locations = [
                ['name' => 'New York City', 'country' => 'United States'],
                ['name' => 'London', 'country' => 'United Kingdom'],
                ['name' => 'Paris', 'country' => 'France'],
                ['name' => 'Tokyo', 'country' => 'Japan'],
                ['name' => 'Sydney', 'country' => 'Australia'],
                ['name' => 'Dubai', 'country' => 'United Arab Emirates'],
                ['name' => 'Berlin', 'country' => 'Germany'],
                ['name' => 'Rome', 'country' => 'Italy'],
                ['name' => 'Rio de Janeiro', 'country' => 'Brazil'],
                ['name' => 'Cape Town', 'country' => 'South Africa'],
            ];

            foreach ($locations as $locationData) {
                Location::create($locationData);
            }
        }
    }
}
