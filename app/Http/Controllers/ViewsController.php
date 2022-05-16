<?php

namespace App\Http\Controllers;

use App\Models\Academic;
use App\Models\Contact;
use App\Models\LearningAggrement;
use App\Models\MbkmProgram;
use App\Models\Medic;
use App\Models\PersonalStatement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewsController extends Controller
{
    public function Updateprofile()
    {
        $user = Auth::user();
        return view('user/update_profile', compact('user'));
    }
    public function Contact()
    {
        $user = Auth::user();
        $get_id = $user->id;
        $check = Contact::where('id', $get_id)->exists();
        // $data = Contact::user();
        if ($check) {
            return view('user/edit_contact', compact('user'));
        } else {
            return view('user/contact', compact('user'));
        }
    }
    public function InfoAcedemic()
    {
        $user = Auth::user();
        $get_id = $user->id;
        $check = Academic::where('id', $get_id)->exists();
        if ($check) {
            return view('user/edit_academic', compact('user'));
        } else {
            return view('user/info_academic', compact('user'));
        }
    }
    public function InfoMedic()
    {
        $user = Auth::user();
        $get_id = $user->id;
        $check = Medic::where('id', $get_id)->exists();
        if ($check) {
            return view('user/edit_medic', compact('user'));
        } else {
            return view('user/info_medic', compact('user'));
        }
    }
    public function SetMbkm()
    {
        $user = Auth::user();
        $get_id = $user->id;
        $check = MbkmProgram::where('id', $get_id)->exists();
        if ($check) {
            return view('user/edit_program_mbkm', compact('user'));
        } else {
            return view('user/program_mbkm', compact('user'));
        }
    }
    public function InfoLerningAggrement()
    {
        $user = Auth::user();
        $get_id = $user->id;
        $check = LearningAggrement::where('id', $get_id)->exists();
        if ($check) {
            return view('user/edit_learning_aggrement', compact('user'));
        } else {
            return view('user/learning_aggrement', compact('user'));
        }
    }
    public function PersonalStatement()
    {
        $user = Auth::user();
        $get_id = $user->id;
        $check = PersonalStatement::where('id', $get_id)->exists();
        if ($check) {
            return view('user/edit_personal_statement', compact('user'));
        } else {
            return view('user/personal_statement', compact('user'));
        }
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
