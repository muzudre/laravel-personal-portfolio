<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'title' => Str::random(10),
            'description' => Str::random(10),
        ]);

        DB::table('contacts')->insert([
            'title' => Str::random(10),
            'phone' => Str::random(10),
            'email' => Str::random(10),
            'address' => Str::random(10)
        ]);
    }
}
