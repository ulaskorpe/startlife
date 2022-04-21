<?php

namespace App\Http\Controllers;

use App\Models\Company;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
   public function underConstruction()  {
       return view('under_construction');
   }

    public function test()  {


        return view('test');
    }

    public function  addCustomers(){


       $txt =' {

    "is_male":1,

    "first_name":"Jordy",

    "city":"Amsterdam",

    "country":"Netherlands",

    "birth_date":"1984-01-02"

  },

  {

    "is_male":1,

    "first_name":"Joël",

    "city":"Castricum",

    "country":"Netherlands",

    "birth_date":"1993-08-22"

  },

  {

    "is_male":0,

    "first_name":"Mariella",

    "city":"Amsterdam",

    "country":"Netherlands",

    "birth_date":"1998-03-05"

  },

  {

    "is_male":1,

    "first_name":"Moshen",

    "city":"Zaandam",

    "country":"Netherlands",

    "birth_date":"1998-12-09"

  },

  {

    "is_male":1,

    "first_name":"Joris",

    "city":"Leiden",

    "country":"Netherlands",

    "birth_date":"1988-01-09"

  },

  {

    "is_male":0,

    "first_name":"Ella",

    "city":"Brussels",

    "country":"Belgium",

    "birth_date":"2000-03-19"

  }';
        $file = public_path() . "/customers.json";
        $content = File::get($file);
       // $json = json_decode ($content);
        //echo $content;
        var_dump(json_decode($txt, true));

    }

    public function filterCustomers($company_id = 0,$birth_date = null){

        $company_id = ($company_id>0)?[$company_id]:Company::pluck('id')->toArray();
        $birth_date = (!empty($birth_date)) ? $birth_date : '1900-1-1';

        $customers = Customer::where('birth_date','>=',$birth_date)
            ->whereIn('company_id',$company_id)
            ->get();
        return $customers;

    }
}
