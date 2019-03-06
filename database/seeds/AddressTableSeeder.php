<?php

use Illuminate\Database\Seeder;

class AddressTableSeeder extends Seeder
{
 
  public function run()
    {

           factory(App\Models\Address::class, 50)->create(); //todo have look at how to choose how many
    }
}