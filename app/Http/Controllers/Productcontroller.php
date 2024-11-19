<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class Productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::get();
        return view('admin/products/index', compact('products'));
 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $brands = Brand::get(); para obtener todos los datoa o modelos
        $brands=Brand::pluck('id','brand');// obtener datos especificos
   //     dd( vars: $brands);//verificar que los datoa se esten extrayendo
        return view('admin/products/create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       //  echo "Registro realizado";
       // dd($request);
       Product::create($request->all());
       return to_route('products.index')->with('status', 'producto registrado');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
       
        return view('admin/products/show',compact('product'));
        
    }
    
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $brands=Brand::pluck('id','brand');// obtener datos especificos
        echo view('admin/products/edit', compact('brands','product'));
        

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
       $product->update($request -> all());
        return to_route('products.index')->with('status', 'producto actualizado');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return to_route('products.index')->with('status', 'Producto eliminado');
    }

    public function delete(Product $product){

      echo view('admin/products/delete', compact('product'));

    }
}
