<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Token;
use Illuminate\Http\Request;

class BukuController extends Controller
{

    function getToken($token)
    {
        $userToken = Token::where('token', $token)->get();
        $t = "";
        foreach ($userToken as $idtoken) {
            $t = $idtoken->token;
        }
        return $t;
    }
    public function index($token)
    {
        $t = $this->getToken($token);
        if ($t == $token) {
            return Buku::all();
        }
        return '';
    }

   

    public function create(Request $request, $token)
    {
        $t = $this->getToken($token);
        if ($t == $token) {
            $buku = new Buku;
            $buku->kode = $request->kode;
            $buku->judul = $request->judul;
            $buku->penerbit = $request->penerbit;
            $buku->pengarang = $request->pengarang;
            $buku->tahun_terbit = $request->tahun_terbit;
            $buku->save();


            return "Data telah dibuat";
        }

        return "Data gagal dibuat";
    }

    public function update(Request $request,$token,$kode)
    {
        $t = $this->getToken($token);
        if ($t == $token) {
            $judul = $request->judul; 
            $penerbit = $request->penerbit; 
            $pengarang = $request->pengarang; 
            $tahun_terbit= $request->tahun_terbit; 

            $buku =new Buku;
            $buku = Buku::find($kode); 
            $buku->update($request->all()) ;
            // $buku->kode = $request->kode;
            // $buku->judul = $request->judul;
            // $buku->penerbit = $request->penerbit;
            // $buku->pengarang = $request->pengarang;
            // $buku->tahun_terbit = $request->tahun_terbit;
            // $buku->save();

            return "Data $kode telah berhasil di update";
        }

        return "Data $kode gagal diupdate"; 
    }

    public function delete($token,$kode )
    {
        $t = $this->getToken($token);
        if ($t == $token) {
            $buku = Buku::find($kode);
            $buku->delete();

            return "Data $kode telah berhasil di hapus";
        }
        return "Data $kode gagal dihapus"; 
    }
}
