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
            [
                'name' => 'PT Jalantol Lingkarluar Jakarta',
            ],
            [
                'name' => 'PT Marga Sarana Jabar',
            ],
            [
                'name' => 'PT Trans Marga Jateng',
            ],
            [
                'name' => 'PT Transmarga Jatim Pasuruan',
            ],
            [
                'name' => 'PT Jasamarga Pandaan Tol',
            ],
            [
                'name' => 'PT Marga Nujyasumo Agung',
            ],
            [
                'name' => 'PT Marga Lingkar Jakarta',
            ],
            [
                'name' => 'PT Marga Trans Nusantara',
            ],
            [
                'name' => 'PT Jasamarga Bali Tol',
            ],
            [
                'name' => 'PT Marga Kunciran Cengkareng',
            ],
            [
                'name' => 'PT Jasamarga Kualanamu Tol',
            ],
        ];

        for ($i = 2;$i <= 22;$i++){
            Cabang::create([
               'user_id' => $i,
               'nama' => $cabang[$i-2]['name']
            ]);
        }
    }
}
