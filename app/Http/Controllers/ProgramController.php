<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function karir(){
        return "<a href=https://www.educastudio.com/program/karir>Program Karir</a>";
    }
    public function magang(){
        return "<a href=https://www.educastudio.com/program/magang>Program Magang</a>";
    }
    public function kunjunganIndustri(){
        return "<a href=https://www.educastudio.com/program/kunjungan-industri>Program Kujungi Industri</a>";
    }
}
