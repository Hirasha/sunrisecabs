<?php

namespace App\Http\Controllers;
use App\vehiclerequests;
use Illuminate\Http\Request;

class VehicleRequestsController extends Controller
{
public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        return view('vehicleOwner.ownerhome');
    }

   public function tostore (Request $request){
        $this->validate($request,[
            'cover_image'=>'image|nullable|max:1999'
        ]);
        //handle file upload
        if($request->hasFile('cover_image')){
        $filenameWithExt=$request->file('cover_image')->getClientOriginalName();
        //get just filename
        $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
        //get just ext
        $extension=$request->file('cover_image')->getClientOriginalExtension();
        //filename to store
        $fileNameToStore=$filename.'_'.time().'.'.$extension;
        //uploadImage
        $path=$request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
    }else{
        $fileNameToStore='noimage.jpg';
    }


            $vehicle =new vehiclerequests;
            $vehicle->name=$request->input('name');
            $vehicle->email=$request->input('email');
            $vehicle->regno=$request->input('regno');
            $vehicle->address=$request->input('address');
            $vehicle->regno=$request->input('regno');
            $vehicle->plateno=$request->input('plateno');
            $vehicle->type=$request->input('type');
            $vehicle->category=$request->input('category');
           // $vehicle->vowner_id=\Auth::id();
            $vehicle->cover_image=$fileNameToStore;

    
            $vehicle->save();
            return redirect('/vowner');
    }
}
