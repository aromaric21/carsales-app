<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    protected $car;

    public function __construct(){
        $this->car = new Car();
    }

    public function index()
    {
        //
        return view('car.index');

    }

}
