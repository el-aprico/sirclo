<?php

use Illuminate\Database\Seeder;
use App\Weight;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Weight::truncate();
        $len = 14;
        $date = date('Y-m-d');
        for ($len--; $len >= 0; $len--){
            $min = rand(45, 80);
            $max = $min - rand(-8, 8);
            $args = [
                'tanggal' => date(
                    'Y-m-d', strtotime($date. ' - '.$len.' days')
                ),
                'min' => $min,
                'max' => $max
            ];
            Weight::create($args);
        }
    }
}
