<?php

use Illuminate\Database\Seeder;

class SocialNetworksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_networks')->insert(
            [
                'name' => 'Instagram',
                'created_at' => '2018-04-30 19:02:17'
            ]
        );

        factory(App\SocialNetwork::class, 5)->create();
    }
}
