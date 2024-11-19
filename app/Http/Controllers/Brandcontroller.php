<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Brandcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
        $brand = Brand::get();
        return view('admin/brands/index', compact('brand'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/brands/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Brand::create($request->all());
       return to_route('brands.index')->with('status', 'marca registrado');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        return view('admin/brands/show',compact('brand'));
       

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
       echo view('admin/brands/edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
       $brand->update($request->all());
        return to_route('brands.index')->with('status', 'marca actualizada');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        
        $brand->delete();
        return to_route('brands.index')->with('status', 'Marca eliminado');
    }
    
  
    
    
}
