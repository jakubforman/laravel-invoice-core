<?php

namespace Database\Seeders;


use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the items seeds.
     *
     * @return void
     */
    public function run()
    {
        // create 100 random items
        Item::factory(100)->create();
    }
}
