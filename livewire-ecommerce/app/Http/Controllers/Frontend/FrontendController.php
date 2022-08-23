<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Slider;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class FrontendController extends Controller
{

    public function index(){
        $sliders = Slider::where('status', '0')->get();
        $latest_posts = Product::where('status','0')->inRandomOrder()->get()->take(6);
        $recent_posts = Product::where('status','0')->inRandomOrder()->get()->take(3);
        $recent_view = Product::where('status','0')->inRandomOrder()->get()->take(3);
        $recent_new = Product::where('status','0')->inRandomOrder()->get()->take(3);
        return view('frontend.index', compact('sliders','latest_posts','recent_posts','recent_view','recent_new'));
    }

    public function categories(){
        $categories = Category::where('status', '0')->get();
        if($categories){
            return view('frontend.collections.category.index', compact('categories'));
        }
      
    }

    public function products($category_slug){

        $category = Category::where('slug', $category_slug)->first();

        if($category){
            return view('frontend.collections.products.index', compact('category'));
        }
        else{
            return redirect()->back();
        }
    }

    public function productView(string $category_slug, string $product_slug){
      

        $category = Category::where('slug', $category_slug)->first();
       

        if($category){
           
            // $all_product = Product::where('status','0')->inRandomOrder()->get()->take(4);

            $product = $category->products()->where('slug', $product_slug)->where('status', '0')->first();
           
            if($product){
                
            return view('frontend.collections.products.view', compact('product','category'));
                
            }else{
                return redirect()->back();
            }
        }
        else{
            return redirect()->back();
        }
    }

}
