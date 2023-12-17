<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Traits\HasForeignKeys;
use App\Traits\TruncateTable;

class CommentSeeder extends Seeder
{
    use TruncateTable, HasForeignKeys;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->disableForeignKey();

        $this->truncate('comments');
        
        $posts = Comment::factory(10)->create();
        
        $this->enableForeignKey();    
    }
}
