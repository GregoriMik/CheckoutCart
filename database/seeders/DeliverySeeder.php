<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class DeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deliveries')->insert([
                        'idd'=>'g1v1',
                        'image'=>'inpost.png',
                        'images'=>'',
                        'title'=>'Paczkomaty 24/7',
                        'val'=>'val1',
                        'nam'=>'group1',
                        'regular_price'=>'10.99',
                        'currency'=>'zł',
                        'price_id'=>'price_id1',
                        
        ]);
        DB::table('deliveries')->insert([
                        'idd'=>'g1v2',
                        'image'=>'dpd.jpg',
                        'images'=>'',
                        'title'=>'Kurier DPD',
                        'val'=>'val2',
                        'nam'=>'group1',
                        'regular_price'=>'18.00',
                        'currency'=>'zł',
                        'price_id'=>'price_id2',
                        
        ]);
        DB::table('deliveries')->insert([
                        'idd'=>'g1v3',
                        'image'=>'dpd.jpg',
                        'images'=>'',
                        'title'=>'Kurier DPD Pobranie',
                        'val'=>'val3',
                        'nam'=>'group1',
                        'regular_price'=>'22.00',
                        'currency'=>'zł',
                        'price_id'=>'price_id3',
                
        ]);
                    
    }
}