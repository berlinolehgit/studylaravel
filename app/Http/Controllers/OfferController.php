<?php

namespace App\Http\Controllers;

use App\Models\TypePrice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Offer;
use App\Models\User;

class OfferController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        dd('1hjkhj');
//        $offers = Offer::find(1);
//        $offers = Offer::with('user')->get();
//        return $offers;
//        $users = Auth::user();
//        return view('offers/index',compact('offers','users'));
    }

    public function makeValidator(array $data){
        return Validator::make($data,[
            'type_object'=> 'required|string|max:255',
            'price'=> 'required|numeric',
            'type_price'=> 'required|string|max:255',
        ])->validate();
    }

    public function add(){
        $users = User::get();
        $typePrices = TypePrice::get();
        return view('offers/add', compact('users','typePrices'));
    }

    public function edit($id){
        $offers = Offer::findorfail($id);
        $typesObject = Offer::$typeObject;
        $typePrices = TypePrice::get();
        $users = User::get();
        return view('offers/edit',compact('offers','typePrices','typesObject','users'));
    }

    public function update(Request $request,$id){
        $offers = Offer::findorfail($id);
        $offers->update([
            'type_object' => $request->input('type_object'),
            'price' => $request->input('price'),
            'type_price' => $request->input('type_price'),
            'type_wall' => $request->input('type_wall'),
            'number_rooms' => $request->input('number_rooms'),
            'user_id' => $request->input('user_id'),
            'phone' => $request->input('phone'),
            'remember' => $request->input('remember'),
            'information' => $request->input('information'),
        ]);
        \Session::flash('flash_message', json_encode([
            'class' =>  'success',
            'message'=>'Оголошення успішно відредаговано'
        ]));
        return redirect()->route('offer.index');
    }

    public function delete($id){
        $offers = Offer::findorfail($id);
        $offers->delete();
        return redirect()->route('offer.index');
    }

    public function submit(Request $request){
        if($request->hasfile('photo'))
        {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('public/image', $filename);
        }

        $offers = Offer::create([
            'type_object' => $request->input('type_object'),
            'price' => $request->input('price'),
            'type_price' => $request->input('type_price'),
            'type_wall' => $request->input('type_wall'),
            'number_rooms' => $request->input('number_rooms'),
            'user_id' => $request->input('user_id'),
            'phone' => $request->input('phone'),
            'remember' => $request->input('remember'),
            'information' => $request->input('information'),
            'photo' => $request->input('photo'),
        ]);
       $offers->save();

        \Session::flash('flash_message', json_encode([
            'class' =>  'success',
            'message'=>'Оголошення успішно добавлено'
        ]));
        return redirect()->route('offer.index');
    }


}
