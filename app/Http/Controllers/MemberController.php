<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use App\Models\Member;

class MemberController extends Controller
{
    protected $member;

    public function __construct(){
        $this->member = new Member();
    }

    public function index()
    {
        $response['members'] = $this->member->all();
        return view('member.index')->with($response);

    }

    public function store(Request $request)
    {
        if(isset($request['password'])){
            $request['password'] = Hash::make($request['password']);
        }

        //dd($request);
        $this->member->create($request->all());

        return redirect()->back();
    }
}
