<?php

use Illuminate\Database\Seeder;
use App\Cabang;
use App\User;
class CabangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cabang = [
            [
                'name' => 'Jagorawi',
            ],
            [
                'name' => 'Balmera',
            ],
            [
                'name' => 'Palikanci',
            ],
            [
                'name' => 'Semarang',
            ],
            [
                'name' => 'Cawang-Tomang-Cengkareng',
            ],
            [
                'name' => 'Jakarta-Tangerang',
            ],
            [
                'name' => 'Jakarta-Cikampek',
            ],
            [
                'name' => 'Surabaya-Gempol',
            ],
            [
                'name' => 'Bandung',
            ],
            [
                'name' => 'Purbaleunyi',
            ],
        ];

        for ($i = 2;$i <= 11;$i++){
            Cabang::create([
               'user_id' => $i,
               'nama' => $cabang[$i-2]['name']
            ]);
        }
    }
}
