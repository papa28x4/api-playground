<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        
        //Password: 12345678
        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 21,
                'name' => 'Francis Amuche',
                'email' => 'f.amuche@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ekH.DDo2armNzJ4qY8tBEuMATJotTjuz/W3PhsD6hzu9t9GsU6dTO',
                'avatar' => 'https://i.ibb.co/1rnQzbx/young-man-with-eyeglasses.jpg',
                'terms' => 1,
                'slug' => 'francis-amuche',
                'remember_token' => NULL,
                'created_at' => '2021-03-21 04:27:53',
                'updated_at' => '2021-03-21 04:27:53',
            ),
            1 => 
            array (
                'id' => 22,
                'name' => 'Danny Schuster',
                'email' => 'DannieS@example.net',
                'email_verified_at' => NULL,
                'password' => '$2y$10$G6BlaedOKXUTKA2d1bvvbehS3PkgLr1NHM5jzmf8uqoOiVltrQIK6',
                'avatar' => 'https://i.ibb.co/S36z2kw/3.jpg',
                'terms' => 1,
                'slug' => 'danny-schuster',
                'remember_token' => NULL,
                'created_at' => '2021-01-30 05:11:29',
                'updated_at' => '2021-01-30 05:11:29',
            ),
            2 => 
            array (
                'id' => 23,
                'name' => 'Kehinde Abayomi',
                'email' => 'kenny4all40@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$i.9M8JtXj51TkLfNdK2Kw.f53.wHovvBZHkRDmMuI3B61e7Q2iIUK',
                'avatar' => 'https://i.ibb.co/FmdbwFb/4.jpg',
                'terms' => 1,
                'slug' => 'kehinde-abayomi',
                'remember_token' => NULL,
                'created_at' => '2021-01-30 05:20:31',
                'updated_at' => '2021-01-30 05:25:01',
            ),
            3 => 
            array (
                'id' => 25,
                'name' => 'Paul Smith',
                'email' => 'psmith@si.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$yOcwb7FWcWWzO.H/S.IpCOCYCzfM1P7OyQrY4u52ydevusLI4QkRK',
                'avatar' => 'https://i.ibb.co/WxYYy5w/6.jpg',
                'terms' => 1,
                'slug' => 'paul-smith',
                'remember_token' => NULL,
                'created_at' => '2021-01-30 05:47:47',
                'updated_at' => '2021-01-30 05:47:47',
                
            ),
            4 => 
            array (
                'id' => 27,
                'name' => 'Eke Uka',
                'email' => 'papa28x4@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$e8uwxuo8DM7JqDT0r1MTd.b3r4U/FuQD4.2lyFCQ3naTA8Qu3hR.6',
                'avatar' => 'https://i.ibb.co/SQhcfYJ/1.jpg',
                'terms' => 1,
                'slug' => 'eke-uka',
                'remember_token' => NULL,
                'created_at' => '2021-01-30 05:51:24',
                'updated_at' => '2021-01-30 05:52:43',
            ),
            5 => 
            array (
                'id' => 29,
                'name' => 'Felicia Carlos',
                'email' => 'feliciacarlos@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$apkz1GXDEQA3CaAFAj./fu8kreIZL1JkRFbNU/p95MFSDl0FOzTJ.',
                'avatar' => 'https://i.ibb.co/HXFsgCX/8.jpg',
                'slug' => 'felicia-carlos',
                'terms' => 1,
                'remember_token' => NULL,
                'created_at' => '2021-01-30 06:40:51',
                'updated_at' => '2021-01-30 06:40:51',
            ),
            6 => 
            array (
                'id' => 30,
                'name' => 'Rake Bake',
                'email' => 'rake@example.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ZPFaOK.e9zaJIIWmeQVG5uLZsx7KMcizymANzWrGuKSyGLiWa8zWW',
                'avatar' => NULL,
                'terms' => 1,
                'slug' => 'rake-bake',
                'remember_token' => NULL,
                'created_at' => '2021-02-27 11:23:48',
                'updated_at' => '2021-02-27 11:23:48',
            ),
            7 => 
            array (
                'id' => 31,
                'name' => 'Mark Paul',
                'email' => 'markus@example.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$RYNiqXnMdAdVkb4Rz9nuoecyN18fh0ca1fvxwrR33aSndFAFwTq3K',
                'avatar' => NULL,
                'terms' => 1,
                'slug' => 'mark-paul',
                'remember_token' => NULL,
                'created_at' => '2021-03-01 12:11:09',
                'updated_at' => '2021-03-01 12:12:20',
            ),
        ));
        
        
    }
}