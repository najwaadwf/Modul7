<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\BukuModel;

class Buku extends Seeder
{
    public function run()
    {
        $this->db->table('buku')->insert([
            'judul' => 'Kata',
            'penulis' => 'Rintik Sedu',
            'penerbit' => 'Gramedia',
            'tahun_terbit' => '2019'
        ]);

        $this->db->table('buku')->insert([
            'judul' => 'Sadena dan Sandra',
            'penulis' => 'WulanFadi',
            'penerbit' => 'Coconut Books',
            'tahun_terbit' => '2020'
        ]);
    }
}
