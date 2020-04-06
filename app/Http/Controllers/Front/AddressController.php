<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\UserAddress;
use Auth;
class AddressController extends Controller
{
    public function address(Request $request)
    {
        if(Auth::check())
        {
            if($request->isMethod('post'))
            {
                $data = UserAddress::create([
                    'user_id' => Auth::user()->id,
                    'address1' => @$request->address1,
                    'address2' => @$request->address2,
                    'city' => @$request->city,
                    'state' => @$request->state,
                    'country' => @$request->country,
                    'zip_code' => @$request->zip_code
                ]);
                return redirect()->route('home');
            }
            return view('address');
        }
        return redirect()->route('login');
    }
}
