<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class productController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth' , ['except' => ['index','show']]);
    }

    public function index() {
        $products = Product::all();

        return view('store/index')->with('products', $products);
    }
    public function create() {
        return view('store/create');
    }


    //////////     STORE PRODUCT      ////////
    public function store(Request $request) {
        $this->validate($request , [
            'product_name'=>'required|min:3',
            'product_price'=>'required|numeric',
            'product_qnt'=>'required|integer',
            'product_major_img' => 'image|nullable|max:1999',
            'product_minor_img_1' => 'image|nullable|max:1999',
            'product_minor_img_2' => 'image|nullable|max:1999',
            'product_minor_img_3' => 'image|nullable|max:1999',
            'product_description'=>'required|min:11',
        ]);

        //Create unique filename for major image
        if($request->hasFile('product_major_img')) {
            $fileNameWithExt = $request->file('product_major_img')->getClientOriginalName();
            $majorImgFileToStore = 'major_'.time().'_'.$fileNameWithExt;

            $path = $request->file('product_major_img')->storeAs('public/product_images' , $majorImgFileToStore);
        } else {
            $majorImgFileToStore = 'noimage.jpg';
        }

        //Create unique filename for Minor image 1
        if($request->hasFile('product_minor_img_1')) {
            $fileNameWithExt = $request->file('product_minor_img_1')->getClientOriginalName();
            $minorImgFileToStore_1 = 'minor_1_'.time().'_'.$fileNameWithExt;

            $path = $request->file('product_minor_img_1')->storeAs('public/product_images' , $minorImgFileToStore_1);
        } else {
            $minorImgFileToStore_1 = 'noimage.jpg';
        }

            //Create unique filename for Minor image 2
        if($request->hasFile('product_minor_img_2')) {
            $fileNameWithExt = $request->file('product_minor_img_2')->getClientOriginalName();
            $minorImgFileToStore_2 = 'minor_2_'.time().'_'.$fileNameWithExt;

            $path = $request->file('product_minor_img_2')->storeAs('public/product_images' , $minorImgFileToStore_2);
        } else {
            $minorImgFileToStore_2 = 'noimage.jpg';
        }

            //Create unique filename for Minor image 3
        if($request->hasFile('product_minor_img_3')) {
            $fileNameWithExt = $request->file('product_minor_img_3')->getClientOriginalName();
            $minorImgFileToStore_3 = 'minor_3_'.time().'_'.$fileNameWithExt;

            $path = $request->file('product_minor_img_3')->storeAs('public/product_images' , $minorImgFileToStore_3);
        } else {
            $minorImgFileToStore_3 = 'noimage.jpg';
        }

        $product = new Product();
        $product->product_name = $request->input('product_name');
        $product->product_price = $request->input('product_price');
        $product->product_qnt = $request->input('product_qnt');

        $product->product_major_img = $majorImgFileToStore;
        $product->product_minor_img_1 = $minorImgFileToStore_1;
        $product->product_minor_img_2 = $minorImgFileToStore_2;
        $product->product_minor_img_3 = $minorImgFileToStore_3;

        $product->product_description = $request->input('product_description');
        $product->created_by = 'admin';
        $product->save();


        return redirect('/store')->with('message' , 'Product added');
    }


    //////////     OPEN PRODUCT SHOW PAGE      ////////
    public function show($id) {

        $product = Product::find($id);

        return view('store/show')->with('product' , $product);
    }


    //////////     OPEN PRODUCT EDIT PAGE       ////////
    public function edit($id) {

        $product = Product::find($id);
        return view('store/edit')->with('product', $product);
    }


    ///////////       DESTROY PRODUCT      ////////////////
    public function destroy($id) {

        Product::destroy($id);
        return redirect('/store')->with('message' , 'Product deleted');
    }


    ////////     UPDATE PRODUCT    /////////////
    public function update(Request $request, $id) {
        $this->validate($request , [
            'product_name'=>'required|min:3',
            'product_price'=>'required|numeric',
            'product_qnt'=>'required|integer',
            'product_major_img' => 'image|nullable|max:1999',
            'product_minor_img_1' => 'image|nullable|max:1999',
            'product_minor_img_2' => 'image|nullable|max:1999',
            'product_minor_img_3' => 'image|nullable|max:1999',
            'product_description'=>'required|min:11',
        ]);

        //Create unique filename for major image
        if($request->hasFile('product_major_img')) {
            $fileNameWithExt = $request->file('product_major_img')->getClientOriginalName();
            $majorImgFileToStore = 'major_'.time().'_'.$fileNameWithExt;

            $path = $request->file('product_major_img')->storeAs('public/product_images' , $majorImgFileToStore);
        } else {
            $majorImgFileToStore = 'noimage.jpg';
        }

        //Create unique filename for Minor image 1
        if($request->hasFile('product_minor_img_1')) {
            $fileNameWithExt = $request->file('product_minor_img_1')->getClientOriginalName();
            $minorImgFileToStore_1 = 'minor_1_'.time().'_'.$fileNameWithExt;

            $path = $request->file('product_minor_img_1')->storeAs('public/product_images' , $minorImgFileToStore_1);
        } else {
            $minorImgFileToStore_1 = 'noimage.jpg';
        }

            //Create unique filename for Minor image 2
        if($request->hasFile('product_minor_img_2')) {
            $fileNameWithExt = $request->file('product_minor_img_2')->getClientOriginalName();
            $minorImgFileToStore_2 = 'minor_2_'.time().'_'.$fileNameWithExt;

            $path = $request->file('product_minor_img_2')->storeAs('public/product_images' , $minorImgFileToStore_2);
        } else {
            $minorImgFileToStore_2 = 'noimage.jpg';
        }

            //Create unique filename for Minor image 3
        if($request->hasFile('product_minor_img_3')) {
            $fileNameWithExt = $request->file('product_minor_img_3')->getClientOriginalName();
            $minorImgFileToStore_3 = 'minor_3_'.time().'_'.$fileNameWithExt;

            $path = $request->file('product_minor_img_3')->storeAs('public/product_images' , $minorImgFileToStore_3);
        } else {
            $minorImgFileToStore_3 = 'noimage.jpg';
        }

        $product = Product::find($id);
        $product->product_name = $request->input('product_name');
        $product->product_price = $request->input('product_price');
        $product->product_qnt = $request->input('product_qnt');

        $product->product_major_img = $majorImgFileToStore;
        $product->product_minor_img_1 = $minorImgFileToStore_1;
        $product->product_minor_img_2 = $minorImgFileToStore_2;
        $product->product_minor_img_3 = $minorImgFileToStore_3;

        $product->product_description = $request->input('product_description');
        $product->created_by = 'admin';
        $product->save();


        return redirect('/store')->with('message' , 'Product updated');
    }
}
