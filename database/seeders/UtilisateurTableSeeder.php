<?php

namespace Database\Seeders;

use App\Models\Utilisateur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class UtilisateurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= new Utilisateur();
        $user->Psudo= "Admin";
        $user->Email= "Admin@gmail.com";
        $user->Mdp= "Admin";
        $user->save();
    }
}
