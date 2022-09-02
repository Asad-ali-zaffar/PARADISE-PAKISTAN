<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VisiterModel;
//create Faker
use Faker\Factory as Faker;

class VisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        // App\Models\User::factory(30)->create();
        //Seeder Code
        // $visiter= new VisiterModel;
        // $visiter->visiter_name="asad";
        // $visiter->visiter_email="asas@gmail.com";
        // $visiter->visiter_password="123456789";
        // $visiter->visiter_dob= now();
        // $visiter->visiter_gender="M";
        // $visiter->visiter_address="sasdads";
        // $visiter->visiter_country="asd";
        // $visiter->visiter_city="asdsa";
        // $visiter->visiter_phoneNo="123123";
        // $visiter->visiter_cnic="2131";
        // $visiter->visiter_img="img.jpg";
        // $visiter->save();
        //Faker Code
        $faker = Faker::create();
        for($i=1;$i<100;$i++)
        {
        $visiter= new VisiterModel;
        $visiter->visiter_name=$faker->name;
        $visiter->visiter_email=$faker->email;
        $visiter->visiter_password=$faker->password;
        $visiter->visiter_dob= $faker->date;
        $visiter->visiter_gender="M";
        $visiter->visiter_address=$faker->address;
        $visiter->visiter_country=$faker->country;
        $visiter->visiter_city=$faker->city;
        $visiter->visiter_phoneNo=$faker->numerify;
        $visiter->visiter_cnic=$faker->numerify;
        $visiter->visiter_img=$faker->image;
        $visiter->save();
    }
    }
}
