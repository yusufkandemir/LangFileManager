<?php namespace Dick\TranslationManager\database\seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            'name' 		=> 'English',
            'app_name' 	=> 'english',
            'flag' 		=> '',
            'abbr' 		=> 'en',
            'active' 	=> '1',
            'default' 	=> '1',
        ]);

        DB::table('languages')->insert([
            'name' 		=> 'Romanian',
            'app_name' 	=> 'romanian',
            'flag' 		=> '',
            'abbr' 		=> 'ro',
            'active' 	=> '0',
            'default' 	=> '0',
        ]);

        DB::table('languages')->insert([
            'name' 		=> 'French',
            'app_name' 	=> 'french',
            'flag' 		=> '',
            'abbr' 		=> 'fr',
            'active' 	=> '0',
            'default' 	=> '0',
        ]);

        DB::table('languages')->insert([
            'name' 		=> 'Italian',
            'app_name' 	=> 'italian',
            'flag' 		=> '',
            'abbr' 		=> 'it',
            'active' 	=> '0',
            'default' 	=> '0',
        ]);

        DB::table('languages')->insert([
            'name' 		=> 'Spanish',
            'app_name' 	=> 'spanish',
            'flag' 		=> '',
            'abbr' 		=> 'es',
            'active' 	=> '0',
            'default' 	=> '0',
        ]);

        DB::table('languages')->insert([
            'name' 		=> 'German',
            'app_name' 	=> 'german',
            'flag' 		=> '',
            'abbr' 		=> 'de',
            'active' 	=> '0',
            'default' 	=> '0',
        ]);

        $this->command->info('Language seeding successful.');

    }
}
