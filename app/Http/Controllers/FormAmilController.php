<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Form;

class FormAmilController extends Controller
{
    public function index($id){
        $form = Form::find($id);
        // return dd($form);
        // return $form;
        return view('formAmilShow', [
            'form' => $form
        ]);
    }

    public function update(Request $request, $id){
        $form = Form::find($id);
        $rules = [
            'nama' => 'nullable',
            'nip' => 'nullable',
            'posisi' => 'nullable',
            'direktorat' => 'nullable',
            'tgl_masuk' => 'nullable',
            'periode' => 'nullable',
            'atasan' => 'nullable',
            'view_amil_1' => 'nullable',
            'view_amil_2' => 'nullable',
            'view_amil_3' => 'nullable',
            'view_amil_4' => 'nullable',
            'ttd_amil' => 'nullable|image|file|max:1024',
            'ttd_amil_tgl' => 'nullable',
        ];
        
        $validatedData = $request->validate($rules);

        if($request->file('ttd_amil')) {
            if($request->old_ttd_amil) {
                Storage::delete($request->old_ttd_amil);
            }
            $validatedData['ttd_amil'] = $request->file('ttd_amil')->store('post-ttd-amil');
        }

        Form::where('id', $form->id)
            ->update($validatedData);

        return redirect('/')->with('success', 'Form amil telah diisi!!');
    }
}
