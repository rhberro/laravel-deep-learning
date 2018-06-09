<?php

use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert(
            [
                'name' => 'Default',
                'project_id' => 1,
                'social_network_id' => 1,
                'created_at' => '2018-04-30 19:02:17',
                'updated_at' => '2018-04-30 19:02:17',
            ]
        );

        factory(App\Account::class, 50)->create();
    }
}
