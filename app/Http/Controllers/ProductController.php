<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Prod = Product::all();
        $data = compact('Prod');
        return view('product.show')->with($data);
        // $productss = Product::all();
        // echo '<pre>';
        // print_r($productss->toArray());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //get
    {
        
      
        return view('product.Prod');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'desc' => 'required',
            'email' => 'required|email',
            'img'=>'required | image |mimes:jpg,png,jpeg'
        ]);
        // echo '<pre>';
        // print_r($request->all());

        $prod = new Product();
        $prod->Pname = $request['name'];
        $prod->Price = $request['price'];
        $prod->Email = $request['email'];
        $prod->Description = $request['desc'];
        if($request->hasfile('img')){
     
            $files =  $request->file('img');
            $FileName = $files->getClientOriginalName();

            $folder = "assets/images/";
            $dbfileloc = $folder.$FileName;
            $files->move($folder,$dbfileloc);

            $prod->ProdImage = $dbfileloc;

        }
        
        
        $prod->save();
        return redirect()->route('products.index')->with('status', 'You have successfully Created!');        // if($prod){
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     * 
     */
    // public function show(Product $product)
    // {
    //     return view('products.show',compact('product'));
    // } 
    public function show($id)
    {
        
        $Prods = Product::find($id);
        $data = compact('Prods');
       
        return view('product.DetailProd')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Prods = Product::find($id);
        $data = compact('Prods');
       
        return view('product.Edit')->with($data);
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
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'desc' => 'required',
            'email' => 'required|email',
        ]);

        $prod = Product::find($id);
        $prod->Pname = $request['name'];
        $prod->Price = $request['price'];
        $prod->Email = $request['email'];
        $prod->Description = $request['desc'];
        $prod->save();
        
    
        return redirect()->route('products.index')->with('success','Product updated successfully');
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
}
