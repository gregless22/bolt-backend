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
        // use in production and development
        $this->call('CarsMakeModelClassTableSeeder'); // this must be before Cars Table Seeder
        
        // use in development only
        $this->call('CarsTableSeeder');

        // $this->call('AddressTableSeeder');
    }
}
