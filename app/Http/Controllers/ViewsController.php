<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewsController extends Controller
{
    public function Updateprofile()
    {
        return view('user/update_profile');
    }
    public function Contact()
    {
        return view('user/contact');
    }
    public function InfoAcedemic()
    {
        return view('user/info_academic');
    }
    public function InfoMedic()
    {
        return view('user/info_medic');
    }
    public function SetMbkm()
    {
        return view('user/program_mbkm');
    }
    public function InfoLerningAggrement()
    {
        return view('user/learning_aggrement');
    }
    public function PersonalStatement()
    {
        return view('user/personal_statement');
    }
    public function Status()
    {
        $user = Auth::user();
        return view('user/status', compact("user"));
    }
    public function HasilEvaluasi()
    {
        return view('user/hasil_evaluasi');
    }
}
