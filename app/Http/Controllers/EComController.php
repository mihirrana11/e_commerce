<?php

namespace App\Http\Controllers;

use App\Models\e_com;
use Illuminate\Http\Request;

class EComController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // 
    }

    public function create()
    {
        return view('/');
    }

   
    public function store(Request $request)
    {
        
        $res = new e_com;
        $res->category_name=$request->input('txt_category_name');
        $res->category_des=$request->input('txt_category_des');
            
        if($request->file('txt_category_image')){
            $file= $request->file('txt_category_image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/user/img/'), $filename);
            $res['category_image']= $filename;
        }   

        
        $res->save();
        // $request->session()->flash('msg','Data submitted');
        return redirect('');
    }

   
    public function show(e_com $e_com)
    {
         return view('welcome')->with('ecomarr',e_com::all());
        //  return view('user/navbar')->with('ecomarr',e_com::all());
         
         
    }

    
    public function edit(e_com $e_com,$id)
    {
      
        return view('welcome')->with('ecomarr',e_com::find($id));

    }

  
    public function update(Request $request, e_com $e_com)
    {
        $res =e_com::find($request->id) ;
        $res->category_name=$request->input('txt_category_name');
        $res->category_des=$request->input('txt_category_des');

     
    
        
        $res->save();

        // $request->session()->flash('msg','Data updateds');
        return redirect('/');
    }

   
    public function destroy(e_com $e_com,$id)
    {   
        // print_r($e_com);
        // exit;
        
          e_com::destroy(array('id',$id));  

            return redirect('/'); 

    }


    // public function categoryshow(e_com $e_com)
    // {
    //      return view('user/index')->with('ecomarr',e_com::all());
      
    // }

    public function navshow(e_com $e_com)
    {
         return view('user/shop')->with('ecomarr',e_com::all());
        //  return view('user/shopdetails')->with('ecomarr',e_com::all());

    }
    public function navshopshow(e_com $e_com)
    {
         return view('user/shopdetails')->with('ecomarr',e_com::all());
      
    }
    public function navcartshow(e_com $e_com)
    {
         return view('user/cart')->with('ecomarr',e_com::all());
      
    }

    public function navchekoutshow(e_com $e_com)
    {
         return view('user/chekout')->with('ecomarr',e_com::all());
      
    }
    public function navcontactshow(e_com $e_com)
    {
         return view('user/contact')->with('ecomarr',e_com::all());
      
    }
    // public function hi(e_com $e_com)
    // {
    //      return view('user/shopshow')->with('ecomarr',e_com::all());
      
    // }

    

}
