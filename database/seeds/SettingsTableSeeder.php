<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
        	'site_name'=>'myblog',
        	'address'=>'Serbia, Belgrade',
        	'contact_number'=>'1 650 432 900',
        	'contact_email'=>'info@myblog.com',
            'about'=>'Za ljubitelje nauke ovaj sajt nudi fascinantan prozor u tehnološki svet, pružajući najnovije vesti i analize od najnovijih dešavanja u svetu socijalnih mreža do inovacija u polju zdravstva, transporta, robotike i ostale tehnologije. Želimo da vas kao naše čitaoce osnažimo i inspirišemo, kao i da zadovoljimo vašu potrebu da čitate vesti koje su stvarno važne.'
        ]);
    }
}
