<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateWiseCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('state_wise_cities')->insert(['City'=>'Muzaffarpur', 'State'=>'Bihar']);
        DB::table('state_wise_cities')->insert(['City'=>'Samstipur', 'State'=>'Bihar']);
        DB::table('state_wise_cities')->insert(['City'=>'Darbhanga', 'State'=>'Bihar']);
        DB::table('state_wise_cities')->insert(['City'=>'Patna', 'State'=>'Bihar']);
    }
}
