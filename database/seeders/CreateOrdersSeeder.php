<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Orders;
use Illuminate\Support\Str;
class CreateOrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            Orders::insert([
                'nama_kota' => Str::random(12),
                'nama_kota_tujuan' => Str::random(12),
                'kendaraan' => Str::random(8),
                'harga' => rand(100,10000000),
                'berat' => rand(100,150),
            ]);
        }
    }
}
