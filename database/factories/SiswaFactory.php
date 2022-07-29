<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nis' => $this->faker->unique()->numberBetween('101001', '602026'),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->email(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'firstName' => $this->faker->firstName(),
            'lastName' => $this->faker->lastName(),
            'namaAyah' => $this->faker->firstName('male'),
            'namaIbu' => $this->faker->firstName('female'),
            'tmpLahir' => $this->faker->city(),
            'tglLahir' => $this->faker->date(),
            'jnsKelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'alamat' => $this->faker->address(),
            'remember_token' => Str::random(16),
        ];
    }
}
