<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'email' => 'company@gmail.com',
            'telp' => '+628937384849',
            'alamat' => 'jl.Shibuya',
            'about' => 'Apakah Lorem Ipsum itu? Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting.',
        ]);
    }
}
