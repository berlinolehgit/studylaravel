<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::get();
        return view('users/index', compact('users'));
    }

    public function add(){
        return view('users/add');
    }

    public function delete($id){
            $offers = User::findorfail($id);
            $offers->delete();
            return redirect()->route('users.index');
    }

    public function edit($id){
        $users = User::findorfail($id);
        return view('users.edit',compact('users'));
    }

    public function update(Request $request,$id){
        $users = User::findorfail($id);
        $users->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
        ]);

        return redirect()->route('users.index');
    }

}
