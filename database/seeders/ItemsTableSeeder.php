<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    public function run(): void
    {
        // Create 500 sample items
        $items = [];

        for ($i = 1; $i <= 500; $i++) {
            $items[] = ['name' => 'Item ' . $i];
        }

        Item::insert($items);
    }
}
