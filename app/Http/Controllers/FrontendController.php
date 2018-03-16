<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
class FrontendController extends Controller
{
    public function index()
	{
        $berita = Berita::paginate(5);
		return view('frontend.index',compact('berita'));
	}

	public function filter($id)
	{
		$berita = Berita::where('kategori_id','=',$id)->get();
		return view('frontend.berita',compact('berita'));
	}

	public function selengkapnya($slug_judul)
	{

		$berita = Berita::where('slug_judul',$slug_judul)->first();
		$view = $berita->view + 1;
        $berita->view = $view;
        $berita->save();
		return view('frontend.selengkapnya',compact('berita'));
	}

	 public function tags($id)
    {
        $berita = DB::table('beritas')
            ->join('kategoris','kategoris.id','=','beritas.kategori_id')
            ->join('tagging_tagged','tagging_tagged.taggable_id','=','beritas.id')
            ->select('beritas.*', 'tagging_tagged.tag_name', 'kategoris.name as kategoris')
            ->where('tagging_tagged.tag_name','=',$id)
            ->orderBy('beritas.id','desc')->paginate(2);
        $bb = DB::table('beritas')
            ->join('kategoris','kategoris.id','=','beritas.kategori_id')
            ->join('tagging_tagged','tagging_tagged.taggable_id','=','beritas.id')
            ->select('beritas.*', 'kategoris.name as kategoris', 'tagging_tagged.tag_name')
            ->orderBy('beritas.id','desc')->paginate(2);
        $jml = $berita->count();
        $tg = DB::table('tagging_tags')->where('name','=',$id)->first();
         $tags = DB::table('tagging_tags')->get();
        return view('frontend.tags', compact('berita','jml','bb','tags','tg'));
    }

}
