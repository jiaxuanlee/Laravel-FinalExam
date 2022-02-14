<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; //import Database Library
use App\Models\Rack; 
use Session;
use Auth;

class RackController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        return view ('addRack');
    }

    public function add(){
        $r=request(); //received the data by GET or POST method $_POST['name']
        $addRack=Rack::create([
            'Name'=>$r->rackName, 
        ]);
        Session::flash('success',"Rack create successfully!");
        Return redirect()->route('showRack');
    }

    public function view(){
        $viewRack=Rack::all(); //generate SQL select * from categories
        Return view('showRack')->with('racks',$viewRack);
    }
}
