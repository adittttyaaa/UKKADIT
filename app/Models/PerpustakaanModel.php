<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerpustakaanModel extends Model
{
    use HasFactory;
    protected $table="buku";
    protected $fillable = ['bukuid', 'judul', 'penulis', 'penerbit', 'tahunterbit'];
}
