<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Form;

class FormAtasanController extends Controller
{
    public function index($id){
        $form = Form::find($id);
        // return dd($form);
        // return $form;
        return view('formAtasanShow', [
            'form' => $form
        ]);
    }

    public function update(Request $request, $id){
        $form = Form::find($id);
        $rules = [
            'skor_1' => 'nullable',
            'skor_2' => 'nullable',
            'skor_3' => 'nullable',
            'skor_4' => 'nullable',
            'skor_5' => 'nullable',
            'skor_6' => 'nullable',
            'skor_7' => 'nullable',
            'skor_8' => 'nullable',
            'skor_9' => 'nullable',
            'view_atasan_1' => 'nullable',
            'view_atasan_2' => 'nullable',
            'view_atasan_3' => 'nullable',
            'view_atasan_4' => 'nullable',
            'view_atasan_5' => 'nullable',
            'view_atasan_6' => 'nullable',
            'view_atasan_7' => 'nullable',
            'ttd_atasan' => 'nullable|image|file|max:1024',
            'ttd_atasan_tgl' => 'nullable',
        ];

        $validatedData = $request->validate($rules);

        if($request->file('ttd_atasan')) {
            if($request->old_ttd_atasan) {
                Storage::delete($request->old_ttd_atasan);
            }
            $validatedData['ttd_atasan'] = $request->file('ttd_atasan')->store('post-ttd-atasan');
        }

        Form::where('id', $form->id)
            ->update($validatedData);

        return redirect('/')->with('success', 'Form atasan telah diisi!!');
    }
}
