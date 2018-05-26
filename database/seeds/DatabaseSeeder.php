<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $this->call(AdminSeeder::class);
//        $this->call(DatatablesSeeder::class);
//        $this->call(CountrySeeder::class);
//
        DB::table('booking')->insert([

            'user_id' => '1',
            'type' => 'residential',
            'block' => 'general',
            'total_price' => '1800000',
            'size' => '5 Marla',
            'booking_date' => '2018-02-01',
            'total_installments' => '18',
            'installment_amount' => '90000',
            'society' => 'CapitalSmartCity',
            'confirmation_after' => '3'



        ]);
    }
}
