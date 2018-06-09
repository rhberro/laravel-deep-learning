<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert(
            [
                'name' => 'Default',
                'description' => 'This is the default project.',
                'user_id' => 1,
                'created_at' => '2018-04-30 19:02:17',
                'updated_at' => '2018-04-30 19:02:17',
            ]
        );

        factory(App\Project::class, 50)->create();
    }
}
