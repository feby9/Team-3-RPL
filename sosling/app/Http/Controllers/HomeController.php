<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Buat instansi controller
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Tampilkan home untuk user teregistrasi
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('home')->with('posts', $user->posts);
    }
}
