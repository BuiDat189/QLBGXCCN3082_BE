<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class GiaoDichSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('giao_diches')->delete();
        DB::table('giao_diches')->truncate();

        $giaoDiches = [
            [
                'so_tien_giao_dich' => 250000,
                'id_xe' => 1,
                'phuong_thuc_thanh_toan' => 1, // Tiền mặt/ chuyển khoản
                'trang_thai_giao_dich' => 1,
                'ngay_het_han' => Carbon::parse('2025-06-30'),
                'ma_giao_dich' => 'GD-' . strtoupper(Str::random(8)),
            ],
            [
                'so_tien_giao_dich' => 500000,
                'id_xe' => 2,
                'phuong_thuc_thanh_toan' => 2,
                'trang_thai_giao_dich' => 1,
                'ngay_het_han' => Carbon::parse('2025-07-05'),
                'ma_giao_dich' => 'GD-' . strtoupper(Str::random(8)),
            ],
            [
                'so_tien_giao_dich' => 300000,
                'id_xe' => 3,
                'phuong_thuc_thanh_toan' => 1,
                'trang_thai_giao_dich' => 0,
                'ngay_het_han' => Carbon::parse('2025-07-10'),
                'ma_giao_dich' => 'GD-' . strtoupper(Str::random(8)),
            ],
            [
                'so_tien_giao_dich' => 150000,
                'id_xe' => 1,
                'phuong_thuc_thanh_toan' => 2,
                'trang_thai_giao_dich' => 1,
                'ngay_het_han' => Carbon::parse('2025-07-15'),
                'ma_giao_dich' => 'GD-' . strtoupper(Str::random(8)),
            ],
            [
                'so_tien_giao_dich' => 600000,
                'id_xe' => 4,
                'phuong_thuc_thanh_toan' => 1,
                'trang_thai_giao_dich' => 1,
                'ngay_het_han' => Carbon::parse('2025-08-01'),
                'ma_giao_dich' => 'GD-' . strtoupper(Str::random(8)),
            ],
            [
                'so_tien_giao_dich' => 450000,
                'id_xe' => 5,
                'phuong_thuc_thanh_toan' => 1,
                'trang_thai_giao_dich' => 1,
                'ngay_het_han' => Carbon::parse('2025-08-10'),
                'ma_giao_dich' => 'GD-' . strtoupper(Str::random(8)),
            ],
            [
                'so_tien_giao_dich' => 800000,
                'id_xe' => 2,
                'phuong_thuc_thanh_toan' => 2,
                'trang_thai_giao_dich' => 0,
                'ngay_het_han' => Carbon::parse('2025-08-15'),
                'ma_giao_dich' => 'GD-' . strtoupper(Str::random(8)),
            ],
            [
                'so_tien_giao_dich' => 320000,
                'id_xe' => 3,
                'phuong_thuc_thanh_toan' => 1,
                'trang_thai_giao_dich' => 1,
                'ngay_het_han' => Carbon::parse('2025-08-20'),
                'ma_giao_dich' => 'GD-' . strtoupper(Str::random(8)),
            ],
            [
                'so_tien_giao_dich' => 200000,
                'id_xe' => 4,
                'phuong_thuc_thanh_toan' => 1,
                'trang_thai_giao_dich' => 1,
                'ngay_het_han' => Carbon::parse('2025-08-25'),
                'ma_giao_dich' => 'GD-' . strtoupper(Str::random(8)),
            ],
            [
                'so_tien_giao_dich' => 750000,
                'id_xe' => 5,
                'phuong_thuc_thanh_toan' => 2,
                'trang_thai_giao_dich' => 1,
                'ngay_het_han' => Carbon::parse('2025-09-01'),
                'ma_giao_dich' => 'GD-' . strtoupper(Str::random(8)),
            ],
            [
                'so_tien_giao_dich' => 400000,
                'id_xe' => 7,
                'phuong_thuc_thanh_toan' => 2,
                'trang_thai_giao_dich' => 1,
                'ngay_het_han' => Carbon::parse('2025-09-01'),
                'ma_giao_dich' => 'GD-' . strtoupper(Str::random(8)),
            ],
            [
                'so_tien_giao_dich' => 200000,
                'id_xe' => 6,
                'phuong_thuc_thanh_toan' => 2,
                'trang_thai_giao_dich' => 1,
                'ngay_het_han' => Carbon::parse('2025-09-01'),
                'ma_giao_dich' => 'GD-' . strtoupper(Str::random(8)),
            ],
        ];

        DB::table('giao_diches')->insert($giaoDiches);
    }
}
