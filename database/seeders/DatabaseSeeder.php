<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::create(
        //     [
        //         "username" => "admin",
        //         "userType" => "admin",
        //         "email" => "psa.acacongress2025@gmail.com",
        //         "password" => "$2y$12"."$". "EjSTD.i6uK8i1zOjwNLX.uBnDIpIKSWwqNvO3Q8W3aYNKIi3rdwe2"
        //         // ACA2025manila!
                
        //     ]
        // );

        User::create(
            [
                "username" => "Paul Reyes",
                "name" => "Paul Reyes",
                "country" => "Philippines",
                "affiliation" => "Philippine General Hospital",
                "contact_number" => "09214048218",
                "userType" => "speaker",
                "email" => "pcreyes09@gmail.com",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Peñafrancia C. Cano",
                "name" => "Peñafrancia C. Cano",
                "country" => "Philippines",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "pencano@yahoo.com",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Ban Leong",
                "name" => "Ban Leong",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "sng.ban.leong@singhealth.com.sg",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Susilo Chandra",
                "name" => "Susilo Chandra",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "susilochandra@hotmail.com",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Xavier Falieres",
                "name" => "Xavier Falieres",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "x.falieres@gmail.com",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Jeffrey Pasternak",
                "name" => "Jeffrey Pasternak",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "pasternak.jeffrey@mayo.edu",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Heather Nixon",
                "name" => "Heather Nixon",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "hnixon1@uic.edu",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Nabil Elkassabany",
                "name" => "Nabil Elkassabany",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "nelkassabany@gmail.com",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Afak Nsiri",
                "name" => "Afak Nsiri",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "ibramafak2000@gmail.com",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Sanjib Adhikary",
                "name" => "Sanjib Adhikary",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "sadhikary1@pennstatehealth.psu.edu",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );
        User::create(
            [
                "username" => "Jean Louis Horn",
                "name" => "Jean Louis Horn",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "nrohlj@gmail.com",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Daniela Filipescu",
                "name" => "Daniela Filipescu",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "1danielaf@gmail.com",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Patrick Giam",
                "name" => "Patrick Giam",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "p.giam@asahq.org",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Chris Bowden",
                "name" => "Chris Bowden",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "bowdencc@hotmail.com",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Athmaja Thottungal",
                "name" => "Athmaja Thottungal",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "paramathma96@gmail.com",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Tony Ng",
                "name" => "Tony Ng",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "Tonyktng@gmail.com",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Rodney Gabriel",
                "name" => "Rodney Gabriel",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "ragabriel@health.ucsd.edu",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Adrian Gelb",
                "name" => "Adrian Gelb",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "adrian.gelb@ucsf.edu",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Wanda Popescu",
                "name" => "Wanda Popescu",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "Wanda.popescu@yale.edu",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Annery Garcia-Marcinkiewicz",
                "name" => "Annery Garcia-Marcinkiewicz",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "Garciamara@chop.edu",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Carina Li",
                "name" => "Carina Li",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "drlicarina@gmail.com",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Shigeki Yamaguchi",
                "name" => "Shigeki Yamaguchi",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "shigeki@dokkyomed.ac.jp",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Sasikaan Nimmaanrat",
                "name" => "Sasikaan Nimmaanrat",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "snimmaanrat@yahoo.com.au",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Hasmizy Muhammad",
                "name" => "Hasmizy Muhammad",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "hasmizymuhammad@gmail.com",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Sophia Chew",
                "name" => "Sophia Chew",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "sthchew@gmail.com",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Dato' Yong Chow Yen",
                "name" => "Dato' Yong Chow Yen",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "ycyen2002@yahoo.com",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Biswas Pradhan",
                "name" => "Biswas Pradhan",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "biswaspradhan@yahoo.com",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Phuping Akavipat",
                "name" => "Phuping Akavipat",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "ppakvp@hotmail.com",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Samuel Ern Hung Tsan",
                "name" => "Samuel Ern Hung Tsan",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "Samuel.tsan@gmail.com",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Jin Tae Kim",
                "name" => "Jin Tae Kim",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "jintae73@snu.ac.kr; jintae73@gmail.com",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Ina Ismiarty Shariffuddin",
                "name" => "Ina Ismiarty Shariffuddin",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "inashariffuddin@gmail.com",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Tae-Yop Kim",
                "name" => "Tae-Yop Kim",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "taeyop@gmail.com",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Suraphong Lorsomradee",
                "name" => "Suraphong Lorsomradee",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "slorsomr@gmail.com",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Alex Sia",
                "name" => "Alex Sia",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "alex.sia.t.h@singhealth.com.sg",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Varinee Lekprasert",
                "name" => "Varinee Lekprasert",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "varinee.lec@mahidol.ac.th",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Raveenthiran Rasiah",
                "name" => "Raveenthiran Rasiah",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "drraveen21@gmail.com",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Shahdridan Fathil",
                "name" => "Shahdridan Fathil",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "cooldoc1971@gmail.com",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Azarinah Izaham",
                "name" => "Azarinah Izaham",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "azaizaham@yahoo.com",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "username" => "Vesna Jevtovic-Todorovic",
                "name" => "Vesna Jevtovic-Todorovic",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                "email" => "vesna.jevtovic-todorovic@cuanschutz.edu",
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

    }
}
