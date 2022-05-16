<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    private $data = [
        [
            'nama' => 'cilok',
        ],
        [
            'nama' => 'ban',
        ]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	collect($this->data)
        ->map(function (array $item) {
            Product::updateOrCreate($item);
        });
    }
}
