<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
class UpdatePasswordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = Users::all();

        foreach($users as $user)
        {
            $user->password = Hash::make($user->password);
            $user->save();
        }
    }
}
