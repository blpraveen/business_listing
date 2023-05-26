<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use App\Http\Controllers\ImageController;

class BusinessController extends Controller
{
    public $errorHandling;

    public function __construct(){
    $this->errorHandling=[
        "errorMessages"=>[
            "name.required"=>"Business Name is required",
            "name.min"=>"Minimum Number of Character is 4",
            "website.required"=>"Business website is required",
        "website.url"=>"Please Provide a valid URL",
        "email.required"=>"Business Email is required",
        "email.email"=>"Please Provide a valid Email",
        "feature_image.max"=>"Image must be less or equal to 2MB in size "
        ],
        "rules"=>[
            "name"=>"required|min:4",
            "website"=>"required|url",
            "email"=>"required|email",
            "description"=>"required",
            "phone"=>"required|min:10",
            "feature_image"=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            "address"=>"required",
            ]
    ];
  }	

  public function showCreate()
  {
  	return view('admin.create_business');
  }


   public function create(Request $request)
   {
     

        $data= $request->validate($this->errorHandling['rules'],$this->errorHandling['errorMessages']);


        $image = new ImageController();
        $imageName = $image->upload(request(),"feature_image");
    
        //made a provision for multiple image by saving images as json

        $business = new Listing();
        $business->name = $data['name'];
        $business->website = $data['website'];
        $business->description= $data['description'];
        $business->feature_image=json_encode([$imageName]);
        $business->status=1;
        $business->email=$data['email'];
        $business->phone=$data['phone'];
        $business->address=$data['address'];
        $business->save();

        return back()->with('success','Business Created Successfully.')->with('image',$imageName);



   }


  public function showEdit($id)
  {

    $data['business'] = Listing::where('id',$id)->get()->toArray()[0];   
    $data['id']=$id;


    return view('admin.edit_business')->with($data);
  }

   public function update(Request $request,$id)
   {
     
        $business = Listing::where('id',$id)->get()->toArray()[0];
        $data= $request->validate($this->errorHandling['rules'],$this->errorHandling['errorMessages']);

        $image = new ImageController();
        $imageName = $image->upload(request(),"feature_image");
        $imagesArray = json_decode($business['feature_image']);

        if (!empty($imageName && (!in_array($imageName, $imagesArray)))) {
            array_push($imagesArray, $imageName);
            }
        //made a provision for multiple image by saving images as json
                
        $business = Listing::find($id);
        $business->name = $data['name'];
        $business->website = $data['website'];
        $business->description= $data['description'];
        $business->feature_image=json_encode($imagesArray);
        $business->status=1;
        $business->email=$data['email'];
        $business->phone=$data['phone'];
        $business->address=$data['address'];
        $business->save();



        return back()->with('success','Business Updated Successfully.');



   }

   public function manage()
   {
   	
        $data['businesses'] =Listing::paginate(5);

        return view('admin.manage_business')->with($data);
   }

    public function delete($id)
   {
   	
    Listing::find($id)->delete();
        return back()->with("success","Business deleted Successfully");

   }

	public function view($id)
	{

		
        $data['business'] = Listing::where('id',$id)->with("ratings")->get()->toArray()[0];

    	return view('public.business_view')->with($data);



	}
   public function status($action,$id)
   {
     
        $status= $action=="activate"?1:0;
        Listing::find($id)->update(['status'=>$status]);

        return back()->with('success','Business '.ucfirst($action).'d Successfully.');

   }
}
