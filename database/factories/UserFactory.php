<?php

namespace Database\Factories;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{

    protected $model = User::class;

    public function definition()
    {
        // Let's clear the users table first
        User::truncate();
        $password = Hash::make('root');

        User::create([
            'name' => 'Administrator',
            'email' => 'admin@test.com',
            'password' => $password,
        ]);
        
        return [
            'name' => $this->faker->unique()->name(),
            'email' => $this->faker->email(),
            'password' => $password,
        ];
    }
}

