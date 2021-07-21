<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $primaryKey = 'kode'; 
    protected $fillable=[
        'kode', 
        'judul', 
        'penerbit',
        'pengarang',
        'tahun_terbit'
    ]; 
    use HasFactory;
}
