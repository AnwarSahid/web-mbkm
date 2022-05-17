<?php

namespace App\Http\Controllers;

use App\Models\Academic;
use App\Models\Contact;
use App\Models\Evaluation;
use App\Models\LearningAggrement;
use App\Models\MbkmProgram;
use App\Models\Medic;
use App\Models\PersonalStatement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = Auth::user()->id;
        $attr = $request->validate([
            'name' => 'required',
            'connection' => 'required',
            'phone' => 'required',
            'id_medsos' => 'required',
            'email' => 'required',
            'address' => 'required',
            'family_identity_card' => 'required|mimes:pdf,jpg,jpeg,png,jfif|max:2048',

        ]);

        $file = $request->file('family_identity_card');
        $destinationPath = 'storage/kk';
        $name = $file->getClientOriginalName();
        $file->move($destinationPath, $name);

        $attr['family_identity_card'] = $name;
        $attr['id'] = $user;
        Contact::create($attr);
        return redirect()->route('contactemergency')->with('message', ' Data Kamu Telah Diupdate!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'connection' => 'required',
            'phone' => 'required',
            'id_medsos' => 'required',
            'email' => 'required',
            'address' => 'required',
            'family_identity_card' => 'required|mimes:pdf,jpg,jpeg,png,jfif|max:2048',

        ]);
        $user = Contact::find($id);
        $user->update([
            'name' => $request['name'],
            'connection' => $request['connection'],
            'phone' => $request['phone'],
            'id_medsos' => $request['id_medsos'],
            'address' => $request['address'],
            'email' => $request['email'],

        ]);
        $path =  'storage/kk/';
        if ($user->family_identity_card != ''  && $user->family_identity_card != null) {
            $file_old = $path . $user->family_identity_card;
            unlink($file_old);
        }
        $file = $request->file('family_identity_card');
        $destinationPath = 'storage/kk';
        $name = $file->getClientOriginalName();
        $file->move($destinationPath, $name);
        $user->family_identity_card = $name;
        $user->save();
        return redirect()->route('contactemergency')->with('message', ' Data telah diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function storeAcademic(Request $request)
    {
        $user = Auth::user()->id;
        $attr = $request->validate([
            'university' => 'required',
            'accreditation_university' => 'required',
            'faculty' => 'required',
            'study_program' => 'required',
            'accreditation_study_program' => 'required',
            'educational_degree' => 'required',
            'semester' => 'required',
            'ipk' => 'required',
            'sks' => 'required',
            'scan_transcript' => 'required|mimes:pdf,jpg,jpeg,png,jfif|max:2048',
            'scan_krs' => 'required|mimes:pdf,jpg,jpeg,png,jfif|max:2048',

        ]);
        $file = $request->file('scan_transcript');
        $file2 = $request->file('scan_krs');
        $destinationPath = 'storage/transkrip';
        $destinationPath2 = 'storage/krs';
        $name = $file->getClientOriginalName();
        $name2 = $file2->getClientOriginalName();
        $file->move($destinationPath, $name);
        $file2->move($destinationPath2, $name2);

        $attr['scan_transcript'] = $name;
        $attr['scan_krs'] = $name2;
        $attr['id'] = $user;
        Academic::create($attr);

        return redirect()->route('infoacademic')->with('message', ' Data Kamu Telah Diupdate!');
    }

    public function updateAcademic(Request $request, $id)
    {
        $this->validate($request, [
            'university' => 'required',
            'accreditation_university' => 'required',
            'faculty' => 'required',
            'study_program' => 'required',
            'accreditation_study_program' => 'required',
            'educational_degree' => 'required',
            'semester' => 'required',
            'ipk' => 'required',
            'sks' => 'required',
            'scan_transcript' => 'required|mimes:pdf,jpg,jpeg,png,jfif|max:2048',
            'scan_krs' => 'required|mimes:pdf,jpg,jpeg,png,jfif|max:2048',

        ]);
        $user = Academic::find($id);
        $user->update([
            'university' => $request['university'],
            'accreditation_university' => $request['accreditation_university'],
            'faculty' => $request['faculty'],
            'study_program' => $request['study_program'],
            'accreditation_study_program' => $request['accreditation_study_program'],
            'educational_degree' => $request['educational_degree'],
            'semester' => $request['semester'],
            'ipk' => $request['ipk'],
            'sks' => $request['sks'],
        ]);
        $path =  'storage/transkrip/';
        $path2 =  'storage/krs/';
        if ($user->scan_transcript != ''  && $user->scan_transcript != null) {
            $file_old = $path . $user->scan_transcript;
            unlink($file_old);
        }
        if ($user->scan_krs != ''  && $user->scan_krs != null) {
            $file_old = $path2 . $user->scan_krs;
            unlink($file_old);
        }
        $file = $request->file('scan_transcript');
        $file2 = $request->file('scan_krs');
        $destinationPath = 'storage/kk';
        $destinationPath2 = 'storage/kk';
        $name = $file->getClientOriginalName();
        $name2 = $file2->getClientOriginalName();
        $file->move($destinationPath, $name);
        $file2->move($destinationPath2, $name2);
        $user->scan_transcript = $name;
        $user->scan_krs = $name2;
        $user->save();

        return redirect()->route('infoacademic')->with('message', ' Data telah diperbaharui!');
    }

    public function storeMedic(Request $request)
    {
        $user = Auth::user()->id;
        $attr = $request->validate([
            'disability' => 'required',
            'alergy' => 'required',
            'other_difficulties' => 'required',
        ]);

        $attr['id'] = $user;
        Medic::create($attr);
        return redirect()->route('infomedic')->with('message', ' Data Kamu Telah Diupdate!');
    }

    public function updateMedic(Request $request, $id)
    {
        $this->validate($request, [
            'disability' => 'required',
            'alergy' => 'required',
            'other_difficulties' => 'required',

        ]);
        $user = Medic::find($id);
        $user->update([
            'alergy' => $request['alergy'],
            'disability' => $request['disability'],
            'other_difficulties' => $request['other_difficulties'],
        ]);

        return redirect()->route('infomedic')->with('message', ' Data telah diperbaharui!');
    }
    public function storeMbkm(Request $request)
    {
        $user = Auth::user()->id;
        $attr = $request->validate([
            'program_mbkm' => 'required',
        ]);
        $attr['id'] = $user;
        MbkmProgram::create($attr);
        return redirect()->route('programmbkm')->with('message', ' Data Kamu Telah Diupdate!');
    }

    public function updateMbkm(Request $request, $id)
    {
        $this->validate($request, [
            'program_mbkm' => 'required',

        ]);
        $user = MbkmProgram::find($id);
        $user->update([
            'program_mbkm' => $request['program_mbkm'],

        ]);
        return redirect()->route('programmbkm')->with('message', ' Data Kamu Telah Diupdate!');
    }

    public function StoreLerningAggrement(Request $request)
    {
        $user = Auth::user()->id;
        $attr = $request->validate([
            'sks' => 'required',
            'learning_aggrement' => 'required|mimes:pdf,doc,docm,docx,|max:2048 ',
        ]);
        $file = $request->file('learning_aggrement');
        $destinationPath = 'storage/Learning_Agreement';
        $name = $file->getClientOriginalName();
        $file->move($destinationPath, $name);

        $attr['learning_aggrement'] = $name;
        $attr['id'] = $user;
        LearningAggrement::create($attr);
        return redirect()->route('learningaggrement')->with('message', ' Data Kamu Telah Diupdate!');
    }

    public function UpdateLerningAggrement(Request $request, $id)
    {
        $this->validate($request, [
            'sks' => 'required',
            'learning_aggrement' => 'required|mimes:pdf,doc,docm,docx,|max:2048 ',
        ]);

        $user = LearningAggrement::find($id);
        $user->update([
            'sks' => $request['sks'],
        ]);
        $path = public_path('/storage/Learning_Agreement/');
        if (!file_exists($path)) {
            mkdir('storage/Learning_Agreement/');
        }
        if ($user->learning_aggrement != ''  && $user->learning_aggrement != null) {
            $file_old = $path . $user->learning_aggrement;
            unlink($file_old);
        }

        $file = $request->file('learning_aggrement');
        $destinationPath =  'storage/Learning_Agreement ';
        $name = $file->getClientOriginalName();
        $file->move($destinationPath, $name);
        $user->learning_aggrement = $name;
        $user->save();
        return redirect()->route('learningaggrement')->with('message', ' Data Kamu Telah Diupdate!');
    }

    public function StorePersonalStatement(Request $request)
    {
        $user = Auth::user()->id;
        $attr = $request->validate([
            'personal_statement' => 'required',

        ]);
        $attr['id'] = $user;
        PersonalStatement::create($attr);
        return redirect()->route('personalstatement')->with('message', ' Data Kamu Telah Diupdate!');
    }

    public function UpdatePersonalStatement(Request $request, $id)
    {
        $this->validate($request, [
            'personal_statement' => 'required',

        ]);
        $user = PersonalStatement::find($id);
        $user->update([
            'personal_statement' => $request['personal_statement'],

        ]);
        return redirect()->route('personalstatement')->with('message', ' Data Kamu Telah Diupdate!');
    }


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
            'scan_idcard' => 'required|mimes:pdf,jpg,jpeg,png,jfif|max:2048 ',
            'profile_photo_path' => 'required|mimes:jpg,jpeg,png,jfif|max:2048 '

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

        $path = public_path('/storage/ktp/');
        $path2 = public_path('/storage/photo/');
        if (!file_exists($path)) {
            mkdir('storage/ktp/');
        }
        if (!file_exists($path2)) {
            mkdir('storage/photo/');
        }
        if ($user->scan_idcard != ''  && $user->scan_idcard != null) {
            $file_old = $path . $user->scan_idcard;
            unlink($file_old);
        }
        if ($user->profile_photo_path != ''  && $user->profile_photo_path != null) {
            $file_old = $path2 . $user->profile_photo_path;
            unlink($file_old);
        }
        $file = $request->file('scan_idcard');
        $file2 = $request->file('profile_photo_path');
        $destinationPath =  'storage/ktp ';
        $destinationPath2 =  'storage/photo ';
        $name = $file->getClientOriginalName();
        $name2 = $file2->getClientOriginalName();
        $file->move($destinationPath, $name);
        $file2->move($destinationPath2, $name2);
        $user->scan_idcard = $name;
        $user->profile_photo_path = $name2;
        $user->save();
        return redirect()->route('updateprofile')->with('message', ' Data Kamu Telah Diupdate!');
    }


    public function StoreEvaluation(Request $request)
    {
        $user = Auth::user()->id;

        $attr = $request->validate([
            'evaluation' => 'required|mimes:pdf,doc,docm,docx,|max:2048 ',
        ]);
        $file = $request->file('evaluation');
        $destinationPath = 'storage/Hasil_MBKM';
        $name = $file->getClientOriginalName();
        $file->move($destinationPath, $name);

        $attr['evaluation'] = $name;
        $attr['id'] = $user;
        Evaluation::create($attr);
        return redirect()->route('evaluation')->with('message', ' Data Kamu Telah Diupdate!');
    }

    public function UpdateEvaluation(Request $request, $id)
    {
        $this->validate($request, [
            'evaluation' => 'required|mimes:pdf,doc,docm,docx,|max:2048 ',
        ]);
        $user = Evaluation::find($id);

        $path = public_path('/storage/Hasil_MBKM/');
        if (!file_exists($path)) {
            mkdir('storage/Hasil_MBKM/');
        }
        if ($user->evaluation != ''  && $user->evaluation != null) {
            $file_old = $path . $user->evaluation;
            unlink($file_old);
        }

        $file = $request->file('evaluation');
        $destinationPath =  'storage/Hasil_MBKM ';
        $name = $file->getClientOriginalName();
        $file->move($destinationPath, $name);
        $user->evaluation = $name;
        $user->save();
        return redirect()->route('evaluation')->with('message', ' Data Kamu Telah Diupdate!');
    }
}
