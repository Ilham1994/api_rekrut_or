<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AnggotaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anggota')->insert([
        	[
                'nama' => 'Alfar',
                'tmpt_lahir' => 'Jakarta',
                'tgl_lahir' => Carbon::create('1995','10','01'),
                'alamat' => 'Jakarta',
                'nim' => '1311511111',
                'motivasi' => 'Ingin Belajar',
                'foto' = 'placeholder path foto'
            ],
            [
                'nama' => 'Bella',
                'tmpt_lahir' => 'Ferelden',
                'tgl_lahir' => Carbon::create('1995','10','01'),
                'alamat' => 'Kingsroad Ferelden',
                'nim' => '1311522222',
                'motivasi' => 'Organisasi road to glory',
                'foto' = 'placeholder path foto'
            ],
            [
                'nama' => 'Cella',
                'tmpt_lahir' => 'New Orleans',
                'tgl_lahir' => Carbon::create('1995','10','01'),
                'alamat' => 'Padang',
                'nim' => '1311533333',
                'motivasi' => 'Organisasi road to glory',
                'foto' = 'placeholder path foto'
            ],
            [
                'nama' => 'Dennis',
                'tmpt_lahir' => 'Bukittinggi',
                'tgl_lahir' => Carbon::create('1995','10','01'),
                'alamat' => 'Padang',
                'nim' => '1311544444',
                'motivasi' => 'Organisasi road to glory',
                'foto' = 'placeholder path foto'
            ],
            [
                'nama' => 'Eska',
                'tmpt_lahir' => 'Darmasraya',
                'tgl_lahir' => Carbon::create('1995','10','01'),
                'alamat' => 'Padang Pariaman',
                'nim' => '1311555555',
                'motivasi' => 'Organisasi road to glory',
                'foto' = 'placeholder path foto'
            ]
        ]);
    }
}
