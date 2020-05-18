<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function beranda(){ return view('pages.beranda'); }
    public function masuk(){ return view('pages.masuk'); }
    public function daftar(){ return view('pages.daftar'); }
    public function landing(){ return view('pages.landing'); }
    public function form_pesanan(){ return view('pages.form_pesanan'); }
    public function sukses(){ return view('pages.sukses'); }
    public function bantuan(){ return view('pages.bantuan'); }
    public function pesanan(){ return view('pages.pesanan'); }
    
// Contoh fungsi default untuk menampilkan pages
    public function index(){
        $title = 'Welcome to Sosling!';
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }
    public function about(){
        $title = 'Tentang Kami';
        return view('pages.about')->with('title', $title);        
    }
// Contoh ends here
}
