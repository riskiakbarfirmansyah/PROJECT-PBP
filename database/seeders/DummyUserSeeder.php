<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name'=>'Operator',
                'email'=>'operator@gmail.com',
                'role' =>'Akademik',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'Pak Dekan',
                'email'=>'dekan@gmail.com',
                'role' =>'Dekan',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'Pak Ketua Program Studi',
                'email'=>'kaprodi@gmail.com',
                'role' =>'Ketua Program Studi',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'Pak Pembimbing Akademik',
                'email'=>'pembimbingakademik@gmail.com',
                'role' =>'Pembimbing Akademik',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'raja mahasiswa',
                'email'=>'mahasiswa@gmail.com',
                'role' =>'Mahasiswa',
                'password'=>bcrypt('123456')
            ],
            ];
            foreach($userData as $key => $va){
                User::create($va);

            }

    }
}
