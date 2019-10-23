<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(PostsTableSeeder::class);
        // php artisan migrate:refresh --seed  refresca e inserta los seeders
        /*DB::table('posts')->insert([
            'title' => 'Curso de Laravel',
            'description' => 'Descripción del curso'
        ]);*/
    }
}
