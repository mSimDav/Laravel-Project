<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image1;
use \DB;
class ProcedureController extends Controller
{
    public function index() {
        $image1 = new Image1();
        //DB::insert('CALL InsertImages("Tokyo","tokyo.jpg","Visiting Tokyo is like visiting the future—flashing neon lights, incredible technology—yet there’s still a rich sense of culture and history.","111","232")');
        
        
       // DB::insert('CALL InsertImages("Dubai","dubai.jpg","The high-flying city of the U.A.E, Dubai is one of the most glamorous destinations you’ll ever visit, and is particularly popular with Big 7 Travel readers.","111","232")');     
        $flowers1=DB::select('CALL GetImages()');
        $flowers2=DB::select('CALL GetImage("Dubai")');
        return view('about',compact('image1'))->with([
            'flowers1'=>$flowers1,
            'flowers2'=>$flowers2
        ]);
    }
}
