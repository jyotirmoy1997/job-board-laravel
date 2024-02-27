<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        Listing::create([
            'title' => 'Software Engineer', 
            'tags' => 'TypeScript, Angular, Spring Boot',
            'company' => 'Google',
            'location' => 'Bengaluru',
            'email' => 'email1@email.com',
            'salary' => '17-20',
            'website' => 'https://www.acme.com',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        ]);

        Listing::create([
            'title' => 'Full-Stack Engineer',
            'tags' => 'PHP, Laravel, Vue',
            'company' => 'Oracle',
            'location' => 'Hyderabad',
            'email' => 'email2@email.com',
            'salary' => '10-12',
            'website' => 'https://www.starkindustries.com',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
          ]);

          Listing::create([
            'title' => 'Front-end Engineer',
            'tags' => 'JavaScript, React, Next.js',
            'company' => 'Facebook',
            'location' => 'Bengaluru',
            'email' => 'email2@email.com',
            'salary' => '8-10',
            'website' => 'https://www.starkindustries.com',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
          ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
