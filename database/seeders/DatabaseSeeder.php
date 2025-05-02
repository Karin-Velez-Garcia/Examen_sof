<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Database\Seeders\DepartamentoSeeder;
use Database\Seeders\MunicipioSeeder;
use Database\Seeders\UnidadSeeder;
use Database\Seeders\MateriaSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            DepartamentoSeeder::class,
            MunicipioSeeder::class,
            UnidadSeeder::class,
            MateriaSeeder::class,
        ]);
    }
}
