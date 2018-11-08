<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Galeri;
use File;


class GaleriController extends Controller
{


    /**
     * Listing Of images gallery
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeris = Galeri::orderBy('created_at', 'asc')->take(10)->get();
        if(Session::get('login')){
            if(Session::get('role') == "admin"){
                return view('user_component.admin.galeri', compact('galeris'));        
            }else{
                return view('user_component.user.galeri', compact('galeris'));
            }
        }
         
    }

    /**
     * Upload image function
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
    	$this->validate($request, [
    		'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $input['image']);


        $input['title'] = $request->title;
        Galeri::create($input);


    	return back()
    		->with('success','Gambar berhasil di upload');
    }


    /**
     * Remove Image function
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($image)
    {
    	Galeri::where('image',$image)->delete();
        File::delete('images/'.$image);
        
    	return back()
    		->with('success','Gambar Berhasil di Hapus.');	
    }
}