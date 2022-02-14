<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Stock;
use Session;
use App\Models\Rack;
use Auth;

class ManageStockController extends Controller
{
    public function __contruct(){
        $this->middleware('auth');
    }

    public function index(){
        return view ('addStock')->with('rackID',Rack::all());
    }

    public function add(){
        $r=request(); //received the data by GET or POST method $_POST['name']
        $addStock=Stock::create([
            'Name'=>$r->stockName,
            'Quantity'=>$r->stockQuantity,
            'rackNo'=>$r->rackNo,
            'stockInDate'=>$r->stockInDate,
            'stockOutDate'=>$r->stockOutDate,
        ]);
        Session::flash('success',"Stock create successfully!");
        Return redirect()->route('viewStock');
    }

    public function view(){

        if(Auth::id()!=1){
            Session::flash('success',"Admin only allow to access this page!"); 
            return redirect(route('stock'));
        }
        
        //$viewProduct=Product::all();
        $viewStock=DB::table('stock')
        ->leftjoin('stock', 'stock.id', '=', 'racks.CategoryID')
        ->select('racks.*', 'stock.name as rackName')
        ->get();

        Return view('viewStock')->with('stock', $viewStock);
    }

    public function delete($id){

        $deleteStock=Stock::find($id);
        $deleteStock->delete();
        Session::flash('success', "Stock was delete successfully!");
        Return redirect()->route('viewStock');
    }

    public function edit($id){
        
        $stock=Stock::all()->where('id',$id);
        Return view('editStock')->with('stock', $stock)->with('rackID', Rack::all());
    }

    
    
}