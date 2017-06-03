<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Trip;
use App\Achievement;


class DatabaseSeeder extends Seeder
{
    public function run(){
        // Disable foreign key checking because truncate() will fail
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        User::truncate();
        Trip::truncate();
        Achievement::truncate();
        factory(User::class, 10)->create();
        factory(Trip::class, 10)->create();
        factory(Achievement::class, 20)->create();
        $this->call('OAuthClientSeeder');
        // Enable it back
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        
    }
}
