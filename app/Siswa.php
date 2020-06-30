<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    // laravel berbasis bahasa inggris ketika membuat tabel siswa maka laravel menganggap nama tabel siswas 
    // karena dianggap bentuk plural dari siswa

    protected $table = "siswa"; //agar nama tabel tetap siswa bukan siswas
    protected $fillable =["nama_depan", "nama_belakang","jenis_kelamin","agama","alamat"];
}
