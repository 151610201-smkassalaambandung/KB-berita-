<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
class FrontendController extends Controller
{
    public function index()
	{
		return view('frontend.index');
	}

	public function filter($id)
	{
		$berita = Berita::where('kategori_id','=',$id)->get();
		return view('frontend.berita',compact('berita'));
	}

	public function selengkapnya($id)
	{
		$berita = Berita::find($id);
		$view = $berita->view + 1;
        $berita->view = $view;
        $berita->save();
		return view('frontend.selengkapnya',compact('berita'));
	}

}
