<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'email' => 'required',
            'nation' => 'required',
            'gender' => 'required',
            'id_medsos' => 'required',
            'no_idcard' => 'required',
            // 'scan_idcard' => 'required|mimes:pdf,jpg,jpeg,png,jfif|max:2048 '

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
            'address' => $request['address'],
            'email' => $request['email'],
            'id_medsos' => $request['id_medsos'],
            'no_idcard' => $request['no_idcard'],
        ]);
        // $path = public_path() . '/storage/';

        // if ($user->no_idcard != ''  && $user->no_idcard != null) {
        //     $file_old = $path . $user->no_idcard;
        //     unlink($file_old);
        // }

        // $scan_idcard = $request->file('scan_idcard')->store('file/scan_idcard');
        // $user->scan_idcard = $scan_idcard;
        // return view('user/update_profile');
        // return redirect()->route('updateprofile')->with('success', ' Data telah diperbaharui!');
        return redirect()->route('updateprofile');
    }
    public function Contact(Request $request)
    {
        // dd($request->all());
        $user = Auth::user()->id;
        $attr = $request->validate([
            'name' => 'required',
            'user_id' => 'required',
            'connection' => 'required',
            'phone' => 'required',
            'id_medsos' => 'required',
            'email' => 'required',
            'address' => 'required'
            // 'family_identity_card',

        ]);
        $attr['user_id'] = $user;
        Contact::create($attr);
        dd('berhasil');
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
