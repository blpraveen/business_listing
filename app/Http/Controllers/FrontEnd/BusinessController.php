<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class BusinessController extends Controller
{
    public $itemsperpage = 8; 

    public function view($id)
	{

		
        $data['busines'] = Listing::where('id',$id)->with("ratings")->first();
        $data['listing_id'] = $id;
        
    	return view('public.business_view')->with($data);



	}

    public function all()
	{

		$data['itemsperpage'] = $this->itemsperpage;

        // Total number of records
        $data['totalrecords'] = Listing::select('*')->count();


        $data['business'] = Listing::with("ratings")->skip(0)->take($this->itemsperpage)->get();

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

    public function fetch_listing(Request $request) {
        $start = $request->input('start', false);
        $records = Listing::select('*') 
                  ->skip($start)
                  ->take($this->itemsperpage)
                  ->get();

        $returnHTML = view ('public.partial_listing', ['records'=> $records])->render();
        $data['html'] = $returnHTML;

        return response()->json($data);
    }


}
