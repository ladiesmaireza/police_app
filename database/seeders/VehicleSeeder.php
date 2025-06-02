<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleSeeder extends Seeder
{
    public function run(): void
    {

        $userId = 33;
        DB::table('vehicles')->insert([
            [
                'user_id' => $userId,
                'license_plate' => 'B 1234 XY',
                'type' => 'Mobil',
                'brand' => 'Honda',
                'color' => 'Merah',
                'is_stolen' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => $userId,
                'license_plate' => 'D 5678 ZZ',
                'type' => 'Motor',
                'brand' => 'Yamaha',
                'color' => 'Putih Biru',
                'is_stolen' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
