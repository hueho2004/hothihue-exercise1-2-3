<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentDateTime = Carbon::now()->toDateTimeString();
    
        $posts = [];
    
        for ($i = 0; $i < 10; $i++) {
            $posts[] = [
                'title' => 'Amet animi facere aliquam eius.',
                'description' => 'In eum eos et ea nihil totam enim.',
                'status' => 0,
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime,
            ];
        }
    
        Post::insert($posts);
    }
}