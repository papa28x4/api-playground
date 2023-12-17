<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'CULTURE + MEDIA',
                'slug' => 'culture-media',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus et nisi iure assumenda exercitationem. Obcaecati?',
                'image' => '/backend/images/categories/10x SuperHuman.jpg',
                'created_at' => '2021-03-24 03:57:11',
                'updated_at' => '2021-03-24 03:57:11',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'BIBLE STUDY',
                'slug' => 'bible-study',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae dicta voluptate necessitatibus dolorum laborum nemo tempora in fugit, doloremque officia alias, sint ratione vitae? Quas delectus sunt consequatur dolore earum.',
                'image' => '/backend/images/categories/angular.jpg',
                'created_at' => '2021-03-24 03:57:11',
                'updated_at' => '2021-03-24 03:57:11',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'FAMILY DEVOTION',
                'slug' => 'family-devotion',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam voluptas ipsum velit quam vitae nostrum veniam eum omnis voluptates sapiente!',
                'image' => '/backend/images/categories/Csharp_Unity_Developer_2d.jpg',
                'created_at' => '2021-03-24 03:57:11',
                'updated_at' => '2021-03-24 03:57:11',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'KIDS + PARENTING',
                'slug' => 'kids-parenting',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam voluptas ipsum velit quam vitae nostrum veniam eum omnis voluptates sapiente!',
                'image' => '/backend/images/categories/kiddies.PNG',
                'created_at' => '2021-03-24 03:57:11',
                'updated_at' => '2021-03-24 03:57:11',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'TEENAGERS',
                'slug' => 'teenagers',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur vitae, hic odit officia labore nihil quae doloribus aut laudantium autem.',
                'image' => '/backend/images/categories/python.jpg',
                'created_at' => '2021-03-24 03:57:11',
                'updated_at' => '2021-03-24 03:57:11',
            ),
            5 => 
            array (
                'id' => 1,
                'name' => 'ALL',
                'slug' => 'all',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur vitae, hic odit officia labore nihil quae doloribus aut laudantium autem.',
                'image' => '/backend/images/categories/python.jpg',
                'created_at' => '2021-03-24 03:57:11',
                'updated_at' => '2021-03-24 03:57:11',
            )
        ));
    }
}
