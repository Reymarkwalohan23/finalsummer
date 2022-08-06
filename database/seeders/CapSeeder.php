<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cap;

class CapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $caps = [
            [
                'brand' => 'Adidas',
                'type' => 'Baseball Cap',
                'color' => 'Blue',
                'price' => '2022',
            ],
            [
                'brand' => 'Penshoppe',
                'type' => 'Bucket Cap',
                'color' => 'Cyan',
                'price' => '20212',
            ],
            [
                'brand' => 'Nike',
                'type' => 'Sun Visor',
                'color' => 'Blue',
                'price' => '202211',
            ]

            ];
            foreach($caps as $c){
                Cap::create($c);
            }
    }
}