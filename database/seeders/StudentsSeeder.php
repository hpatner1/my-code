<?php

namespace Database\Seeders;
use App\Models\Students;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // DB::table('students')->insert([
         //   'full_name' => Str::random(100),
          //  'email' => Str::random(100).'@gmail.com',
           //  'address' => Str::random(100).'kano',
            // 'country'=> Str::random(100).'Nigeria',
            // 'state'=> Str::random(100).'kano',
             //'local_government'=> Str::random(100).'kumbotso',
          //   'zip'=> Str::random(100).'zip',
           //  'birthdate'=> Str::random(100).'birthdate',
           //  'gender'=> 'male',
           //   'p_email'=> Str::random(100).'',
            //  'p_mobile' => '08104394844',
            //  'p_address' =>  'Sheka baranda',
             // 'class'   => '1B',
             // 'section' =>  'Baranda',
             //  'admision_No' =>  numberBetween(1,100). '1',





            
    //    ]);
        //
               Students::factory()->count(100)->create();
       

    }
}
