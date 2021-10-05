<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class tbloginsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tblogins')->insert([

            [
                'userid' => 'ນປ001',
                'email' => 'usero6@gmail.com',
                'level' => '2'
            ],

            [
                'userid' => 'ກພ001',
                'email' => 'usero7@gmail.com',
                'level' => '1'
            ],
            [
                'userid' => 'User008',
                'email' => 'usero8@gmail.com',
                'level' => '3'
            ],
            [
                'userid' => 'ຜູ້ໃຊ້001',
                'email' => 'user10@gmail.com',
                'level' => '1'
            ],
            [
                'userid' => 'User011',
                'email' => 'user11@gmail.com',
                'level' => '2'
            ]

        ]);
    }
}
