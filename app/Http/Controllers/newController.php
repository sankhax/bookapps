<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Models\pengguna;
use Redirect;

class newController extends Controller
{
	public function index()
    {
		$buku = DB::table('buku')
		->join('penulis','buku.id_penulis', '=', 'penulis.id_penulis')
		->select('buku.*','penulis.nama_penulis')->get();
		return view ('home', ['buku'=>$buku]);
	}
	
	public function idx()
    {
		$penulis = DB::table('penulis')->get();
		return view ('penulis', ['penulis'=>$penulis]);
	}
	
	public function auth (Request $req)
	{
		$req->validate([
        'uname'=>'required',
        'password'=>'required'
		]);
		$model = new pengguna();
		$uname = $req->uname;
		$password = $req->password;
		$login = $model->login($uname,$password);
      if (!$login) {
      //login gagal
        session()->flash('msg', 'Salah bro');
       // return redirect()->back();
       return view ('login');
      }
      //login berhasil
      //sudah update
      //if ($element) {return redirect()->route('tiket');}
      //belom update
	  
      return redirect('home');

  }

  public function create()
    {
      $penulis = DB::table('penulis')->get();

        return view('create',['penulis'=>$penulis]);
    }
  
    public function tambah(Request $req)
    {
       $judul =$req->judul; 
       $tahun =$req->tahun; 
       $genre =$req->genre; 
       $penulis =$req->penulis;
       $buku = DB::table('buku')->insert(['judul_buku'=>$judul,'tahun'=>$tahun,'genre'=>$genre,'id_penulis'=>$penulis]);
      return redirect('home');
    }

    public function destroy($id)
    {
    
      DB::delete('delete from buku where id_buku = ?',[$id]);
      return redirect ('home');
      }
	  
	  public function hapus($id)
    {
    
      DB::delete('delete from penulis where id_penulis = ?',[$id]);
      return redirect ('penulis');
      }
	  
      public function cari(Request $request)
      {
        // menangkap data pencarian
        $cari = $request->cari;
     
            // mengambil data dari table pegawai sesuai pencarian data
        $buku = DB::table('buku')
        ->join('penulis','buku.id_penulis', '=', 'penulis.id_penulis')
		    ->select('buku.*','penulis.nama_penulis')
        ->where('judul_buku','like',"%".$cari."%")
        ->paginate();
     
            // mengirim data pegawai ke view index
        return view('home',['buku' => $buku]);
     
      }
	  
	  public function penulis(Request $req)
    {
       $nama =$req->nama; 
       $asal =$req->asal; 
       $buku = DB::table('penulis')->insert(['nama_penulis'=>$nama,'kota_asal'=>$asal]);
      return redirect('penulis');
    }
}