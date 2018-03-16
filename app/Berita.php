<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
	use \Conner\Tagging\Taggable;
	
    protected $fillable = ['judul','kategori_id','isi_berita','view','slug_judul','cover'];

    public function kategori()
    {
    	return $this->belongsTo('App\Kategori');
    }
}
