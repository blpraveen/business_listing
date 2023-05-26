<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;

class BusinessController extends Controller
{
    public function view($id)
	{

		
        $data['busines'] = Listing::where('id',$id)->with("ratings")->first();
        $data['listing_id'] = $id;
        
    	return view('public.business_view')->with($data);



	}

    public function all()
	{

		
        $data['business'] = Listing::with("ratings")->get();

    	return view('public.business_listing')->with($data);



	}

    public function rating(Request $request)
	{
        $this->validate($request,[
            'rate_value'   => 'required|max:1',
            'listing_id' => 'required'
        ]);

        $data = $request->only('rate_value','listing_id');
        $user_id =  Auth::id();
        $match = ['user_id'=>$user_id,'listing_id'=> $data['listing_id']];
        Rating::updateOrCreate($match,['rate'=> $data['rate_value']]);
        return  redirect()->back()->with('success', 'Submitted Rating Successfully!');  


	}
}
