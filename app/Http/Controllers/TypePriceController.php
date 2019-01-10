<?php

namespace App\Http\Controllers;
use App\Models\TypePrice;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class TypePriceController extends Controller
{
    public function index(){
//        dd('hvkjhv');
        return view('typePrice');
    }
    public function addType(Request $request){
        $getTypes = TypePrice::get();
        $input = $request->input('type_price');
        foreach ($getTypes as $getType){
            if ($input === $getType['name']){
                return view('typePrice');
            }
        }
        $typePrice = TypePrice::create([
            'name' => $request->input('type_price'),
        ]);
        $typePrice->save();
        return redirect()->route('index');
    }
}
