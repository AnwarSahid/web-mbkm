<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function Updateprofile(Request $request, User $user, $id)
    {

        $this->validate($request, [
            'name' => 'required',
            'npm' => 'required',
            'place_of_birth' => 'required',
            'address' => 'required',
            'birth_date' => 'required',
            'phone' => 'required',
            'nation' => 'required',
            'gender' => 'required',
            'id_medsos' => 'required',
            'no_idcard' => 'required',
        ]);
        $user = User::find($id);
        $user->update([
            'name' => $request['name'],
            'npm' => $request['npm'],
            'birth_date' => $request['birth_date'],
            'place_of_birth' => $request['place_of_birth'],
            'phone' => $request['phone'],
            'nation' => $request['nation'],
            'gender' => $request['gender'],
            'address' => $request['gender'],
            'id_medsos' => $request['id_medsos'],
            'no_idcard' => $request['no_idcard'],
        ]);

        // return view('user/update_profile');
        return view('user/update_profile')->with('success', ' Data telah diperbaharui!');
    }
    public function Contact(Request $request)
    {


        $attr = $request->validate([
            'name' => 'required',
            'connection' => 'required',
        ]);
        $attr['user_id'] = auth()->user()->id;
        Contact::create($attr);
        return redirect()->route('contactemergency');
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
