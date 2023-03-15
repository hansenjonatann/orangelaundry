<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::create([
            "items_name" => "Big Doll",
            "price_per_item" => "50.000"
        ]);
        Item::create([
            "items_name" => "Small Doll",
            "price_per_item" => "10.000"
        ]);
        Item::create([
            "items_name" => "Bed Cover Only",
            "price_per_item" => "25.000"
        ]);
        Item::create([
            "items_name" => "One Set",
            "price_per_item" => "35.000"
        ]);
        Item::create([
            "items_name" => "Almamater",
            "price_per_item" => "50.000"
        ]);
        Item::create([
            "items_name" => "Single Sprey [Non Pillow / Non Bolster Pillow ]",
            "price_per_item" => "7.000"
        ]);
        Item::create([
            "items_name" => "One Set Sprey",
            "price_per_item" => "10.000"
        ]);
        Item::create([
            "items_name" => "Queen",
            "price_per_item" => "10.000"
        ]);
        Item::create([
            "items_name" => "King",
            "price_per_item" => "15.000"
        ]);
    }
}
