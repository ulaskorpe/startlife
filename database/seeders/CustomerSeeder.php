<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $array = [
         [1,"Jordy",'Amsterdam','Netherlands','1984-01-02'],
         [1,"Joel",'Amsterdam','Netherlands','1993-08-22'],
         [0,"Mariella",'Castricum','Netherlands','1998-03-05'],
         [1,"Moshen",'Zaandam','Netherlands','1998-12-09'],
         [1,"Joris",'Leiden','Netherlands','1988-01-09'],
         [1,"Ella",'Brussels','Belgium','2000-03-19']


     ];

     foreach ($array as $item) {
      $c = new  Customer();
      $c->is_male = $item[0];
      $c->first_name=$item[1];
      $c->city=$item[2];
      $c->country=$item[3];
      $c->company_id=1;
      $c->birth_date=$item[4];
    //  $c->save();

     }
    }
}
