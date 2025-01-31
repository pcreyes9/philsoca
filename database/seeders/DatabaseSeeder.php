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
        User::create(
            [
                "username" => "admin",
                "userType" => "admin",
                "email" => "psa.acacongress2025@gmail.com",
                "password" => "$2y$12"."$". "EjSTD.i6uK8i1zOjwNLX.uBnDIpIKSWwqNvO3Q8W3aYNKIi3rdwe2"
                // Aca2025manila!
                
            ]
        );

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
                // acaspeakers2025!
                
            ]
        );
        DB::table('teams')->insert([
            'user_id' => "1",
            'name' => "'s Team",
            'personal_team' => "1",
        ]);
    }
}
