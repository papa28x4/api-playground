<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Traits\HasForeignKeys;
// use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Traits\TruncateTable;

class PostsTableSeeder extends Seeder
{
    use TruncateTable, HasForeignKeys;
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {   
        $this->disableForeignKey();

        $this->truncate('posts');
        
        $posts = Post::factory(10)->state([
            'title' => 'This is my title'
        ])->create();
        
        $this->enableForeignKey();    
    }
}