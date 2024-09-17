<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    protected $brand;

    public function __construct(){
        $this->brand = new Brand();
    }

    public function index()
    {
        $response['brands'] = $this->brand->all();
        return view('brand.index')->with($response);

    }

    public function store(Request $request)
    {

           $this->brand->create($request->all());
           return redirect()->back();
    }

    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('brand.edit', compact('brand'));
    }

    public function update(Request $request, string $id)
    {
        $brand = $this->brand->find($id);
        $brand->update(array_merge($brand->toArray(), $request->toArray()));
        return redirect('allbrands');
    }

    public function destroy(string $id)
    {
        $brand = $this->brand->find($id);
        $brand->delete();
        return redirect('allbrands');
    }
}
