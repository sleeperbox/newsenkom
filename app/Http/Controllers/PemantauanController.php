<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;

class PemantauanController extends Controller
{
    //
    public function index(){
        return view('pemantauan');
    }
    public function data(){
    	$data_berita = Berita::orderBy('id', 'DESC')->where('status_pemantauan','tampil')->paginate(6);
        return view('data', compact('data_berita'));
    }
}
