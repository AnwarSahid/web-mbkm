<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function Updateprofile(Request $request, User $user, $id)
    {

        $this->validate($request, [
            'name' => 'required',
            'npm' => 'required',
            'birth_date' => 'required',
            'place_of_birth' => 'required'

        ]);
        $user = User::find($id);
        $user->update([
            'name' => $request['name'],
            'npm' => $request['npm'],
            'birth_date' => $request['birth_date'],
            'place_of_birth' => $request['place_of_birth']
        ]);
        // return view('user/update_profile');
        return view('user/update_profile')->with('success', ' Data telah diperbaharui!');
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
