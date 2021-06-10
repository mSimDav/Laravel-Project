<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Image;
use \DB;

use Session;


class ImagesController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('image');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = new Image;
        $image->title = $request->input('nume');
        $image->description = $request->input('description');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $target = md5(uniqid(time())).$file->getClientOriginalName();
            $image->name=$target;
            $image->size=$file->getSize();
            $image->type=$file->getClientMimeType();
            $file->move(public_path().'/images/',$target);
            }
            DB::insert("CALL InsertImages('{$image->title}','{$image->name}','{$image->description}','{$image->size}','{$image->type}')");
            return redirect('/showall');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
     public function showall()
    {
         
        $images=DB::select('select * from images');
           return view('showall',compact('images'));
          
    }
    
    public function show($id)
    {
        $image=Image::findorfail($id);
        return view('show',compact('image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $image=Image::where('id','=',$id)->first();
        return view('edit',['image'=>$image]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image=Image::findOrFail($id);
        //unlink("/images/".$image->name);
        if($request->file('image')){
            $file=$request->file('image');
            $target=md5(uniqid(time())).$file->getClientOriginalName();
            $file->move(public_path().'/images',$target);
            $image->name=$target;
        }
        $image->id=$request['id'];
        $image->title=$request['title'];
         $image->description=$request['description'];
         $image->save();
        DB::select("CALL UpdateImages('{$image->id}','{$image->title}','{$image->description}','{$image->name}')");
        $images=DB::select('select * from images');
            return redirect('/showall');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function delete($id){
        DB::select("CALL DeleteImages('{$id}')");
        $images=DB::select('select * from images');
        return redirect('/showall')->with('','');
        
    }
    
    
    public function destroy($id)
    {
        //
    }
}
