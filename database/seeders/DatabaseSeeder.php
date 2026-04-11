<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /* DB::table('posts')->insert([
            'title' =>'Title_3',
            'slug' =>'Post_3',
            'likes' =>30,
            'create_at'=>'2026-04-10',
            'update_at'=>'2026-04-10T10:30',
        ]);
 */
        DB::table('users1')->insert([
            'name'=>'Ivan3',
            'email'=>'ivan3@gmail.com',
            'age'=>23,
            'salary'=>3500,
            'create_at'=>'2026-04-11',
            'update_at'=>'2026-04-11T12:15',
        ]);
    }
}
