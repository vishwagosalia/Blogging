<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([

           'site_name' =>"Shailja's Blog",
           'contact_number' =>'8369913940',
           'contact_email' =>'admin@gmail.com',
           'address' =>'Ramjharukha CHS'
        ]);
    }
}
