<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerpustakaanSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
          DB::table('buku')->insert([
            'judul'=>'blabla',
            'bukuId'=>'2',
            'penulis'=>'paidi',
            'penerbit'=>'paidididi',
            'tahunterbit'=>'2002',
            'created_at'=>date('Y-m-d H.i.s')
          ]);
    }
}
