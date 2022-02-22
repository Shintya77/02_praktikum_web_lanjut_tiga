<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function marbelEduGames(){
         return "<a href=https://www.educastudio.com/category/marbel-edu-games> Marbel Edu Games</a>";
    }
    public function merbelAndFriends(){
        return "<a href=https://www.educastudio.com/category/marbel-and-friends-kids-games> Marbel And Friendss</a>";
    }
    public function ririStoryBook(){
        return "<a href=https://www.educastudio.com/category/riri-story-books> Riri StroryBook</a>";
    }
    public function kolakKidsSongs(){
        return "<a href=https://www.educastudio.com/category/kolak-kids-songs> Kolak Kids Songs</a>";
    }
}
