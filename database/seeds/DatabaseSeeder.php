<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        //\App\Entities\ProjectTask::truncate();
        //\App\Entities\ProjectNote::truncate();
        //\App\Entities\Client::truncate();
        //\App\Entities\Project::truncate();
        //\App\Entities\User::truncate();

        
        $this->call(UserTableSeeder::class);
        $this->call(ClientTableSeeder::class);
        $this->call(ProjectTableSeeder::class);
        $this->call(ProjectNoteTableSeeder::class);
        $this->call(ProjectTaskTableSeeder::class);
        $this->call(OAuthClientSeeder::class);
       
        Model::reguard();
    }
}
