<?php

use Illuminate\Database\Seeder;
use App\Models\CarMake;
use App\Models\CarClass;
use App\Models\CarModel;
use Illuminate\Support\Facades\DB;

class CarsMakeModelClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

 
    public function run()
    {
        
        // get the data for the cars from the array
        $filename = __DIR__."/CarModels.json";
        print $filename;
        $jsondata = file_get_contents($filename);
        $carsArray = json_decode($jsondata, true);

 
        foreach ($carsArray as $make => $models) {
            foreach ($models as $model => $class) {

                
                // enter the car make
                if (!DB::table('carMake')->where('company', $make)->first()){
                    CarMake::create([ 'company' => $make ]);
                }  
            
                // enter the car class
                if (!DB::table('carClass')->where('class', $class)->first()) {
                    CarClass::create([ 'class' => $class ]);
                }

                //enter in the carModel
                if (!DB::table('carModel')->where('model', $model)->first()){
                    CarModel::create([
                        'makeId' => CarMake::where('company', $make)->value('id'),
                        'classId' => CarClass::where('class', $class)->value('id'),
                        'model' => $model
                    ]);
                }
                
            }

            

            
        }

    }
  
}


