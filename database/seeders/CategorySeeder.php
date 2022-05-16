<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    private $data = [
        ['nama' => 'makanan'],
        ['nama' => 'minuman'],
        ['nama' => 'kendaraan'],
        ['nama' => 'ban'],
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
            Category::updateOrCreate($item);
        });
    }
}
