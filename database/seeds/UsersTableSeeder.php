<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'name' => 'Rafael Henrique Berro',
                'email' => 'rhberro@gmail.com',
                'password' => bcrypt('123123'),
                'created_at' => '2018-04-30 19:02:17',
                'updated_at' => '2018-04-30 19:02:17',
            ]
        );

        factory(App\User::class, 50)->create();
    }
}
