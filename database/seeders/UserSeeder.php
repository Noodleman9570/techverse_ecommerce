<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user = new User();

        $user->name = "Kevin";
        $user->apellido = "Saavedra";
        $user->email = "kevin@gmail.com";
        $user->telefono = "04265026559";
        $user->direccion = "Centro";
        $user->password = "kevin9570";

        $user->save();

        User::factory(50)->create();
    }
}
