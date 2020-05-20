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
           'contact_number' =>'9999999999',
           'contact_email' =>'admin@gmail.com',
           'address' =>'Ganesh CHS'
        ]);
    }
}
