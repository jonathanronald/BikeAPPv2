<?php


use Illuminate\Database\Seeder;

class OAuthClientSeeder extends Seeder {

    public function run(){

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('oauth_clients')->truncate();

        for ($i=0; $i < 10; $i++){

            DB::table('oauth_clients')->insert(
                [   'id' => "id$i",
                    'secret' => "secret$i",
                    'name' => "Test Client $i"
                ]
            );
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}