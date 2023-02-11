<?php

namespace App\Http\Controllers;

use App\Models\Formule;
use App\Http\Requests\FormuleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class FormuleController extends Controller
{
    public function list() {
        $formules = Formule::all();

        return view('formules.index')
        ->withFormules($formules)
        ;
    }

    public function create() {
        return view('formules.create');
    }

    public function insert(FormuleRequest $request) {
        $data = $request->all();
        Formule::create($data);

        return redirect(url('/formules'));
    }

    public function edit($id) {

    }

    public function update($id) {

    }

    public function archive($id) {
        
    }
}
