<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            ChucNangSeeder::class,
            ChucVuSeeder::class,
            ChiTietChucVuSeeder::class,
            AdminSeeder::class,
            CanHoSeeder::class,
            CuDanSeeder::class,
            ViTriDatSeeder::class,
            XeSeeder::class,
            LichSuRaVaoBaiXeSeeder::class,
            BaiXeSeeder::class,
            GiaoDichSeeder::class,
            AdminThongBaoSeeder::class,
            LoaiXeSeeder::class
        ]);
    }
}
