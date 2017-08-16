<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(UsersGroupTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PrefersTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $this->call(ConfigurationsTableSeeder::class);
        $this->call(SlidesTableSeeder::class);
        $this->call(SocialNetworksTableSeeder::class);
        $this->call(PartnersTableSeeder::class);
        $this->call(ValuesTableSeeder::class);
        $this->call(WorksTableSeeder::class); 
        $this->call(FaqsTableSeeder::class); 
        
    }
}
