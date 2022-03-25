<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;
use Illuminate\Support\Facades\Redirect;
class ProductController extends Controller
{
    
    //
    public function showProduct(){
        $pr = Product::all(); 
        return view('layouts.app.products',compact('pr'));
    }
    public function createProduct(){
        return view("layouts.app.createProduct");
    }

    public function save(Request $req){
        if($req->txtName==null){
        $this->validate($req,[
            'name'=> 'required',
            'brand_id'=>'required',
            'description'=> 'required',
            'price'=>'required',
            'qty'=>'required'
        ]);}else if($req->txtName!=null){
            $data=array();
            $data['name']=$req->txtName;
            $data['brand_id']=$req->txtBrand;
            $data['description']=$req->txtDescription;
            $data['price']=$req->txtPrice;
            $data['qty']=$req->txtQty;
            DB::table('products')->insert($data);
        }
        return Redirect::to('layouts.app.products');
    }

    public function destroy($id){
       DB::table('products')->where('id',$id)->delete();
       return Redirect::to('products');
       
    }

    public function updatePage($id){
        $pro = Product::where('id', $id)->get();
        return view('layouts.app.updateProduct', compact('pro'));
    }
    // public function updatePage(){
    //     return view('dashboard.updateProduct');
    // }
    
    public function updatePro(Request $req,$id){
        $data = Product::find($id);
        $data->name=$req->txtName;
        $data->brand_id=$req->txtBrand;
        $data->description=$req->txtDescription;
        $data->price=$req->txtPrice;
        $data->qty=$req->txtQty;
        $data->save();
        
        return Redirect::to('products');
    }
}
