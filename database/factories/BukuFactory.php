<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BukuFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kode_buku' => fake()->unique()->isbn10(),
            'judul' => fake()->sentence(3),
            'kategori' => fake()->randomElement(['Fiksi', 'Non-Fiksi', 'Sains', 'Sejarah', 'Pendidikan']),
            'penulis' => fake()->name(),
            'tahun_terbit' => fake()->year(),
            'jumlah' => fake()->numberBetween(1, 50),
            'keterangan' => fake()->optional()->paragraph()
        ];
    }
}