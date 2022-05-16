<?php

namespace App\Http\Controllers;

use App\Models\Academic;
use App\Models\Contact;
use App\Models\Medic;
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
        //
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
            'address' => 'required'
            // 'family_identity_card',

        ]);

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
            'address' => 'required'
            // 'family_identity_card',

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
        ]);

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
}
