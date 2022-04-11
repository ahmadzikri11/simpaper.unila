<?php

namespace Database\Seeders;

use App\Models\Fakultas;
use Illuminate\Database\Seeder;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fakultas::insert(
            [
                ['id' => '1', 'fakultas' => 'Fakultas Teknik'],
                ['id' => '2', 'fakultas' => 'Fakultas Pertanian'],
                ['id' => '3', 'fakultas' => 'Fakultas Kedokteran'],
                ['id' => '4', 'fakultas' => 'Fakultas Matematika dan Ipa'],
                ['id' => '5', 'fakultas' => 'Fakultas Hukum'],
                ['id' => '6', 'fakultas' => 'Fakultas Ilmu Sosial dan Politik'],
                ['id' => '7', 'fakultas' => 'Fakultas Keguruan dan Ilmu Pendidikan'],
                ['id' => '8', 'fakultas' => 'Fakultas Ekonomi dan Bisnis']
            ]
        );
    }
}
