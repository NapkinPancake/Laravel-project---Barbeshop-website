<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class formController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth' , ['except' => ['store']]);
    } 

    
     ///////    DESTROY FORM       ////////
     public function destroy($id) {
        Form::destroy($id);

        return redirect('/forms-control')->with('message' , 'Request deleted');
    }
}
