<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach(range(1,10) as $i){
            DB::table('student')->insert([
                'name'=>$faker->name,
                'email'=>$faker->unique()->safeEmail(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
