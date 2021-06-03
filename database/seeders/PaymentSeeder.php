<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments')->insert([
                        'idd'=>'g2v1',
                        'image'=>'payU.png',
                        'images'=>'',
                        'title'=>'Paczkomaty 24/7',
                        'val'=>'val4',
                        'nam'=>'group2',
                        
        ]);
        DB::table('payments')->insert([
                        'idd'=>'g2v2',
                        'image'=>'pobranie.png',
                        'images'=>'',
                        'title'=>'Kurier DPD',
                        'val'=>'val5',
                        'nam'=>'group2'
                        
        ]);
        DB::table('payments')->insert([
                        'idd'=>'g2v3',
                        'image'=>'przelew.png',
                        'images'=>'',
                        'title'=>'Kurier DPD Pobranie',
                        'val'=>'val6',
                        'nam'=>'group2',
                
        ]);
                    
    }
}