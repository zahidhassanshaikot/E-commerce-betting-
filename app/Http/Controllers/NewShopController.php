<?php

namespace App\Http\Controllers;

use App\Category;

use App\Product;
use Illuminate\Http\Request;

class NewShopController extends Controller
{
    public function reg(){
        return view('front-end.checkout.registration');
    }
    public function index(){
        $newProducts=Product::where('publication_status',1)
                            ->orderBy('id','DESC')
                            ->take(8)
                            ->get();

        return view('front-end.home.home',[ 
            'newProducts'=>$newProducts
        ]);
    }



    public function categoryProduct($id){

        $categoryProducts=Product::where('category_id',$id)
                ->where('publication_status',1)
                ->get();

        return view('front-end.product.category-product',[

            'categoryProducts'=>$categoryProducts,

            ]);
    }
    public function brandProduct($id){
        $brandProducts=Product::where('brand_id',$id)
                ->where('publication_status',1)
                ->get();

        return view('front-end.product.brand-product',[ 

            'brandProducts'=>$brandProducts
            ]);
    }



    public function mailUs(){
        return view('front-end.mail-us');
    }
    public function singleProduct($id){
        $product=Product::find($id);
        
        return view('front-end.category.single-product',['product'=>$product]);
    }
    public function login(){
        return view('front-end.login');
    }

}
