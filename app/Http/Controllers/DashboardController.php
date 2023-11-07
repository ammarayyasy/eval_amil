<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index() {
        return view('index', [
            'forms' => Form::all()
        ]);
    }

    public function show($id) {
        $form = Form::find($id);
        // return $form;
        return view('formShow', [
            'form' => $form
        ]);
    }

    public function showTambahForm() {
        return view('tambah_form');
    }

    public function tambahForm(Request $request) {
        $validateData = $request->validate([
            'wa_amil' => 'nullable|max:15',
            'wa_atasan' => 'nullable|max:15',
            'nama' => 'nullable|max:100',
        ]);

        Form::create($validateData);
        return redirect('/')->with('success', 'Form baru telah dibuat!');
    }

    public function deleteForm($id) {
        $form = Form::find($id);
        if($form->ttd_amil) {
            Storage::delete($form->ttd_amil);
        }
        if($form->ttd_atasan) {
            Storage::delete($form->ttd_atasan);
        }
        Form::destroy($id);
        return redirect('/')->with('success', 'Form berhasil dihapus!');
    }
}
