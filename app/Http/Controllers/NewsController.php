<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function beritaid($id){
        echo "Berikut adalah Halaman Berita ".$id;
    }
    public function beritaSubKategori($subkategori){
        return "<a href=https://www.educastudio.com/news>News</a>";
    }
    
    
}
