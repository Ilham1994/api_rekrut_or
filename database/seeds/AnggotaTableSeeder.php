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
                'nama' => 'Ilham',
                'tmpt_lahir' => 'padang panjang',
                'tgl_lahir' => Carbon::create('2010','10','01'),
                'jurusan' => 'Sistem Informasi',
                'angkatan' => '2015',
                'target_divisi' => 1,
                'motivasi' => 'Ingin Belajar'
            ],
            [
                'nama' => 'Lavellan',
                'tmpt_lahir' => 'Thedar',
                'tgl_lahir' => Carbon::create('2010','10','01'),
                'jurusan' => 'Sistem Informasi',
                'angkatan' => '2015',
                'target_divisi' => 1,
                'motivasi' => 'Inquisition for the win'
            ]
        ]);
    }
}
