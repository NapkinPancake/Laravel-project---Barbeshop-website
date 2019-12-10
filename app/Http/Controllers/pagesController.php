<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;
use App\Product;


class pagesController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth' , ['except' => ['index','test_item', 'save_request']]);
    } 

    ///////   INDEX PAGE ///////////////
    public function index() {
        return view('pages/index');
    }
///////////// TEST ITEM IN THE STORE ////////
    public function test_item() {
        return view('pages/test-item');
    }
///////////// SORTING ITEMS IN THE CONTROL PANEL ////////
    public function products_control() {
        $products = Product::orderBy('id' , 'asc')->get();

        return view('pages/products-control')->with('products' , $products);
    }
//////////// SORTING FORMS IN THE CONTROL PANEL ///////////
    public function forms_control() {
        $forms = Form::orderBy('date' , 'asc')->get();
        $products = Product::all();

        return view('pages/forms-control')
        ->with('forms' , $forms)
        ->with('products' , $products);
    }

    ////// MAIN PAGE -> ORDER FORM -> save //
    public function save_request(Request $request) {
        $this->validate ($request , [
            'name'=>'required',
            'phone'=>'required|regex:/(0)[0-9]{9}/',
            'date'=>'required|date|date_format:Y-m-d',
            'time'=>'required|date_format:"H:i"|before:timeEnd',
        ]);

        $form = new Form();
        $form->client_name = $request->input('name');
        $form->client_phone = $request->input('phone');
        $form->date = $request->input('date');
        $form->time = $request->input('time');

        $form->save();

        return redirect('/')->with('message' , 'Form was sent');
    }



    
}
