<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create();
        
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

        // User::create(
        //     [
        //         "username" => "Paul Reyes",
        //         "name" => "Paul Reyes",
        //         "country" => "Philippines",
        //         "affiliation" => "Philippine General Hospital",
        //         "contact_number" => "09214048218",
        //         "userType" => "speaker",
        //         "email" => "pcreyes09@gmail.com",
        //         "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
        //         // ACAspeakers2025*
                
        //     ]
        // );

        // User::create(
        //     [
        //         "username" => "Peñafrancia C. Cano",
        //         "name" => "Peñafrancia C. Cano",
        //         "country" => "Philippines",
        //         // "affiliation" => "",
        //         // "contact_number" => "",
        //         "userType" => "speaker",
        //         "email" => "pencano@yahoo.com",
        //         "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
        //         // ACAspeakers2025*
                
        //     ]
        // );

        User::create(
            [
                "profile_photo_path" => "3",
                "username" => "Ban Leong",
                "name" => "Ban Leong",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                // "email" => "sng.ban.leong@singhealth.com.sg",
                "email" => $faker->unique()->safeEmail,
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "profile_photo_path" => "3",
                "username" => "Susilo Chandra",
                "name" => "Susilo Chandra",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                // "email" => "susilochandra@hotmail.com",
                "email" => $faker->unique()->safeEmail,
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "profile_photo_path" => "3",
                "username" => "Jeffrey Pasternak",
                "name" => "Jeffrey Pasternak",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                // "email" => "pasternak.jeffrey@mayo.edu",
                "email" => $faker->unique()->safeEmail,
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "profile_photo_path" => "3",
                "username" => "Heather Nixon",
                "name" => "Heather Nixon",
                // "country" => "",
                "affiliation" => "Society of Obstetric Anesthesia President",
                // "contact_number" => "",
                "userType" => "speaker",
                // "email" => "hnixon1@uic.edu",
                "email" => $faker->unique()->safeEmail,
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "profile_photo_path" => "3",
                "username" => "Nabil Elkassabany",
                "name" => "Nabil Elkassabany",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                // "email" => "nelkassabany@gmail.com",
                "email" => $faker->unique()->safeEmail,
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "profile_photo_path" => "3",
                "username" => "Afak Nsiri",
                "name" => "Afak Nsiri",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                // "email" => "ibramafak2000@gmail.com",
                "email" => $faker->unique()->safeEmail,
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "profile_photo_path" => "3",
                "username" => "Sanjib Adhikary",
                "name" => "Sanjib Adhikary",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                // "email" => "sadhikary1@pennstatehealth.psu.edu",
                "email" => $faker->unique()->safeEmail,
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );
        User::create(
            [
                "profile_photo_path" => "3",
                "username" => "Jean Louis Horn",
                "name" => "Jean Louis Horn",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                // "email" => "nrohlj@gmail.com",
                "email" => $faker->unique()->safeEmail,
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "profile_photo_path" => "3",
                "username" => "Daniela Filipescu",
                "name" => "Daniela Filipescu",
                // "country" => "",
                "affiliation" => "WFSA President",
                // "contact_number" => "",
                "userType" => "speaker",
                // "email" => "1danielaf@gmail.com",
                "email" => $faker->unique()->safeEmail,
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "profile_photo_path" => "3",
                "username" => "Patrick Giam",
                "name" => "Patrick Giam",
                // "country" => "",
                "affiliation" => "American Society of Anesthesiologists President",
                // "contact_number" => "",
                "userType" => "speaker",
                // "email" => "p.giam@asahq.org",
                "email" => $faker->unique()->safeEmail,
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "profile_photo_path" => "3",
                "username" => "Athmaja Thottungal",
                "name" => "Athmaja Thottungal",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                // "email" => "paramathma96@gmail.com",
                "email" => $faker->unique()->safeEmail,
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "profile_photo_path" => "3",
                "username" => "Rodney Gabriel",
                "name" => "Rodney Gabriel",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                // "email" => "ragabriel@health.ucsd.edu",
                "email" => $faker->unique()->safeEmail,
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "profile_photo_path" => "3",
                "username" => "Adrian Gelb",
                "name" => "Adrian Gelb",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                // "email" => "adrian.gelb@ucsf.edu",
                "email" => $faker->unique()->safeEmail,
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "profile_photo_path" => "3",
                "username" => "Wanda Popescu",
                "name" => "Wanda Popescu",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                // "email" => "Wanda.popescu@yale.edu",
                "email" => $faker->unique()->safeEmail,
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "profile_photo_path" => "3",
                "username" => "Annery Garcia-Marcinkiewicz",
                "name" => "Annery Garcia-Marcinkiewicz",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                // "email" => "Garciamara@chop.edu",
                "email" => $faker->unique()->safeEmail,
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "profile_photo_path" => "3",
                "username" => "Carina Li",
                "name" => "Carina Li",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                // "email" => "drlicarina@gmail.com",
                "email" => $faker->unique()->safeEmail,
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "profile_photo_path" => "3",
                "username" => "Shigeki Yamaguchi",
                "name" => "Shigeki Yamaguchi",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                // "email" => "shigeki@dokkyomed.ac.jp",
                "email" => $faker->unique()->safeEmail,
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "profile_photo_path" => "3",
                "username" => "Sasikaan Nimmaanrat",
                "name" => "Sasikaan Nimmaanrat",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                // "email" => "snimmaanrat@yahoo.com.au",
                "email" => $faker->unique()->safeEmail,
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "profile_photo_path" => "3",
                "username" => "Dato' Yong Chow Yen",
                "name" => "Dato' Yong Chow Yen",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                // "email" => "ycyen2002@yahoo.com",
                "email" => $faker->unique()->safeEmail,
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "profile_photo_path" => "3",
                "username" => "Phuping Akavipat",
                "name" => "Phuping Akavipat",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                // "email" => "ppakvp@hotmail.com",
                "email" => $faker->unique()->safeEmail,
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "profile_photo_path" => "3",
                "username" => "Samuel Ern Hung Tsan",
                "name" => "Samuel Ern Hung Tsan",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                // "email" => "Samuel.tsan@gmail.com",
                "email" => $faker->unique()->safeEmail,
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "profile_photo_path" => "3",
                "username" => "Ina Ismiarty Shariffuddin",
                "name" => "Ina Ismiarty Shariffuddin",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                // "email" => "inashariffuddin@gmail.com",
                "email" => $faker->unique()->safeEmail,
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "profile_photo_path" => "3",
                "username" => "Tae-Yop Kim",
                "name" => "Tae-Yop Kim",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                // "email" => "taeyop@gmail.com",
                "email" => $faker->unique()->safeEmail,
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "profile_photo_path" => "3",
                "username" => "Alex Sia",
                "name" => "Alex Sia",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                // "email" => "alex.sia.t.h@singhealth.com.sg",
                "email" => $faker->unique()->safeEmail,
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "profile_photo_path" => "3",
                "username" => "Varinee Lekprasert",
                "name" => "Varinee Lekprasert",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                // "email" => "varinee.lec@mahidol.ac.th",
                "email" => $faker->unique()->safeEmail,
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "profile_photo_path" => "3",
                "username" => "Raveenthiran Rasiah",
                "name" => "Raveenthiran Rasiah",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                // "email" => "drraveen21@gmail.com",
                "email" => $faker->unique()->safeEmail,
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "profile_photo_path" => "3",
                "username" => "Shahridan Fathil",
                "name" => "Shahridan Fathil",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                // "email" => "cooldoc1971@gmail.com",
                "email" => $faker->unique()->safeEmail,
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "profile_photo_path" => "3",
                "username" => "Azarinah Izaham",
                "name" => "Azarinah Izaham",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                // "email" => "azaizaham@yahoo.com",
                "email" => $faker->unique()->safeEmail,
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "profile_photo_path" => "3",
                "username" => "Hugo Vereecke",
                "name" => "Hugo Vereecke",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                // "email" => "azaizaham@yahoo.com",
                "email" => $faker->unique()->safeEmail,
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "profile_photo_path" => "3",
                "username" => "SUNEEL DESAI",
                "name" => "SUNEEL DESAI",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                // "email" => "azaizaham@yahoo.com",
                "email" => $faker->unique()->safeEmail,
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "profile_photo_path" => "3",
                "username" => "Suresh Paranjothy",
                "name" => "Suresh Paranjothy",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                // "email" => "azaizaham@yahoo.com",
                "email" => $faker->unique()->safeEmail,
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

        User::create(
            [
                "profile_photo_path" => "3",
                "username" => "BALAVENKAT SUBRAMANIAN",
                "name" => "BALAVENKAT SUBRAMANIAN",
                // "country" => "",
                // "affiliation" => "",
                // "contact_number" => "",
                "userType" => "speaker",
                // "email" => "azaizaham@yahoo.com",
                "email" => $faker->unique()->safeEmail,
                "password" => "$2y$12"."$"."O0U9GmdP3BXrUUqNgKOCFOWiSxc9ufhJKIklQv66RqPWOqmkVOBqC"
                // ACAspeakers2025*
                
            ]
        );

    }
}
