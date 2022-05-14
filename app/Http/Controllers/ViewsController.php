<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewsController extends Controller
{
    public function updateprofile()
    {
        return view('user/update_profile');
    }
    public function contact()
    {
        return view('user/contact');
    }
    public function infoAcedemic()
    {
        return view('user/info_academic');
    }
    public function infoMedic()
    {
        return view('user/info_medic');
    }
    public function setMbkm()
    {
        return view('user/program_mbkm');
    }
    public function infoLerningAggrement()
    {
        return view('user/learning_aggrement');
    }
    public function personalStatement()
    {
        return view('user/personal_statement');
    }
    public function status()
    {
        $user = Auth::user();
        return view('user/status', compact("user"));
    }
}
