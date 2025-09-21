<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;
use Faker\Factory as Faker;

class ContactSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('en_US');
        for ($i = 0; $i < 30; $i++) {
            Contact::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber,
                'subject' => $faker->sentence(3),
                'message' => $faker->paragraph(2),
            ]);
        }
    }
}
