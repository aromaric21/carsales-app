<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CarModel;
use App\Models\Brand;

class CarModelController extends Controller
{
    protected $carmodel;

    public function __construct(){
        $this->carmodel = new CarModel();
    }

    public function index()
    {
        $carmodel = $this->carmodel->all();
        $brands = Brand::pluck('name', 'id');
        return view('carmodel.index', compact('carmodel','brands'));
    }

    public function store(Request $request){
        $this->carmodel->create($request->all());
        return redirect()->back();
    }

}
